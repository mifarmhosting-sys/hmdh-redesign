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
@include('partials.design-header', ['active' => 'verticals'])
@verbatim
<main class="w-full pt-[116px] bg-background min-h-screen"><div class="flex flex-col w-full">
<!-- Hero Section -->
<section class="relative w-full bg-gradient-to-b from-surface-ice via-surface to-surface-bright py-space-xl overflow-hidden">
<!-- Ambient decorative blobs -->
<div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-primary-fixed/40 blur-3xl pointer-events-none"></div>
<div class="absolute top-1/2 -left-20 w-80 h-80 rounded-full bg-secondary-fixed/30 blur-3xl pointer-events-none"></div>
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin relative z-10">
<!-- Breadcrumb -->
<nav class="flex items-center gap-space-xs text-label-sm font-label-sm uppercase tracking-widest text-on-surface-variant mb-space-md">
<a class="hover:text-primary transition-colors" data-path="home" href="/">Home</a>
<span class="text-outline">/</span>
<span class="text-coral-vibrant font-bold">Verticals &amp; Member Benefits</span>
</nav>
<!-- Editorial Hero Header -->
<div class="max-w-4xl flex flex-col gap-space-sm">
<div class="inline-flex items-center gap-space-xs self-start px-3 py-1.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm uppercase tracking-wider">
<span class="material-symbols-outlined text-[15px] text-sunset-gold">verified</span>
          The Happy Miles Privilege Passport
        </div>
<h1 class="font-headline-xl text-headline-xl text-deep-navy tracking-tight leading-tight">
          Exclusive Verticals &amp; Privileges <span class="text-lagoon-blue">Beyond Ordinary Vacations</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl leading-relaxed">
          From complimentary gourmet dining vouchers to serene riverside day excursions, holistic wellness escapes, and milestone celebrations — explore the curated lifestyle privileges accompanying your Happy Miles membership.
        </p>
</div>
<!-- Quick Privilege Counter Strip (Inspired by clean stats bar) -->
<div class="mt-space-xl grid grid-cols-2 lg:grid-cols-4 gap-gutter p-space-lg rounded-xl bg-surface-container-lowest shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)]">
<div class="flex items-center gap-space-md min-w-0">
<div class="w-12 h-12 rounded-lg bg-surface-ice flex items-center justify-center text-lagoon-blue flex-shrink-0">
<span class="material-symbols-outlined text-headline-sm">category</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-lg text-headline-lg text-deep-navy leading-none">4</span>
<span class="font-label-md text-label-md text-on-surface-variant truncate mt-1">Core Lifestyle Verticals</span>
</div>
</div>
<div class="flex items-center gap-space-md min-w-0">
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-coral-vibrant flex-shrink-0">
<span class="material-symbols-outlined text-headline-sm">restaurant</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-lg text-headline-lg text-deep-navy leading-none">150+</span>
<span class="font-label-md text-label-md text-on-surface-variant truncate mt-1">Affiliated Dining Partners</span>
</div>
</div>
<div class="flex items-center gap-space-md min-w-0">
<div class="w-12 h-12 rounded-lg bg-surface-ice flex items-center justify-center text-sunset-gold flex-shrink-0">
<span class="material-symbols-outlined text-headline-sm">weekend</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-lg text-headline-lg text-deep-navy leading-none">35+</span>
<span class="font-label-md text-label-md text-on-surface-variant truncate mt-1">Curated Day-Out Havens</span>
</div>
</div>
<div class="flex items-center gap-space-md min-w-0">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-headline-sm">workspace_premium</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-headline-lg text-headline-lg text-deep-navy leading-none">100%</span>
<span class="font-label-md text-label-md text-on-surface-variant truncate mt-1">Guaranteed Redemption</span>
</div>
</div>
</div>
</div>
</section>
<!-- Section 1: The 4 Distinct Pillars of Hospitality -->
<section class="w-full py-space-xl bg-surface-bright">
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin">
<!-- Section Header -->
<div class="text-center max-w-2xl mx-auto mb-space-xl flex flex-col items-center">
<span class="font-label-sm text-label-sm text-coral-vibrant uppercase tracking-widest">Our Holistic Ecosystem</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy mt-1">The 4 Pillars of Happy Miles Hospitality</h2>
<div class="w-16 h-1 bg-coral-vibrant rounded-full mt-3"></div>
<p class="font-body-md text-body-md text-on-surface-variant mt-3">
          Beyond night stays, unlock rich lifestyle experiences designed to make every week, weekend, and milestone momentous.
        </p>
</div>
<!-- 4 Pillars Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Card 1: Gourmet & Culinary -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.14)] transition-all flex flex-col justify-between group">
<div>
<div class="relative w-full h-52 rounded-lg overflow-hidden mb-space-md">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Lavish gourmet grill dining spread with live barbecue skewer flames, succulent starters, fine table settings, warm ambient lighting in high-end restaurant with modern hospitality ambiance" src="/images/design/a0eb74fcd1e7.jpg"/>
<div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-coral-vibrant text-on-primary font-label-sm text-label-sm">
                Complimentary Dining Included
              </div>
<div class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-deep-navy/80 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">restaurant_menu</span>
                Barbeque Nation Partner
              </div>
</div>
<div class="flex items-center gap-space-xs text-sunset-gold mb-1">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">outdoor_grill</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Pillar I • Culinary Delights</span>
</div>
<h3 class="font-headline-md text-headline-md text-deep-navy">Gourmet &amp; Culinary Privileges</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">
              Savor unlimited gourmet grills, celebratory dinners, and chef-curated tastings. All Happy Miles members receive complimentary dining credits and VIP table allocations across premier restaurant partners nationwide.
            </p>
<ul class="mt-space-md space-y-2 font-body-sm text-body-sm text-deep-navy">
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Complimentary Barbeque Nation buffet vouchers on enrollment &amp; renewal</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Priority table reservations &amp; VIP lounge access across metro cities</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Flat 20% privilege discount on all F&amp;B billings at affiliated resort properties</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Signature celebratory cake &amp; chef surprise on birthdays &amp; anniversaries</span>
</li>
</ul>
</div>
<div class="pt-space-md mt-space-md bg-surface-ice rounded-lg p-space-sm flex items-center justify-between">
<span class="font-label-md text-label-md text-lagoon-blue">Includes Pan-India Barbeque Nation Network</span>
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-coral-vibrant hover:text-secondary font-bold transition-colors" href="#culinary-spotlight">
              Explore Dining Partners
              <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 2: Day Excursions & Weekend Getaways -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.14)] transition-all flex flex-col justify-between group">
<div>
<div class="relative w-full h-52 rounded-lg overflow-hidden mb-space-md">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Serene scenic luxury riverside resort at Kolaghat West Bengal, with sparkling outdoor pool, tropical landscaped gardens, outdoor cabanas, and sunlit river waters" src="/images/design/e876ea0de0a5.jpg"/>
<div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-lagoon-blue text-on-primary font-label-sm text-label-sm">
                Unlimited Day Access for Pass Holders
              </div>
<div class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-deep-navy/80 backdrop-blur-md text-surface-ice font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">pool</span>
                Kolaghat &amp; Mandarmani
              </div>
</div>
<div class="flex items-center gap-space-xs text-sunset-gold mb-1">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">kayaking</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Pillar II • Micro-Vacations</span>
</div>
<h3 class="font-headline-md text-headline-md text-deep-navy">Day Excursions &amp; Weekend Getaways</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">
              Escape the city routine without taking leave. Enjoy full-day resort access with private river-view day-rooms, swimming pool access, authentic regional lunches, and evening high tea.
            </p>
<ul class="mt-space-md space-y-2 font-body-sm text-body-sm text-deep-navy">
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Day-use riverfront AC rooms at Rupasi Rupnarayan Kuthi, Kolaghat</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Lavish multi-course traditional Bengali or North Indian feast included</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Full access to swimming pools, kid zones, lawns, and indoor gaming halls</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Sunset high tea with freshly prepared piping hot savory bites</span>
</li>
</ul>
</div>
<div class="pt-space-md mt-space-md bg-surface-ice rounded-lg p-space-sm flex items-center justify-between">
<span class="font-label-md text-label-md text-lagoon-blue">Within 2 Hours from Major Cities</span>
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-coral-vibrant hover:text-secondary font-bold transition-colors" href="#excursion-spotlight">
              View Excursion Havens
              <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 3: Spa & Wellness Retreats -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.14)] transition-all flex flex-col justify-between group">
<div>
<div class="relative w-full h-52 rounded-lg overflow-hidden mb-space-md">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="High-end wellness retreat spa sanctuary in Gangtok Sikkim overlooking mist-covered mountains, featuring Ayurvedic herbal oils, lotus bowl, soft candle illumination and tranquil wooden finishes" src="/images/design/acc8dc64f547.jpg"/>
<div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-deep-navy text-sunset-gold font-label-sm text-label-sm">
                Wellness Sanctuary Privileges
              </div>
<div class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-deep-navy/80 backdrop-blur-md text-surface-ice font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">spa</span>
                Rishikesh &amp; Gangtok
              </div>
</div>
<div class="flex items-center gap-space-xs text-sunset-gold mb-1">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">spa</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Pillar III • Rejuvenation</span>
</div>
<h3 class="font-headline-md text-headline-md text-deep-navy">Spa, Wellness &amp; Ayurveda Retreats</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">
              Indulge in holistic therapies amidst tranquility. Our affiliated wellness retreats in Rishikesh, Gangtok, Goa, and Kerala offer certified Ayurvedic rejuvenation, deep tissue therapies, and daily yoga immersions.
            </p>
<ul class="mt-space-md space-y-2 font-body-sm text-body-sm text-deep-navy">
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Complimentary annual couples wellness session at partner retreat spas</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>25% flat privilege discount on Ayurvedic Abhyanga &amp; Swedish therapies</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Himalayan herb steam detox baths &amp; aromatherapy foot reflexology</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Riverside sunrise meditation &amp; pranayama guided sessions</span>
</li>
</ul>
</div>
<div class="pt-space-md mt-space-md bg-surface-ice rounded-lg p-space-sm flex items-center justify-between">
<span class="font-label-md text-label-md text-lagoon-blue">Summit Spa &amp; Ganges Retreats</span>
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-coral-vibrant hover:text-secondary font-bold transition-colors" href="#membership-matrix">
              Discover Spa Credits
              <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 4: Private Celebrations & Milestone Events -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)] hover:shadow-[0_16px_32px_-4px_rgba(4,82,121,0.14)] transition-all flex flex-col justify-between group">
<div>
<div class="relative w-full h-52 rounded-lg overflow-hidden mb-space-md">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Elegant evening beachfront celebration banquet with warm fairy lights, floral centerpieces, celebratory tables set on the shores of Puri with gentle sea waves in background" src="/images/design/6075bb8a6b60.jpg"/>
<div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm">
                VIP Event Concierge
              </div>
<div class="absolute bottom-3 right-3 px-2.5 py-1 rounded-lg bg-deep-navy/80 backdrop-blur-md text-sunset-gold font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">celebration</span>
                Bespoke Planning
              </div>
</div>
<div class="flex items-center gap-space-xs text-sunset-gold mb-1">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">celebration</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Pillar IV • Milestone Celebrations</span>
</div>
<h3 class="font-headline-md text-headline-md text-deep-navy">Private Celebrations &amp; Milestone Events</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">
              Host your dream events with dedicated event curators. Whether an intimate sunset anniversary at Puri beach or a grand family reunion in Udaipur, our vertical provides turnkey event planning and privileged resort rates.
            </p>
<ul class="mt-space-md space-y-2 font-body-sm text-body-sm text-deep-navy">
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Dedicated on-ground event manager for weddings, jubilees &amp; reunions</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Complimentary banquet hall rental upgrade on milestone bookings</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Curated themed flower decor, music acoustics, and custom gourmet catering</span>
</li>
<li class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">check_circle</span>
<span>Up to 40% subsidized room tariffs for large extended family contingents</span>
</li>
</ul>
</div>
<div class="pt-space-md mt-space-md bg-surface-ice rounded-lg p-space-sm flex items-center justify-between">
<span class="font-label-md text-label-md text-lagoon-blue">Zero Coordination Stress</span>
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-coral-vibrant hover:text-secondary font-bold transition-colors" href="#vip-concierge">
              Request Event Curation
              <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Section 2: Culinary Spotlight (Barbeque Nation & Gourmet Network) -->
<section class="w-full py-space-xl bg-surface-container-low" id="culinary-spotlight">
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin">
<div class="text-center max-w-2xl mx-auto mb-space-xl flex flex-col items-center">
<span class="font-label-sm text-label-sm text-coral-vibrant uppercase tracking-widest">Exclusive Dine-In Collaboration</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy mt-1">Savor More: Barbeque Nation &amp; Gourmet Privileges</h2>
<div class="w-16 h-1 bg-sunset-gold rounded-full mt-3"></div>
<p class="font-body-md text-body-md text-on-surface-variant mt-3">
          Happy Miles proudly connects club members with India's most celebrated casual dining chain and premier luxury resort restaurants.
        </p>
</div>
<!-- Split Layout Showcase -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-stretch">
<!-- Left: Barbeque Nation Benefit Structure -->
<div class="lg:col-span-7 rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)] flex flex-col justify-between">
<div>
<div class="flex items-center justify-between pb-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-12 h-12 rounded-lg bg-coral-vibrant flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined text-headline-sm">restaurant</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-deep-navy">Barbeque Nation Privilege Vouchers</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Live grills on table, unlimited skewers, and signature desserts</p>
</div>
</div>
<span class="px-3 py-1 rounded-full bg-sunset-gold/20 text-on-secondary-container font-label-sm text-label-sm uppercase">Pan-India Access</span>
</div>
<!-- Tier Voucher Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-sm mt-space-md">
<div class="p-space-md rounded-lg bg-surface-container-low flex flex-col items-center text-center">
<span class="px-2 py-0.5 rounded bg-surface-variant font-label-sm text-label-sm text-on-surface">SILVER TIER</span>
<span class="font-headline-md text-headline-md text-primary mt-2">2 Vouchers</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Complimentary Buffets Annually</p>
<span class="font-label-sm text-label-sm text-coral-vibrant mt-2">10% Food Discount</span>
</div>
<div class="p-space-md rounded-lg bg-surface-ice flex flex-col items-center text-center shadow-sm">
<span class="px-2 py-0.5 rounded bg-lagoon-blue font-label-sm text-label-sm text-on-primary">GOLD TIER</span>
<span class="font-headline-md text-headline-md text-lagoon-blue mt-2">4 Vouchers</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Complimentary Buffets Annually</p>
<span class="font-label-sm text-label-sm text-coral-vibrant mt-2">15% Food Discount</span>
</div>
<div class="p-space-md rounded-lg bg-deep-navy text-on-primary flex flex-col items-center text-center shadow-md">
<span class="px-2 py-0.5 rounded bg-sunset-gold font-label-sm text-label-sm text-deep-navy">PLATINUM ELITE</span>
<span class="font-headline-md text-headline-md text-sunset-gold mt-2">6 Vouchers</span>
<p class="font-body-sm text-body-sm text-surface-container-highest mt-1">Complimentary Buffets Annually</p>
<span class="font-label-sm text-label-sm text-secondary-container mt-2">20% Unlimited Discount</span>
</div>
</div>
<!-- Cuisine categories pill badges -->
<div class="mt-space-lg">
<span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant block mb-2">Available Categories Across 150+ Affiliates</span>
<div class="flex flex-wrap gap-space-xs">
<span class="px-3 py-1.5 rounded-lg bg-surface-ice text-primary font-body-sm text-body-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-coral-vibrant">outdoor_grill</span> Live Charcoal Grills
                </span>
<span class="px-3 py-1.5 rounded-lg bg-surface-ice text-primary font-body-sm text-body-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-sunset-gold">kebab_dining</span> North Indian Royal Mughlai
                </span>
<span class="px-3 py-1.5 rounded-lg bg-surface-ice text-primary font-body-sm text-body-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-lagoon-blue">set_meal</span> Coastal Seafood Pavilions
                </span>
<span class="px-3 py-1.5 rounded-lg bg-surface-ice text-primary font-body-sm text-body-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-primary">local_bar</span> Rooftop Sky Lounges &amp; Cafes
                </span>
</div>
</div>
</div>
<div class="mt-space-lg pt-space-md flex flex-wrap items-center justify-between gap-space-sm bg-surface-container-low p-space-md rounded-lg">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant">info</span>
<span class="font-body-sm text-body-sm text-on-surface">Vouchers delivered instantly to your registered Happy Miles mobile app</span>
</div>
<a class="px-4 py-2 rounded-lg bg-coral-vibrant text-on-primary font-label-md text-label-md shadow-sm hover:bg-secondary transition-all" data-path="member-portal" href="/member/login">Claim Vouchers</a>
</div>
</div>
<!-- Right: Verified Member Testimonial Card (From Screen Reference) -->
<div class="lg:col-span-5 rounded-xl bg-deep-navy text-on-primary p-space-lg shadow-xl flex flex-col justify-between relative overflow-hidden">
<div class="absolute -right-12 -bottom-12 w-48 h-48 bg-lagoon-blue/30 rounded-full blur-2xl"></div>
<div>
<div class="flex items-center justify-between mb-space-md">
<span class="px-3 py-1 rounded-full bg-sunset-gold font-label-sm text-label-sm text-deep-navy font-bold uppercase tracking-wider">Verified Dining Review</span>
<div class="flex items-center gap-1 text-sunset-gold">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
</div>
<span class="material-symbols-outlined text-[48px] text-sunset-gold/40">format_quote</span>
<p class="font-body-lg text-body-lg text-surface-bright italic leading-relaxed">
              "Recently visited Barbeque Nation for our wedding anniversary celebration, and all arrangements were made effortlessly by Happy Miles hospitality desk. The complimentary vouchers were applied in a single scan, and the restaurant even presented us with a lovely custom cake!"
            </p>
</div>
<div class="mt-space-lg pt-space-md bg-tertiary-container/40 p-space-md rounded-lg flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-12 h-12 rounded-full bg-sunset-gold flex items-center justify-center text-deep-navy font-bold text-headline-sm">
                NT
              </div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-primary">Nitesh Tiwari &amp; Srishty</span>
<span class="font-label-sm text-label-sm text-sunset-gold">Gold Club Members • Kolkata</span>
</div>
</div>
<div class="flex items-center gap-1 text-tertiary-fixed text-label-sm font-label-sm">
<span class="material-symbols-outlined text-[16px] text-sunset-gold">check_circle</span>
<span>Nov 2024 Dine-In</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section 3: Signature Day-Out Excursion Spotlight (Kolaghat & Regional Getaways) -->
<section class="w-full py-space-xl bg-surface-bright" id="excursion-spotlight">
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin">
<!-- Section Title with Ribbon Accent -->
<div class="text-center max-w-2xl mx-auto mb-space-xl flex flex-col items-center">
<span class="font-label-sm text-label-sm text-coral-vibrant uppercase tracking-widest">No-Leave Weekend Vacations</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy mt-1">Spotlight: Rupasi Rupnarayan Kuthi, Kolaghat</h2>
<!-- Ornamental wave SVG divider matching inspiration -->
<svg class="w-24 h-4 text-lagoon-blue my-2" fill="none" viewbox="0 0 100 20">
<path d="M0 10 Q 25 0, 50 10 T 100 10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2.5"></path>
</svg>
<p class="font-body-md text-body-md text-on-surface-variant">
          Wake up, drive to paradise, indulge all day, and return refreshed by dinner. Discover our most popular day excursion retreat.
        </p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
<!-- Left: Image Gallery & Testimonial -->
<div class="lg:col-span-6 flex flex-col gap-space-md">
<div class="relative rounded-xl overflow-hidden shadow-lg h-72">
<img class="w-full h-full object-cover" data-alt="Breathtaking riverfront view of the Rupnarayan River from a luxury balcony resort room in Kolaghat West Bengal, with palm trees, sun loungers and tranquil breeze" src="/images/design/bbbf1882e55c.jpg"/>
<div class="absolute bottom-4 left-4 bg-deep-navy/85 backdrop-blur-md px-4 py-2 rounded-lg text-on-primary">
<span class="font-label-sm text-label-sm text-sunset-gold uppercase">Featured Excursion</span>
<p class="font-headline-sm text-headline-sm leading-tight">Rupasi Rupnarayan Kuthi • Kolaghat</p>
</div>
</div>
<!-- Real Member Quote Box -->
<div class="p-space-md rounded-xl bg-surface-container-low shadow-sm flex items-start gap-space-md">
<span class="material-symbols-outlined text-coral-vibrant text-[32px] flex-shrink-0">format_quote</span>
<div>
<p class="font-body-md text-body-md text-deep-navy italic">
                "We were provided with a beautiful river-view room, breathtaking view of the river, delicious Bengali thali lunch, and evening tea with hot fish fry. The hospitality from Happy Miles was unmatched!"
              </p>
<div class="flex items-center justify-between mt-space-sm pt-space-xs">
<span class="font-label-md text-label-md text-lagoon-blue font-bold">Subhashis &amp; Madhumita Roy Chowdhury</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Verified Member Excursion</span>
</div>
</div>
</div>
</div>
<!-- Right: Day Schedule Timeline & Inclusion Pack -->
<div class="lg:col-span-6 rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)]">
<div class="flex items-center justify-between pb-space-sm">
<h3 class="font-headline-md text-headline-md text-deep-navy">The Perfect One-Day Itinerary</h3>
<span class="px-3 py-1 rounded-full bg-surface-ice text-lagoon-blue font-label-sm text-label-sm font-bold">All-Inclusive</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">Available every weekend &amp; weekday with direct voucher booking.</p>
<!-- Timeline -->
<div class="space-y-4">
<div class="flex items-start gap-space-md">
<div class="w-9 h-9 rounded-full bg-coral-vibrant text-on-primary flex items-center justify-center font-bold text-label-sm flex-shrink-0">
                10 AM
              </div>
<div class="min-w-0">
<h4 class="font-headline-sm text-headline-sm text-deep-navy text-[16px] leading-snug">Arrival &amp; Royal Welcome Drink</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Check-in to your private river-view day-room with fresh tropical coolers.</p>
</div>
</div>
<div class="flex items-start gap-space-md">
<div class="w-9 h-9 rounded-full bg-lagoon-blue text-on-primary flex items-center justify-center font-bold text-label-sm flex-shrink-0">
                11 AM
              </div>
<div class="min-w-0">
<h4 class="font-headline-sm text-headline-sm text-deep-navy text-[16px] leading-snug">Resort Immersion &amp; Infinity Pool</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Swim, enjoy badminton/table tennis in the recreation lounge, or stroll the lush lawns.</p>
</div>
</div>
<div class="flex items-start gap-space-md">
<div class="w-9 h-9 rounded-full bg-sunset-gold text-deep-navy flex items-center justify-center font-bold text-label-sm flex-shrink-0">
                1:30 PM
              </div>
<div class="min-w-0">
<h4 class="font-headline-sm text-headline-sm text-deep-navy text-[16px] leading-snug">Authentic Feast: Royal Bengali / Indian Thali</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Gourmet spread featuring seasonal fish, aromatic rice, mutton rogan josh, and traditional mishti.</p>
</div>
</div>
<div class="flex items-start gap-space-md">
<div class="w-9 h-9 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center font-bold text-label-sm flex-shrink-0">
                4:30 PM
              </div>
<div class="min-w-0">
<h4 class="font-headline-sm text-headline-sm text-deep-navy text-[16px] leading-snug">Sunset Breeze &amp; Evening High Tea</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Relax on the riverbank terrace with Darjeeling tea, roasted coffee, and crispy savories.</p>
</div>
</div>
<div class="flex items-start gap-space-md">
<div class="w-9 h-9 rounded-full bg-deep-navy text-on-primary flex items-center justify-center font-bold text-label-sm flex-shrink-0">
                6:30 PM
              </div>
<div class="min-w-0">
<h4 class="font-headline-sm text-headline-sm text-deep-navy text-[16px] leading-snug">Memorable Departure &amp; Goodies</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Check-out with a handcrafted Happy Miles memento gift pack.</p>
</div>
</div>
</div>
<div class="mt-space-lg pt-space-md flex flex-wrap items-center justify-between gap-space-md">
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[18px] text-lagoon-blue">pin_drop</span>
<span>Kolkata to Kolaghat: 1.5 Hrs via NH16</span>
</div>
<a class="px-5 py-2.5 rounded-lg bg-coral-vibrant text-on-primary font-label-md text-label-md hover:bg-secondary transition-all shadow-md flex items-center gap-space-xs" data-path="connect-us" href="/contact-us.html">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Reserve Day Pass</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Section 4: Membership Benefit Matrix Comparison -->
<section class="w-full py-space-xl bg-surface-container-low" id="membership-matrix">
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin">
<!-- Section Header -->
<div class="text-center max-w-2xl mx-auto mb-space-xl flex flex-col items-center">
<span class="font-label-sm text-label-sm text-coral-vibrant uppercase tracking-widest">Compare &amp; Choose</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy mt-1">Lifestyle Privilege Matrix by Tier</h2>
<div class="w-16 h-1 bg-coral-vibrant rounded-full mt-3"></div>
<p class="font-body-md text-body-md text-on-surface-variant mt-3">
          Discover which membership tier matches your family's travel, dining, and leisure preferences.
        </p>
</div>
<!-- Comparison Matrix Card -->
<div class="rounded-xl bg-surface-container-lowest shadow-[0_4px_20px_-2px_rgba(11,30,46,0.06)] overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-deep-navy text-on-primary">
<th class="p-space-md font-headline-sm text-headline-sm w-1/3">Privilege / Vertical</th>
<th class="p-space-md text-center">
<div class="flex flex-col items-center">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-surface-container-highest">Explorer Tier</span>
<span class="font-headline-md text-headline-md text-on-primary">SILVER</span>
</div>
</th>
<th class="p-space-md text-center bg-primary">
<div class="flex flex-col items-center">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-sunset-gold">Most Popular</span>
<span class="font-headline-md text-headline-md text-sunset-gold">GOLD CLUB</span>
</div>
</th>
<th class="p-space-md text-center">
<div class="flex flex-col items-center">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary-container">Prestige VIP</span>
<span class="font-headline-md text-headline-md text-secondary-container">PLATINUM ELITE</span>
</div>
</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-high font-body-sm text-body-sm text-deep-navy">
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px]">bed</span>
                  Annual Luxury Resort Nights
                </td>
<td class="p-space-md text-center">6 Nights / Year</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">12 Nights / Year</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">21 Nights / Year</td>
</tr>
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">restaurant</span>
                  Barbeque Nation Vouchers
                </td>
<td class="p-space-md text-center">2 Vouchers / Year</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">4 Vouchers / Year</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">6 Vouchers + VIP Booking</td>
</tr>
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">percent</span>
                  Resort Dining Privilege Discount
                </td>
<td class="p-space-md text-center">10% Off</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">15% Off</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">20% Flat Unlimited Off</td>
</tr>
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px]">weekend</span>
                  Day-Out Excursion Passes
                </td>
<td class="p-space-md text-center">2 Passes (Couple)</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">4 Passes (Family)</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">Unlimited Day Passes*</td>
</tr>
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[18px]">spa</span>
                  Spa &amp; Ayurveda Credit Value
                </td>
<td class="p-space-md text-center">₹2,500 Annual Credit</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">₹5,000 Annual Credit</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">₹10,000 Annual Credit</td>
</tr>
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">support_agent</span>
                  Dedicated Concierge Desk
                </td>
<td class="p-space-md text-center">Standard Support</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">Priority WhatsApp Desk</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">24/7 Personal Travel Manager</td>
</tr>
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-lagoon-blue text-[18px]">flight</span>
                  Flight Subsidy Privileges
                </td>
<td class="p-space-md text-center">1 Ticket Concession</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">2 Domestic Flight Credits</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">4 Flight Credits + Lounge Pass</td>
</tr>
<tr class="hover:bg-surface-ice/40 transition-colors">
<td class="p-space-md font-bold flex items-center gap-space-xs">
<span class="material-symbols-outlined text-coral-vibrant text-[18px]">celebration</span>
                  Celebration &amp; Banquet Subsidy
                </td>
<td class="p-space-md text-center">10% Hall Rental Off</td>
<td class="p-space-md text-center bg-surface-ice/60 font-semibold text-lagoon-blue">20% Hall Rental Off</td>
<td class="p-space-md text-center font-bold text-coral-vibrant">30% Hall Rental + Decor Upgrade</td>
</tr>
</tbody>
<tfoot>
<tr class="bg-surface-container-high">
<td class="p-space-md font-label-md text-label-md text-on-surface-variant">Membership Action</td>
<td class="p-space-md text-center">
<a class="px-4 py-2 rounded-lg bg-surface-container-highest text-primary font-label-md text-label-md hover:bg-lagoon-blue hover:text-on-primary transition-all inline-block" data-path="membership" href="/membership">View Silver</a>
</td>
<td class="p-space-md text-center bg-surface-ice">
<a class="px-5 py-2 rounded-lg bg-coral-vibrant text-on-primary font-label-md text-label-md hover:bg-secondary transition-all shadow-md inline-block" data-path="membership" href="/membership">Join Gold Club</a>
</td>
<td class="p-space-md text-center">
<a class="px-4 py-2 rounded-lg bg-deep-navy text-sunset-gold font-label-md text-label-md hover:bg-primary transition-all inline-block" data-path="membership" href="/membership">Explore Platinum</a>
</td>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</section>
<!-- Section 5: How Member Redemption Works (4-Step Visual Flow) -->
<section class="w-full py-space-xl bg-surface-bright">
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin">
<!-- Section Header -->
<div class="text-center max-w-2xl mx-auto mb-space-xl flex flex-col items-center">
<span class="font-label-sm text-label-sm text-coral-vibrant uppercase tracking-widest">Seamless &amp; Transparent</span>
<h2 class="font-headline-lg text-headline-lg text-deep-navy mt-1">How Member Privilege Redemption Works</h2>
<!-- Ornamental wave SVG divider matching inspiration -->
<svg class="w-24 h-4 text-sunset-gold my-2" fill="none" viewbox="0 0 100 20">
<path d="M0 10 Q 25 0, 50 10 T 100 10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2.5"></path>
</svg>
<p class="font-body-md text-body-md text-on-surface-variant">
          Enjoy zero billing hassles and guaranteed priority reservations across our entire network in 4 effortless steps.
        </p>
</div>
<!-- 4 Step Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter relative">
<!-- Step 1 -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col items-center text-center relative group hover:shadow-md transition-all">
<div class="w-16 h-16 rounded-full bg-surface-ice flex items-center justify-center text-lagoon-blue font-headline-lg text-headline-lg mb-space-md shadow-inner">
<span class="material-symbols-outlined text-[32px]">touch_app</span>
</div>
<span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-primary mb-2">STEP 01</span>
<h3 class="font-headline-sm text-headline-sm text-deep-navy">Select Your Privilege</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
            Browse active dining vouchers, day excursion getaways, wellness credits, or resort stays on the Happy Miles Member App.
          </p>
</div>
<!-- Step 2 -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col items-center text-center relative group hover:shadow-md transition-all">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-coral-vibrant font-headline-lg text-headline-lg mb-space-md shadow-inner">
<span class="material-symbols-outlined text-[32px]">qr_code_2</span>
</div>
<span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-coral-vibrant mb-2">STEP 02</span>
<h3 class="font-headline-sm text-headline-sm text-deep-navy">Instant Digital Pass</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
            Generate your secure encrypted voucher in one tap with unique member confirmation code and instant QR code.
          </p>
</div>
<!-- Step 3 -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col items-center text-center relative group hover:shadow-md transition-all">
<div class="w-16 h-16 rounded-full bg-surface-ice flex items-center justify-center text-sunset-gold font-headline-lg text-headline-lg mb-space-md shadow-inner">
<span class="material-symbols-outlined text-[32px]">headset_mic</span>
</div>
<span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-sunset-gold mb-2">STEP 03</span>
<h3 class="font-headline-sm text-headline-sm text-deep-navy">Concierge Confirmation</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
            Our central hospitality desk coordinates with partner property managers for VIP table seating or riverfront room readiness.
          </p>
</div>
<!-- Step 4 -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col items-center text-center relative group hover:shadow-md transition-all">
<div class="w-16 h-16 rounded-full bg-surface-container-high flex items-center justify-center text-primary font-headline-lg text-headline-lg mb-space-md shadow-inner">
<span class="material-symbols-outlined text-[32px]">sentiment_very_satisfied</span>
</div>
<span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-primary mb-2">STEP 04</span>
<h3 class="font-headline-sm text-headline-sm text-deep-navy">Show Voucher &amp; Enjoy</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
            Present your pass on arrival. Enjoy gourmet banquets, serene spas, or river views with zero billing surprises or paperwork.
          </p>
</div>
</div>
</div>
</section>
<!-- Section 6: High-Conversion VIP Call to Action Banner -->
<section class="w-full py-space-xl bg-surface-container-low" id="vip-concierge">
<div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin">
<div class="relative rounded-2xl bg-gradient-to-r from-deep-navy via-tertiary to-lagoon-blue text-on-primary p-space-xl overflow-hidden shadow-2xl">
<!-- Background decorative wave circles -->
<div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-coral-vibrant/20 blur-3xl pointer-events-none"></div>
<div class="absolute -left-20 -top-20 w-80 h-80 rounded-full bg-sunset-gold/15 blur-3xl pointer-events-none"></div>
<div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-space-lg">
<div class="max-w-2xl text-center lg:text-left">
<div class="inline-flex items-center gap-space-xs px-3 py-1 rounded-full bg-sunset-gold/20 text-sunset-gold font-label-sm text-label-sm uppercase tracking-wider mb-space-sm">
<span class="material-symbols-outlined text-[15px]">stars</span>
              Priority Membership Onboarding
            </div>
<h2 class="font-headline-xl text-headline-xl text-on-primary tracking-tight leading-tight">
              Ready to Unlock Your Lifestyle Privileges?
            </h2>
<p class="font-body-lg text-body-lg text-surface-container-highest mt-3 leading-relaxed">
              Join thousands of satisfied vacation club members enjoying unforgettable holidays, gourmet dining at Barbeque Nation, and weekend riverside retreats.
            </p>
<div class="mt-space-md flex flex-wrap items-center justify-center lg:justify-start gap-space-md text-label-md font-label-md text-surface-bright">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sunset-gold text-[18px]">verified</span> Zero Blackout Dates on Gold &amp; Platinum</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sunset-gold text-[18px]">verified</span> 25-Year Transferable Membership</span>
</div>
</div>
<div class="flex flex-col sm:flex-row lg:flex-col gap-space-sm w-full lg:w-auto flex-shrink-0">
<a class="px-8 py-3.5 rounded-lg bg-coral-vibrant text-on-primary font-label-lg text-label-lg hover:bg-secondary transition-all shadow-lg flex items-center justify-center gap-space-xs text-center" data-path="membership" href="/membership">
<span class="material-symbols-outlined text-[20px]">card_membership</span>
<span>Apply for Membership</span>
</a>
<a class="px-8 py-3.5 rounded-lg bg-surface-container-lowest text-deep-navy font-label-lg text-label-lg hover:bg-surface-ice transition-all shadow-md flex items-center justify-center gap-space-xs text-center" href="https://wa.me/" target="_blank">
<span class="material-symbols-outlined text-[20px] text-coral-vibrant">chat</span>
<span>WhatsApp Concierge Assistance</span>
</a>
</div>
</div>
</div>
</div>
</section>
</div></main><footer class="w-full bg-deep-navy text-surface-bright pt-space-xl pb-space-lg shadow-[0_-4px_20px_-2px_rgba(11,30,46,0.06)]"><div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter pb-space-xl"><div class="flex flex-col gap-space-md"><div class="flex items-center gap-space-sm"><div class="w-10 h-10 rounded-lg bg-lagoon-blue flex items-center justify-center text-on-primary shadow-sm"><span class="material-symbols-outlined text-headline-sm">hotel_class</span></div><div class="flex flex-col"><span class="font-headline-sm text-headline-sm text-on-primary tracking-tight leading-none">HAPPY MILES</span><span class="font-label-sm text-label-sm text-sunset-gold uppercase tracking-widest leading-none mt-1">Dream Hospitality</span></div></div><p class="font-body-sm text-body-sm text-surface-container-highest leading-relaxed">Curating distinguished luxury resort vacations, heritage circuits, and bespoke leisure memberships with celebrated Indian hospitality excellence.</p><div class="flex items-center gap-space-xs"><span class="px-2 py-1 rounded bg-tertiary font-label-sm text-label-sm text-tertiary-fixed">Govt. Regd. Tourism Partner</span><span class="px-2 py-1 rounded bg-tertiary font-label-sm text-label-sm text-sunset-gold">IATA Affiliate</span></div><div class="flex items-center gap-space-sm pt-2"><a class="w-8 h-8 rounded-full bg-tertiary hover:bg-lagoon-blue hover:text-on-primary flex items-center justify-center transition-colors text-surface-bright" href="#"><span class="material-symbols-outlined text-[16px]">share</span></a><a class="w-8 h-8 rounded-full bg-tertiary hover:bg-lagoon-blue hover:text-on-primary flex items-center justify-center transition-colors text-surface-bright" href="#"><span class="material-symbols-outlined text-[16px]">public</span></a><a class="w-8 h-8 rounded-full bg-tertiary hover:bg-lagoon-blue hover:text-on-primary flex items-center justify-center transition-colors text-surface-bright" href="#"><span class="material-symbols-outlined text-[16px]">camera</span></a></div></div><div class="flex flex-col gap-space-md"><h3 class="font-headline-sm text-headline-sm text-on-primary border-l-2 border-coral-vibrant pl-space-xs">Verticals &amp; Offerings</h3><ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-surface-container-highest"><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="verticals" href="/benefits.html"><span class="material-symbols-outlined text-[14px] text-lagoon-blue">restaurant</span>Dining Privileges</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="verticals" href="/benefits.html"><span class="material-symbols-outlined text-[14px] text-lagoon-blue">pool</span>Day Excursions &amp; Resorts</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="verticals" href="/benefits.html"><span class="material-symbols-outlined text-[14px] text-lagoon-blue">spa</span>Wellness &amp; Spa Sanctuaries</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="verticals" href="/benefits.html"><span class="material-symbols-outlined text-[14px] text-lagoon-blue">celebration</span>Private Celebrations</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="verticals" href="/benefits.html"><span class="material-symbols-outlined text-[14px] text-lagoon-blue">flight_takeoff</span>Travel Concierge</a></li></ul></div><div class="flex flex-col gap-space-md"><h3 class="font-headline-sm text-headline-sm text-on-primary border-l-2 border-sunset-gold pl-space-xs">Destinations &amp; Stays</h3><ul class="flex flex-col gap-space-sm font-body-sm text-body-sm text-surface-container-highest"><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="destination" href="/destinations.html"><span class="material-symbols-outlined text-[14px] text-sunset-gold">landscape</span>North &amp; Himalayan Circuits</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="destination" href="/destinations.html"><span class="material-symbols-outlined text-[14px] text-sunset-gold">water</span>Coastal Escapes</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="destination" href="/destinations.html"><span class="material-symbols-outlined text-[14px] text-sunset-gold">fort</span>Heritage Rajasthan</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="destination" href="/destinations.html"><span class="material-symbols-outlined text-[14px] text-sunset-gold">explore</span>Bhutan &amp; Nepal Cross-Border</a></li><li><a class="hover:text-sunset-gold transition-colors flex items-center gap-space-xs" data-path="properties" href="/our-hotels.html"><span class="material-symbols-outlined text-[14px] text-sunset-gold">apartment</span>All Resort Stays</a></li></ul></div><div class="flex flex-col gap-space-md"><h3 class="font-headline-sm text-headline-sm text-on-primary border-l-2 border-primary-fixed pl-space-xs">Registered Office</h3><div class="flex items-start gap-space-xs text-body-sm font-body-sm text-surface-container-highest"><span class="material-symbols-outlined text-[18px] text-sunset-gold mt-1 flex-shrink-0">business</span><p>AVS House, 42/1A Gurupada Halder Road, Kolkata - 700026, West Bengal, India</p></div><div class="flex items-center gap-space-xs text-body-sm font-body-sm text-surface-container-highest"><span class="material-symbols-outlined text-[18px] text-sunset-gold flex-shrink-0">call</span><p>1800 2033 188 / 1800-309-8800</p></div><div class="pt-space-xs"><a class="inline-flex items-center gap-space-xs px-4 py-2 rounded-lg bg-surface-container font-label-md text-label-md text-deep-navy hover:bg-surface-ice hover:text-lagoon-blue transition-all" href="https://wa.me/" target="_blank"><span class="material-symbols-outlined text-[18px] text-lagoon-blue">chat</span><span>WhatsApp Support</span></a></div></div></div><div class="pt-space-md mt-space-md flex flex-col md:flex-row items-center justify-between gap-space-sm text-label-md font-label-md text-surface-container-highest text-center md:text-left"><p>© 2025 The Happy Miles Dream Hospitality Ltd. All rights reserved. Registered at Kolkata, West Bengal.</p><div class="flex items-center gap-space-xs text-sunset-gold"><span class="material-symbols-outlined text-[16px]">verified_user</span><span>256-Bit SSL Secured</span></div></div></div></footer>
@endverbatim
@endsection
