@extends('layouts.design')
@section('title', ($settings->site_name ?? null) ? $settings->site_name . ' Dream Hospitality' : 'Happy Miles Dream Hospitality')
@section('body_class', "bg-surface font-body-md text-body-md text-on-surface antialiased min-h-screen")
@push('head')
@verbatim
<style>@layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } } ::-webkit-scrollbar { display: none; }</style>
@endverbatim
@endpush
@section('content')
@php
    // "Paradise on Earth – Kashmir Tour" -> title "Kashmir Tour" (shorter part), caption "Paradise on Earth".
    $splitName = function (?string $name): array {
        $parts = array_values(array_filter(array_map('trim', preg_split('/\s+[–—-]\s+/u', (string) $name, 2))));
        if (count($parts) < 2) {
            return [$parts[0] ?? '', null];
        }
        return mb_strlen($parts[0]) <= mb_strlen($parts[1]) ? [$parts[0], $parts[1]] : [$parts[1], $parts[0]];
    };
    $initials = function (?string $name): string {
        $words = preg_split('/[\s&,]+/u', preg_replace('/\b(Mr|Mrs|Ms|Dr|Miss)\.?\s/i', '', (string) $name), -1, PREG_SPLIT_NO_EMPTY);
        return mb_strtoupper(collect($words)->take(2)->map(fn ($w) => mb_substr($w, 0, 1))->implode(''));
    };
    $phone = $settings->contact_phone ?? null;
    $address = $settings->contact_address ?? null;
@endphp
@include('partials.design-header', ['active' => 'home'])
<main class="w-full pt-[116px] bg-surface"><div class="flex flex-col w-full">

{{-- ===== Hero ===== --}}
<section class="relative w-full overflow-hidden bg-deep-navy -mt-[116px] pt-[116px]">
<div class="absolute inset-0 w-full h-full bg-cover bg-center" style="background-image: url('{{ cms_image('home.hero.background') }}');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/70 to-deep-navy/40 mix-blend-multiply"></div>
<div class="absolute inset-0 bg-gradient-to-r from-deep-navy via-deep-navy/60 to-transparent"></div>
<div class="relative z-10 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-32 lg:pb-36 flex flex-col gap-space-lg">
@if(cms('home.hero.badge') || cms('home.hero.pill'))
<div class="flex flex-wrap items-center gap-space-sm pt-space-md">
@if(cms('home.hero.badge'))
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-coral-vibrant text-on-primary font-label-md text-label-md tracking-wider uppercase shadow-md">
<span class="material-symbols-outlined text-[14px]">star</span>
{{ cms('home.hero.badge') }}
</span>
@endif
@if(cms('home.hero.pill'))
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-ice/15 backdrop-blur-md text-sunset-gold font-label-md text-label-md">
<span class="w-2 h-2 rounded-full bg-sunset-gold animate-pulse"></span>
{{ cms('home.hero.pill') }}
</div>
@endif
</div>
@endif
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
<div class="{{ cms_on('home.offer.show') ? 'lg:col-span-8' : 'lg:col-span-12' }} flex flex-col gap-space-md">
<h1 class="font-headline-xl text-headline-xl lg:text-[54px] lg:leading-[62px] text-surface-bright tracking-tight max-w-3xl">{{ cms('home.hero.title') }}</h1>
@if(cms('home.hero.text'))
<p class="font-body-lg text-body-lg text-surface-ice/90 max-w-2xl leading-relaxed">{{ cms('home.hero.text') }}</p>
@endif
<div class="flex flex-wrap items-center gap-space-md pt-space-xs">
@if(cms('home.hero.button1_label'))
<a class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-coral-vibrant text-on-primary font-label-lg text-label-lg tracking-wide hover:bg-secondary transition-all shadow-[0_4px_20px_rgba(211,73,28,0.4)]" href="{{ cms('home.hero.button1_url', '/membership') }}">
<span>{{ cms('home.hero.button1_label') }}</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
@endif
@if(cms('home.hero.button2_label'))
<a class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-surface-ice/15 hover:bg-surface-ice/25 text-surface-bright backdrop-blur-md font-label-lg text-label-lg tracking-wide transition-all shadow-sm" href="{{ cms('home.hero.button2_url', '#destinations-section') }}">
<span class="material-symbols-outlined text-[18px] text-sunset-gold">travel_explore</span>
<span>{{ cms('home.hero.button2_label') }}</span>
</a>
@endif
</div>
</div>

@if(cms_on('home.offer.show'))
<div class="lg:col-span-4 flex justify-end">
<div class="w-full max-w-[360px] bg-surface-container-lowest/95 backdrop-blur-xl rounded-xl p-space-md shadow-2xl flex flex-col gap-space-sm relative overflow-hidden group hover:scale-[1.02] transition-transform">
<div class="absolute -top-10 -right-10 w-28 h-28 bg-sunset-gold/20 rounded-full blur-2xl pointer-events-none"></div>
<div class="flex items-center justify-between gap-2">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">{{ cms('home.offer.label') }}</span>
@if(cms('home.offer.badge'))
<span class="px-2 py-0.5 rounded bg-sunset-gold/20 text-deep-navy font-label-sm text-label-sm font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[13px] text-coral-vibrant">verified</span>
{{ cms('home.offer.badge') }}
</span>
@endif
</div>
<div class="flex items-center gap-space-sm py-1">
@if(cms('home.offer.number'))
<div class="w-12 h-12 rounded-full bg-deep-navy text-sunset-gold flex items-center justify-center font-headline-sm text-headline-sm shrink-0 shadow-inner">{{ cms('home.offer.number') }}</div>
@endif
<div class="flex flex-col">
<span class="font-label-md text-label-md text-coral-vibrant uppercase tracking-wider font-bold">{{ cms('home.offer.number_caption') }}</span>
<span class="font-headline-sm text-headline-sm text-deep-navy leading-none">{{ cms('home.offer.headline') }}</span>
</div>
</div>
@if(cms('home.offer.perk1_title') || cms('home.offer.perk2_title'))
<div class="grid grid-cols-2 gap-2 text-center pt-1">
@foreach([1, 2] as $n)
@if(cms("home.offer.perk{$n}_title"))
<div class="bg-surface-ice p-2 rounded-lg">
<span class="block font-label-sm text-label-sm text-secondary uppercase font-bold">{{ cms("home.offer.perk{$n}_title") }}</span>
<span class="block font-body-sm text-body-sm text-on-surface-variant text-[11px] leading-tight pt-0.5">{{ cms("home.offer.perk{$n}_text") }}</span>
</div>
@endif
@endforeach
</div>
@endif
@if(cms('home.offer.button_label'))
<a class="w-full mt-1 py-2.5 rounded-lg bg-deep-navy text-sunset-gold hover:text-surface-bright font-label-md text-label-md flex items-center justify-center gap-1 transition-colors" href="{{ cms('home.offer.button_url', '/membership') }}">
<span>{{ cms('home.offer.button_label') }}</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
@endif
</div>
</div>
@endif
</div>
</div>

{{-- ===== Search bar ===== --}}
@if(cms_on('home.search.show'))
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin -mt-16 relative z-20">
<div class="bg-surface-container-lowest/90 backdrop-blur-2xl rounded-xl p-space-md lg:p-space-lg shadow-[0_8px_30px_rgba(11,30,46,0.12)]">
<form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-md items-end" action="{{ route('hotels') }}" method="GET">
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-coral-vibrant">pin_drop</span>
Destination
</label>
<div class="relative bg-surface-ice rounded-lg px-3 py-2.5 flex items-center justify-between">
<select name="q" class="w-full bg-transparent font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer">
<option value="">All destinations</option>
@foreach($searchDestinations as $d)
@php
    [$dTitle, $dCaption] = $splitName($d->name);
    $dValue = trim(preg_replace('/\s+Tours?$/i', '', $dTitle));
@endphp
<option value="{{ $dValue }}">{{ $dTitle }}@if($dCaption) ({{ $dCaption }})@endif</option>
@endforeach
</select>
</div>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-coral-vibrant">calendar_month</span>
Travel Period
</label>
<div class="bg-surface-ice rounded-lg px-3 py-2.5 flex items-center gap-2">
<input class="w-full bg-transparent font-body-md text-body-md text-on-surface focus:outline-none" placeholder="Select Dates..." type="text" value="Upcoming Month">
</div>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-coral-vibrant">beach_access</span>
Trip Type
</label>
<div class="bg-surface-ice rounded-lg px-3 py-2.5 flex items-center">
<select class="w-full bg-transparent font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer">
@foreach(cms_lines('home.search.trip_types') as $line)<option>{{ $line }}</option>@endforeach
</select>
</div>
</div>
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-coral-vibrant">group</span>
Guests &amp; Rooms
</label>
<div class="bg-surface-ice rounded-lg px-3 py-2.5 flex items-center">
<select class="w-full bg-transparent font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer">
@foreach(cms_lines('home.search.guest_options') as $line)<option>{{ $line }}</option>@endforeach
</select>
</div>
</div>
<button class="w-full h-[46px] rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-2 shadow-md transition-all" type="submit">
<span class="material-symbols-outlined text-[20px]">search</span>
<span>{{ cms('home.search.button_label', 'Search') }}</span>
</button>
</form>
</div>
</div>
@endif
</section>

{{-- ===== Brand story ===== --}}
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-24 pb-space-xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
<div class="lg:col-span-6 flex flex-col gap-space-md">
@if(cms('home.story.eyebrow'))
<div class="flex items-center gap-space-xs">
<span class="w-8 h-0.5 bg-coral-vibrant"></span>
<span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">{{ cms('home.story.eyebrow') }}</span>
</div>
@endif
<h2 class="font-headline-lg text-headline-lg text-deep-navy tracking-tight">{{ cms('home.story.title') }}</h2>
@if(cms('home.story.text1'))
<p class="font-body-lg text-body-lg text-on-surface leading-relaxed">{{ cms('home.story.text1') }}</p>
@endif
@if(cms('home.story.text2'))
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ cms('home.story.text2') }}</p>
@endif
@if(cms('home.story.tagline'))
<div class="flex items-center gap-space-md pt-space-xs">
<div class="flex items-center gap-2 text-coral-vibrant font-headline-sm text-headline-sm font-bold">
<span class="material-symbols-outlined text-[24px]">sentiment_satisfied_alt</span>
<span>{{ cms('home.story.tagline') }}</span>
</div>
</div>
@endif
@if(cms('home.story.badge_image'))
<div class="pt-space-sm flex items-center gap-space-md">
<img alt="{{ $settings->site_name ?? 'Happy Miles' }}" class="h-10 object-contain" src="{{ cms_image('home.story.badge_image') }}">
@if(cms('home.story.badge_caption'))
<span class="text-body-sm font-body-sm text-on-surface-variant font-medium">{{ cms('home.story.badge_caption') }}</span>
@endif
</div>
@endif
</div>

@php $storyCards = cms_items('home', 'story_cards'); $iconTints = ['text-lagoon-blue', 'text-sunset-gold', 'text-coral-vibrant', 'text-primary']; @endphp
@if($storyCards->isNotEmpty())
<div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-space-md">
@foreach($storyCards as $card)
<div class="bg-surface-container-low rounded-xl p-space-md flex flex-col gap-space-xs hover:bg-surface-container transition-colors shadow-sm">
<div class="w-12 h-12 rounded-lg bg-surface-ice {{ $iconTints[$loop->index % 4] }} flex items-center justify-center mb-1">
<span class="material-symbols-outlined text-[28px]">{{ $card->icon ?? 'star' }}</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-navy">{{ $card->title ?? '' }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $card->text ?? '' }}</p>
</div>
@endforeach
</div>
@endif
</div>
</section>

{{-- ===== Hotels ===== --}}
@if(cms_on('home.hotels.show') && $homeHotels->isNotEmpty())
<section class="w-full bg-surface-ice/60 py-space-xl">
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-lg">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
@if(cms('home.hotels.eyebrow'))
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[20px]">hotel_class</span>
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold">{{ cms('home.hotels.eyebrow') }}</span>
</div>
@endif
<h2 class="font-headline-lg text-headline-lg text-deep-navy tracking-tight">{{ cms('home.hotels.title') }}</h2>
</div>
@if($homeCategories->isNotEmpty())
<div class="flex flex-wrap items-center gap-2" data-hotel-filters>
<button type="button" data-filter="all" class="px-4 py-2 rounded-full bg-primary text-on-primary font-label-md text-label-md tracking-wide shadow-sm">All Hotels</button>
@foreach($homeCategories as $cat)
<button type="button" data-filter="{{ $cat->slug }}" class="px-4 py-2 rounded-full bg-surface-container-lowest text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors">{{ $cat->name }}</button>
@endforeach
</div>
@endif
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
@php $badgeTints = ['bg-coral-vibrant', 'bg-lagoon-blue', 'bg-secondary']; @endphp
@foreach($homeHotels as $hotel)
@php
    $hasLink = $hotel->view_url && $hotel->view_url !== '#';
    $location = $hotel->location && strcasecmp($hotel->location, 'Various') !== 0 ? $hotel->location : null;
    $place = collect([$location, $hotel->country])->filter()->implode(', ');
    $amenities = array_slice($hotel->amenityList(), 0, 3);
@endphp
<div data-hotel-card data-cats="{{ $hotel->categories->pluck('slug')->implode(' ') }}" class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] flex flex-col group hover:-translate-y-1.5 transition-all duration-300">
<div class="relative h-60 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" role="img" aria-label="{{ $hotel->name }}" style="background-image: url('{{ $hotel->image_url }}');"></div>
@if($hotel->badge)
<span class="absolute top-3 left-3 {{ $badgeTints[$loop->index % 3] }} text-on-primary font-label-sm text-label-sm uppercase px-2.5 py-1 rounded-full shadow-md font-bold">{{ $hotel->badge }}</span>
@endif
@if($hotel->rating)
<div class="absolute bottom-3 right-3 bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md px-3 py-1 rounded-lg flex items-center gap-1 shadow">
<span class="material-symbols-outlined text-[16px] text-sunset-gold">star</span>
<span>{{ number_format((float) $hotel->rating, 1) }} / 5.0</span>
</div>
@endif
</div>
<div class="p-space-md flex flex-col flex-grow justify-between gap-space-sm">
<div>
@if($place)
<div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wide">
<span class="material-symbols-outlined text-[16px] text-sunset-gold">location_on</span>
<span>{{ $place }}</span>
</div>
@endif
<h3 class="font-headline-sm text-headline-sm text-deep-navy pt-1">{{ $hotel->name }}</h3>
@if($hotel->description)
<p class="font-body-sm text-body-sm text-on-surface-variant pt-1 line-clamp-3">{{ $hotel->description }}</p>
@endif
</div>
<div class="pt-space-xs">
@if($amenities)
<div class="flex flex-wrap gap-1.5 pb-space-sm">
@foreach($amenities as $a)<span class="px-2 py-1 bg-surface-ice rounded text-primary font-label-sm text-label-sm font-semibold">{{ $a }}</span>@endforeach
</div>
@endif
<div class="flex items-center justify-between gap-space-sm pt-space-xs">
@if($hotel->privilege_value)
<div class="min-w-0">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase block">{{ $hotel->privilege_label ?: 'Member Privilege' }}</span>
<span class="font-headline-sm text-headline-sm text-coral-vibrant block truncate">{{ $hotel->privilege_value }}</span>
</div>
@else
<span></span>
@endif
<a class="shrink-0 px-4 py-2 rounded-lg bg-deep-navy hover:bg-lagoon-blue text-surface-ice font-label-md text-label-md transition-colors shadow-sm" href="{{ $hasLink ? $hotel->view_url : route('hotels', ['q' => $hotel->name]) }}" @if($hasLink) target="_blank" rel="noopener" @endif>View Property</a>
</div>
</div>
</div>
</div>
@endforeach
</div>

@if(cms('home.hotels.button_label'))
<div class="flex justify-center">
<a href="{{ route('hotels') }}" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-deep-navy hover:bg-lagoon-blue text-surface-ice font-label-lg text-label-lg transition-colors shadow-sm">
<span>{{ cms('home.hotels.button_label') }}</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
@endif
</div>
</section>
@endif

{{-- ===== Destinations ===== --}}
@if(cms_on('home.destinations.show') && ($homeDestinations->isNotEmpty() || $otherDestinations->isNotEmpty()))
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl" id="destinations-section">
<div class="flex flex-col gap-space-lg">
<div class="flex flex-col gap-space-xs max-w-2xl">
@if(cms('home.destinations.eyebrow'))
<div class="flex items-center gap-space-xs">
<span class="w-8 h-0.5 bg-coral-vibrant"></span>
<span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">{{ cms('home.destinations.eyebrow') }}</span>
</div>
@endif
<h2 class="font-headline-lg text-headline-lg text-deep-navy tracking-tight">{{ cms('home.destinations.title') }}</h2>
@if(cms('home.destinations.text'))
<p class="font-body-md text-body-md text-on-surface-variant">{{ cms('home.destinations.text') }}</p>
@endif
</div>

@if($homeDestinations->isNotEmpty())
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-space-md">
@php $chipTints = ['bg-sunset-gold text-deep-navy', 'bg-surface-bright/90 text-deep-navy', 'bg-coral-vibrant text-on-primary']; @endphp
@foreach($homeDestinations as $dest)
@php
    [$dTitle, $dCaption] = $splitName($dest->name);
    $chip = $dest->tag ?: $dCaption;
    $isBig = $loop->first;
    $tall = $loop->index < 3 ? 'h-80' : 'h-72';
@endphp
<a href="{{ route('destinations') }}#destination-{{ $dest->id }}" class="{{ $isBig ? 'md:col-span-2 lg:col-span-2' : '' }} relative {{ $tall }} rounded-xl overflow-hidden group shadow-md block">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-700" role="img" aria-label="{{ $dTitle }}" style="background-image: url('{{ \App\Support\Media::url($dest->image_path) }}');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/40 to-transparent"></div>
@if($chip && $loop->index < 3)
<div class="absolute top-4 left-4">
<span class="px-3 py-1 rounded-full {{ $chipTints[$loop->index] }} font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ $chip }}</span>
</div>
@endif
<div class="absolute bottom-4 left-4 right-4 flex flex-col gap-1">
@if($chip && $loop->index >= 3)
<span class="font-label-sm text-label-sm text-sunset-gold uppercase font-bold tracking-wider">{{ $chip }}</span>
@endif
<h3 class="{{ $isBig ? 'font-headline-md text-headline-md' : 'font-headline-sm text-headline-sm' }} text-surface-bright">{{ $dTitle }}</h3>
@if($dest->description)
<p class="font-body-sm text-body-sm text-surface-ice/90 line-clamp-2">{{ $dest->description }}</p>
@endif
</div>
</a>
@endforeach
</div>
@endif

@if($otherDestinations->isNotEmpty())
<div class="bg-surface-container-low rounded-xl p-space-lg flex flex-col gap-space-md shadow-sm">
<div class="flex items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[22px]">explore</span>
<span class="font-headline-sm text-headline-sm text-deep-navy">{{ cms('home.destinations.cloud_title') }}</span>
</div>
@if(cms('home.destinations.cloud_badge'))
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-semibold">{{ cms('home.destinations.cloud_badge') }}</span>
@endif
</div>
<div class="flex flex-wrap gap-2 pt-space-xs">
@foreach($otherDestinations as $dest)
@php [$dTitle, $dCaption] = $splitName($dest->name); @endphp
<a href="{{ route('destinations') }}#destination-{{ $dest->id }}" class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface font-body-sm text-body-sm hover:text-coral-vibrant hover:bg-surface-ice transition-all shadow-xs"><strong>{{ $dTitle }}</strong>@if($dCaption) – {{ $dCaption }}@endif</a>
@endforeach
</div>
</div>
@endif
</div>
</section>
@endif

{{-- ===== Member stories ===== --}}
@if(cms_on('home.testimonials.show') && $homeTestimonials->isNotEmpty())
<section class="w-full bg-deep-navy text-surface-ice py-space-xl relative overflow-hidden">
<div class="absolute top-0 right-1/4 w-96 h-96 bg-lagoon-blue/20 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute bottom-0 left-10 w-80 h-80 bg-sunset-gold/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin relative z-10 flex flex-col gap-space-xl">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div class="flex flex-col gap-space-xs max-w-xl">
@if(cms('home.testimonials.eyebrow'))
<div class="flex items-center gap-space-xs text-sunset-gold">
<span class="material-symbols-outlined text-[20px]">recommend</span>
<span class="font-label-md text-label-md uppercase tracking-wider font-bold">{{ cms('home.testimonials.eyebrow') }}</span>
</div>
@endif
<h2 class="font-headline-lg text-headline-lg text-surface-bright tracking-tight">{{ cms('home.testimonials.title') }}</h2>
@if(cms('home.testimonials.text'))
<p class="font-body-md text-body-md text-surface-ice/80">{{ cms('home.testimonials.text') }}</p>
@endif
</div>
@if(cms_on('home.testimonials.show_rating'))
<div class="flex items-center gap-space-md bg-surface-ice/10 backdrop-blur-md p-space-md rounded-xl">
<div class="flex flex-col">
<div class="flex text-sunset-gold text-[18px]">
@for($i = 0; $i < 5; $i++)<span class="material-symbols-outlined fill-current">star</span>@endfor
</div>
<span class="font-headline-sm text-headline-sm text-surface-bright">{{ cms('home.testimonials.rating_value') }}</span>
</div>
<div class="h-10 w-px bg-surface-ice/20"></div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-sunset-gold font-bold">{{ cms('home.testimonials.rating_label') }}</span>
<span class="font-body-sm text-body-sm text-surface-ice/80">{{ cms('home.testimonials.rating_caption') }}</span>
</div>
</div>
@endif
</div>

@php
    $avatarTints = ['bg-sunset-gold text-deep-navy', 'bg-coral-vibrant text-on-primary', 'bg-tertiary-fixed-dim text-deep-navy', 'bg-surface-ice text-deep-navy'];
    $chipClasses = ['bg-lagoon-blue/40 text-tertiary-fixed', 'bg-coral-vibrant/30 text-surface-bright', 'bg-sunset-gold/30 text-surface-bright'];
@endphp
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
@foreach($homeTestimonials as $t)
<div class="bg-surface-container-lowest/10 backdrop-blur-md rounded-xl p-space-lg flex flex-col justify-between gap-space-md shadow-sm hover:bg-surface-container-lowest/15 transition-all">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between gap-2">
<div class="flex text-sunset-gold">
@for($i = 1; $i <= 5; $i++)<span class="material-symbols-outlined text-[18px] {{ $i <= ($t->rating ?: 5) ? 'fill-current' : 'opacity-30' }}">star</span>@endfor
</div>
@if($t->tag)
<span class="px-2 py-0.5 rounded {{ $chipClasses[$loop->index % 3] }} font-label-sm text-label-sm">{{ $t->tag }}</span>
@endif
</div>
<p class="font-body-sm text-body-sm text-surface-ice/90 leading-relaxed italic">“{{ $t->quote }}”</p>
</div>
<div class="flex items-center gap-space-sm pt-space-xs">
<div class="w-10 h-10 rounded-full {{ $avatarTints[$loop->index % 4] }} font-bold flex items-center justify-center font-label-md text-label-md shrink-0">{{ $initials($t->author) }}</div>
<div class="flex flex-col">
<span class="font-headline-sm text-body-lg text-surface-bright font-bold leading-tight">{{ $t->author }}</span>
@if($t->role)
<span class="font-label-sm text-label-sm text-sunset-gold">{{ $t->role }}</span>
@endif
</div>
</div>
</div>
@endforeach
</div>
</div>
</section>
@endif

{{-- ===== Membership banner ===== --}}
@if(cms_on('home.cta.show'))
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
<div class="bg-gradient-to-r from-deep-navy via-primary to-deep-navy rounded-2xl overflow-hidden shadow-2xl p-space-lg lg:p-space-xl relative">
<div class="absolute -right-20 -bottom-20 w-80 h-80 bg-sunset-gold/15 rounded-full blur-3xl pointer-events-none"></div>
<div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
<div class="lg:col-span-8 flex flex-col gap-space-sm text-surface-bright">
<div class="flex flex-wrap items-center gap-2">
@if(cms('home.cta.badge'))
<span class="px-3 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ cms('home.cta.badge') }}</span>
@endif
@if(cms('home.cta.subtitle'))
<span class="font-label-sm text-label-sm text-surface-ice/80">{{ cms('home.cta.subtitle') }}</span>
@endif
</div>
<h2 class="font-headline-lg text-headline-lg text-surface-bright">{{ cms('home.cta.title') }}</h2>
@if(cms('home.cta.text'))
<p class="font-body-md text-body-md text-surface-ice/90 max-w-2xl leading-relaxed">{{ cms('home.cta.text') }}</p>
@endif
@php $perks = cms_items('home', 'cta_perks'); @endphp
@if($perks->isNotEmpty())
<div class="grid grid-cols-2 sm:grid-cols-3 gap-space-sm pt-space-xs">
@foreach($perks as $perk)
<div class="flex items-center gap-2 text-surface-ice">
<span class="material-symbols-outlined text-sunset-gold text-[20px]">{{ $perk->icon ?? 'verified' }}</span>
<span class="font-body-sm text-body-sm">{{ $perk->text ?? '' }}</span>
</div>
@endforeach
</div>
@endif
</div>
<div class="lg:col-span-4 flex flex-col gap-space-sm items-start lg:items-end">
<div class="bg-surface-bright/10 backdrop-blur-xl p-space-md rounded-xl w-full flex flex-col gap-space-sm text-surface-bright">
@if(cms('home.cta.box_title'))
<span class="font-label-md text-label-md text-sunset-gold uppercase tracking-wider font-bold">{{ cms('home.cta.box_title') }}</span>
@endif
@if($phone)
<a href="tel:{{ preg_replace('/[^\d+]/', '', $phone) }}" class="flex items-center gap-space-xs font-body-sm text-body-sm text-surface-ice hover:text-sunset-gold transition-colors">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">call</span>
<span>{{ $phone }}</span>
</a>
@endif
@if($address)
<div class="flex items-start gap-space-xs font-body-sm text-body-sm text-surface-ice">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0">location_city</span>
<span>{{ $address }}</span>
</div>
@endif
@if(cms('home.cta.button_label'))
<a class="w-full mt-1 py-2.5 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg text-center transition-all shadow-md" href="{{ cms('home.cta.button_url', '/contact-us.html') }}">{{ cms('home.cta.button_label') }}</a>
@endif
</div>
</div>
</div>
</div>
</section>
@endif

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Smooth scroll for in-page anchors
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const id = link.getAttribute('href');
      const el = id && id !== '#' ? document.querySelector(id) : null;
      if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  // Hotel category pills filter the cards
  const bar = document.querySelector('[data-hotel-filters]');
  if (!bar) return;
  const on = ['bg-primary', 'text-on-primary', 'shadow-sm'];
  const off = ['bg-surface-container-lowest', 'text-on-surface', 'hover:bg-surface-container'];
  bar.querySelectorAll('button').forEach(btn => btn.addEventListener('click', () => {
    bar.querySelectorAll('button').forEach(b => { b.classList.remove(...on); b.classList.add(...off); });
    btn.classList.remove(...off); btn.classList.add(...on);
    const f = btn.dataset.filter;
    document.querySelectorAll('[data-hotel-card]').forEach(card => {
      card.style.display = (f === 'all' || card.dataset.cats.split(' ').includes(f)) ? '' : 'none';
    });
  }));
});
</script>
</div></main>
@include('partials.design-footer')
@endsection
