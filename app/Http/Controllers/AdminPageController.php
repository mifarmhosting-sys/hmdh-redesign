<?php

namespace App\Http\Controllers;

use App\Cms\Cms;
use App\Models\ContentItem;
use App\Models\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Admin screens for the editable page content defined in config/cms.php:
 * one form per page for texts/images/toggles, plus add/edit/delete for repeating lists.
 */
class AdminPageController extends Controller
{
    private function pageConfig(string $page): array
    {
        $config = config("cms.pages.$page");
        abort_unless($config, 404);

        return $config;
    }

    private function listConfig(string $page, string $list): array
    {
        $config = config("cms.pages.$page.lists.$list");
        abort_unless($config, 404);

        return $config;
    }

    public function index()
    {
        return view('admin.pages.index', ['pages' => config('cms.pages')]);
    }

    public function edit(string $page)
    {
        $config = $this->pageConfig($page);

        foreach (array_keys($config['lists'] ?? []) as $list) {
            Cms::seedList($page, $list);
        }

        $values = [];
        foreach ($config['sections'] as $section => $def) {
            foreach ($def['fields'] as $field => $fieldDef) {
                $values["$section.$field"] = Cms::get("$page.$section.$field");
            }
        }

        $items = [];
        foreach (array_keys($config['lists'] ?? []) as $list) {
            $items[$list] = ContentItem::where('page', $page)->where('list', $list)->orderBy('sort_order')->orderBy('id')->get();
        }

        return view('admin.pages.edit', [
            'page' => $page,
            'config' => $config,
            'values' => $values,
            'items' => $items,
            'overridden' => SiteContent::where('key', 'like', "$page.%")->pluck('key')->flip()->all(),
        ]);
    }

    public function update(Request $request, string $page)
    {
        $config = $this->pageConfig($page);

        $rules = [];
        foreach ($config['sections'] as $section => $def) {
            foreach ($def['fields'] as $field => $fieldDef) {
                $name = "f.$section.$field";
                $rules[$name] = match ($fieldDef['type']) {
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:6144',
                    'toggle' => 'nullable',
                    'textarea', 'lines' => 'nullable|string|max:5000',
                    default => 'nullable|string|max:500',
                };
            }
        }
        $request->validate($rules);

        foreach ($config['sections'] as $section => $def) {
            foreach ($def['fields'] as $field => $fieldDef) {
                $key = "$page.$section.$field";
                $name = "f.$section.$field";
                $type = $fieldDef['type'];

                if ($type === 'image') {
                    if ($request->boolean("reset.$section.$field")) {
                        $this->forget($key);
                    } elseif ($request->hasFile($name)) {
                        $this->deleteStoredImage($key);
                        Cms::save($key, $request->file($name)->store('cms', 'public'));
                    }
                    continue;
                }

                if ($type === 'toggle') {
                    Cms::save($key, $request->boolean($name) ? '1' : '0');
                    continue;
                }

                Cms::save($key, trim((string) $request->input($name, '')));
            }
        }

        return redirect()->route('admin.pages.edit', $page)->with('success', 'Page content saved.');
    }

    // ---- repeating list items -------------------------------------------------------------

    public function itemCreate(string $page, string $list)
    {
        $this->pageConfig($page);

        return view('admin.pages.item-form', [
            'page' => $page, 'list' => $list, 'def' => $this->listConfig($page, $list),
            'item' => new ContentItem(['page' => $page, 'list' => $list, 'data' => [], 'is_active' => true, 'sort_order' => ContentItem::where('page', $page)->where('list', $list)->max('sort_order') + 1]),
        ]);
    }

    public function itemStore(Request $request, string $page, string $list)
    {
        $def = $this->listConfig($page, $list);
        $data = $this->itemData($request, $def, []);

        ContentItem::create([
            'page' => $page, 'list' => $list, 'data' => $data,
            'sort_order' => (int) $request->input('sort_order', 0),
            'is_active' => $request->boolean('is_active'),
        ]);
        Cms::flush();

        return redirect()->route('admin.pages.edit', $page)->with('success', 'Added.');
    }

    public function itemEdit(string $page, string $list, int $id)
    {
        return view('admin.pages.item-form', [
            'page' => $page, 'list' => $list, 'def' => $this->listConfig($page, $list),
            'item' => ContentItem::where('page', $page)->where('list', $list)->findOrFail($id),
        ]);
    }

    public function itemUpdate(Request $request, string $page, string $list, int $id)
    {
        $def = $this->listConfig($page, $list);
        $item = ContentItem::where('page', $page)->where('list', $list)->findOrFail($id);

        $item->update([
            'data' => $this->itemData($request, $def, $item->data ?? []),
            'sort_order' => (int) $request->input('sort_order', 0),
            'is_active' => $request->boolean('is_active'),
        ]);
        Cms::flush();

        return redirect()->route('admin.pages.edit', $page)->with('success', 'Saved.');
    }

    public function itemDestroy(string $page, string $list, int $id)
    {
        $this->listConfig($page, $list);
        ContentItem::where('page', $page)->where('list', $list)->findOrFail($id)->delete();
        Cms::flush();

        return redirect()->route('admin.pages.edit', $page)->with('success', 'Removed.');
    }

    // ---- helpers --------------------------------------------------------------------------

    private function itemData(Request $request, array $def, array $existing): array
    {
        $rules = [];
        foreach ($def['fields'] as $field => $f) {
            $rules["data.$field"] = $f['type'] === 'image'
                ? 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:6144'
                : ($f['type'] === 'textarea' ? 'nullable|string|max:5000' : 'nullable|string|max:500');
        }
        $request->validate($rules);

        $data = $existing;
        foreach ($def['fields'] as $field => $f) {
            if ($f['type'] === 'image') {
                if ($request->hasFile("data.$field")) {
                    $data[$field] = $request->file("data.$field")->store('cms', 'public');
                }
                continue;
            }
            $data[$field] = trim((string) $request->input("data.$field", ''));
        }

        return $data;
    }

    private function forget(string $key): void
    {
        $this->deleteStoredImage($key);
        SiteContent::where('key', $key)->delete();
        Cms::flush();
    }

    private function deleteStoredImage(string $key): void
    {
        $path = SiteContent::where('key', $key)->value('value');
        if ($path && str_starts_with($path, 'cms/') && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
