@extends('admin.layout')

@section('title', ($item->exists ? 'Edit ' : 'Add ') . $def['item_label'])

@section('content')
<div class="content-header">
  <div><h1>{{ $item->exists ? 'Edit' : 'Add' }} {{ $def['item_label'] }}</h1><p class="subtitle">{{ $def['label'] }}</p></div>
  <div><a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a></div>
</div>

<div class="card">
  <form action="{{ $item->exists ? route('admin.pages.items.update', [$page, $list, $item->id]) : route('admin.pages.items.store', [$page, $list]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($item->exists) @method('PUT') @endif

    <div class="form-row" style="flex-wrap: wrap;">
      @foreach($def['fields'] as $field => $f)
        @include('admin.pages._field', [
            'name' => "data[$field]",
            'id' => "d-$field",
            'f' => $f,
            'value' => $item->data[$field] ?? '',
        ])
      @endforeach
    </div>

    <div class="form-row" style="margin-top: 10px;">
      <div class="form-group">
        <label for="sort_order">Order (smaller numbers first)</label>
        <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
      </div>
      <div class="form-group">
        <label class="checkbox-label"><input type="checkbox" name="is_active" value="1" {{ old('is_active', $item->is_active) ? 'checked' : '' }}> Show on the website</label>
      </div>
    </div>

    @if($errors->any())
      <ul style="color: var(--danger);">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    @endif

    <div style="margin-top: 24px; display: flex; justify-content: flex-end;">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </div>
  </form>
</div>
@endsection
