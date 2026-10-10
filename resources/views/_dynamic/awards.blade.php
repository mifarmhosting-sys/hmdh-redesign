@extends('layouts.site')

@section('title', 'Awards & Accreditations | ' . $settings->site_name . ' Dream Hospitality')
@section('meta_description', 'Awards and recognition earned by Happy Miles Dream Hospitality.')

@section('content')
@include('partials.page-hero', [
    'heroTitle' => 'Our Achievements',
    'crumb' => 'Awards',
    'heroEyebrow' => 'Awards & Accreditations',
    'heroText' => 'Celebrating milestones, excellence, and unforgettable journeys across the globe.',
])

@php $visibleStats = $stats->reject(fn ($s) => strtolower(trim($s->label)) === 'awards won'); @endphp
@if($visibleStats->isNotEmpty())
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin -mt-10 relative z-20">
  <div class="bg-surface-container-lowest rounded-xl shadow-[0_8px_30px_rgba(11,30,46,0.12)] grid grid-cols-2 lg:grid-cols-4 divide-x divide-outline-variant/40">
    @foreach($visibleStats as $s)
      <div class="p-space-lg text-center">
        <span class="block font-headline-lg text-headline-lg text-coral-vibrant">{{ $s->value }}</span>
        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">{{ $s->label }}</span>
      </div>
    @endforeach
  </div>
</section>
@endif

<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-space-lg">
    @foreach($awards as $a)
      <article class="bg-surface-container-lowest rounded-xl p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] flex flex-col gap-space-sm hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
        <span class="w-14 h-14 rounded-full bg-deep-navy text-sunset-gold flex items-center justify-center text-[22px]"><i class="{{ $a->icon_class ?: 'fas fa-trophy' }}" aria-hidden="true"></i></span>
        <h3 class="font-headline-sm text-headline-sm text-deep-navy">{{ $a->title }}</h3>
        @if($a->description)<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $a->description }}</p>@endif
      </article>
    @endforeach
  </div>
</section>

<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pb-space-xl">
  <div class="bg-gradient-to-r from-deep-navy via-primary to-deep-navy rounded-2xl p-space-lg lg:p-space-xl text-surface-bright flex flex-col md:flex-row md:items-center justify-between gap-space-md">
    <div>
      <h2 class="font-headline-md text-headline-md">Be Part of Our Journey</h2>
      <p class="font-body-md text-body-md text-surface-ice/80">Experience award-winning travel like never before.</p>
    </div>
    <a href="{{ route('membership') }}" class="shrink-0 px-space-lg py-3 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg text-center transition-all">Explore Membership</a>
  </div>
</section>
@endsection
