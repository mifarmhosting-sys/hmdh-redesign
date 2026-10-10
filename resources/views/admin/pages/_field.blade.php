{{-- One editable field. Expects: $name, $id, $f (definition), $value; optional $resetName, $isOverridden --}}
@php
    $type = $f['type'];
    $wide = in_array($type, ['textarea', 'lines', 'image']);
@endphp
<div class="form-group" style="{{ $wide ? 'flex: 1 1 100%;' : 'flex: 1 1 320px;' }}">
  @if($type === 'toggle')
    <label class="checkbox-label">
      <input type="hidden" name="{{ $name }}" value="0">
      <input type="checkbox" name="{{ $name }}" value="1" {{ in_array((string) $value, ['1', 'true', 'on'], true) ? 'checked' : '' }}>
      {{ $f['label'] }}
    </label>
  @else
    <label for="{{ $id }}">{{ $f['label'] }}</label>

    @if($type === 'textarea' || $type === 'lines')
      <textarea id="{{ $id }}" name="{{ $name }}" class="form-control" rows="{{ $type === 'lines' ? 5 : 3 }}">{{ old(str_replace(['[', ']'], ['.', ''], $name), $value) }}</textarea>
    @elseif($type === 'image')
      @if($value)
        <img class="img-preview" src="{{ \App\Support\Media::url($value) }}" alt="Current image" style="max-height: 150px; margin-bottom: 10px;">
      @endif
      <input type="file" id="{{ $id }}" name="{{ $name }}" class="form-control" accept="image/*">
      @if(!empty($isOverridden) && !empty($resetName))
        <label class="checkbox-label" style="margin-top: 8px; font-weight: normal;">
          <input type="checkbox" name="{{ $resetName }}" value="1"> Go back to the original picture
        </label>
      @endif
    @else
      <input type="{{ $type === 'url' ? 'text' : 'text' }}" id="{{ $id }}" name="{{ $name }}" class="form-control" value="{{ old(str_replace(['[', ']'], ['.', ''], $name), $value) }}" {{ $type === 'url' ? 'placeholder=/membership' : '' }}>
    @endif

    @if(!empty($f['help']))
      <small style="opacity: .7;">{{ $f['help'] }}</small>
    @endif
  @endif
</div>
