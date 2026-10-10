@extends('admin.layout')

@section('title', $offer->exists ? 'Edit Offer' : 'Add Offer')

@section('content')
<div class="content-header">
  <div>
    <h1>{{ $offer->exists ? 'Edit Offer' : 'Add Offer' }}</h1>
  </div>
  <div><a href="{{ route('admin.offers.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a></div>
</div>

<div class="card">
  <form action="{{ $offer->exists ? route('admin.offers.update', $offer->id) : route('admin.offers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($offer->exists) @method('PUT') @endif

    <div class="form-row">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $offer->title) }}" required>
        @error('title')<span style="color: var(--danger); font-size: .8rem;">{{ $message }}</span>@enderror
      </div>
      <div class="form-group">
        <label for="tag">Small label above the title</label>
        <input type="text" id="tag" name="tag" class="form-control" placeholder="e.g. Advance Booking" value="{{ old('tag', $offer->tag) }}">
      </div>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea id="description" name="description" class="form-control" rows="3">{{ old('description', $offer->description) }}</textarea>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="cta_label">Button text</label>
        <input type="text" id="cta_label" name="cta_label" class="form-control" value="{{ old('cta_label', $offer->cta_label) }}" required>
      </div>
      <div class="form-group">
        <label for="cta_url">Button link (leave blank to open the Membership page)</label>
        <input type="text" id="cta_url" name="cta_url" class="form-control" value="{{ old('cta_url', $offer->cta_url) }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="image">Image (optional)</label>
        <input type="file" id="image" name="image" class="form-control">
        @if($offer->image_path)<img class="img-preview" src="{{ \App\Support\Media::url($offer->image_path) }}" alt="">@endif
        @error('image')<span style="color: var(--danger); font-size: .8rem;">{{ $message }}</span>@enderror
      </div>
      <div class="form-group">
        <label for="valid_until">Valid until (optional, hides automatically afterwards)</label>
        <input type="date" id="valid_until" name="valid_until" class="form-control" value="{{ old('valid_until', $offer->valid_until?->format('Y-m-d')) }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $offer->sort_order ?? 0) }}" required>
      </div>
      <div class="form-group">
        <label class="checkbox-label"><input type="checkbox" name="is_active" value="1" {{ old('is_active', $offer->is_active) ? 'checked' : '' }}> Show on website</label>
      </div>
    </div>

    <div style="margin-top: 30px; display: flex; justify-content: flex-end;">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </div>
  </form>
</div>
@endsection
