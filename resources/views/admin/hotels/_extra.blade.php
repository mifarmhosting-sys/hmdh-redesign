{{-- Optional fields used by the Properties page and home page cards --}}
<div class="card-title" style="margin-top: 30px;"><span>Website Display (optional)</span></div>

<div class="form-row">
  <div class="form-group">
    <label for="region">Region group</label>
    <input type="text" id="region" name="region" class="form-control" list="regionList" placeholder="e.g. North &amp; Hills" value="{{ old('region', $hotel->region ?? '') }}">
    <datalist id="regionList">
      @foreach(\App\Models\Hotel::whereNotNull('region')->distinct()->pluck('region') as $r)<option value="{{ $r }}">@endforeach
    </datalist>
  </div>
  <div class="form-group">
    <label for="theme">Stay theme</label>
    <input type="text" id="theme" name="theme" class="form-control" list="themeList" placeholder="e.g. Hill Retreats &amp; Tea Estates" value="{{ old('theme', $hotel->theme ?? '') }}">
    <datalist id="themeList">
      @foreach(\App\Models\Hotel::whereNotNull('theme')->distinct()->pluck('theme') as $t)<option value="{{ $t }}">@endforeach
    </datalist>
  </div>
  <div class="form-group">
    <label for="badge">Card badge</label>
    <input type="text" id="badge" name="badge" class="form-control" placeholder="e.g. Heritage Partner" value="{{ old('badge', $hotel->badge ?? '') }}">
  </div>
</div>

<div class="form-row">
  <div class="form-group">
    <label for="amenities">Highlights / amenities (one per line)</label>
    <textarea id="amenities" name="amenities" class="form-control" rows="4" placeholder="Free Wi-Fi&#10;Swimming Pool">{{ old('amenities', $hotel->amenities ?? '') }}</textarea>
  </div>
  <div class="form-group">
    <label for="privilege_label">Member privilege label</label>
    <input type="text" id="privilege_label" name="privilege_label" class="form-control" placeholder="e.g. Member Privilege" value="{{ old('privilege_label', $hotel->privilege_label ?? '') }}">
    <label for="privilege_value" style="margin-top: 12px;">Member privilege text</label>
    <input type="text" id="privilege_value" name="privilege_value" class="form-control" placeholder="e.g. Complimentary High Tea" value="{{ old('privilege_value', $hotel->privilege_value ?? '') }}">
    <label class="checkbox-label" style="margin-top: 14px;"><input type="checkbox" name="show_on_home" value="1" {{ old('show_on_home', $hotel->show_on_home ?? false) ? 'checked' : '' }}> Show on the home page</label>
    <label for="home_order" style="margin-top: 12px;">Position on the home page (1 = first)</label>
    <input type="number" id="home_order" name="home_order" class="form-control" value="{{ old('home_order', $hotel->home_order ?? 0) }}">
    <label class="checkbox-label" style="margin-top: 14px;"><input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $hotel->is_featured ?? false) ? 'checked' : '' }}> Feature as a flagship retreat</label>
  </div>
</div>
