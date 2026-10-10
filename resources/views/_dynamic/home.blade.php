@extends('layouts.site')

@section('content')
@php
    use App\Support\Media;
    $heroPath = $hero->video_path;
    $heroIsVideo = $heroPath && preg_match('/\.(mp4|webm)$/i', $heroPath);
    $heroPoster = Media::url($hero->image_fallback_path, 'images/HomeVideoBG.jpg');
    $heroImage = $heroIsVideo ? $heroPoster : (Media::url($heroPath) ?: $heroPoster);
    $welcomeImages = collect([$welcome->image1_path, $welcome->image2_path, $welcome->image3_path, $welcome->image4_path])->filter();
    $featuredDestinations = $destinations->take(5);
    $otherDestinations = $destinations->slice(5);
@endphp

{{-- Hero --}}
<section class="relative w-full overflow-hidden bg-deep-navy -mt-[116px] pt-[116px]">
  @if($heroIsVideo)
    <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata" poster="{{ $heroPoster }}" aria-hidden="true">
      <source src="{{ Media::url($heroPath) }}" type="video/mp4">
    </video>
  @else
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $heroImage }}');"></div>
  @endif
  <div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/70 to-deep-navy/40"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-deep-navy via-deep-navy/60 to-transparent"></div>

  <div class="relative z-10 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-32 lg:pb-40 flex flex-col gap-space-lg">
    <div class="flex flex-wrap items-center gap-space-sm pt-space-md">
      @if($hero->eyebrow)
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-coral-vibrant text-on-primary font-label-md text-label-md tracking-wider uppercase shadow-md">
          <span class="material-symbols-outlined text-[14px] fill-current">star</span>{{ $hero->eyebrow }}
        </span>
      @endif
      @if($hero->subtitle)
        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-ice/15 backdrop-blur-md text-sunset-gold font-label-md text-label-md">
          <span class="w-2 h-2 rounded-full bg-sunset-gold animate-pulse"></span>{{ $hero->subtitle }}
        </span>
      @endif
    </div>

    <div class="flex flex-col gap-space-md max-w-3xl">
      <h1 class="font-headline-xl text-headline-xl-mobile sm:text-headline-xl lg:text-[54px] lg:leading-[62px] text-surface-bright tracking-tight">{{ $hero->title }}</h1>
      <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
        <a href="{{ route('membership') }}" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-coral-vibrant text-on-primary font-label-lg text-label-lg tracking-wide hover:bg-secondary transition-all shadow-[0_4px_20px_rgba(211,73,28,0.4)]">
          <span>Explore Membership</span><span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
        <a href="#destinations" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-surface-ice/15 hover:bg-surface-ice/25 text-surface-bright backdrop-blur-md font-label-lg text-label-lg tracking-wide transition-all">
          <span class="material-symbols-outlined text-[18px] text-sunset-gold">travel_explore</span><span>View Destinations</span>
        </a>
      </div>
    </div>
  </div>

  {{-- Find a property: searches the hotels page --}}
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin -mt-20 relative z-20 pb-space-md">
    <form action="{{ route('hotels') }}" method="GET" class="bg-surface-container-lowest/95 backdrop-blur-2xl rounded-xl p-space-md lg:p-space-lg shadow-[0_8px_30px_rgba(11,30,46,0.12)] grid grid-cols-1 md:grid-cols-[1fr_auto] gap-space-md items-end">
      <div class="flex flex-col gap-1.5">
        <label for="heroSearch" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1">
          <span class="material-symbols-outlined text-[16px] text-coral-vibrant">pin_drop</span>Find a property or destination
        </label>
        <input id="heroSearch" type="search" name="q" placeholder="Search hotels, resorts or places…" class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/70 focus:outline-2 focus:outline-coral-vibrant">
      </div>
      <button type="submit" class="h-[46px] px-space-lg rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-2 shadow-md transition-all cursor-pointer">
        <span class="material-symbols-outlined text-[20px]">search</span><span>Search Stays</span>
      </button>
    </form>
  </div>
</section>

{{-- Welcome --}}
@if($welcome->title)
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-space-xl">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
    <div class="lg:col-span-6 flex flex-col gap-space-md">
      @if($welcome->tagline)
        <div class="flex items-center gap-space-xs">
          <span class="w-8 h-0.5 bg-coral-vibrant"></span>
          <span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">{{ $welcome->tagline }}</span>
        </div>
      @endif
      <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight">{{ $welcome->title }}</h2>
      @if($welcome->description1)<p class="font-body-lg text-body-lg text-on-surface leading-relaxed">{{ $welcome->description1 }}</p>@endif
      @if($welcome->description2)<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ $welcome->description2 }}</p>@endif
      @if($welcome->accent_text)
        <p class="flex items-center gap-2 text-coral-vibrant font-headline-sm text-headline-sm font-bold">
          <span class="material-symbols-outlined text-[24px]">sentiment_satisfied_alt</span>{{ $welcome->accent_text }}
        </p>
      @endif
      <div><a href="{{ route('hotels') }}" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-deep-navy text-surface-ice hover:bg-lagoon-blue font-label-lg text-label-lg transition-colors">Explore<span class="material-symbols-outlined text-[18px]">arrow_forward</span></a></div>
    </div>

    @if($welcomeImages->isNotEmpty())
    <div class="lg:col-span-6 grid grid-cols-2 gap-space-md">
      @foreach($welcomeImages as $i => $img)
        <figure class="overflow-hidden rounded-xl shadow-md {{ $i % 2 === 1 ? 'mt-space-xl' : '' }}">
          <img src="{{ Media::url($img) }}" alt="" loading="lazy" class="w-full h-56 lg:h-64 object-cover hover:scale-105 transition-transform duration-500">
        </figure>
      @endforeach
    </div>
    @endif
  </div>
</section>
@endif

{{-- Hotels --}}
@if($categories->isNotEmpty())
<section class="w-full bg-surface-ice/60 py-space-xl">
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-lg" data-tabs data-active-class="bg-primary text-on-primary shadow-sm" data-idle-class="bg-surface-container-lowest text-on-surface hover:bg-surface-container">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
      <div class="flex flex-col gap-space-xs">
        <div class="flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-sunset-gold text-[20px]">hotel_class</span>
          <span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold">Our Hotels</span>
        </div>
        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight">Handcrafted Resorts &amp; Signature Stays</h2>
      </div>
      <div class="flex flex-wrap items-center gap-2" role="tablist" aria-label="Hotel categories">
        @foreach($categories as $cat)
          <button type="button" role="tab" data-tab-target="cat-{{ $cat->slug }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                  class="px-4 py-2 rounded-full font-label-md text-label-md tracking-wide transition-colors cursor-pointer {{ $loop->first ? 'bg-primary text-on-primary shadow-sm' : 'bg-surface-container-lowest text-on-surface hover:bg-surface-container' }}">{{ $cat->name }}</button>
        @endforeach
      </div>
    </div>

    @foreach($categories as $cat)
      <div data-tab-panel="cat-{{ $cat->slug }}" role="tabpanel" class="{{ $loop->first ? '' : 'hidden' }}">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
          @foreach($cat->hotels->take(6) as $hotel)
            <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] flex flex-col group hover:-translate-y-1.5 transition-all duration-300">
              <div class="relative h-60 w-full overflow-hidden">
                <img src="{{ $hotel->image_url }}" alt="{{ $hotel->name }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                @if($hotel->rating)
                  <div class="absolute bottom-3 right-3 bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md px-3 py-1 rounded-lg flex items-center gap-1 shadow" aria-label="{{ $hotel->rating }} star property">
                    <span class="material-symbols-outlined text-[16px] fill-current">star</span><span>{{ $hotel->rating }} Star</span>
                  </div>
                @endif
              </div>
              <div class="p-space-md flex flex-col flex-grow gap-space-sm">
                @if($hotel->location)
                  <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wide">
                    <span class="material-symbols-outlined text-[16px] text-sunset-gold">location_on</span><span>{{ $hotel->location }}</span>
                  </div>
                @endif
                <h3 class="font-headline-sm text-headline-sm text-deep-navy">{{ $hotel->name }}</h3>
                @if($hotel->description)
                  <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">{{ $hotel->description }}</p>
                @endif
                <div class="mt-auto pt-space-sm">
                  <a href="{{ $hotel->view_url && $hotel->view_url !== '#' ? $hotel->view_url : route('hotels') }}" class="inline-flex px-4 py-2 rounded-lg bg-deep-navy hover:bg-lagoon-blue text-surface-ice font-label-md text-label-md transition-colors">View Property</a>
                </div>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    @endforeach

    <div class="text-center">
      <a href="{{ route('hotels') }}" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg border border-deep-navy text-deep-navy hover:bg-deep-navy hover:text-surface-ice font-label-lg text-label-lg transition-colors">View All Properties<span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
    </div>
  </div>
</section>
@endif

{{-- Destinations --}}
@if($destinations->isNotEmpty())
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl scroll-mt-32" id="destinations">
  <div class="flex flex-col gap-space-lg">
    <div class="flex flex-col gap-space-xs max-w-2xl">
      <div class="flex items-center gap-space-xs">
        <span class="w-8 h-0.5 bg-coral-vibrant"></span>
        <span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">Find Your Escape in Our</span>
      </div>
      <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight">Destinations</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
      @foreach($featuredDestinations as $d)
        <a href="{{ route('destinations') }}#destination-{{ $d->id }}" class="relative h-72 rounded-xl overflow-hidden group shadow-md {{ $loop->first ? 'md:col-span-2 md:h-80' : '' }}">
          <img src="{{ Media::url($d->image_path) }}" alt="" loading="lazy" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/40 to-transparent"></div>
          <div class="absolute bottom-4 left-4 right-4">
            <h3 class="font-headline-sm text-headline-sm text-surface-bright">{{ $d->name }}</h3>
          </div>
        </a>
      @endforeach
    </div>

    @if($otherDestinations->isNotEmpty())
      <div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col gap-space-md">
        <div class="flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-coral-vibrant text-[22px]">explore</span>
          <span class="font-headline-sm text-headline-sm text-deep-navy">Explore Every Happy Miles Destination</span>
        </div>
        <div class="flex flex-wrap gap-2">
          @foreach($otherDestinations as $d)
            <a href="{{ route('destinations') }}#destination-{{ $d->id }}" class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface font-body-sm text-body-sm hover:text-coral-vibrant hover:bg-surface-ice transition-all shadow-xs">{{ $d->name }}</a>
          @endforeach
        </div>
      </div>
    @endif

    <div><a href="{{ route('destinations') }}" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-deep-navy text-surface-ice hover:bg-lagoon-blue font-label-lg text-label-lg transition-colors">All Destinations<span class="material-symbols-outlined text-[18px]">arrow_forward</span></a></div>
  </div>
</section>
@endif

{{-- Testimonials --}}
@if($testimonials->isNotEmpty())
<section class="w-full bg-deep-navy text-surface-ice py-space-xl relative overflow-hidden">
  <div class="absolute top-0 right-1/4 w-96 h-96 bg-lagoon-blue/20 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-0 left-10 w-80 h-80 bg-sunset-gold/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin relative z-10 flex flex-col gap-space-xl">
    <div class="flex flex-col gap-space-xs max-w-xl">
      <div class="flex items-center gap-space-xs text-sunset-gold">
        <span class="material-symbols-outlined text-[20px]">recommend</span>
        <span class="font-label-md text-label-md uppercase tracking-wider font-bold">Guest Moments</span>
      </div>
      <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-surface-bright tracking-tight">Stories From Our Members</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
      @foreach($testimonials as $t)
        <figure class="bg-white/10 backdrop-blur-md rounded-xl p-space-lg flex flex-col justify-between gap-space-md hover:bg-white/15 transition-all">
          <blockquote class="font-body-sm text-body-sm text-surface-ice/90 leading-relaxed italic">{{ $t->quote }}</blockquote>
          <figcaption class="flex items-center gap-space-sm">
            @if($t->avatar_path)
              <img src="{{ Media::url($t->avatar_path) }}" alt="" loading="lazy" class="w-10 h-10 rounded-full object-cover shrink-0">
            @else
              <span class="w-10 h-10 rounded-full bg-sunset-gold text-deep-navy font-bold flex items-center justify-center font-label-md text-label-md shrink-0">{{ mb_strtoupper(mb_substr($t->author, 0, 1)) }}</span>
            @endif
            <span class="flex flex-col">
              <cite class="not-italic font-body-md text-body-md text-surface-bright font-bold leading-tight">{{ $t->author }}</cite>
              @if($t->role)<span class="font-label-sm text-label-sm text-sunset-gold">{{ $t->role }}</span>@endif
            </span>
          </figcaption>
        </figure>
      @endforeach
    </div>
  </div>
</section>
@endif

{{-- Membership call to action --}}
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
  <div class="bg-gradient-to-r from-deep-navy via-primary to-deep-navy rounded-2xl overflow-hidden shadow-2xl p-space-lg lg:p-space-xl relative">
    <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-sunset-gold/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
      <div class="lg:col-span-8 flex flex-col gap-space-sm text-surface-bright">
        <span class="self-start px-3 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold uppercase tracking-wider">Exclusive Member Benefits</span>
        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg">Become a Happy Miles Member</h2>
        <p class="font-body-md text-body-md text-surface-ice/90 max-w-2xl leading-relaxed">Speak to our team to learn about membership privileges and how Happy Miles can plan your next holiday.</p>
      </div>
      <div class="lg:col-span-4 flex flex-col gap-space-sm">
        <a href="{{ route('membership') }}" class="py-2.5 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg text-center transition-all shadow-md">Explore Membership</a>
        <a href="{{ route('contact') }}" class="py-2.5 rounded-lg bg-white/10 hover:bg-white/20 text-surface-bright font-label-lg text-label-lg text-center transition-all">Connect Us</a>
      </div>
    </div>
  </div>
</section>
@endsection
