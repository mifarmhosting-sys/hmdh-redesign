@extends('layouts.site')

@section('title', 'Properties & Hotels | ' . $settings->site_name . ' Dream Hospitality')
@section('meta_description', 'Handpicked resorts and hotels available to Happy Miles members.')

@php
    $india = $directory->total();
    $showCountry = $countries->count() > 1;
    $showTheme = $themes->isNotEmpty();
    $formCols = match (true) {
        $showCountry && $showTheme => 'lg:grid-cols-[2fr_1fr_1fr_auto]',
        $showCountry || $showTheme => 'lg:grid-cols-[2fr_1fr_auto]',
        default => 'lg:grid-cols-[1fr_auto]',
    };
    $queryWithout = fn (string $key) => array_filter(array_merge($filters, [$key => null]));
@endphp

@section('content')

{{-- Hero + search --}}
<section class="relative w-full overflow-hidden bg-deep-navy -mt-[116px] pt-[116px]">
  <div class="absolute inset-0 bg-gradient-to-br from-deep-navy via-primary to-lagoon-blue"></div>
  <div class="absolute -top-24 right-0 w-[28rem] h-[28rem] bg-sunset-gold/15 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-32 flex flex-col gap-space-md">
    <nav aria-label="Breadcrumb" class="flex items-center gap-2 font-body-sm text-body-sm text-surface-ice/80">
      <a href="{{ route('home') }}" class="hover:text-sunset-gold transition-colors">Home</a><span>/</span><span>Properties &amp; Hotels</span>
    </nav>
    <h1 class="font-headline-xl text-headline-xl-mobile sm:text-headline-xl text-surface-bright tracking-tight max-w-3xl">Handcrafted Luxury Stays &amp; Sanctuaries</h1>
    <p class="font-body-lg text-body-lg text-surface-ice/90 max-w-2xl">Explore {{ $total }} curated resorts and hotels available to Happy Miles members.</p>
  </div>
</section>

<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin -mt-20 relative z-20">
  <form action="{{ route('hotels') }}" method="GET" class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-[0_8px_30px_rgba(11,30,46,0.12)] grid grid-cols-1 md:grid-cols-2 {{ $formCols }} gap-space-md items-end">
    <div class="flex flex-col gap-1.5">
      <label for="f-q" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold">Destination or resort name</label>
      <input id="f-q" type="search" name="q" value="{{ $filters['q'] }}" placeholder="Search…" class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md focus:outline-2 focus:outline-coral-vibrant">
    </div>
    @if($showCountry)
      <div class="flex flex-col gap-1.5">
        <label for="f-country" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold">Country</label>
        <select id="f-country" name="country" class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md focus:outline-2 focus:outline-coral-vibrant">
          <option value="">All</option>
          @foreach($countries as $c)<option value="{{ $c }}" @selected($filters['country'] === $c)>{{ $c }}</option>@endforeach
        </select>
      </div>
    @endif
    @if($showTheme)
      <div class="flex flex-col gap-1.5">
        <label for="f-theme" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold">Stay theme</label>
        <select id="f-theme" name="theme" class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md focus:outline-2 focus:outline-coral-vibrant">
          <option value="">All</option>
          @foreach($themes as $t)<option value="{{ $t }}" @selected($filters['theme'] === $t)>{{ $t }}</option>@endforeach
        </select>
      </div>
    @endif
    <button type="submit" class="h-[46px] px-space-lg rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-2 shadow-md transition-all cursor-pointer"><span class="material-symbols-outlined text-[20px]">search</span>Find Stays</button>
  </form>
</div>

{{-- Themes (only when hotels have a theme set in admin) --}}
@if(! $filtered && $themeCounts->isNotEmpty())
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl">
  <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight mb-space-md">Curated Holiday Themes</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-space-md">
    @foreach($themeCounts as $theme => $count)
      <a href="{{ route('hotels', ['theme' => $theme]) }}" class="bg-surface-container-lowest rounded-xl p-space-md text-center shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
        <span class="block font-body-md text-body-md font-bold text-deep-navy">{{ $theme }}</span>
        <span class="block font-label-sm text-label-sm text-on-surface-variant uppercase mt-1">{{ $count }} {{ \Illuminate\Support\Str::plural('property', $count) }}</span>
      </a>
    @endforeach
  </div>
</section>
@endif

{{-- Flagship retreats (hotels marked "featured" in admin) --}}
@if($featured->isNotEmpty())
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl">
  <div class="flex items-center gap-space-xs mb-1"><span class="material-symbols-outlined text-sunset-gold text-[20px]">hotel_class</span><span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold">Handpicked Signature Spotlight</span></div>
  <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight mb-space-lg">Our Premier Flagship Retreats</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
    @foreach($featured as $hotel)@include('partials.hotel-card', ['hotel' => $hotel, 'large' => true])@endforeach
  </div>
</section>
@endif

{{-- Directory --}}
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl" id="directory">
  <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
    <div>
      <span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold">{{ $filtered ? 'Search results' : 'Comprehensive Directory' }}</span>
      <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight">{{ $filtered ? $india . ' ' . \Illuminate\Support\Str::plural('property', $india) . ' found' : 'Affiliated Hotel Portfolio' }}</h2>
    </div>
    @if($regions->isNotEmpty())
      <div class="flex flex-wrap gap-2">
        <a href="{{ route('hotels', $queryWithout('region')) }}#directory" class="px-4 py-2 rounded-full font-label-md text-label-md {{ $filters['region'] === '' ? 'bg-primary text-on-primary' : 'bg-surface-container-lowest hover:bg-surface-container' }}">All</a>
        @foreach($regions as $r)
          <a href="{{ route('hotels', array_merge($queryWithout('region'), ['region' => $r])) }}#directory" class="px-4 py-2 rounded-full font-label-md text-label-md {{ $filters['region'] === $r ? 'bg-primary text-on-primary' : 'bg-surface-container-lowest hover:bg-surface-container' }}">{{ $r }}</a>
        @endforeach
      </div>
    @endif
  </div>

  @if($directory->isEmpty())
    <div class="text-center py-16 bg-surface-container-lowest rounded-xl">
      <span class="material-symbols-outlined text-[48px] text-outline">search_off</span>
      <p class="font-body-lg text-body-lg text-on-surface-variant mt-2">No properties match your search.</p>
      <a href="{{ route('hotels') }}" class="inline-block mt-space-md px-space-lg py-2 rounded-lg bg-deep-navy text-surface-ice font-label-lg text-label-lg">Clear filters</a>
    </div>
  @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
      @foreach($directory as $hotel)@include('partials.hotel-card', ['hotel' => $hotel])@endforeach
    </div>
    <div class="mt-space-xl">{{ $directory->links() }}</div>
  @endif
</section>

{{-- Cross-border properties (any hotel whose country is not India) --}}
@if($international->isNotEmpty())
<section class="w-full bg-surface-ice/60 py-space-xl">
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin">
    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight mb-space-lg">Cross-Border Sanctuaries &amp; Sister Properties</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
      @foreach($international as $hotel)@include('partials.hotel-card', ['hotel' => $hotel])@endforeach
    </div>
  </div>
</section>
@endif

{{-- Contact strip --}}
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pb-space-xl">
  <div class="bg-gradient-to-r from-deep-navy via-primary to-deep-navy rounded-2xl p-space-lg lg:p-space-xl text-surface-bright flex flex-col md:flex-row md:items-center justify-between gap-space-md">
    <div>
      <h2 class="font-headline-md text-headline-md">Can't find your ideal resort?</h2>
      <p class="font-body-md text-body-md text-surface-ice/80">Tell us what you are looking for and our team will help you plan it.</p>
    </div>
    <a href="{{ route('contact') }}" class="shrink-0 px-space-lg py-3 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg text-center transition-all">Connect Us</a>
  </div>
</section>
@endsection
