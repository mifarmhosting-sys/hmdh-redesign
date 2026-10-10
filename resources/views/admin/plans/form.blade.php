@extends('admin.layout')

@section('title', $plan->exists ? 'Edit Plan' : 'Add Plan')

@php
    $err = fn ($f) => $errors->first($f);
@endphp

@section('content')
<div class="content-header">
  <div><h1>{{ $plan->exists ? 'Edit Membership Plan' : 'Add Membership Plan' }}</h1></div>
  <div><a href="{{ route('admin.plans.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a></div>
</div>

<div class="card">
  <form action="{{ $plan->exists ? route('admin.plans.update', $plan->id) : route('admin.plans.store') }}" method="POST">
    @csrf
    @if($plan->exists) @method('PUT') @endif

    <div class="form-row">
      <div class="form-group">
        <label for="name">Plan name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $plan->name) }}" required>
        @if($err('name'))<span style="color: var(--danger); font-size: .8rem;">{{ $err('name') }}</span>@endif
      </div>
      <div class="form-group">
        <label for="tagline">Short description</label>
        <input type="text" id="tagline" name="tagline" class="form-control" value="{{ old('tagline', $plan->tagline) }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="audience">Audience label (small text, optional)</label>
        <input type="text" id="audience" name="audience" class="form-control" placeholder="e.g. Young Couples &amp; Solo" value="{{ old('audience', $plan->audience) }}">
      </div>
      <div class="form-group">
        <label for="badge">Highlight badge (optional)</label>
        <input type="text" id="badge" name="badge" class="form-control" placeholder="e.g. Most Popular" value="{{ old('badge', $plan->badge) }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="headline_1">Headline benefit 1 (optional)</label>
        <input type="text" id="headline_1" name="headline_1" class="form-control" placeholder="e.g. 6 Nights / Year" value="{{ old('headline_1', $plan->headline_1) }}">
      </div>
      <div class="form-group">
        <label for="headline_2">Headline benefit 2 (optional)</label>
        <input type="text" id="headline_2" name="headline_2" class="form-control" value="{{ old('headline_2', $plan->headline_2) }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="price_label">Price label</label>
        <input type="text" id="price_label" name="price_label" class="form-control" value="{{ old('price_label', $plan->price_label) }}">
      </div>
      <div class="form-group">
        <label for="price">Price (₹, typed exactly as shown, e.g. 12,49,999)</label>
        <input type="text" id="price" name="price" class="form-control" value="{{ old('price', $plan->price) }}">
      </div>
      <div class="form-group">
        <label for="price_note">Price note (optional)</label>
        <input type="text" id="price_note" name="price_note" class="form-control" value="{{ old('price_note', $plan->price_note) }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="annual_label">Annual charge label</label>
        <input type="text" id="annual_label" name="annual_label" class="form-control" placeholder="e.g. Annual Utility Charge" value="{{ old('annual_label', $plan->annual_label) }}">
      </div>
      <div class="form-group">
        <label for="annual_charge">Annual charge (₹)</label>
        <input type="text" id="annual_charge" name="annual_charge" class="form-control" value="{{ old('annual_charge', $plan->annual_charge) }}">
      </div>
      <div class="form-group">
        <label for="heads">No. of heads covered</label>
        <input type="text" id="heads" name="heads" class="form-control" placeholder="e.g. 2 Adults + 2 Kids (below 8 years)" value="{{ old('heads', $plan->heads) }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="perks">Perks (one per line)</label>
        <textarea id="perks" name="perks" class="form-control" rows="7">{{ old('perks', $plan->perks) }}</textarea>
      </div>
      <div class="form-group">
        <label for="features">Comparison rows (one per line, format: Label | Value)</label>
        <textarea id="features" name="features" class="form-control" rows="7" placeholder="Annual Resort Stays | 6 Nights / Year">{{ old('features', $plan->features) }}</textarea>
        <small style="opacity: .7;">The comparison table appears only when two or more plans are live.</small>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="cta_label">Button text</label>
        <input type="text" id="cta_label" name="cta_label" class="form-control" value="{{ old('cta_label', $plan->cta_label) }}" required>
      </div>
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $plan->sort_order ?? 0) }}" required>
      </div>
      <div class="form-group">
        <label class="checkbox-label"><input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $plan->is_featured) ? 'checked' : '' }}> Highlight this plan</label>
        <label class="checkbox-label"><input type="checkbox" name="is_active" value="1" {{ old('is_active', $plan->is_active) ? 'checked' : '' }}> Show on website</label>
      </div>
    </div>

    <div style="margin-top: 30px; display: flex; justify-content: flex-end;">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </div>
  </form>
</div>
@endsection
