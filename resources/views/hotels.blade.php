@extends('layouts.design')
@section('title', "Happy Miles Dream Hospitality")
@section('body_class', "bg-surface font-body-md text-on-surface antialiased")
@push('head')
@verbatim
<style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
@endverbatim
@endpush
@section('content')
@verbatim
@endverbatim
@include('partials.design-header', ['active' => 'properties'])
@verbatim
<main class="w-full pt-[116px] bg-surface min-h-[calc(100vh-420px)]"><div class="flex flex-col w-full">
<!-- Top Hero & Breadcrumb Banner (Full bleed under translucent header) -->
<section class="relative w-full -mt-28 pt-28 pb-16 lg:pb-24 bg-deep-navy overflow-hidden">
<!-- Atmospheric Ambient Overlays -->
<div class="absolute inset-0 bg-gradient-to-r from-deep-navy via-primary/80 to-tertiary-container mix-blend-multiply opacity-90 z-10"></div>
<div class="absolute inset-0 z-0 bg-cover bg-center opacity-40 scale-105 transition-transform duration-1000 ease-out" data-alt="Cinematic wide-angle panorama of luxury coastal and Himalayan resorts at golden dusk, showing warm illuminated infinity pools, tranquil ocean bays, and mountain silhouettes under evening sky in rich deep navy and warm sunset tones." style="background-image: url('/images/design/f3beaf5e74f4.jpg')">
</div>
<!-- Background Animated Geometry Flare -->
<div class="absolute -right-20 -top-20 w-96 h-96 rounded-full bg-sunset-gold/10 blur-3xl pointer-events-none z-10"></div>
<div class="absolute left-1/4 -bottom-32 w-[500px] h-[500px] rounded-full bg-lagoon-blue/30 blur-3xl pointer-events-none z-10"></div>
<div class="relative z-20 max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin pt-10">
<!-- Breadcrumb navigation -->
<nav aria-label="Breadcrumb" class="flex items-center gap-space-xs font-label-md text-label-md text-surface-container-high/80 mb-space-md">
<a class="hover:text-sunset-gold transition-colors flex items-center gap-1" data-path="home" href="/">
<span class="material-symbols-outlined text-[16px]">home</span>
<span>Home</span>
</a>
<span class="text-surface-variant/40">/</span>
<span class="text-sunset-gold font-medium">Our Affiliated Hotels &amp; Resorts</span>
</nav>
<!-- Editorial Title & Introduction -->
<div class="max-w-3xl flex flex-col gap-space-sm mb-space-xl">
<div class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-surface-container-highest/15 backdrop-blur-md w-fit">
<span class="w-2 h-2 rounded-full bg-sunset-gold animate-pulse"></span>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-sunset-gold">80+ Handcrafted Sanctuaries</span>
</div>
<h1 class="font-headline-xl text-headline-xl lg:text-[54px] lg:leading-[62px] text-surface-container-lowest font-bold tracking-tight">
          Handcrafted Luxury Stays <br class="hidden sm:inline">
<span class="text-transparent bg-clip-text bg-gradient-to-r from-sunset-gold via-secondary-container to-tertiary-fixed">
            &amp; Sanctuaries
          </span>
</h1>
<p class="font-body-lg text-body-lg text-surface-ice/90 leading-relaxed font-normal">
          Explore over 80+ curated retreat resorts and boutique sanctuaries across India, Nepal, and Bhutan offering exclusive member privileges, verified serenity, and personalized concierge care.
        </p>
</div>
<!-- Quick Interactive Glass Filter Bar (Floating Overlap Design) -->
<div class="w-full bg-surface-ice/95 backdrop-blur-2xl rounded-xl p-space-md lg:p-space-lg shadow-[0_16px_36px_-6px_rgba(11,30,46,0.28)]">
<form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-space-md items-end">
<!-- Destination Search Input -->
<div class="lg:col-span-4 flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1" for="search-input">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">search</span>
              Destination or Resort Name
            </label>
<div class="relative flex items-center">
<input class="w-full h-12 pl-4 pr-10 rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md placeholder:text-outline/70 focus:outline-none focus:ring-2 focus:ring-lagoon-blue transition-all" id="search-input" placeholder="Search Darjeeling, Goa, Udaipur, Gangtok..." type="text">
<span class="material-symbols-outlined absolute right-3 text-outline text-[20px] pointer-events-none">travel_explore</span>
</div>
</div>
<!-- Region / Country Selector -->
<div class="lg:col-span-2 flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1" for="region-select">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">public</span>
              Region / Country
            </label>
<div class="relative flex items-center">
<select class="w-full h-12 pl-4 pr-8 rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md appearance-none focus:outline-none focus:ring-2 focus:ring-lagoon-blue cursor-pointer" id="region-select">
<option value="all">All Territories (80+)</option>
<option selected="" value="india">India (70+ Res.)</option>
<option value="nepal">Nepal Gateway</option>
<option value="bhutan">Bhutan Kingdom</option>
</select>
<span class="material-symbols-outlined absolute right-3 text-outline text-[20px] pointer-events-none">expand_more</span>
</div>
</div>
<!-- Stay Theme Dropdown -->
<div class="lg:col-span-3 flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1" for="theme-select">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">local_activity</span>
              Stay Theme Experience
            </label>
<div class="relative flex items-center">
<select class="w-full h-12 pl-4 pr-8 rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md appearance-none focus:outline-none focus:ring-2 focus:ring-lagoon-blue cursor-pointer" id="theme-select">
<option value="all">All Experiences</option>
<option value="hill">Hill Retreats &amp; Tea Estates</option>
<option value="coastal">Beach &amp; Coastal Haven</option>
<option value="heritage">Heritage, Forts &amp; Palaces</option>
<option value="riverside">Riverside, Lakes &amp; Nature</option>
<option value="spiritual">Pilgrimage &amp; Spiritual</option>
<option value="jungle">Wildlife &amp; Jungle Safaris</option>
</select>
<span class="material-symbols-outlined absolute right-3 text-outline text-[20px] pointer-events-none">expand_more</span>
</div>
</div>
<!-- Member Tier Filter & Search CTA -->
<div class="lg:col-span-3 flex items-center gap-space-xs">
<div class="flex-1 flex flex-col gap-1.5">
<label class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold flex items-center gap-1" for="tier-select">
<span class="material-symbols-outlined text-[16px] text-sunset-gold">military_tech</span>
                Pass Tier
              </label>
<div class="relative flex items-center">
<select class="w-full h-12 pl-3 pr-7 rounded-lg bg-surface-container-lowest text-on-surface font-body-sm text-body-sm appearance-none focus:outline-none focus:ring-2 focus:ring-lagoon-blue cursor-pointer font-medium" id="tier-select">
<option value="all">All Pass Tiers</option>
<option selected="" value="included">Annual Pass (Zero Surcharge)</option>
<option value="signature">Signature Collection</option>
<option value="partner">Affiliated Partners</option>
</select>
<span class="material-symbols-outlined absolute right-2 text-outline text-[18px] pointer-events-none">expand_more</span>
</div>
</div>
<button class="h-12 px-6 rounded-lg bg-secondary text-on-secondary hover:bg-secondary-container hover:text-on-secondary-container transition-all flex items-center justify-center gap-2 font-label-lg text-label-lg shadow-md whitespace-nowrap active:scale-95" type="button">
<span class="material-symbols-outlined text-[20px]">filter_alt</span>
<span>Find Stays</span>
</button>
</div>
</form>
</div>
</div>
</section>
<!-- Region Quick Selector & Trust Stats Ribbon -->
<section class="w-full bg-surface-container-low py-space-md shadow-sm">
<div class="max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin flex flex-col lg:flex-row items-center justify-between gap-space-md">
<!-- Territory Pills -->
<div class="flex flex-wrap items-center gap-space-xs w-full lg:w-auto">
<button class="px-space-md py-space-xs rounded-full bg-primary text-on-primary font-label-md text-label-md flex items-center gap-space-xs shadow-sm transition-transform hover:scale-105">
<span class="material-symbols-outlined text-[16px] text-sunset-gold">flag</span>
<span>India Portfolio</span>
<span class="ml-1 px-2 py-0.5 rounded-full bg-surface-container-highest/20 text-sunset-gold text-[11px] font-bold">70+ Stays</span>
</button>
<button class="px-space-md py-space-xs rounded-full bg-surface-container-lowest text-primary hover:bg-surface-container font-label-md text-label-md flex items-center gap-space-xs shadow-sm transition-all">
<span>Nepal (Kathmandu • Pokhara • Chitwan)</span>
<span class="ml-1 px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant text-[11px]">6 Resorts</span>
</button>
<button class="px-space-md py-space-xs rounded-full bg-surface-container-lowest text-primary hover:bg-surface-container font-label-md text-label-md flex items-center gap-space-xs shadow-sm transition-all">
<span>Bhutan (Thimphu • Paro • Punakha)</span>
<span class="ml-1 px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant text-[11px]">4 Resorts</span>
</button>
</div>
<!-- Trust Badges Strip -->
<div class="flex flex-wrap items-center gap-space-md text-on-surface-variant font-body-sm text-body-sm">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-lagoon-blue text-[18px]">verified</span>
<span class="font-medium text-primary">100% Inspected &amp; Verified</span>
</div>
<span class="hidden md:inline text-outline-variant">•</span>
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">workspace_premium</span>
<span>Member Upgrades Guaranteed</span>
</div>
<span class="hidden md:inline text-outline-variant">•</span>
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">price_check</span>
<span>Zero Peak Season Surge</span>
</div>
</div>
</div>
</section>
<!-- Curated Travel Inspiration Themes (From Go Holiday Style Reference) -->
<section class="w-full py-12 bg-surface">
<div class="max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin">
<div class="text-center max-w-2xl mx-auto mb-10">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-lagoon-blue font-bold">Curated Holiday Themes</span>
<h2 class="font-headline-lg text-headline-lg text-primary font-bold mt-1">Every Journey Has Its Unique Calling</h2>
<!-- Ornamental wave flourish inspired by reference -->
<div class="flex items-center justify-center my-3 text-lagoon-blue">
<svg class="w-24 h-4 fill-none stroke-current stroke-2" viewBox="0 0 100 16">
<path d="M 0 8 Q 12.5 0, 25 8 T 50 8 T 75 8 T 100 8"></path>
</svg>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">Whether you desire mist-kissed hills, spiritual tranquility on holy rivers, or golden coastal tides, select your passion.</p>
</div>
<!-- Category Icon Cards Grid -->
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-space-sm">
<a class="flex flex-col items-center justify-center p-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-ice transition-all group shadow-sm text-center" href="#stays-grid">
<div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-lagoon-blue group-hover:scale-110 group-hover:bg-primary group-hover:text-surface-container-lowest transition-all mb-space-xs">
<span class="material-symbols-outlined text-[28px]">terrain</span>
</div>
<span class="font-label-lg text-label-lg text-primary font-bold">Hill Stations</span>
<span class="font-body-sm text-body-sm text-outline">32 Resorts</span>
</a>
<a class="flex flex-col items-center justify-center p-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-ice transition-all group shadow-sm text-center" href="#stays-grid">
<div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-lagoon-blue group-hover:scale-110 group-hover:bg-primary group-hover:text-surface-container-lowest transition-all mb-space-xs">
<span class="material-symbols-outlined text-[28px]">beach_access</span>
</div>
<span class="font-label-lg text-label-lg text-primary font-bold">Beach &amp; Sea</span>
<span class="font-body-sm text-body-sm text-outline">16 Resorts</span>
</a>
<a class="flex flex-col items-center justify-center p-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-ice transition-all group shadow-sm text-center" href="#stays-grid">
<div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-lagoon-blue group-hover:scale-110 group-hover:bg-primary group-hover:text-surface-container-lowest transition-all mb-space-xs">
<span class="material-symbols-outlined text-[28px]">fort</span>
</div>
<span class="font-label-lg text-label-lg text-primary font-bold">Royal Heritage</span>
<span class="font-body-sm text-body-sm text-outline">12 Palaces</span>
</a>
<a class="flex flex-col items-center justify-center p-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-ice transition-all group shadow-sm text-center" href="#stays-grid">
<div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-lagoon-blue group-hover:scale-110 group-hover:bg-primary group-hover:text-surface-container-lowest transition-all mb-space-xs">
<span class="material-symbols-outlined text-[28px]">self_improvement</span>
</div>
<span class="font-label-lg text-label-lg text-primary font-bold">Spiritual Ghats</span>
<span class="font-body-sm text-body-sm text-outline">10 Sanctuaries</span>
</a>
<a class="flex flex-col items-center justify-center p-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-ice transition-all group shadow-sm text-center" href="#stays-grid">
<div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-lagoon-blue group-hover:scale-110 group-hover:bg-primary group-hover:text-surface-container-lowest transition-all mb-space-xs">
<span class="material-symbols-outlined text-[28px]">forest</span>
</div>
<span class="font-label-lg text-label-lg text-primary font-bold">Wild Safaris</span>
<span class="font-body-sm text-body-sm text-outline">8 Lodges</span>
</a>
<a class="flex flex-col items-center justify-center p-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-ice transition-all group shadow-sm text-center" href="#stays-grid">
<div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-lagoon-blue group-hover:scale-110 group-hover:bg-primary group-hover:text-surface-container-lowest transition-all mb-space-xs">
<span class="material-symbols-outlined text-[28px]">flight_takeoff</span>
</div>
<span class="font-label-lg text-label-lg text-primary font-bold">International</span>
<span class="font-body-sm text-body-sm text-outline">Nepal &amp; Bhutan</span>
</a>
</div>
</div>
</section>
<!-- Featured Signature Stays Spotlight (Top Showcase Carousel/Grid like Go Holiday Top Resorts) -->
<section class="w-full py-14 bg-surface-container-low">
<div class="max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-10">
<div>
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm uppercase tracking-wider mb-2">
<span class="material-symbols-outlined text-[16px] text-coral-vibrant">auto_awesome</span>
<span>Handpicked Signature Spotlight</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-primary font-bold tracking-tight">Our Premier Flagship Retreats</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Prime destinations with guaranteed direct member allocations, heated pools, and VIP benefits.</p>
</div>
<div class="flex items-center gap-2">
<button class="w-11 h-11 rounded-full bg-surface-container-lowest text-primary shadow-sm flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-[22px]">chevron_left</span>
</button>
<button class="w-11 h-11 rounded-full bg-primary text-on-primary shadow-sm flex items-center justify-center hover:bg-lagoon-blue transition-colors">
<span class="material-symbols-outlined text-[22px]">chevron_right</span>
</button>
</div>
</div>
<!-- 5-Card Spotlight Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
<!-- Card 1: Rupasi Rupnarayan Kuthi -->
<article class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.16)] transition-all duration-300 group">
<div class="relative h-60 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-700 ease-out" data-alt="Luxurious riverbank eco-resort Rupasi Rupnarayan Kuthi with lush manicured garden lawns, outdoor gazebos, traditional terracotta roof architecture, tranquil river views at sunrise, warm lighting." style="background-image: url('/images/design/f944987edd7b.jpg')">
</div>
<!-- Star Tag & Privilege Badge -->
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span>4.9</span>
</span>
<span class="px-2.5 py-1 rounded-full bg-primary/90 text-surface-container-lowest font-label-sm text-label-sm tracking-wide uppercase">
                West Bengal
              </span>
</div>
<div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold shadow-sm">
              Included in Pass
            </div>
<div class="absolute bottom-3 left-3 right-3 flex items-center gap-2">
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Riverview Suites</span>
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Bengali Cuisine</span>
</div>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-outline font-body-sm text-body-sm mb-1">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">location_on</span>
<span>Kolaghat, West Bengal</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Rupasi Rupnarayan Kuthi
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Idyllic riverside retreat with sprawling lawns, boating pavilions, authentic heritage cuisine, and relaxing daytime weekend retreats.
              </p>
</div>
<div class="mt-space-md pt-space-sm border-t border-surface-container flex items-center justify-between">
<div>
<span class="block font-label-sm text-label-sm text-outline">Member Redemption</span>
<span class="font-label-lg text-label-lg font-bold text-coral-vibrant">0 Points Surcharge</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                  Details
                </button>
<button class="px-4 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-secondary-container hover:text-on-secondary-container transition-colors shadow-sm">
                  Book Stay
                </button>
</div>
</div>
</div>
</article>
<!-- Card 2: Hotel Camellia & Sea Retreat -->
<article class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.16)] transition-all duration-300 group">
<div class="relative h-60 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-700 ease-out" data-alt="Beachfront luxury resort in Puri Odisha Hotel Camellia with golden sand beach access, private swimming pool, palm trees, sun loungers, blue ocean waves at golden hour." style="background-image: url('/images/design/bfebcaaadd27.jpg')">
</div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span>4.8</span>
</span>
<span class="px-2.5 py-1 rounded-full bg-primary/90 text-surface-container-lowest font-label-sm text-label-sm tracking-wide uppercase">
                Odisha
              </span>
</div>
<div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold shadow-sm">
              Direct VIP Check-in
            </div>
<div class="absolute bottom-3 left-3 right-3 flex items-center gap-2">
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Direct Beach Walk</span>
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Temple Transfer</span>
</div>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-outline font-body-sm text-body-sm mb-1">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">location_on</span>
<span>Puri Coastal Strip, Odisha</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Hotel Camellia &amp; Sea Retreat
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Steps from Puri Golden Beach, personalized Jagannath Darshan VIP arrangement, beachside multicuisine deck and expansive family suites.
              </p>
</div>
<div class="mt-space-md pt-space-sm border-t border-surface-container flex items-center justify-between">
<div>
<span class="block font-label-sm text-label-sm text-outline">Member Privilege</span>
<span class="font-label-lg text-label-lg font-bold text-coral-vibrant">Ocean-View Upgrade</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                  Details
                </button>
<button class="px-4 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-secondary-container hover:text-on-secondary-container transition-colors shadow-sm">
                  Book Stay
                </button>
</div>
</div>
</div>
</article>
<!-- Card 3: Summit Calangute Resort & Spa -->
<article class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.16)] transition-all duration-300 group">
<div class="relative h-60 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-700 ease-out" data-alt="Modern luxury resort Summit Calangute Goa with turquoise swimming pool, cabanas, Portuguese styled balcao balconies, tropical coconut palms and evening fairy lights." style="background-image: url('/images/design/44253ba5fccd.jpg')">
</div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span>4.9</span>
</span>
<span class="px-2.5 py-1 rounded-full bg-primary/90 text-surface-container-lowest font-label-sm text-label-sm tracking-wide uppercase">
                Goa
              </span>
</div>
<div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold shadow-sm">
              Free Breakfast
            </div>
<div class="absolute bottom-3 left-3 right-3 flex items-center gap-2">
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">5 Min to Beach</span>
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Ayurvedic Spa</span>
</div>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-outline font-body-sm text-body-sm mb-1">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">location_on</span>
<span>Calangute, North Goa</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Summit Calangute Resort &amp; Spa
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                A perfect blend of warmth and Goan holiday vibe featuring an expansive swimming pool, world-class wellness therapy, and private dining.
              </p>
</div>
<div class="mt-space-md pt-space-sm border-t border-surface-container flex items-center justify-between">
<div>
<span class="block font-label-sm text-label-sm text-outline">Member Night Count</span>
<span class="font-label-lg text-label-lg font-bold text-coral-vibrant">1 Night = 1 Pass Unit</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                  Details
                </button>
<button class="px-4 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-secondary-container hover:text-on-secondary-container transition-colors shadow-sm">
                  Book Stay
                </button>
</div>
</div>
</div>
</article>
<!-- Card 4: Summit Barsana Resort & Spa (Kalimpong) -->
<article class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.16)] transition-all duration-300 group">
<div class="relative h-60 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-700 ease-out" data-alt="Himalayan mountainside retreat Summit Barsana Resort Kalimpong with panoramic valley views of Kanchenjunga, blooming flower gardens, wood-panelled luxury suites, serene misty atmosphere." style="background-image: url('/images/design/1608c3b7b81f.jpg')">
</div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span>4.8</span>
</span>
<span class="px-2.5 py-1 rounded-full bg-primary/90 text-surface-container-lowest font-label-sm text-label-sm tracking-wide uppercase">
                Kalimpong
              </span>
</div>
<div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-primary text-surface-container-lowest font-label-sm text-label-sm font-bold shadow-sm">
              Signature Collection
            </div>
<div class="absolute bottom-3 left-3 right-3 flex items-center gap-2">
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Himalayan Vistas</span>
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Herbal Spa</span>
</div>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-outline font-body-sm text-body-sm mb-1">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">location_on</span>
<span>Kalimpong, West Bengal</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Summit Barsana Resort &amp; Spa
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Nestled on tranquil mountain slopes offering uninterrupted panoramic Himalayan vistas, landscaped tea garden walks, and luxury spa treatments.
              </p>
</div>
<div class="mt-space-md pt-space-sm border-t border-surface-container flex items-center justify-between">
<div>
<span class="block font-label-sm text-label-sm text-outline">Exclusive Benefit</span>
<span class="font-label-lg text-label-lg font-bold text-coral-vibrant">Complimentary High Tea</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                  Details
                </button>
<button class="px-4 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-secondary-container hover:text-on-secondary-container transition-colors shadow-sm">
                  Book Stay
                </button>
</div>
</div>
</div>
</article>
<!-- Card 5: Summit By The Ganges Beach Resort (Rishikesh) -->
<article class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.16)] transition-all duration-300 group">
<div class="relative h-60 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-700 ease-out" data-alt="Scenic riverfront resort along the holy Ganges river Summit By The Ganges Rishikesh with white sand beach, lush Himalayan foothills backdrop, yoga meditation deck, evening Ganga Aarti setting." style="background-image: url('/images/design/16ed884eea5f.jpg')">
</div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span>4.9</span>
</span>
<span class="px-2.5 py-1 rounded-full bg-primary/90 text-surface-container-lowest font-label-sm text-label-sm tracking-wide uppercase">
                Rishikesh
              </span>
</div>
<div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold shadow-sm">
              Spiritual Haven
            </div>
<div class="absolute bottom-3 left-3 right-3 flex items-center gap-2">
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Holy Ganges Deck</span>
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Daily Yoga</span>
</div>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-outline font-body-sm text-body-sm mb-1">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">location_on</span>
<span>Shivpuri, Rishikesh</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Summit By The Ganges Beach Resort &amp; Spa
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Situated right beside the holy river Ganges, featuring private riverbed walk paths, yoga pavilions, riverside candlelight dining, and holistic spas.
              </p>
</div>
<div class="mt-space-md pt-space-sm border-t border-surface-container flex items-center justify-between">
<div>
<span class="block font-label-sm text-label-sm text-outline">Member Privilege</span>
<span class="font-label-lg text-label-lg font-bold text-coral-vibrant">River Aarti Excursion</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                  Details
                </button>
<button class="px-4 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-secondary-container hover:text-on-secondary-container transition-colors shadow-sm">
                  Book Stay
                </button>
</div>
</div>
</div>
</article>
<!-- Card 6: Central Heritage Resort & Spa (Darjeeling ITC Legacy) -->
<article class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.16)] transition-all duration-300 group">
<div class="relative h-60 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-700 ease-out" data-alt="British colonial heritage architecture hotel Central Heritage Resort Darjeeling with wooden gables, lush British gardens, mountain view suites overlooking Mount Kanchenjunga, vintage fireplace interiors." style="background-image: url('/images/design/5503f43367b6.jpg')">
</div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span>4.9</span>
</span>
<span class="px-2.5 py-1 rounded-full bg-primary/90 text-surface-container-lowest font-label-sm text-label-sm tracking-wide uppercase">
                Darjeeling
              </span>
</div>
<div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold shadow-sm">
              Heritage Landmark
            </div>
<div class="absolute bottom-3 left-3 right-3 flex items-center gap-2">
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Mall Road Vicinity</span>
<span class="px-2 py-0.5 rounded bg-surface-ice/90 backdrop-blur-md text-primary font-label-sm text-label-sm">Heated Fireplaces</span>
</div>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-outline font-body-sm text-body-sm mb-1">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">location_on</span>
<span>The Mall, Darjeeling</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Central Heritage Resort &amp; Spa
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Formerly Fortune ITC Resort. Timeless colonial architecture, British era charm, fireplaces in suites, and iconic views of Mount Kanchenjunga.
              </p>
</div>
<div class="mt-space-md pt-space-sm border-t border-surface-container flex items-center justify-between">
<div>
<span class="block font-label-sm text-label-sm text-outline">Member Value</span>
<span class="font-label-lg text-label-lg font-bold text-coral-vibrant">Heritage Suite Access</span>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
                  Details
                </button>
<button class="px-4 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md hover:bg-secondary-container hover:text-on-secondary-container transition-colors shadow-sm">
                  Book Stay
                </button>
</div>
</div>
</div>
</article>
</div>
</div>
</section>
<!-- Complete Curated Hotel Collections Grid (From DOCUMENT_26 Data) -->
<section class="w-full py-16 bg-surface" id="stays-grid">
<div class="max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin">
<!-- Section Heading with Filter Counters -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md pb-space-lg mb-space-lg border-b border-surface-container">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-lagoon-blue font-bold">Comprehensive Directory</span>
<h2 class="font-headline-lg text-headline-lg text-primary font-bold">Affiliated Hotel Portfolio in India</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Showing active curated partner properties available for Happy Miles Dream members.</p>
</div>
<!-- Filter tabs for quick sorting -->
<div class="flex items-center gap-1.5 p-1 bg-surface-container rounded-lg self-start md:self-auto overflow-x-auto max-w-full">
<button class="px-3 py-1.5 rounded-md bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm font-bold">All (70+)</button>
<button class="px-3 py-1.5 rounded-md text-on-surface-variant hover:text-primary font-label-md text-label-md transition-colors">North &amp; Hills</button>
<button class="px-3 py-1.5 rounded-md text-on-surface-variant hover:text-primary font-label-md text-label-md transition-colors">Sikkim &amp; Northeast</button>
<button class="px-3 py-1.5 rounded-md text-on-surface-variant hover:text-primary font-label-md text-label-md transition-colors">Rajasthan Heritage</button>
<button class="px-3 py-1.5 rounded-md text-on-surface-variant hover:text-primary font-label-md text-label-md transition-colors">Coastal &amp; South</button>
</div>
</div>
<!-- 12-Card Responsive Grid with Authentic Properties from DOCUMENT_26 -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-space-md">
<!-- Property 1: Hotel Nirvana Grand (Jodhpur) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Grand royal sand-stone palace facade of Hotel Nirvana Grand in Jodhpur Rajasthan near Mehrangarh Fort under clear blue desert sky, intricately carved jharokha balconies." style="background-image: url('/images/design/56795d284590.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.8 • Jodhpur
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold">
              Heritage Partner
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Hotel Nirvana Grand
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Warm royal hospitality near Mehrangarh Fort and Umaid Bhawan Palace, authentic Marwari dining, and elegant courtyards.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Fort View Deck</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Free Wi-Fi</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Exclusive Rate</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 2: La Nicholas Dei Da Kine Resort (Shillong) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Scenic eco lake-resort La Nicholas Dei Da Kine Resort overlooking peaceful turquoise Umiam Lake in Shillong Meghalaya with pine trees and rolling green hills." style="background-image: url('/images/design/8d8d1591b222.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.8 • Shillong
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
              Lake View
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                La Nicholas Dei Da Kine
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                4-star resort overlooking tranquil waters of Umiam Lake by Summit Hotels. Hilltop pine vistas with luxury hospitality.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Umiam Waters</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Bonfire Lawn</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 3: Le Coxy Resort (Lachung, Sikkim) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Snow-covered alpine mountain valley with Le Coxy Resort Lachung North Sikkim wooden resort facade, prayer flags, snowcapped peaks and crisp alpine sky." style="background-image: url('/images/design/09e7bd6a6865.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.7 • Lachung
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold">
              Yumthang Base
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Le Coxy Resort Lachung
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Fakha Chowk in North Sikkim. Easy access base to Yumthang Valley of Flowers, Zero Point, and Mt. Katao with heated rooms.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Snow Peak View</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Heated Beds</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 4: Summit Swiss Heritage Resort & Spa (Darjeeling) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Alpine Swiss chalet styled boutique hotel Summit Swiss Heritage Resort in Darjeeling surrounded by tall pine trees, blooming rhododendrons and mountain mist." style="background-image: url('/images/design/40e0d24c6a77.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.8 • Darjeeling
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
              Chalet Style
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Summit Swiss Heritage
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Charming Swiss-chalet architectural design located on Gandhi Road, offering wooden suites, spa therapies, and fireplace salons.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Spa &amp; Wellness</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Tea Lounge</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Breakfast Free</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 5: Perfectstayz Premium Udaipur By The Lake -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Lake Pichola waterfront resort in Udaipur with illuminated marble balconies, shimmering waters, reflections of City Palace, sunset rooftop restaurant." style="background-image: url('/images/design/afe8627a4e9b.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.8 • Udaipur
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold">
              Lakefront
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Perfectstayz Udaipur Lake
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Scenic stays next to Lake Pichola with stunning rooftop restaurant, boat ride assistance, and traditional Rajasthani live music.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Rooftop Dining</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Pool Access</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 6: Summit Norbu Ghang - The Signature Collection (Pelling) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Traditional Sikkimese luxury cottages Summit Norbu Ghang in Pelling West Sikkim overlooking dramatic Kanchenjunga snow range at morning dawn, authentic woodwork." style="background-image: url('/images/design/927f62f8116b.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.9 • Pelling
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-primary text-surface-container-lowest font-label-sm text-label-sm font-bold">
              Signature
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Summit Norbu Ghang
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                The Signature Collection in West Sikkim. Unrivaled front-row morning panoramas of Kanchenjunga with private mountain cottages.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Direct Peak View</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Bonfire</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Member Rate</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 7: The Soma Hotel (Darjeeling) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Modern cozy boutique hotel room interior with large picture window framing mountain valley views of Darjeeling town, contemporary wooden furniture and warm textiles." style="background-image: url('/images/design/050c0576324a.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.7 • Darjeeling
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
              Mall Road
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                The Soma Hotel
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Modern boutique stay located 2 minutes from Mall Road. Multi-cuisine restaurant and select rooms with Kanchenjunga vistas.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Central Location</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Heated Rooms</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 8: Woodberry Hotel & Spa (Gangtok) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Luxury hill retreat Woodberry Hotel and Spa in Gangtok Sikkim with warm amber glow, stylish modern lobby and mountain valley view balcony during twilight." style="background-image: url('/images/design/93576b3dccf1.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.8 • Gangtok
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold">
              Spa &amp; Stay
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Woodberry Hotel &amp; Spa
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Elegance and Sikkimese warmth in Gangtok. Rejuvenating spa treatment suites, scenic terrace lounge, and private vehicle desk.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Ayurvedic Spa</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Fine Dining</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 9: Hotel Priority (Guwahati) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Contemporary city hotel exterior Hotel Priority in Guwahati Assam with clean illuminated glass facade, modern entryway and close transit access." style="background-image: url('/images/design/3fabf87b4366.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.6 • Guwahati
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
              Spiritual Gateway
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Hotel Priority Guwahati
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Comfortable hub with direct access to Maa Kamakhya Temple, Brahmaputra riverfront cruises, and Guwahati railway transit.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Kamakhya Proximity</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Free Parking</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 10: Perfectstayz Westend Mall Road (Mussoorie) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Charming colonial hill hotel perched on Mussoorie Mall Road ridge overlooking Doon Valley night lights, rustic timber balustrades and starry night sky." style="background-image: url('/images/design/d00281474ad8.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.7 • Mussoorie
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold">
              Mall Road
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Perfectstayz Westend
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Heart of Mall Road Mussoorie. Mesmerizing Doon Valley vistas, heated rooms, cozy alpine library, and walking distance to ropeways.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Valley View</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Rooftop Cafe</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 11: Perfectstayz Premium Varanasi (Temple & Ghats) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Traditional luxury boutique retreat in holy city of Varanasi near sacred Ganga ghats, glowing brass lamps, marigold flower decor and serene inner courtyard." style="background-image: url('/images/design/abb797a448f0.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.8 • Varanasi
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">
              Spiritual
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Perfectstayz Varanasi
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Boutique comforts close to Kashi Vishwanath corridor and Dashashwamedh Ghat. Daily morning boat assistance and vegetarian kitchen.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Ghat Shuttles</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Satvik Dining</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
<!-- Property 12: Summit Tashi Ghang Heritage Resort (Sikkim) -->
<div class="flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all group">
<div class="relative h-48 w-full overflow-hidden">
<div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Traditional Sikkimese monastery inspired heritage resort Summit Tashi Ghang Sikkim with carved wooden dragons, colorful murals, apple orchards and mountain view." style="background-image: url('/images/design/f19cfe285dc0.jpg')">
</div>
<span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-full bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">star</span>4.8 • Sikkim
            </span>
<span class="absolute top-2.5 right-2.5 px-2 py-0.5 rounded-full bg-sunset-gold text-deep-navy font-label-sm text-label-sm font-bold">
              Heritage Stay
            </span>
</div>
<div class="p-space-md flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold group-hover:text-lagoon-blue transition-colors">
                Summit Tashi Ghang
              </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mt-1">
                Authentic cultural immersion nestled in scenic Yuksom/Pelling, organic apple orchards, traditional wood-heated stone baths.
              </p>
<div class="flex flex-wrap gap-1 mt-2">
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Stone Bath</span>
<span class="px-2 py-0.5 rounded bg-surface-ice text-lagoon-blue text-[11px] font-medium">Organic Garden</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
<span class="text-secondary font-label-md text-label-md font-bold">Pass Valid</span>
<button class="px-3 py-1 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:bg-secondary-container hover:text-on-secondary-container transition-colors">
                View Hotel
              </button>
</div>
</div>
</div>
</div>
<!-- Load More / Check Full Resort Catalog CTA Strip -->
<div class="mt-space-xl flex flex-col items-center justify-center gap-3">
<p class="font-body-sm text-body-sm text-outline">Viewing 12 of 80+ Affiliated Luxury Properties Across India &amp; Himalayan Belt</p>
<button class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-secondary text-on-secondary font-label-lg text-label-lg hover:bg-secondary-container hover:text-on-secondary-container shadow-md transition-all">
<span>Check Complete 80+ Resort Catalog</span>
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
</div>
</section>
<!-- Himalayan & International Gateways Section (Nepal, Bhutan & Dubai Reference) -->
<section class="w-full py-16 bg-surface-container-low">
<div class="max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin">
<div class="max-w-2xl mb-12">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-lagoon-blue font-bold">Himalayan &amp; International Gateways</span>
<h2 class="font-headline-lg text-headline-lg text-primary font-bold mt-1">Cross-Border Sanctuaries &amp; Sister Properties</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Your Happy Miles Dream membership travels with you beyond borders to the Kingdom of Bhutan, the peaks of Nepal, and select international luxury gateways.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
<!-- International 1: RKPO Green Resort (Punakha, Bhutan) -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div>
<div class="h-44 w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Traditional Bhutanese architecture of RKPO Green Resort in Punakha Bhutan with ornate hand-painted wooden cornices, valley view of rice terraces, pure Himalayan sky." style="background-image: url('/images/design/fe7fd1dd68a4.jpg')">
</div>
<div class="p-space-md">
<span class="px-2 py-0.5 rounded-full bg-surface-ice text-primary font-label-sm text-label-sm font-bold">Bhutan Kingdom</span>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold mt-2">RKPO Green Resort</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 line-clamp-2">Authentic traditional Bhutanese lodge nestled in picturesque Punakha valley with peaceful organic gardens.</p>
</div>
</div>
<div class="p-space-md pt-0">
<span class="text-coral-vibrant font-label-md text-label-md font-bold block mb-2">Member Special Access</span>
<button class="w-full py-2 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
              Explore Punakha Stay
            </button>
</div>
</div>
<!-- International 2: Rema Resort (Paro, Bhutan) -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div>
<div class="h-44 w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Rema Resort in Paro valley Bhutan overlooking Tiger's Nest cliff monastery in the distance, pine scented hills, Bhutanese stone masonry and prayer wheels." style="background-image: url('/images/design/c5a7fd22de4e.jpg')">
</div>
<div class="p-space-md">
<span class="px-2 py-0.5 rounded-full bg-surface-ice text-primary font-label-sm text-label-sm font-bold">Paro, Bhutan</span>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold mt-2">Rema Resort Paro</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 line-clamp-2">Perched on tranquil hilltop overlooking Paro Dzong and scenic river, ideal launchpad for Tiger’s Nest trek.</p>
</div>
</div>
<div class="p-space-md pt-0">
<span class="text-coral-vibrant font-label-md text-label-md font-bold block mb-2">Member Special Access</span>
<button class="w-full py-2 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
              Explore Paro Stay
            </button>
</div>
</div>
<!-- International 3: Kathmandu Gateway (Nepal) -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div>
<div class="h-44 w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Boutique hotel in Thamel Kathmandu Nepal with rooftop garden terrace, traditional Newari wood craftsmanship and snow-capped Himalayan horizon view." style="background-image: url('/images/design/29ce139be5d3.jpg')">
</div>
<div class="p-space-md">
<span class="px-2 py-0.5 rounded-full bg-surface-ice text-primary font-label-sm text-label-sm font-bold">Kathmandu, Nepal</span>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold mt-2">Kathmandu Suite Home</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 line-clamp-2">Peaceful sanctuary near Thamel with rooftop sunrise views, curated Everest helicopter tours, and private airport car service.</p>
</div>
</div>
<div class="p-space-md pt-0">
<span class="text-coral-vibrant font-label-md text-label-md font-bold block mb-2">Nepal Member Exchange</span>
<button class="w-full py-2 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
              Explore Kathmandu
            </button>
</div>
</div>
<!-- International 4: Marco Polo Partner (Dubai Gateway) -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div>
<div class="h-44 w-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="Modern metropolitan luxury hotel Marco Polo Hotel Dubai facade with green glass reflection, palm trees, grand hotel entrance in Deira Dubai under warm sun." style="background-image: url('/images/design/e7da8bbf85f0.jpg')">
</div>
<div class="p-space-md">
<span class="px-2 py-0.5 rounded-full bg-surface-ice text-primary font-label-sm text-label-sm font-bold">Dubai, UAE Partner</span>
<h4 class="font-headline-sm text-[18px] leading-[24px] text-primary font-bold mt-2">Marco Polo Hotel Dubai</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 line-clamp-2">Affiliated global exchange gateway featuring premier city shopping proximity, international fine dining, and desert safari concierge.</p>
</div>
</div>
<div class="p-space-md pt-0">
<span class="text-sunset-gold font-label-md text-label-md font-bold block mb-2">Global Exchange Tier</span>
<button class="w-full py-2 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors">
              Explore Dubai Stay
            </button>
</div>
</div>
</div>
</div>
</section>
<!-- Interactive Map & Region Distribution Data Visualizer -->
<section class="w-full py-16 bg-surface">
<div class="max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin">
<div class="bg-surface-container-lowest rounded-2xl p-space-lg lg:p-space-xl shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
<!-- Left Stats & Distribution -->
<div class="lg:col-span-5 flex flex-col gap-space-md">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Pan-Himalaya &amp; Coastal Network</span>
<h3 class="font-headline-lg text-headline-lg text-primary font-bold leading-tight">
            Strategic Presence Across Every Major Leisure Corridor
          </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
            From misty tea valleys in Darjeeling and North Sikkim’s snow peaks to the sunny sands of Goa and sacred ghats along the Ganges, our resort network guarantees certified quality and priority reservations.
          </p>
<!-- SVG Progress and Regional Metrics -->
<div class="flex flex-col gap-space-sm pt-2">
<div>
<div class="flex justify-between font-label-md text-label-md text-primary font-bold mb-1">
<span>Himalayan &amp; Eastern Hill Circuits (Sikkim, Darjeeling, Shillong)</span>
<span>45% Network</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full bg-lagoon-blue rounded-full" style="width: 45%;"></div>
</div>
</div>
<div>
<div class="flex justify-between font-label-md text-label-md text-primary font-bold mb-1">
<span>Coastal &amp; Seaside Getaways (Puri, Digha, Mandarmani, Goa)</span>
<span>28% Network</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full bg-sunset-gold rounded-full" style="width: 28%;"></div>
</div>
</div>
<div>
<div class="flex justify-between font-label-md text-label-md text-primary font-bold mb-1">
<span>Heritage, Wildlife &amp; Spiritual (Rajasthan, Varanasi, Rishikesh)</span>
<span>27% Network</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full bg-coral-vibrant rounded-full" style="width: 27%;"></div>
</div>
</div>
</div>
<div class="flex items-center gap-4 pt-2">
<div class="flex flex-col">
<span class="font-headline-md text-headline-md font-bold text-primary">80+</span>
<span class="font-body-sm text-body-sm text-outline">Verified Hotels</span>
</div>
<div class="h-8 w-px bg-surface-container"></div>
<div class="flex flex-col">
<span class="font-headline-md text-headline-md font-bold text-sunset-gold">100%</span>
<span class="font-body-sm text-body-sm text-outline">Pre-Audited Quality</span>
</div>
<div class="h-8 w-px bg-surface-container"></div>
<div class="flex flex-col">
<span class="font-headline-md text-headline-md font-bold text-secondary">24/7</span>
<span class="font-body-sm text-body-sm text-outline">Care Concierge</span>
</div>
</div>
</div>
<!-- Right Dynamic Map View Container -->
<div class="lg:col-span-7 h-96 lg:h-[460px] rounded-xl overflow-hidden shadow-inner relative">
<div class="w-full h-full bg-cover bg-center rounded-xl" data-location="Kolkata, India" style="background-image: url('/images/design/f8198fe3854a.png')">
<!-- Simulated Map Overlay Over Eastern India / Himalayan Circuit -->
<div class="absolute inset-0 bg-primary/20 backdrop-blur-[1px] pointer-events-none"></div>
<div class="absolute top-4 left-4 bg-deep-navy/90 text-on-primary p-3 rounded-lg backdrop-blur-md shadow-md max-w-xs">
<div class="flex items-center gap-1.5 font-label-sm text-label-sm text-sunset-gold uppercase font-bold mb-1">
<span class="w-2 h-2 rounded-full bg-sunset-gold animate-ping"></span>
<span>Active Operating Hubs</span>
</div>
<p class="font-body-sm text-body-sm text-surface-ice">
                Kolkata HQ coordinating instant member voucher confirmations across 18 major travel corridors.
              </p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Member Booking Guarantee & Concierge Callout (Like Go Holiday Callout Banner) -->
<section class="w-full py-16 bg-gradient-to-br from-primary via-deep-navy to-tertiary text-on-primary relative overflow-hidden">
<!-- Ambient glowing accents -->
<div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-sunset-gold/15 blur-3xl pointer-events-none"></div>
<div class="absolute left-10 top-0 w-64 h-64 rounded-full bg-lagoon-blue/30 blur-2xl pointer-events-none"></div>
<div class="relative z-10 max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin">
<div class="flex flex-col lg:flex-row items-center justify-between gap-space-xl bg-surface-container-highest/10 backdrop-blur-xl p-space-lg lg:p-space-xl rounded-2xl border border-surface-container-high/20">
<div class="flex flex-col gap-space-sm max-w-2xl">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sunset-gold/20 text-sunset-gold font-label-sm text-label-sm uppercase tracking-wider w-fit">
<span class="material-symbols-outlined text-[16px]">support_agent</span>
<span>Dedicated Vacation Desk</span>
</div>
<h3 class="font-headline-lg text-headline-lg font-bold text-surface-container-lowest">
            Can’t Find Your Ideal Resort or Need Customized Group Itineraries?
          </h3>
<p class="font-body-md text-body-md text-surface-ice/85 leading-relaxed">
            Our Senior Travel Specialists assist with custom dates, room allocations for large family gatherings, special anniversary setups, and member pass redemption. Zero automated chatbots — speak directly to real holiday curators.
          </p>
<div class="flex flex-wrap items-center gap-space-md pt-2">
<div class="flex items-center gap-2 text-surface-container-high">
<span class="material-symbols-outlined text-sunset-gold text-[20px]">call</span>
<span class="font-label-lg text-label-lg font-bold">1800 2033 188</span>
<span class="text-surface-variant/40">/</span>
<span class="font-label-lg text-label-lg font-bold">1800-309-8800</span>
</div>
<div class="flex items-center gap-2 text-surface-container-high">
<span class="material-symbols-outlined text-sunset-gold text-[20px]">mail</span>
<span class="font-label-md text-label-md">care@happymileshospitality.com</span>
</div>
</div>
</div>
<div class="flex flex-col sm:flex-row lg:flex-col gap-space-sm w-full lg:w-auto shrink-0">
<a class="inline-flex items-center justify-center gap-2 px-space-xl py-3 rounded-full bg-secondary text-on-secondary font-label-lg text-label-lg hover:bg-secondary-container hover:text-on-secondary-container transition-all shadow-lg active:scale-95 text-center" href="https://wa.me/" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>WhatsApp Concierge Now</span>
</a>
<a class="inline-flex items-center justify-center gap-2 px-space-xl py-3 rounded-full bg-surface-container-lowest text-primary font-label-lg text-label-lg hover:bg-surface-ice transition-colors shadow-sm text-center" data-path="membership-portal" href="/member/login">
<span class="material-symbols-outlined text-[20px]">lock_open</span>
<span>Member Portal Login</span>
</a>
</div>
</div>
</div>
</section>
<!-- Interactive JavaScript for Live Filter Feedback -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const searchInput = document.getElementById('search-input');
      const regionSelect = document.getElementById('region-select');
      const hotelCards = document.querySelectorAll('#stays-grid article, #stays-grid .group');

      function filterHotels() {
        const query = (searchInput ? searchInput.value : '').toLowerCase().trim();
        const selectedRegion = regionSelect ? regionSelect.value : 'all';

        hotelCards.forEach(card => {
          const textContent = card.innerText.toLowerCase();
          const matchesQuery = !query || textContent.includes(query);
          
          let matchesRegion = true;
          if (selectedRegion === 'india') {
            matchesRegion = textContent.includes('india') || textContent.includes('darjeeling') || textContent.includes('sikkim') || textContent.includes('kolaghat') || textContent.includes('puri') || textContent.includes('goa') || textContent.includes('jodhpur') || textContent.includes('udaipur') || textContent.includes('shillong') || textContent.includes('rishikesh') || textContent.includes('gangtok');
          } else if (selectedRegion === 'nepal') {
            matchesRegion = textContent.includes('nepal') || textContent.includes('kathmandu');
          } else if (selectedRegion === 'bhutan') {
            matchesRegion = textContent.includes('bhutan') || textContent.includes('paro') || textContent.includes('punakha');
          }

          if (matchesQuery && matchesRegion) {
            card.style.display = '';
          } else {
            card.style.display = 'none';
          }
        });
      }

      if (searchInput) {
        searchInput.addEventListener('input', filterHotels);
      }
      if (regionSelect) {
        regionSelect.addEventListener('change', filterHotels);
      }
    });
  </script>
</div></main><footer class="w-full bg-deep-navy text-on-primary"><div class="max-w-[1280px] mx-auto px-gutter-mobile lg:px-margin pt-space-xl pb-space-lg"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-xl pb-space-xl shadow-[0_1px_8px_rgba(255,255,255,0.03)]"><div class="flex flex-col gap-space-md"><div class="flex items-center gap-space-sm"><div class="w-8 h-8 rounded-full bg-lagoon-blue flex items-center justify-center text-sunset-gold"><span class="material-symbols-outlined text-[18px]">hotel_class</span></div><span class="font-headline-sm text-headline-sm font-bold text-surface-container-lowest">Happy Miles Dream</span></div><p class="font-body-sm text-body-sm text-surface-variant opacity-80 leading-relaxed">Redefining leisure and bespoke hospitality with tranquil seaside resorts, premier luxury vacation ownership, and experiential stays across India and international gateways.</p><div class="flex flex-col gap-space-xs font-body-sm text-body-sm text-surface-variant"><div class="flex items-start gap-space-xs"><span class="material-symbols-outlined text-sunset-gold text-[18px] mt-0.5">apartment</span><span><strong>Registered Office:</strong> AVS House, 42/1A Gurupada Halder Road, Kolkata - 700026, West Bengal, India</span></div><div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-sunset-gold text-[18px]">call</span><span>1800 2033 188 / 1800-309-8800</span></div><div class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-sunset-gold text-[18px]">mail</span><span>care@happymileshospitality.com</span></div></div></div><div class="flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg tracking-wider uppercase text-sunset-gold">Hotels &amp; Resorts</h4><ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-surface-variant"><li><a class="hover:text-surface-container-lowest transition-colors" data-path="properties" href="/our-hotels.html">Coastal Bliss Resort, Puri</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="properties" href="/our-hotels.html">The Azure Bay, Mandarmani</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="properties" href="/our-hotels.html">Royal Horizon Retreat, Darjeeling</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="properties" href="/our-hotels.html">Pine Mist Haven, Gangtok</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="properties" href="/our-hotels.html">Lagoon Serenity, Digha</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="verticals" href="/benefits.html">Upcoming Eco Estates</a></li></ul></div><div class="flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg tracking-wider uppercase text-sunset-gold">Destinations &amp; Privileges</h4><ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-surface-variant"><li><a class="hover:text-surface-container-lowest transition-colors" data-path="destinations" href="/destinations.html">Bengal Coastline</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="destinations" href="/destinations.html">Himalayan Escapes</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="destinations" href="/destinations.html">Heritage Rajasthan</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="membership" href="/membership">Club Vacation Membership</a></li><li><a class="hover:text-surface-container-lowest transition-colors" data-path="awards" href="/awards.html">Accreditations &amp; Awards</a></li></ul></div><div class="flex flex-col gap-space-md"><h4 class="font-label-lg text-label-lg tracking-wider uppercase text-sunset-gold">Support &amp; Assurances</h4><p class="font-body-sm text-body-sm text-surface-variant opacity-80 leading-relaxed">Connect directly with our 24/7 dedicated holiday concierge for seamless reservations, customized dining, and membership assistance.</p><div class="flex flex-col gap-space-sm"><a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-surface-container-lowest text-primary font-label-lg text-label-lg hover:bg-surface-ice transition-colors" href="https://wa.me/" rel="noopener" target="_blank"><span class="material-symbols-outlined text-coral-vibrant text-[18px]">chat</span><span>WhatsApp Concierge</span></a><a class="inline-flex items-center gap-space-xs font-body-sm text-body-sm text-sunset-gold hover:underline" data-path="connect-us" href="/contact-us.html"><span class="material-symbols-outlined text-[16px]">support_agent</span>Contact Guest Relations</a></div><div class="flex flex-col gap-space-xs pt-space-xs font-body-sm text-body-sm text-surface-variant opacity-70"><span>Toll Free Service Desk: Open 9:00 AM - 8:00 PM</span><span>Direct Escalate: care@happymileshospitality.com</span></div></div></div><div class="pt-space-lg flex flex-col md:flex-row items-center justify-between gap-space-md font-body-sm text-body-sm text-surface-variant opacity-70"><p>© 2025 The Happy Miles Dream Hospitality Ltd. All rights reserved.</p><div class="flex flex-wrap items-center gap-space-md"><span>Registered at Kolkata, West Bengal</span><span class="text-surface-variant opacity-40">|</span><a class="hover:text-surface-container-lowest transition-colors" href="#">Privacy Policy</a><span class="text-surface-variant opacity-40">|</span><a class="hover:text-surface-container-lowest transition-colors" href="#">Terms of Membership</a><span class="text-surface-variant opacity-40">|</span><a class="hover:text-surface-container-lowest transition-colors" href="#">Cancellation &amp; Refund</a><span class="text-surface-variant opacity-40">|</span><a class="hover:text-surface-container-lowest transition-colors" href="#">Disclaimer</a></div></div></div></footer>
@endverbatim
@endsection
