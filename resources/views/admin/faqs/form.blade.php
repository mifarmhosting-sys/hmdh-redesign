@extends('admin.layout')

@section('title', $faq->exists ? 'Edit FAQ' : 'Add FAQ')

@section('content')
<div class="content-header">
  <div><h1>{{ $faq->exists ? 'Edit FAQ' : 'Add FAQ' }}</h1></div>
  <div><a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a></div>
</div>

<div class="card">
  <form action="{{ $faq->exists ? route('admin.faqs.update', $faq->id) : route('admin.faqs.store') }}" method="POST">
    @csrf
    @if($faq->exists) @method('PUT') @endif

    <div class="form-row">
      <div class="form-group">
        <label for="page">Show on page</label>
        <select id="page" name="page" class="form-control">
          <option value="membership" {{ old('page', $faq->page) === 'membership' ? 'selected' : '' }}>Membership</option>
          <option value="contact" {{ old('page', $faq->page) === 'contact' ? 'selected' : '' }}>Connect Us</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" class="form-control" value="{{ old('sort_order', $faq->sort_order ?? 0) }}" required>
      </div>
    </div>

    <div class="form-group">
      <label for="question">Question</label>
      <input type="text" id="question" name="question" class="form-control" value="{{ old('question', $faq->question) }}" required>
      @error('question')<span style="color: var(--danger); font-size: .8rem;">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
      <label for="answer">Answer</label>
      <textarea id="answer" name="answer" class="form-control" rows="5" required>{{ old('answer', $faq->answer) }}</textarea>
      @error('answer')<span style="color: var(--danger); font-size: .8rem;">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
      <label class="checkbox-label"><input type="checkbox" name="is_active" value="1" {{ old('is_active', $faq->is_active) ? 'checked' : '' }}> Show on website</label>
    </div>

    <div style="margin-top: 30px; display: flex; justify-content: flex-end;">
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
    </div>
  </form>
</div>
@endsection
