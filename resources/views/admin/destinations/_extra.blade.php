{{-- Optional grouping/meta used by the Destinations page --}}
@php $d = $destination ?? null; @endphp
<div class="form-group">
  <label for="category">Category</label>
  <input type="text" id="category" name="category" class="form-control" list="catList" placeholder="e.g. Hill Stations &amp; Himalayas" value="{{ old('category', $d->category ?? '') }}">
  <datalist id="catList">
    @foreach(\App\Models\Destination::whereNotNull('category')->distinct()->pluck('category') as $v)<option value="{{ $v }}">@endforeach
  </datalist>
</div>
<div class="form-group">
  <label for="zone">Zone</label>
  <input type="text" id="zone" name="zone" class="form-control" list="zoneList" placeholder="e.g. North India" value="{{ old('zone', $d->zone ?? '') }}">
  <datalist id="zoneList">
    @foreach(\App\Models\Destination::whereNotNull('zone')->distinct()->pluck('zone') as $v)<option value="{{ $v }}">@endforeach
  </datalist>
</div>
<div class="form-group">
  <label for="tag">Badge (optional)</label>
  <input type="text" id="tag" name="tag" class="form-control" placeholder="e.g. Top Rated" value="{{ old('tag', $d->tag ?? '') }}">
</div>
<div class="form-group">
  <label for="duration">Typical duration (optional)</label>
  <input type="text" id="duration" name="duration" class="form-control" placeholder="e.g. 6 Nights" value="{{ old('duration', $d->duration ?? '') }}">
</div>
<div class="form-group">
  <label for="best_time">Best time to visit (optional)</label>
  <input type="text" id="best_time" name="best_time" class="form-control" placeholder="e.g. Mar – Oct" value="{{ old('best_time', $d->best_time ?? '') }}">
</div>
<div class="form-group">
  <label for="member_perk">Member perk (optional)</label>
  <input type="text" id="member_perk" name="member_perk" class="form-control" value="{{ old('member_perk', $d->member_perk ?? '') }}">
</div>
<div class="form-group">
  <label class="checkbox-label"><input type="checkbox" name="show_on_home" value="1" {{ old('show_on_home', $d->show_on_home ?? false) ? 'checked' : '' }}> Show as a picture tile on the home page</label>
  <label for="home_order" style="margin-top: 10px;">Position on the home page (1 = the big tile)</label>
  <input type="number" id="home_order" name="home_order" class="form-control" value="{{ old('home_order', $d->home_order ?? 0) }}">
</div>
<div class="form-group">
  <label class="checkbox-label"><input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $d->is_featured ?? false) ? 'checked' : '' }}> Feature in "Most Celebrated Circuits"</label>
</div>
