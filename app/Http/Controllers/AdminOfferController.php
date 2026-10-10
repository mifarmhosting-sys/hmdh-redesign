<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminOfferController extends Controller
{
    public function index()
    {
        return view('admin.offers.index', ['offers' => Offer::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.offers.form', ['offer' => new Offer(['is_active' => true, 'cta_label' => 'Avail the Offer'])]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('images', 'public');
        }
        Offer::create($data);

        return redirect()->route('admin.offers.index')->with('success', 'Offer created.');
    }

    public function edit($id)
    {
        return view('admin.offers.form', ['offer' => Offer::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);
        $data = $this->validated($request);
        if ($request->hasFile('image')) {
            $this->deleteImage($offer);
            $data['image_path'] = $request->file('image')->store('images', 'public');
        }
        $offer->update($data);

        return redirect()->route('admin.offers.index')->with('success', 'Offer updated.');
    }

    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);
        $this->deleteImage($offer);
        $offer->delete();

        return redirect()->route('admin.offers.index')->with('success', 'Offer deleted.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'tag' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'cta_label' => 'required|string|max:100',
            'cta_url' => 'nullable|string|max:500',
            'valid_until' => 'nullable|date',
            'sort_order' => 'required|integer',
        ]);
        unset($data['image']);
        $data['is_active'] = $request->boolean('is_active');

        return $data;
    }

    private function deleteImage(Offer $offer): void
    {
        if ($offer->image_path && Storage::disk('public')->exists($offer->image_path)) {
            Storage::disk('public')->delete($offer->image_path);
        }
    }
}
