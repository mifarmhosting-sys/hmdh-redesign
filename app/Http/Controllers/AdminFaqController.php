<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function index()
    {
        return view('admin.faqs.index', ['faqs' => Faq::orderBy('page')->orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.faqs.form', ['faq' => new Faq(['is_active' => true, 'page' => 'membership'])]);
    }

    public function store(Request $request)
    {
        Faq::create($this->validated($request));

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ created.');
    }

    public function edit($id)
    {
        return view('admin.faqs.form', ['faq' => Faq::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        Faq::findOrFail($id)->update($this->validated($request));

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated.');
    }

    public function destroy($id)
    {
        Faq::findOrFail($id)->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'page' => 'required|in:membership,contact',
            'question' => 'required|string|max:500',
            'answer' => 'required|string',
            'sort_order' => 'required|integer',
        ]);
        $data['is_active'] = $request->boolean('is_active');

        return $data;
    }
}
