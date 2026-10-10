@php $t = $testimonial ?? null; @endphp
<div class="form-group">
  <label for="tag">Small label on the card (optional)</label>
  <input type="text" id="tag" name="tag" class="form-control" placeholder="e.g. Kashmir Tour" value="{{ old('tag', $t->tag ?? '') }}">
</div>
<div class="form-group">
  <label for="rating">Star rating</label>
  <select id="rating" name="rating" class="form-control">
    @for($i = 5; $i >= 1; $i--)<option value="{{ $i }}" {{ (int) old('rating', $t->rating ?? 5) === $i ? 'selected' : '' }}>{{ $i }} {{ $i === 1 ? 'star' : 'stars' }}</option>@endfor
  </select>
</div>
<div class="form-group">
  <label class="checkbox-label"><input type="checkbox" name="show_on_home" value="1" {{ old('show_on_home', $t->show_on_home ?? true) ? 'checked' : '' }}> Show on the home page</label>
</div>
