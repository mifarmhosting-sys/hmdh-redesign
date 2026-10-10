@extends('layouts.design')
@section('title', "Happy Miles Dream Hospitality")
@section('body_class', "bg-background font-body-md text-on-surface antialiased")
@push('head')
@verbatim
<style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
@endverbatim
@endpush
@section('content')
@verbatim
@endverbatim
@include('partials.design-header', ['active' => 'membership'])
@verbatim
<main class="w-full pt-[116px] bg-background min-h-screen"><div class="flex flex-col w-full">
<!-- HERO SECTION WITH EXPERIENTIAL BACKDROP SCENE -->
<section class="relative w-full overflow-hidden bg-deep-navy text-surface-container-lowest">
<!-- Ambient Ocean Gradient & Lighting Overlays -->
<div class="absolute inset-0 bg-gradient-to-r from-deep-navy via-deep-navy/95 to-primary/80 z-10"></div>
<div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-luminosity scale-105 transform transition-transform duration-1000" data-alt="Ultra luxury modern beachfront villa with illuminated turquoise infinity pool at dusk, warm interior lights, serene private coastline, and palm trees in premium resort aesthetic with navy and amber hues" style="background-image: url('/images/design/b6a947bf3cca.jpg')">
</div>
<!-- Content Container -->
<div class="relative z-20 max-w-7xl mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-space-xl">
<!-- Breadcrumb -->
<nav class="flex items-center gap-space-xs font-label-md text-label-md text-tertiary-fixed-dim/90 mb-space-md">
<a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="home" href="/">
<span class="material-symbols-outlined text-[16px]">home</span>
<span>Home</span>
</a>
<span class="text-tertiary-fixed-dim/40">/</span>
<span class="text-surface-container-lowest font-semibold">Membership &amp; Holiday Ownership</span>
</nav>
<!-- Badge & Hero Title -->
<div class="max-w-3xl flex flex-col gap-space-md">
<div class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-sunset-gold/15 text-sunset-gold font-label-md text-label-md backdrop-blur-md shadow-sm w-fit">
<span class="material-symbols-outlined text-[18px]">verified</span>
<span>25-YEAR TRANSFERABLE VACATION OWNERSHIP</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-surface-container-lowest tracking-tight">
          Unlock a Lifetime of Treasured Journeys &amp; Exclusive Privileges
        </h1>
<p class="font-body-lg text-body-lg text-surface-container-low/90 leading-relaxed">
          Choose the holiday membership tailored to your family's travel rhythm. Enjoy inflation-proof stays across 80+ handcrafted sanctuaries, Barbeque Nation dining vouchers, guaranteed peak-season allocations, and personalized 24/7 concierge.
        </p>
<!-- Hero Actions -->
<div class="flex flex-wrap items-center gap-space-md pt-space-xs">
<a class="px-space-lg py-space-md rounded-lg bg-gradient-to-r from-secondary-container via-coral-vibrant to-secondary text-on-primary font-label-lg text-label-lg shadow-xl hover:opacity-95 transition-opacity flex items-center gap-space-xs" href="#plans">
<span>Explore 4 Membership Tiers</span>
<span class="material-symbols-outlined text-[18px]">arrow_downward</span>
</a>
<a class="px-space-lg py-space-md rounded-lg bg-surface-container-lowest/10 hover:bg-surface-container-lowest/20 backdrop-blur-md text-surface-container-lowest font-label-lg text-label-lg transition-colors flex items-center gap-space-xs" href="#calculator">
<span class="material-symbols-outlined text-[18px] text-sunset-gold">calculate</span>
<span>Check EMI Calculator</span>
</a>
</div>
</div>
<!-- Trust Metrics Strip -->
<div class="mt-space-xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-lg rounded-xl shadow-md hover:bg-surface-container-lowest/15 transition-all">
<div class="flex items-center justify-between mb-space-xs">
<span class="font-headline-lg text-headline-lg text-sunset-gold font-bold">25 Yrs</span>
<span class="material-symbols-outlined text-[28px] text-tertiary-fixed-dim">verified_user</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-semibold mb-space-xs">Inflation-Proof</h4>
<p class="font-body-sm text-body-sm text-surface-dim">Locked-in luxury vacation tariffs shielded from commercial hotel price surges.</p>
</div>
<div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-lg rounded-xl shadow-md hover:bg-surface-container-lowest/15 transition-all">
<div class="flex items-center justify-between mb-space-xs">
<span class="font-headline-lg text-headline-lg text-tertiary-fixed-dim font-bold">80+</span>
<span class="material-symbols-outlined text-[28px] text-sunset-gold">villa</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-semibold mb-space-xs">Handcrafted Stays</h4>
<p class="font-body-sm text-body-sm text-surface-dim">Coastal retreats, Himalayan hideaways, riverfront palaces, and jungle lodges.</p>
</div>
<div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-lg rounded-xl shadow-md hover:bg-surface-container-lowest/15 transition-all">
<div class="flex items-center justify-between mb-space-xs">
<span class="font-headline-lg text-headline-lg text-secondary-container font-bold">0% EMI</span>
<span class="material-symbols-outlined text-[28px] text-secondary-container">credit_card</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-semibold mb-space-xs">Flexible Financing</h4>
<p class="font-body-sm text-body-sm text-surface-dim">Up to 36 months zero-interest bank tenures with zero processing surprises.</p>
</div>
<div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-lg rounded-xl shadow-md hover:bg-surface-container-lowest/15 transition-all">
<div class="flex items-center justify-between mb-space-xs">
<span class="font-headline-lg text-headline-lg text-sunset-gold font-bold">100%</span>
<span class="material-symbols-outlined text-[28px] text-sunset-gold">family_restroom</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-semibold mb-space-xs">Transferable Asset</h4>
<p class="font-body-sm text-body-sm text-surface-dim">Fully legally willable and transferable heritage asset for next-generation heirs.</p>
</div>
</div>
</div>
</section>
<!-- TOP OFFER OF THE MONTH STRIP (INSPIRED BY BRAND PROMO CARDS) -->
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="text-center max-w-2xl mx-auto mb-space-lg">
<span class="font-label-lg text-label-lg uppercase text-coral-vibrant tracking-wider font-semibold">Special Seasonal Privileges</span>
<h2 class="font-headline-lg text-headline-lg text-primary font-bold mt-space-xs">Top Offers of the Month</h2>
<div class="w-20 h-1 bg-coral-vibrant mx-auto mt-space-sm rounded-full"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Promo 1 -->
<div class="relative group rounded-xl overflow-hidden shadow-lg bg-deep-navy h-80 flex flex-col justify-end p-space-md text-surface-container-lowest">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Enthusiastic young couple wearing safari hats trekking along scenic high altitude mountain ridge overlooking valley under sunny skies" style="background-image: url('/images/design/b6bef2165097.jpg')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/60 to-transparent"></div>
<div class="absolute top-space-md right-space-md">
<span class="px-space-sm py-space-xs rounded-md bg-lagoon-blue text-surface-container-lowest font-label-sm text-label-sm uppercase font-bold shadow-md">Avail the Offer</span>
</div>
<div class="relative z-10">
<span class="font-label-sm text-label-sm uppercase text-sunset-gold tracking-wide">Advance Booking</span>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-bold mt-space-xs">Early Bird Discount</h4>
<p class="font-body-sm text-body-sm text-surface-dim mt-space-xs">Get FLAT 35% Early Bird DISCOUNT for reserving 35 Days in advance.</p>
</div>
</div>
<!-- Promo 2 -->
<div class="relative group rounded-xl overflow-hidden shadow-lg bg-deep-navy h-80 flex flex-col justify-end p-space-md text-surface-container-lowest">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Group of thrilled travelers in colorful safety helmets and lifejackets paddling white water raft through energetic sparkling river rapids in Rishikesh" style="background-image: url('/images/design/a3a0550a0a36.jpg')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/60 to-transparent"></div>
<div class="absolute top-space-md right-space-md">
<span class="px-space-sm py-space-xs rounded-md bg-lagoon-blue text-surface-container-lowest font-label-sm text-label-sm uppercase font-bold shadow-md">Avail the Offer</span>
</div>
<div class="relative z-10">
<span class="font-label-sm text-label-sm uppercase text-sunset-gold tracking-wide">Adventure Expeditions</span>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-bold mt-space-xs">Rishikesh Rafting Holiday</h4>
<p class="font-body-sm text-body-sm text-surface-dim mt-space-xs">Get ₹4,000 Special DISCOUNT on member Rishikesh water rafting holiday package.</p>
</div>
</div>
<!-- Promo 3 -->
<div class="relative group rounded-xl overflow-hidden shadow-lg bg-deep-navy h-80 flex flex-col justify-end p-space-md text-surface-container-lowest">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Multigenerational joyful Indian family relaxing together in an opulent luxury resort hotel suite with comfortable bedding and sunlit interior" style="background-image: url('/images/design/8b602434b310.jpg')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/60 to-transparent"></div>
<div class="absolute top-space-md right-space-md">
<span class="px-space-sm py-space-xs rounded-md bg-lagoon-blue text-surface-container-lowest font-label-sm text-label-sm uppercase font-bold shadow-md">Avail the Offer</span>
</div>
<div class="relative z-10">
<span class="font-label-sm text-label-sm uppercase text-sunset-gold tracking-wide">Weekend Getaway</span>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-bold mt-space-xs">Staycation Escapes</h4>
<p class="font-body-sm text-body-sm text-surface-dim mt-space-xs">Stay for 3 Nights &amp; Pay for 2 with complimentary breakfast, dinner, &amp; high-speed Wi-Fi.</p>
</div>
</div>
<!-- Promo 4 -->
<div class="relative group rounded-xl overflow-hidden shadow-lg bg-deep-navy h-80 flex flex-col justify-end p-space-md text-surface-container-lowest">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Couple holding hands walking happily along lush green pine hills and meadow in scenic mountain destination during sunrise" style="background-image: url('/images/design/a9239f768058.jpg')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/60 to-transparent"></div>
<div class="absolute top-space-md right-space-md">
<span class="px-space-sm py-space-xs rounded-md bg-lagoon-blue text-surface-container-lowest font-label-sm text-label-sm uppercase font-bold shadow-md">Avail the Offer</span>
</div>
<div class="relative z-10">
<span class="font-label-sm text-label-sm uppercase text-sunset-gold tracking-wide">Holiday Khul Ke</span>
<h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-bold mt-space-xs">Celebration Tariffs</h4>
<p class="font-body-sm text-body-sm text-surface-dim mt-space-xs">Flat 30% DISCOUNT on luxury suite tariffs across selected premier properties.</p>
</div>
</div>
</div>
</div>
</section>
<!-- MEMBERSHIP TIER CARDS (THE CORE SHOWCASE) -->
<section class="w-full py-space-xl bg-background" id="plans">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<!-- Section Heading -->
<div class="text-center max-w-3xl mx-auto mb-space-xl">
<span class="font-label-lg text-label-lg uppercase text-secondary font-bold tracking-wider">Tailored Ownership Collections</span>
<h2 class="font-headline-xl text-headline-xl text-deep-navy font-bold mt-space-xs tracking-tight">
          Select Your 25-Year Holiday Membership
        </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-space-sm">
          Every membership tier is 100% legal, transferable, and includes guaranteed annual Barbeque Nation dining vouchers, luxury resort stays, and personal concierge managers.
        </p>
</div>
<!-- 4 Cards Bento Grid Layout -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter items-stretch">
<!-- TIER 1: SILVER EXPLORER -->
<div class="bg-surface-container-lowest rounded-xl shadow-lg p-space-lg flex flex-col justify-between hover:shadow-2xl transition-all duration-300">
<div>
<div class="inline-block px-space-sm py-space-xs rounded-md bg-surface-container text-primary font-label-sm text-label-sm uppercase font-semibold mb-space-sm">
              Young Couples &amp; Solo
            </div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">Silver Explorer</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Affordable gateway into luxury coastal and hill station retreats.</p>
<div class="my-space-md py-space-sm bg-surface-container-low rounded-lg px-space-md">
<div class="font-headline-sm text-headline-sm text-deep-navy font-bold">6 Nights / Year</div>
<div class="font-label-sm text-label-sm text-lagoon-blue font-semibold uppercase">25 Years Transferable Tenure</div>
</div>
<!-- Perks Checklist -->
<ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-on-surface mb-space-lg">
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0 mt-0.5">restaurant</span>
<span><strong>2 Dinner Buffets / yr</strong> at Barbeque Nation</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">cottage</span>
<span><strong>2 Day-Excursion Passes</strong> at Rupasi Rupnarayan Kuthi</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">percent</span>
<span><strong>10% Flat Discount</strong> on Resort F&amp;B services</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">spa</span>
<span><strong>₹2,500</strong> Annual Spa &amp; Ayurveda Credit</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">support_agent</span>
<span>Standard Travel Concierge Desk</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">event_available</span>
<span>No Blackout Dates during standard season</span>
</li>
</ul>
</div>
<div>
<div class="p-space-sm rounded-lg bg-surface-container-high/60 mb-space-md">
<span class="font-label-sm text-label-sm text-on-surface-variant block uppercase">One-time Investment</span>
<span class="font-headline-sm text-headline-sm text-deep-navy font-bold">₹1,49,000</span>
<span class="font-label-sm text-label-sm text-coral-vibrant block mt-0.5 font-semibold">Or ₹3,999/mo (No-Cost EMI)</span>
</div>
<a class="w-full py-space-sm rounded-lg bg-surface-ice text-lagoon-blue hover:bg-surface-container font-label-lg text-label-lg flex items-center justify-center gap-space-xs transition-colors" data-path="pay-now" href="/contact-us.html">
<span>Select Silver Plan</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- TIER 2: GOLD CLUB (HIGHLIGHTED / MOST POPULAR) -->
<div class="relative bg-surface-container-lowest rounded-xl shadow-2xl p-space-lg flex flex-col justify-between transform lg:-translate-y-2 hover:-translate-y-3 transition-all duration-300">
<!-- Floating Most Popular Badge -->
<div class="absolute -top-3 left-1/2 -translate-x-1/2 px-space-md py-space-xs rounded-full bg-gradient-to-r from-secondary-container via-coral-vibrant to-secondary text-on-primary font-label-sm text-label-sm font-bold uppercase shadow-lg flex items-center gap-space-xs whitespace-nowrap">
<span class="material-symbols-outlined text-[14px]">star</span>
<span>Family Favorite • Most Popular</span>
</div>
<div>
<div class="inline-block px-space-sm py-space-xs rounded-md bg-sunset-gold/20 text-secondary font-label-sm text-label-sm uppercase font-semibold mb-space-sm mt-space-xs">
              Complete Family Vacation Hub
            </div>
<h3 class="font-headline-md text-headline-md text-coral-vibrant font-bold">Gold Club</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">The quintessential choice for yearly multi-city family holidays.</p>
<div class="my-space-md py-space-sm bg-surface-ice rounded-lg px-space-md shadow-sm">
<div class="font-headline-sm text-headline-sm text-lagoon-blue font-bold">12 Nights / Year</div>
<div class="font-label-sm text-label-sm text-coral-vibrant font-semibold uppercase">Splittable into 2 to 3 getaways</div>
</div>
<!-- Perks Checklist -->
<ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-on-surface mb-space-lg">
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px] shrink-0 mt-0.5">restaurant</span>
<span><strong>4 Dinner Buffets / yr</strong> at Barbeque Nation</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">pool</span>
<span><strong>4 Excursion Day-Passes</strong> (Family of 4)</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">percent</span>
<span><strong>15% Flat Discount</strong> on Resort F&amp;B &amp; Dining</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">spa</span>
<span><strong>₹5,000</strong> Annual Spa &amp; Wellness Credit</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">flight</span>
<span><strong>2 Domestic Flight</strong> Booking Subsidies</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">chat</span>
<span><strong>Priority WhatsApp</strong> Concierge Desk (24/7)</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">upgrade</span>
<span>Complimentary Ocean/Mountain View Upgrade</span>
</li>
</ul>
</div>
<div>
<div class="p-space-sm rounded-lg bg-surface-ice mb-space-md shadow-sm">
<span class="font-label-sm text-label-sm text-lagoon-blue block uppercase font-semibold">One-time Investment</span>
<span class="font-headline-sm text-headline-sm text-deep-navy font-bold">₹2,85,000</span>
<span class="font-label-sm text-label-sm text-coral-vibrant block mt-0.5 font-bold">Or ₹6,999/mo (No-Cost EMI)</span>
</div>
<a class="w-full py-space-sm rounded-lg bg-gradient-to-r from-secondary-container via-coral-vibrant to-secondary text-on-primary hover:opacity-95 font-label-lg text-label-lg flex items-center justify-center gap-space-xs shadow-md transition-all" data-path="pay-now" href="/contact-us.html">
<span>Join Gold Club</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
<!-- TIER 3: PLATINUM ELITE -->
<div class="bg-surface-container-lowest rounded-xl shadow-lg p-space-lg flex flex-col justify-between hover:shadow-2xl transition-all duration-300">
<div>
<div class="inline-block px-space-sm py-space-xs rounded-md bg-deep-navy/10 text-deep-navy font-label-sm text-label-sm uppercase font-semibold mb-space-sm">
              Multi-Generational Prestige
            </div>
<h3 class="font-headline-md text-headline-md text-deep-navy font-bold">Platinum Elite</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">For families demanding spacious suites &amp; frequent vacationing.</p>
<div class="my-space-md py-space-sm bg-surface-container-low rounded-lg px-space-md">
<div class="font-headline-sm text-headline-sm text-deep-navy font-bold">21 Nights / Year</div>
<div class="font-label-sm text-label-sm text-primary font-semibold uppercase">Studio &amp; 2-Bedroom Suites</div>
</div>
<!-- Perks Checklist -->
<ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-on-surface mb-space-lg">
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0 mt-0.5">restaurant</span>
<span><strong>6 Dinner Buffets / yr</strong> + VIP Table Reservation</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">hotel_class</span>
<span><strong>Unlimited Day-Out Passes</strong> across retreats</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">percent</span>
<span><strong>20% Flat Discount</strong> on F&amp;B and banquets</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">spa</span>
<span><strong>₹10,000</strong> Annual Spa Wellness Credit</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">flight_takeoff</span>
<span><strong>4 Flight Subsidies</strong> + Airport Lounge Passes</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">person_pin</span>
<span>Dedicated Travel Butler &amp; Vacation Director</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px] shrink-0 mt-0.5">public</span>
<span>Free Exchange to Bhutan &amp; Nepal retreats</span>
</li>
</ul>
</div>
<div>
<div class="p-space-sm rounded-lg bg-surface-container-high/60 mb-space-md">
<span class="font-label-sm text-label-sm text-on-surface-variant block uppercase">One-time Investment</span>
<span class="font-headline-sm text-headline-sm text-deep-navy font-bold">₹4,95,000</span>
<span class="font-label-sm text-label-sm text-coral-vibrant block mt-0.5 font-semibold">Or ₹11,999/mo (No-Cost EMI)</span>
</div>
<a class="w-full py-space-sm rounded-lg bg-deep-navy text-surface-container-lowest hover:bg-primary font-label-lg text-label-lg flex items-center justify-center gap-space-xs transition-colors" data-path="pay-now" href="/contact-us.html">
<span>Apply for Platinum</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- TIER 4: SIGNATURE ROYAL VILLA -->
<div class="bg-gradient-to-b from-deep-navy via-deep-navy to-tertiary rounded-xl shadow-xl p-space-lg flex flex-col justify-between text-surface-container-lowest hover:shadow-2xl transition-all duration-300">
<div>
<div class="inline-block px-space-sm py-space-xs rounded-md bg-sunset-gold text-deep-navy font-label-sm text-label-sm uppercase font-bold mb-space-sm">
              Ultra-HNI Bespoke
            </div>
<h3 class="font-headline-md text-headline-md text-sunset-gold font-bold">Signature Royal Villa</h3>
<p class="font-body-sm text-body-sm text-surface-dim mt-space-xs">Private pool estates and bespoke hospitality for distinguished legacies.</p>
<div class="my-space-md py-space-sm bg-surface-container-lowest/10 backdrop-blur-md rounded-lg px-space-md">
<div class="font-headline-sm text-headline-sm text-sunset-gold font-bold">30 Nights / Year</div>
<div class="font-label-sm text-label-sm text-tertiary-fixed-dim font-semibold uppercase">Private Villas &amp; Heritage Estates</div>
</div>
<!-- Perks Checklist -->
<ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-surface-dim mb-space-lg">
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0 mt-0.5">dinner_dining</span>
<span><strong>Unlimited Dining</strong> &amp; Private Masterchef Sessions</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0 mt-0.5">flight_land</span>
<span><strong>VIP Air Concierge</strong> &amp; Helicopter transfers</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0 mt-0.5">travel_explore</span>
<span><strong>Global Partner Exchanges</strong>: Maldives &amp; Bali</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0 mt-0.5">celebration</span>
<span><strong>₹50,000 Milestone Event</strong> hosting subsidy</span>
</li>
<li class="flex items-start gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px] shrink-0 mt-0.5">all_inclusive</span>
<span>Multi-Family Co-Ownership Sharing rights</span>
</li>
</ul>
</div>
<div>
<div class="p-space-sm rounded-lg bg-surface-container-lowest/10 mb-space-md backdrop-blur-sm">
<span class="font-label-sm text-label-sm text-surface-dim block uppercase">Access Structure</span>
<span class="font-headline-sm text-headline-sm text-sunset-gold font-bold">Invitation Only</span>
<span class="font-label-sm text-label-sm text-surface-dim block mt-0.5">Curated per member preference</span>
</div>
<a class="w-full py-space-sm rounded-lg bg-sunset-gold text-deep-navy hover:bg-surface-container-lowest font-label-lg text-label-lg flex items-center justify-center gap-space-xs font-bold transition-colors" data-path="connect-us" href="/contact-us.html">
<span>Private Consultation</span>
<span class="material-symbols-outlined text-[16px]">support_agent</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- INTERACTIVE COMPARISON MATRIX (DEEP DIVE PRIVILEGES) -->
<section class="w-full py-space-xl bg-surface-container-low">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="text-center max-w-2xl mx-auto mb-space-lg">
<span class="font-label-lg text-label-lg uppercase text-lagoon-blue font-semibold">Side-By-Side Evaluation</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy font-bold mt-space-xs">Compare Membership Privileges</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">Full transparency into rights, dining entitlements, and exchange parameters.</p>
</div>
<!-- Comparison Table Container -->
<div class="w-full overflow-x-auto rounded-xl shadow-lg bg-surface-container-lowest">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-deep-navy text-surface-container-lowest font-label-md text-label-md">
<th class="p-space-md w-1/3">Core Membership Privileges</th>
<th class="p-space-md text-center">Silver Explorer</th>
<th class="p-space-md text-center bg-lagoon-blue/40 text-sunset-gold font-bold">Gold Club (Popular)</th>
<th class="p-space-md text-center">Platinum Elite</th>
<th class="p-space-md text-center">Signature Royal</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container text-body-sm font-body-sm text-on-surface">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Annual Resort Stays</td>
<td class="p-space-md text-center">6 Nights / Year</td>
<td class="p-space-md text-center font-bold text-coral-vibrant bg-surface-ice/40">12 Nights / Year</td>
<td class="p-space-md text-center">21 Nights / Year</td>
<td class="p-space-md text-center font-bold">30 Nights / Year</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Barbeque Nation Dining Vouchers</td>
<td class="p-space-md text-center">2 Buffet Passes</td>
<td class="p-space-md text-center font-bold text-coral-vibrant bg-surface-ice/40">4 Buffet Passes</td>
<td class="p-space-md text-center">6 Buffet Passes + VIP</td>
<td class="p-space-md text-center font-bold">Unlimited Dining Pass</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Day-Out Retreat Passes (Rupasi Rupnarayan Kuthi)</td>
<td class="p-space-md text-center">2 Passes (Couple)</td>
<td class="p-space-md text-center font-bold text-deep-navy bg-surface-ice/40">4 Passes (Family)</td>
<td class="p-space-md text-center">Unlimited Regional Passes</td>
<td class="p-space-md text-center">Unlimited All Properties</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Spa &amp; Wellness Annual Credit</td>
<td class="p-space-md text-center">₹2,500 / year</td>
<td class="p-space-md text-center font-bold text-deep-navy bg-surface-ice/40">₹5,000 / year</td>
<td class="p-space-md text-center">₹10,000 / year</td>
<td class="p-space-md text-center">Bespoke Wellness Sessions</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Domestic Flight Subsidies</td>
<td class="p-space-md text-center text-on-surface-variant">—</td>
<td class="p-space-md text-center font-bold text-coral-vibrant bg-surface-ice/40">2 Flights / Year</td>
<td class="p-space-md text-center">4 Flights + Lounge Access</td>
<td class="p-space-md text-center">Full VIP Flight Desk</td>
</tr>
<!-- Row 6 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Room &amp; Suite Category</td>
<td class="p-space-md text-center">Studio / Deluxe Room</td>
<td class="p-space-md text-center font-bold text-deep-navy bg-surface-ice/40">Premium View Suites</td>
<td class="p-space-md text-center">2-Bedroom Luxury Suite</td>
<td class="p-space-md text-center font-bold">Private Pool Villa</td>
</tr>
<!-- Row 7 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Cross-Border Access (Nepal &amp; Bhutan)</td>
<td class="p-space-md text-center text-on-surface-variant">Nominal Add-on</td>
<td class="p-space-md text-center text-on-surface-variant bg-surface-ice/40">Nominal Add-on</td>
<td class="p-space-md text-center text-lagoon-blue font-bold">Included</td>
<td class="p-space-md text-center text-lagoon-blue font-bold">Included + Maldives</td>
</tr>
<!-- Row 8 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Holiday Banking (Accumulate 3 Years)</td>
<td class="p-space-md text-center text-lagoon-blue font-bold"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
<td class="p-space-md text-center text-lagoon-blue font-bold bg-surface-ice/40"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
<td class="p-space-md text-center text-lagoon-blue font-bold"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
<td class="p-space-md text-center text-lagoon-blue font-bold"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
</tr>
<!-- Row 9 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-space-md font-semibold text-deep-navy">Gift &amp; Transfer to Relatives</td>
<td class="p-space-md text-center text-lagoon-blue font-bold"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
<td class="p-space-md text-center text-lagoon-blue font-bold bg-surface-ice/40"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
<td class="p-space-md text-center text-lagoon-blue font-bold"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
<td class="p-space-md text-center text-lagoon-blue font-bold"><span class="material-symbols-outlined text-[18px]">check_circle</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- HOLIDAY BANKING & FLEXIBILITY FEATURE STRIP -->
<section class="w-full py-space-xl bg-background">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="text-center max-w-2xl mx-auto mb-space-xl">
<span class="font-label-lg text-label-lg uppercase text-secondary font-semibold">Vacation Intelligence</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy font-bold mt-space-xs">Designed Around Your Real Life</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">We know work schedules shift. That's why our 25-year vacation rights never go to waste.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Feature 1 -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-md hover:shadow-xl transition-shadow flex flex-col items-start">
<div class="w-14 h-14 rounded-xl bg-surface-ice flex items-center justify-center text-lagoon-blue mb-space-md">
<span class="material-symbols-outlined text-[32px]">savings</span>
</div>
<span class="font-label-sm text-label-sm uppercase text-sunset-gold font-bold">Rule 01</span>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mt-space-xs mb-space-sm">Bank Your Holidays</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Busy year with board exams or heavy work deadlines? Accumulate unused nights for up to 3 consecutive years without paying forfeiture charges or hidden renewal penalties.
          </p>
</div>
<!-- Feature 2 -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-md hover:shadow-xl transition-shadow flex flex-col items-start">
<div class="w-14 h-14 rounded-xl bg-surface-ice flex items-center justify-center text-coral-vibrant mb-space-md">
<span class="material-symbols-outlined text-[32px]">fast_forward</span>
</div>
<span class="font-label-sm text-label-sm uppercase text-sunset-gold font-bold">Rule 02</span>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mt-space-xs mb-space-sm">Borrow in Advance</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Planning a grand 25th anniversary or multi-family reunion in Goa or Puri? Borrow from upcoming years' allowances upfront to secure expansive villas and multi-room suites seamlessly.
          </p>
</div>
<!-- Feature 3 -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-md hover:shadow-xl transition-shadow flex flex-col items-start">
<div class="w-14 h-14 rounded-xl bg-surface-ice flex items-center justify-center text-sunset-gold mb-space-md">
<span class="material-symbols-outlined text-[32px]">redeem</span>
</div>
<span class="font-label-sm text-label-sm uppercase text-sunset-gold font-bold">Rule 03</span>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mt-space-xs mb-space-sm">Gift to Loved Ones</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Surprise your parents with a peaceful spiritual retreat in Puri, or treat colleagues to a weekend retreat at Rupasi Rupnarayan Kuthi with zero guest-transfer fees.
          </p>
</div>
</div>
</div>
</section>
<!-- MEMBER PERKS, COLLABORATIONS & VERIFIED TESTIMONIALS -->
<section class="w-full py-space-xl bg-deep-navy text-surface-container-lowest">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<!-- Collaborations Bar -->
<div class="bg-surface-container-lowest/5 backdrop-blur-md p-space-lg rounded-2xl mb-space-xl">
<div class="text-center mb-space-md">
<span class="font-label-md text-label-md uppercase tracking-wider text-sunset-gold font-semibold">Affiliated Hospitality &amp; Culinary Alliances</span>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter text-center items-center">
<div class="p-space-md rounded-lg bg-surface-container-lowest/5">
<span class="font-label-lg text-label-lg font-bold text-surface-container-lowest flex items-center justify-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant">local_fire_department</span>
<span>Barbeque Nation</span>
</span>
<span class="font-label-sm text-label-sm text-surface-dim block mt-1">Official Voucher Partner</span>
</div>
<div class="p-space-md rounded-lg bg-surface-container-lowest/5">
<span class="font-label-lg text-label-lg font-bold text-surface-container-lowest flex items-center justify-center gap-space-xs">
<span class="material-symbols-outlined text-tertiary-fixed-dim">apartment</span>
<span>ITC Fortune Hotels</span>
</span>
<span class="font-label-sm text-label-sm text-surface-dim block mt-1">Affiliated Network</span>
</div>
<div class="p-space-md rounded-lg bg-surface-container-lowest/5">
<span class="font-label-lg text-label-lg font-bold text-surface-container-lowest flex items-center justify-center gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold">landscape</span>
<span>Summit Hotels</span>
</span>
<span class="font-label-sm text-label-sm text-surface-dim block mt-1">Hill Country Sanctuaries</span>
</div>
<div class="p-space-md rounded-lg bg-surface-container-lowest/5">
<span class="font-label-lg text-label-lg font-bold text-surface-container-lowest flex items-center justify-center gap-space-xs">
<span class="material-symbols-outlined text-tertiary-fixed-dim">waves</span>
<span>Rupasi Kuthi</span>
</span>
<span class="font-label-sm text-label-sm text-surface-dim block mt-1">Flagship Riverside Haven</span>
</div>
</div>
</div>
<!-- Testimonials Header -->
<div class="text-center max-w-2xl mx-auto mb-space-lg">
<h2 class="font-headline-lg text-headline-lg text-surface-container-lowest font-bold">Voices of Our Club Members</h2>
<p class="font-body-md text-body-md text-surface-dim mt-space-xs">Real experiences from genuine travelers across Bengal, Odisha, and PAN India.</p>
</div>
<!-- Testimonial Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Review 1 -->
<div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-lg rounded-xl flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-space-sm">
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
</div>
<p class="font-body-md text-body-md text-surface-container-low italic leading-relaxed">
              “We enrolled in Gold Club last December. The Barbeque Nation dining vouchers alone covered four lavish family gatherings, and our weekend trip to Puri Camellia Sea Retreat was flawless!”
            </p>
</div>
<div class="flex items-center gap-space-sm mt-space-md pt-space-md border-t border-surface-container-lowest/10">
<div class="w-10 h-10 rounded-full bg-lagoon-blue flex items-center justify-center text-sunset-gold font-bold">NT</div>
<div>
<span class="font-label-md text-label-md text-surface-container-lowest block font-bold">Nitesh Tiwari &amp; Srishty Dubey</span>
<span class="font-label-sm text-label-sm text-tertiary-fixed-dim">Gold Members • Salt Lake, Kolkata</span>
</div>
</div>
</div>
<!-- Review 2 -->
<div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-lg rounded-xl flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-space-sm">
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
</div>
<p class="font-body-md text-body-md text-surface-container-low italic leading-relaxed">
              “The day-out passes at Rupasi Rupnarayan Kuthi Kolaghat are our family's favorite weekend sanctuary. Beautiful green lawns, attentive staff, and absolute peace away from city congestion.”
            </p>
</div>
<div class="flex items-center gap-space-sm mt-space-md pt-space-md border-t border-surface-container-lowest/10">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-primary font-bold">SR</div>
<div>
<span class="font-label-md text-label-md text-surface-container-lowest block font-bold">Subhashis Roy Chowdhury</span>
<span class="font-label-sm text-label-sm text-tertiary-fixed-dim">Platinum Elite • Howrah</span>
</div>
</div>
</div>
<!-- Review 3 -->
<div class="bg-surface-container-lowest/10 backdrop-blur-md p-space-lg rounded-xl flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-space-sm">
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
<span class="material-symbols-outlined text-[18px]">star</span>
</div>
<p class="font-body-md text-body-md text-surface-container-low italic leading-relaxed">
              “With guaranteed peak-season booking priority, we secured our holiday during Durga Puja effortlessly. 25 years of inflation-proof travel guarantees peace of mind.”
            </p>
</div>
<div class="flex items-center gap-space-sm mt-space-md pt-space-md border-t border-surface-container-lowest/10">
<div class="w-10 h-10 rounded-full bg-sunset-gold flex items-center justify-center text-deep-navy font-bold">KR</div>
<div>
<span class="font-label-md text-label-md text-surface-container-lowest block font-bold">Krishnendu Roy Chowdhury</span>
<span class="font-label-sm text-label-sm text-tertiary-fixed-dim">Gold Member • Ballygunge, Kolkata</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- EASY FLEXIBLE PAYMENT & EMI CALCULATOR PREVIEW -->
<section class="w-full py-space-xl bg-surface-container-low" id="calculator">
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin">
<div class="bg-surface-container-lowest rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 lg:grid-cols-12">
<!-- Left: Interactive Form & Calculator -->
<div class="lg:col-span-7 p-space-lg lg:p-space-xl">
<span class="font-label-lg text-label-lg uppercase text-coral-vibrant font-semibold">Zero Burden Financing</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy font-bold mt-space-xs">
            Plan Your Easy No-Cost EMI
          </h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
            Turn your 25-year lifetime vacation rights into affordable, interest-free monthly budgets with top national banking partners.
          </p>
<!-- Plan Selection Pill Buttons -->
<div class="mt-space-lg">
<label class="block font-label-md text-label-md uppercase text-on-surface-variant mb-space-xs">Select Preferred Plan:</label>
<div class="grid grid-cols-3 gap-space-sm">
<button class="tier-btn py-space-sm px-space-md rounded-lg bg-surface-ice text-lagoon-blue font-label-md text-label-md text-center hover:bg-surface-container transition-colors" id="calc-silver" onclick="selectCalcTier('silver')" type="button">
                Silver (₹1.49L)
              </button>
<button class="tier-btn py-space-sm px-space-md rounded-lg bg-coral-vibrant text-on-primary font-label-md text-label-md text-center shadow-md" id="calc-gold" onclick="selectCalcTier('gold')" type="button">
                Gold (₹2.85L)
              </button>
<button class="tier-btn py-space-sm px-space-md rounded-lg bg-surface-ice text-lagoon-blue font-label-md text-label-md text-center hover:bg-surface-container transition-colors" id="calc-platinum" onclick="selectCalcTier('platinum')" type="button">
                Platinum (₹4.95L)
              </button>
</div>
</div>
<!-- Tenure Slider -->
<div class="mt-space-lg">
<div class="flex justify-between items-center mb-space-xs">
<label class="font-label-md text-label-md uppercase text-on-surface-variant">EMI Tenure (Months):</label>
<span class="font-headline-sm text-headline-sm text-primary font-bold" id="tenure-label">24 Months</span>
</div>
<input class="w-full h-2 bg-surface-container rounded-lg appearance-none cursor-pointer accent-coral-vibrant" id="tenure-range" max="36" min="12" oninput="updateEMI()" step="12" type="range" value="24"/>
<div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant mt-space-xs">
<span>12 Months</span>
<span>24 Months</span>
<span>36 Months</span>
</div>
</div>
<!-- Partner Banks Strip -->
<div class="mt-space-lg pt-space-md border-t border-surface-container">
<span class="font-label-sm text-label-sm uppercase text-on-surface-variant block mb-space-xs">Instant Approvals With:</span>
<div class="flex items-center gap-space-md flex-wrap text-deep-navy font-semibold text-body-sm">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-lagoon-blue text-[18px]">account_balance</span> HDFC Bank</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-coral-vibrant text-[18px]">account_balance</span> ICICI Bank</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-lagoon-blue text-[18px]">account_balance</span> SBI Cards</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-secondary text-[18px]">account_balance</span> Axis Bank</span>
</div>
</div>
</div>
<!-- Right: Realtime Calculation Output Summary -->
<div class="lg:col-span-5 bg-gradient-to-br from-deep-navy via-primary to-deep-navy text-surface-container-lowest p-space-lg lg:p-space-xl flex flex-col justify-between">
<div>
<div class="inline-flex items-center gap-space-xs px-space-sm py-space-xs rounded-full bg-sunset-gold/20 text-sunset-gold font-label-sm text-label-sm uppercase font-bold mb-space-md">
<span class="material-symbols-outlined text-[14px]">price_check</span>
<span>0% Processing Fees • No Hidden AMC</span>
</div>
<h3 class="font-headline-md text-headline-md font-bold text-surface-container-lowest">Estimated Monthly EMI</h3>
<div class="my-space-md">
<span class="font-headline-xl text-headline-xl font-bold text-sunset-gold" id="monthly-emi">₹11,875</span>
<span class="font-body-md text-body-md text-surface-dim block">/ per month with 0% interest</span>
</div>
<div class="space-y-space-xs py-space-md border-y border-surface-container-lowest/10 font-body-sm text-body-sm">
<div class="flex justify-between">
<span class="text-surface-dim">Membership Plan:</span>
<span class="font-semibold text-surface-container-lowest" id="summary-tier">Gold Club (12 Nights/Yr)</span>
</div>
<div class="flex justify-between">
<span class="text-surface-dim">Total Membership Value:</span>
<span class="font-semibold text-surface-container-lowest" id="summary-total">₹2,85,000</span>
</div>
<div class="flex justify-between">
<span class="text-surface-dim">Per-Night Effective Tariff:</span>
<span class="font-semibold text-tertiary-fixed-dim" id="summary-per-night">₹950 / Night</span>
</div>
<div class="flex justify-between">
<span class="text-surface-dim">Down Payment:</span>
<span class="font-semibold text-sunset-gold">₹0 (Zero Initial Down)</span>
</div>
</div>
</div>
<div class="mt-space-lg">
<a class="w-full py-space-md rounded-lg bg-gradient-to-r from-secondary-container via-coral-vibrant to-secondary text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-space-xs shadow-lg hover:opacity-95 transition-opacity" data-path="pay-now" href="/contact-us.html">
<span>Enroll With Instant EMI</span>
<span class="material-symbols-outlined text-[18px]">verified</span>
</a>
<span class="font-label-sm text-label-sm text-center block text-surface-dim mt-space-xs">256-Bit SSL Encrypted Banking Protocol</span>
</div>
</div>
</div>
</div>
</section>
<!-- FREQUENTLY ASKED QUESTIONS (ACCORDION STYLE) -->
<section class="w-full py-space-xl bg-background">
<div class="max-w-4xl mx-auto px-margin-mobile lg:px-margin">
<div class="text-center mb-space-xl">
<span class="font-label-lg text-label-lg uppercase text-secondary font-semibold">Everything Explained</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy font-bold mt-space-xs">Frequently Asked Questions</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">Transparent answers to help you make an informed family lifestyle decision.</p>
</div>
<div class="space-y-space-md">
<!-- FAQ Item 1 -->
<details class="group bg-surface-container-lowest rounded-xl shadow-sm p-space-lg transition-all" open="">
<summary class="flex justify-between items-center cursor-pointer list-none font-headline-sm text-headline-sm text-deep-navy font-bold">
<span>How do I book stays during peak holiday seasons &amp; festivals?</span>
<span class="material-symbols-outlined text-lagoon-blue transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-space-md font-body-md text-body-md text-on-surface-variant leading-relaxed border-t border-surface-container pt-space-sm">
            Gold, Platinum, and Signature Royal members enjoy dedicated festival quotas for occasions like Durga Puja, Diwali, Christmas, and New Year. You simply ping your 24/7 dedicated WhatsApp Vacation Concierge or submit your booking request 30 to 45 days in advance through the Member Portal for instant voucher confirmation.
          </p>
</details>
<!-- FAQ Item 2 -->
<details class="group bg-surface-container-lowest rounded-xl shadow-sm p-space-lg transition-all">
<summary class="flex justify-between items-center cursor-pointer list-none font-headline-sm text-headline-sm text-deep-navy font-bold">
<span>Can my parents or relatives travel if I am not accompanying them?</span>
<span class="material-symbols-outlined text-lagoon-blue transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-space-md font-body-md text-body-md text-on-surface-variant leading-relaxed border-t border-surface-container pt-space-sm">
            Yes, absolutely. Happy Miles Dream Hospitality permits you to generate guest stay vouchers for immediate blood relatives, close friends, or corporate colleagues at zero penalty charges. They will enjoy the same royal check-in privileges and hospitality greeting as the primary cardholder.
          </p>
</details>
<!-- FAQ Item 3 -->
<details class="group bg-surface-container-lowest rounded-xl shadow-sm p-space-lg transition-all">
<summary class="flex justify-between items-center cursor-pointer list-none font-headline-sm text-headline-sm text-deep-navy font-bold">
<span>How are Barbeque Nation dinner vouchers issued and redeemed?</span>
<span class="material-symbols-outlined text-lagoon-blue transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-space-md font-body-md text-body-md text-on-surface-variant leading-relaxed border-t border-surface-container pt-space-sm">
            Upon membership confirmation, digital Barbeque Nation dining vouchers are credited to your member portal account yearly. These unique alphanumeric QR codes can be redeemed at any of Barbeque Nation's 180+ outlets across India for a lavish complimentary buffet spread for lunch or dinner.
          </p>
</details>
<!-- FAQ Item 4 -->
<details class="group bg-surface-container-lowest rounded-xl shadow-sm p-space-lg transition-all">
<summary class="flex justify-between items-center cursor-pointer list-none font-headline-sm text-headline-sm text-deep-navy font-bold">
<span>Is the 25-year vacation ownership legally transferable or willable?</span>
<span class="material-symbols-outlined text-lagoon-blue transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-space-md font-body-md text-body-md text-on-surface-variant leading-relaxed border-t border-surface-container pt-space-sm">
            Yes. Every membership is backed by a registered corporate statutory contract under The Happy Miles Dream Hospitality Ltd. The ownership certificate is 100% legal heritage property that can be passed to children or legally nominated heirs in your legal will without re-registration taxes.
          </p>
</details>
<!-- FAQ Item 5 -->
<details class="group bg-surface-container-lowest rounded-xl shadow-sm p-space-lg transition-all">
<summary class="flex justify-between items-center cursor-pointer list-none font-headline-sm text-headline-sm text-deep-navy font-bold">
<span>What if I need to cancel or reschedule a confirmed booking?</span>
<span class="material-symbols-outlined text-lagoon-blue transition-transform group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-space-md font-body-md text-body-md text-on-surface-variant leading-relaxed border-t border-surface-container pt-space-sm">
            Cancellations made at least 7 days prior to check-in incur zero deduction—your allotted nights are credited straight back into your annual holiday bank for future redemptions within the 3-year accumulation window.
          </p>
</details>
</div>
</div>
</section>
<!-- FINAL CONVERSION CTA BANNER -->
<section class="w-full bg-gradient-to-r from-deep-navy via-primary to-deep-navy text-surface-container-lowest py-space-xl relative overflow-hidden">
<!-- Ambient Glow Effect -->
<div class="absolute -right-20 -bottom-20 w-96 h-96 bg-sunset-gold/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin relative z-10 flex flex-col lg:flex-row items-center justify-between gap-space-xl">
<div class="max-w-2xl">
<div class="inline-flex items-center gap-space-xs px-space-sm py-space-xs rounded-full bg-sunset-gold/20 text-sunset-gold font-label-sm text-label-sm uppercase font-semibold mb-space-sm">
<span class="material-symbols-outlined text-[16px]">support_agent</span>
<span>Kolkata HQ Executive Concierge</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-surface-container-lowest font-bold tracking-tight">
          Start Your Journey with Happy Miles Dream Today
        </h2>
<p class="font-body-lg text-body-lg text-surface-dim mt-space-sm">
          Connect with our Senior Holiday Advisors in Kolkata for a personalized membership walkthrough, customized installment setup, or instant digital welcome kit.
        </p>
<div class="flex items-center gap-space-lg mt-space-md text-surface-container-low font-body-sm">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">call</span>
<span>1800 2033 188</span>
</div>
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-tertiary-fixed-dim text-[18px]">location_on</span>
<span>AVS House, Kolkata HQ</span>
</div>
</div>
</div>
<!-- Action Buttons Column -->
<div class="flex flex-col sm:flex-row lg:flex-col gap-space-sm w-full lg:w-auto shrink-0">
<a class="px-space-lg py-space-md rounded-lg bg-gradient-to-r from-secondary-container via-coral-vibrant to-secondary text-on-primary font-label-lg text-label-lg shadow-xl hover:opacity-95 transition-opacity flex items-center justify-center gap-space-xs text-center font-bold" data-path="pay-now" href="/contact-us.html">
<span class="material-symbols-outlined text-[20px]">credit_card</span>
<span>Instant Online Payment (Pay Now)</span>
</a>
<a class="px-space-lg py-space-md rounded-lg bg-surface-container-lowest text-deep-navy font-label-lg text-label-lg hover:bg-sunset-gold transition-colors flex items-center justify-center gap-space-xs text-center font-bold" data-path="connect-us" href="/contact-us.html">
<span class="material-symbols-outlined text-[20px] text-lagoon-blue">chat</span>
<span>Schedule WhatsApp Consultation</span>
</a>
<button class="px-space-lg py-space-md rounded-lg bg-surface-container-lowest/10 hover:bg-surface-container-lowest/20 backdrop-blur-md text-surface-container-lowest font-label-lg text-label-lg transition-colors flex items-center justify-center gap-space-xs text-center" onclick="downloadBrochureAlert()">
<span class="material-symbols-outlined text-[20px] text-sunset-gold">download</span>
<span>Download Membership Brochure (PDF)</span>
</button>
</div>
</div>
</section>
<!-- Interactive Script for EMI Calculator & Alerts -->
<script>
    let currentTier = 'gold';
    const tierData = {
      silver: { price: 149000, nights: 6, name: 'Silver Explorer (6 Nights/Yr)' },
      gold: { price: 285000, nights: 12, name: 'Gold Club (12 Nights/Yr)' },
      platinum: { price: 495000, nights: 21, name: 'Platinum Elite (21 Nights/Yr)' }
    };

    function selectCalcTier(tier) {
      currentTier = tier;
      document.querySelectorAll('.tier-btn').forEach(btn => {
        btn.classList.remove('bg-coral-vibrant', 'text-on-primary', 'shadow-md');
        btn.classList.add('bg-surface-ice', 'text-lagoon-blue');
      });

      const activeBtn = document.getElementById('calc-' + tier);
      if (activeBtn) {
        activeBtn.classList.remove('bg-surface-ice', 'text-lagoon-blue');
        activeBtn.classList.add('bg-coral-vibrant', 'text-on-primary', 'shadow-md');
      }
      updateEMI();
    }

    function updateEMI() {
      const slider = document.getElementById('tenure-range');
      const tenure = parseInt(slider.value, 10);
      document.getElementById('tenure-label').textContent = tenure + ' Months';

      const data = tierData[currentTier];
      const emi = Math.round(data.price / tenure);
      const effectivePerNight = Math.round(data.price / (data.nights * 25));

      document.getElementById('monthly-emi').textContent = '₹' + emi.toLocaleString('en-IN');
      document.getElementById('summary-tier').textContent = data.name;
      document.getElementById('summary-total').textContent = '₹' + data.price.toLocaleString('en-IN');
      document.getElementById('summary-per-night').textContent = '₹' + effectivePerNight.toLocaleString('en-IN') + ' / Night';
    }

    function downloadBrochureAlert() {
      alert("Happy Miles Dream Hospitality 2025 Membership Brochure is preparing for download. You may also contact care@happymilesdreamhospitality.com for the complete digital dossier.");
    }
  </script>
</div></main><footer class="w-full bg-deep-navy text-surface-container-low shadow-[0_1px_8px_rgba(0,0,0,0.08)]"><div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin py-space-xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter"><div class="flex flex-col gap-space-md"><div class="flex items-center gap-space-sm"><div class="w-9 h-9 rounded-lg bg-lagoon-blue flex items-center justify-center text-sunset-gold"><span class="material-symbols-outlined text-[20px]">hotel_class</span></div><div class="flex flex-col"><span class="font-label-lg text-label-lg uppercase tracking-wide text-surface-container-lowest">Happy Miles Dream</span><span class="font-label-sm text-label-sm uppercase tracking-wider text-sunset-gold">Hospitality</span></div></div><p class="font-body-sm text-body-sm text-surface-dim leading-relaxed">Crafting peerless luxury vacation ownership, coastal sanctuaries, and transformative hospitality journeys tailored for distinguished families and discerning travelers across Asia.</p><div class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-tertiary/70 text-sunset-gold font-label-sm text-label-sm max-w-max shadow-[0_1px_4px_rgba(0,0,0,0.2)]"><span class="material-symbols-outlined text-[14px]">verified</span><span>IATA Affiliate Partner &amp; Govt. Regd. Enterprise</span></div></div><div class="flex flex-col gap-space-sm"><h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-semibold">Verticals &amp; Offerings</h4><ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-surface-dim"><li class="hover:text-sunset-gold transition-colors"><a data-path="verticals" href="/benefits.html">Luxury Vacation Ownership</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="verticals" href="/benefits.html">Coastal Beach Villas</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="verticals" href="/benefits.html">MICE &amp; Corporate Retreats</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="verticals" href="/benefits.html">Culinary Wellness Resorts</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="verticals" href="/benefits.html">Exchange Escapes</a></li></ul></div><div class="flex flex-col gap-space-sm"><h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-semibold">Destinations &amp; Stays</h4><ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-surface-dim"><li class="hover:text-sunset-gold transition-colors"><a data-path="destinations" href="/destinations.html">Goa Sunset Shore</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="destinations" href="/destinations.html">Andaman Coral Bay</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="destinations" href="/destinations.html">Kerala Lagoon Haven</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="destinations" href="/destinations.html">Puri Coastal Sanctuary</a></li><li class="hover:text-sunset-gold transition-colors"><a data-path="destinations" href="/destinations.html">International Gateways</a></li></ul></div><div class="flex flex-col gap-space-sm"><h4 class="font-headline-sm text-headline-sm text-surface-container-lowest font-semibold">Registered Office</h4><div class="font-body-sm text-body-sm text-surface-dim space-y-space-xs"><p>AVS House, 42/1A Gurupada Halder Road, Kolkata - 700026, West Bengal, India.</p><p class="text-surface-container-lowest font-medium">Phone: 1800 2033 188 / 1800-309-8800</p></div><a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-surface-container-lowest text-deep-navy font-label-md text-label-md hover:bg-sunset-gold transition-colors mt-space-xs max-w-max" data-path="connect-us" href="/contact-us.html"><span class="material-symbols-outlined text-[18px] text-lagoon-blue">chat</span><span>WhatsApp Support</span></a></div></div><div class="bg-on-background/70 py-space-md"><div class="max-w-7xl mx-auto px-margin-mobile lg:px-margin flex flex-col md:flex-row items-center justify-between gap-space-sm font-label-sm text-label-sm text-surface-dim"><p>© 2025 The Happy Miles Dream Hospitality Ltd. • Registered at Kolkata, West Bengal.</p><div class="flex items-center gap-space-md"><a class="hover:text-sunset-gold transition-colors" data-path="privacy-policy" href="#">Privacy Policy</a><span>|</span><a class="hover:text-sunset-gold transition-colors" data-path="terms-of-membership" href="#">Terms of Membership</a><span>|</span><span class="flex items-center gap-space-xs text-sunset-gold"><span class="material-symbols-outlined text-[14px]">shield</span>256-Bit SSL Secured</span></div></div></div></footer>
@endverbatim
@endsection
