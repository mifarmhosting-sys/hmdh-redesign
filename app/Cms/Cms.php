<?php

namespace App\Cms;

use App\Models\ContentItem;
use App\Models\SiteContent;
use App\Support\Media;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

/**
 * Read access to the editable page content described in config/cms.php.
 * Values saved in the admin override the defaults; if the tables do not exist yet
 * (before migrating) everything silently falls back to the defaults.
 */
class Cms
{
    /** @var array<string,string|null>|null */
    private static ?array $values = null;

    /** @var array<string,Collection> */
    private static array $lists = [];

    public static function flush(): void
    {
        self::$values = null;
        self::$lists = [];
    }

    private static function stored(): array
    {
        if (self::$values === null) {
            try {
                self::$values = Schema::hasTable('site_contents')
                    ? SiteContent::query()->pluck('value', 'key')->all()
                    : [];
            } catch (\Throwable $e) {
                self::$values = [];
            }
        }

        return self::$values;
    }

    /** Definition of a field, from config/cms.php ("home.hero.title"). */
    public static function field(string $key): ?array
    {
        [$page, $section, $field] = array_pad(explode('.', $key, 3), 3, null);

        return config("cms.pages.$page.sections.$section.fields.$field");
    }

    /** Text value (or stored path for images). */
    public static function get(string $key, ?string $fallback = null): ?string
    {
        $stored = self::stored();
        if (array_key_exists($key, $stored) && $stored[$key] !== null) {
            return $stored[$key];
        }

        return self::field($key)['default'] ?? $fallback;
    }

    public static function bool(string $key): bool
    {
        return in_array(strtolower((string) self::get($key, '0')), ['1', 'true', 'on', 'yes'], true);
    }

    public static function image(string $key): ?string
    {
        return Media::url(self::get($key));
    }

    /** @return string[] */
    public static function lines(string $key): array
    {
        return array_values(array_filter(array_map('trim', preg_split('/\R/', (string) self::get($key, '')))));
    }

    /**
     * Active items of a repeating list, in order, as objects with the field names as properties.
     *
     * @return Collection<int,object>
     */
    public static function items(string $page, string $list): Collection
    {
        $cacheKey = "$page.$list";
        if (! isset(self::$lists[$cacheKey])) {
            try {
                $rows = Schema::hasTable('content_items')
                    ? ContentItem::where('page', $page)->where('list', $list)->where('is_active', true)->orderBy('sort_order')->orderBy('id')->get()
                    : collect();
            } catch (\Throwable $e) {
                $rows = collect();
            }

            if ($rows->isEmpty() && ! self::seeded($page, $list)) {
                // not seeded yet: show the built-in defaults
                $rows = collect(config("cms.pages.$page.lists.$list.defaults", []))
                    ->map(fn ($d, $i) => new ContentItem(['page' => $page, 'list' => $list, 'data' => $d, 'sort_order' => $i, 'is_active' => true]));
            }

            self::$lists[$cacheKey] = $rows->map(fn ($r) => (object) ($r->data ?? []));
        }

        return self::$lists[$cacheKey];
    }

    public static function seedMarker(string $page, string $list): string
    {
        return "__seeded.$page.$list";
    }

    private static function seeded(string $page, string $list): bool
    {
        return array_key_exists(self::seedMarker($page, $list), self::stored());
    }

    /** Persist a list's built-in defaults once, so they can be edited/removed in the admin. */
    public static function seedList(string $page, string $list): void
    {
        $marker = self::seedMarker($page, $list);
        if (SiteContent::where('key', $marker)->exists()) {
            return;
        }
        if (! ContentItem::where('page', $page)->where('list', $list)->exists()) {
            foreach (config("cms.pages.$page.lists.$list.defaults", []) as $i => $data) {
                ContentItem::create(['page' => $page, 'list' => $list, 'data' => $data, 'sort_order' => $i + 1, 'is_active' => true]);
            }
        }
        SiteContent::create(['key' => $marker, 'value' => '1']);
        self::flush();
    }

    public static function save(string $key, ?string $value): void
    {
        SiteContent::updateOrCreate(['key' => $key], ['value' => $value]);
        self::flush();
    }
}
