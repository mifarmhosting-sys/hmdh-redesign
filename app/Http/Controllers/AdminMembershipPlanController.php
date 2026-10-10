<?php

namespace App\Http\Controllers;

use App\Models\MembershipPlan;
use Illuminate\Http\Request;

class AdminMembershipPlanController extends Controller
{
    public function index()
    {
        return view('admin.plans.index', ['plans' => MembershipPlan::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.plans.form', ['plan' => new MembershipPlan([
            'is_active' => true, 'price_label' => 'Membership Price', 'cta_label' => 'Enquire Now',
        ])]);
    }

    public function store(Request $request)
    {
        MembershipPlan::create($this->validated($request));

        return redirect()->route('admin.plans.index')->with('success', 'Membership plan created.');
    }

    public function edit($id)
    {
        return view('admin.plans.form', ['plan' => MembershipPlan::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        MembershipPlan::findOrFail($id)->update($this->validated($request));

        return redirect()->route('admin.plans.index')->with('success', 'Membership plan updated.');
    }

    public function destroy($id)
    {
        MembershipPlan::findOrFail($id)->delete();

        return redirect()->route('admin.plans.index')->with('success', 'Membership plan deleted.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:500',
            'audience' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:255',
            'headline_1' => 'nullable|string|max:255',
            'headline_2' => 'nullable|string|max:255',
            'price_label' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:100',
            'price_note' => 'nullable|string|max:255',
            'annual_label' => 'nullable|string|max:255',
            'annual_charge' => 'nullable|string|max:100',
            'heads' => 'nullable|string|max:255',
            'perks' => 'nullable|string',
            'features' => 'nullable|string',
            'cta_label' => 'required|string|max:100',
            'sort_order' => 'required|integer',
        ]);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_active'] = $request->boolean('is_active');

        return $data;
    }
}
