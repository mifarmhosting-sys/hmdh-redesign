@extends('layouts.site')

@section('title', 'Verticals & Member Benefits | ' . $settings->site_name . ' Dream Hospitality')
@section('meta_description', 'Exclusive verticals and privileges for Happy Miles members.')

@section('content')
@include('partials.page-hero', [
    'heroTitle' => 'Exclusive Verticals & Privileges',
    'crumb' => 'Verticals & Member Benefits',
    'heroEyebrow' => 'The Happy Miles Privilege Passport',
    'heroText' => 'Explore the curated lifestyle privileges that come with Happy Miles membership.',
])

<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
  <div class="flex flex-col gap-space-xs mb-space-lg">
    <div class="flex items-center gap-space-xs"><span class="w-8 h-0.5 bg-coral-vibrant"></span><span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">Our Holistic Ecosystem</span></div>
    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight">Member Benefits</h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-space-lg">
    @foreach($benefits as $b)
      @php $isFa = $b->icon_path && str_starts_with(trim($b->icon_path), 'fa'); @endphp
      <article class="bg-surface-container-lowest rounded-xl p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] flex flex-col gap-space-sm hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
        <span class="w-14 h-14 rounded-xl bg-surface-ice text-lagoon-blue flex items-center justify-center text-[24px]">
          @if($isFa)
            <i class="{{ $b->icon_path }}" aria-hidden="true"></i>
          @elseif($b->icon_path)
            <img src="{{ \App\Support\Media::url($b->icon_path) }}" alt="" class="w-8 h-8 object-contain">
          @else
            <span class="material-symbols-outlined">workspace_premium</span>
          @endif
        </span>
        <h3 class="font-headline-sm text-headline-sm text-deep-navy">{{ $b->title }}</h3>
        @if($b->description)<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $b->description }}</p>@endif
      </article>
    @endforeach
  </div>
</section>

<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pb-space-xl">
  <div class="bg-gradient-to-r from-deep-navy via-primary to-deep-navy rounded-2xl p-space-lg lg:p-space-xl text-surface-bright flex flex-col md:flex-row md:items-center justify-between gap-space-md">
    <div>
      <h2 class="font-headline-md text-headline-md">Ready to enjoy these privileges?</h2>
      <p class="font-body-md text-body-md text-surface-ice/80">Become a Happy Miles member today.</p>
    </div>
    <a href="{{ route('membership') }}" class="shrink-0 px-space-lg py-3 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg text-center transition-all">Explore Membership</a>
  </div>
</section>
@endsection
