@extends('layouts.site')

@section('title', 'Destinations | ' . $settings->site_name . ' Dream Hospitality')
@section('meta_description', 'Handpicked domestic and international holiday destinations curated by Happy Miles.')

@php
    use App\Support\Media;
    $categoryNames = $groups->keys();
@endphp

@section('content')

{{-- Hero --}}
<section class="relative w-full overflow-hidden bg-deep-navy -mt-[116px] pt-[116px]">
  <div class="absolute inset-0 bg-gradient-to-br from-deep-navy via-primary to-lagoon-blue"></div>
  <div class="absolute -top-24 right-0 w-[28rem] h-[28rem] bg-sunset-gold/15 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl lg:py-16 flex flex-col gap-space-md">
    <nav aria-label="Breadcrumb" class="flex items-center gap-2 font-body-sm text-body-sm text-surface-ice/80">
      <a href="{{ route('home') }}" class="hover:text-sunset-gold transition-colors">Home</a><span>/</span><span>Destinations</span>
    </nav>
    <span class="self-start px-3 py-1 rounded-full bg-sunset-gold/20 text-sunset-gold font-label-md text-label-md tracking-wider uppercase">Explore {{ $destinations->count() }} holiday destinations</span>
    <h1 class="font-headline-xl text-headline-xl-mobile sm:text-headline-xl text-surface-bright tracking-tight max-w-3xl">Find Your Perfect Escape Across Domestic &amp; International Destinations</h1>
    <div class="flex flex-wrap gap-space-lg pt-space-sm text-surface-bright">
      <div><span class="block font-headline-lg text-headline-lg text-sunset-gold">{{ $destinations->count() }}</span><span class="font-label-md text-label-md uppercase tracking-wider text-surface-ice/80">Destinations</span></div>
      <div><span class="block font-headline-lg text-headline-lg text-sunset-gold">{{ $hotelCount }}</span><span class="font-label-md text-label-md uppercase tracking-wider text-surface-ice/80">Partner Properties</span></div>
    </div>
  </div>
</section>

<div data-destinations>
  {{-- Search + category filter --}}
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-lg">
    <div class="bg-surface-container-lowest rounded-xl shadow-md p-space-md flex flex-col gap-space-md">
      <div class="flex flex-col md:flex-row gap-space-md">
        <div class="flex-1 flex flex-col gap-1.5">
          <label for="destSearch" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold">Search destinations</label>
          <input id="destSearch" type="search" placeholder="e.g. Kerala, Bali…" class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md focus:outline-2 focus:outline-coral-vibrant" data-dest-search>
        </div>
        @if($zones->count() > 1)
          <div class="md:w-64 flex flex-col gap-1.5">
            <label for="destZone" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold">Region / zone</label>
            <select id="destZone" class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md focus:outline-2 focus:outline-coral-vibrant" data-dest-zone>
              <option value="">All zones</option>
              @foreach($zones as $z)<option value="{{ $z }}">{{ $z }}</option>@endforeach
            </select>
          </div>
        @endif
      </div>
      @if($categoryNames->count() > 1)
        <div class="flex flex-wrap gap-2" role="tablist" aria-label="Destination categories">
          <button type="button" data-dest-cat="" class="px-4 py-2 rounded-full bg-primary text-on-primary font-label-md text-label-md cursor-pointer">All Destinations ({{ $destinations->count() }})</button>
          @foreach($categoryNames as $cat)
            <button type="button" data-dest-cat="{{ $cat }}" class="px-4 py-2 rounded-full bg-surface-ice text-on-surface hover:bg-surface-container font-label-md text-label-md cursor-pointer">{{ $cat }} ({{ $groups[$cat]->count() }})</button>
          @endforeach
        </div>
      @endif
    </div>
  </div>

  {{-- Featured circuits (admin: Destinations → "Feature") --}}
  @if($featured->isNotEmpty())
  <section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl" data-dest-featured>
    <span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold">Flagship Signatures</span>
    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight mb-space-lg">Most Celebrated Member Holiday Circuits</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
      @foreach($featured as $d)@include('partials.destination-card', ['d' => $d, 'large' => true])@endforeach
    </div>
  </section>
  @endif

  {{-- Groups --}}
  @foreach($groups as $category => $items)
    <section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl" data-dest-group="{{ $category }}">
      <div class="flex items-center justify-between mb-space-md">
        <h2 class="font-headline-md text-headline-md text-deep-navy">{{ $category }}</h2>
        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant" data-dest-count>{{ $items->count() }}</span>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg">
        @foreach($items as $d)@include('partials.destination-card', ['d' => $d])@endforeach
      </div>
    </section>
  @endforeach

  <p class="hidden max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl text-center font-body-lg text-body-lg text-on-surface-variant" data-dest-empty>No destinations match your search.</p>
</div>

{{-- Custom itinerary CTA --}}
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
  <div class="bg-gradient-to-r from-deep-navy via-primary to-deep-navy rounded-2xl p-space-lg lg:p-space-xl text-surface-bright flex flex-col md:flex-row md:items-center justify-between gap-space-md">
    <div>
      <h2 class="font-headline-md text-headline-md">Can't find your dream destination?</h2>
      <p class="font-body-md text-body-md text-surface-ice/80">Tell us where you want to go and we will plan a custom itinerary for you.</p>
    </div>
    <a href="{{ route('contact') }}" class="shrink-0 px-space-lg py-3 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg text-center transition-all">Request a Custom Itinerary</a>
  </div>
</section>

@push('scripts')
<script>
  (function () {
    var root = document.querySelector('[data-destinations]');
    if (!root) return;
    var search = root.querySelector('[data-dest-search]');
    var zone = root.querySelector('[data-dest-zone]');
    var cats = root.querySelectorAll('[data-dest-cat]');
    var cards = root.querySelectorAll('[data-dest-card]');
    var groups = root.querySelectorAll('[data-dest-group]');
    var featured = root.querySelector('[data-dest-featured]');
    var empty = root.querySelector('[data-dest-empty]');
    var activeCat = '';

    function apply() {
      var q = (search.value || '').trim().toLowerCase();
      var z = zone ? zone.value : '';
      var filtering = q !== '' || z !== '' || activeCat !== '';
      var visibleTotal = 0;

      cards.forEach(function (c) {
        if (c.hasAttribute('data-featured-copy')) return;
        var ok = (!q || c.dataset.name.indexOf(q) !== -1) && (!z || c.dataset.zone === z) && (!activeCat || c.dataset.cat === activeCat);
        c.classList.toggle('hidden', !ok);
        if (ok) visibleTotal++;
      });
      groups.forEach(function (g) {
        var n = g.querySelectorAll('[data-dest-card]:not(.hidden)').length;
        g.classList.toggle('hidden', n === 0);
        var badge = g.querySelector('[data-dest-count]');
        if (badge) badge.textContent = n;
      });
      if (featured) featured.classList.toggle('hidden', filtering);
      if (empty) empty.classList.toggle('hidden', visibleTotal !== 0);
    }

    cats.forEach(function (b) {
      b.addEventListener('click', function () {
        activeCat = b.dataset.destCat;
        cats.forEach(function (x) {
          var on = x === b;
          x.classList.toggle('bg-primary', on); x.classList.toggle('text-on-primary', on);
          x.classList.toggle('bg-surface-ice', !on); x.classList.toggle('text-on-surface', !on);
        });
        apply();
      });
    });
    search.addEventListener('input', apply);
    if (zone) zone.addEventListener('change', apply);
  })();
</script>
@endpush
@endsection
