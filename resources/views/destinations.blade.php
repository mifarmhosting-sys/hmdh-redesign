@extends('layouts.design')
@section('title', "Happy Miles Dream Hospitality")
@section('body_class', "bg-surface font-body-md text-on-surface")
@push('head')
@verbatim
<style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style>
@endverbatim
@endpush
@section('content')
@verbatim
@endverbatim
@include('partials.design-header', ['active' => 'destinations'])
@verbatim
<main class="w-full pt-[116px] bg-surface min-h-[calc(100vh-28rem)]"><div class="flex flex-col w-full">
<!-- Sub-Hero Header & Breadcrumbs Section -->
<section class="relative w-full bg-deep-navy text-on-primary overflow-hidden py-16 md:py-20">
<div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#94cdfa_1px,transparent_1px)] [background-size:24px_24px]"></div>
<div class="absolute -right-32 -bottom-32 w-96 h-96 rounded-full bg-lagoon-blue/40 blur-3xl pointer-events-none"></div>
<div class="absolute -left-20 top-0 w-80 h-80 rounded-full bg-sunset-gold/20 blur-3xl pointer-events-none"></div>
<div class="relative max-w-7xl mx-auto px-margin">
<!-- Breadcrumb -->
<nav class="flex items-center gap-space-xs text-body-sm font-body-sm text-surface-container-high/80 mb-6">
<a class="hover:text-sunset-gold transition-colors" data-path="home" href="/">Home</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-sunset-gold font-medium">Our Destinations</span>
</nav>
<div class="flex flex-col max-w-4xl">
<!-- Exclusive Badge -->
<div class="inline-flex items-center gap-space-xs self-start px-3.5 py-1.5 rounded-full bg-surface-container-highest/15 text-sunset-gold backdrop-blur-md mb-5 shadow-sm">
<span class="material-symbols-outlined text-[18px]">explore</span>
<span class="font-label-md text-label-md tracking-wider uppercase">EXPLORE 42+ EXCLUSIVE VACATION HUBS</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-white tracking-tight leading-tight mb-5">
          Find Your Perfect Escape Across Handpicked Domestic &amp; International Destinations
        </h1>
<p class="font-body-lg text-body-lg text-surface-container-high/90 leading-relaxed mb-10 max-w-3xl">
          From snow-capped Himalayan sanctuaries and serene coastal backwaters to vibrant international skylines, unlock curated holiday itineraries with guaranteed resort privileges and 24/7 dedicated concierge assistance.
        </p>
</div>
<!-- Trust & Stats Ribbon -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 p-5 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md shadow-xl">
<div class="flex items-center gap-space-sm p-2">
<div class="w-12 h-12 rounded-lg bg-sunset-gold/20 flex items-center justify-center text-sunset-gold shrink-0">
<span class="material-symbols-outlined text-[28px]">villa</span>
</div>
<div class="flex flex-col">
<span class="font-headline-md text-headline-md text-white font-bold leading-none">42+</span>
<span class="font-body-sm text-body-sm text-surface-container-high mt-1">Premium Destinations</span>
</div>
</div>
<div class="flex items-center gap-space-sm p-2">
<div class="w-12 h-12 rounded-lg bg-primary-fixed-dim/20 flex items-center justify-center text-primary-fixed-dim shrink-0">
<span class="material-symbols-outlined text-[28px]">domain_verification</span>
</div>
<div class="flex flex-col">
<span class="font-headline-md text-headline-md text-white font-bold leading-none">80+</span>
<span class="font-body-sm text-body-sm text-surface-container-high mt-1">Partner Resorts &amp; Villas</span>
</div>
</div>
<div class="flex items-center gap-space-sm p-2">
<div class="w-12 h-12 rounded-lg bg-sunset-gold/20 flex items-center justify-center text-sunset-gold shrink-0">
<span class="material-symbols-outlined text-[28px]">hotel_class</span>
</div>
<div class="flex flex-col">
<span class="font-headline-md text-headline-md text-white font-bold leading-none">100%</span>
<span class="font-body-sm text-body-sm text-surface-container-high mt-1">Peak Season Guarantee</span>
</div>
</div>
<div class="flex items-center gap-space-sm p-2">
<div class="w-12 h-12 rounded-lg bg-primary-fixed-dim/20 flex items-center justify-center text-primary-fixed-dim shrink-0">
<span class="material-symbols-outlined text-[28px]">support_agent</span>
</div>
<div class="flex flex-col">
<span class="font-headline-md text-headline-md text-white font-bold leading-none">24/7</span>
<span class="font-body-sm text-body-sm text-surface-container-high mt-1">On-Ground Concierge</span>
</div>
</div>
</div>
</div>
</section>
<!-- Interactive Filter & Search Section -->
<section class="relative z-20 -mt-6 max-w-7xl mx-auto w-full px-margin mb-12">
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-xl flex flex-col gap-5">
<!-- Search Bar -->
<div class="relative flex items-center w-full">
<span class="material-symbols-outlined absolute left-4 text-lagoon-blue text-[24px]">search</span>
<input class="w-full pl-12 pr-4 py-3.5 bg-surface-ice rounded-lg text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant focus:outline-none focus:ring-2 focus:ring-lagoon-blue" id="destinationSearchInput" placeholder="Search destination, state, or circuit (e.g., Kashmir, Goa, Kerala, Nepal, Bali)..." type="text"/>
</div>
<!-- Region Pills Filter -->
<div class="flex items-center gap-2 overflow-x-auto pb-1" id="filterPillsContainer">
<button class="filter-pill px-4 py-2 rounded-full font-label-md text-label-md whitespace-nowrap bg-lagoon-blue text-on-primary transition-all shadow-sm" data-filter="all">
          All Destinations (42+)
        </button>
<button class="filter-pill px-4 py-2 rounded-full font-label-md text-label-md whitespace-nowrap bg-surface-container-low text-on-surface hover:bg-surface-container transition-all" data-filter="himalayas">
          Hill Stations &amp; Himalayas
        </button>
<button class="filter-pill px-4 py-2 rounded-full font-label-md text-label-md whitespace-nowrap bg-surface-container-low text-on-surface hover:bg-surface-container transition-all" data-filter="coastal">
          Coastal &amp; Beaches
        </button>
<button class="filter-pill px-4 py-2 rounded-full font-label-md text-label-md whitespace-nowrap bg-surface-container-low text-on-surface hover:bg-surface-container transition-all" data-filter="heritage">
          Heritage &amp; Royal
        </button>
<button class="filter-pill px-4 py-2 rounded-full font-label-md text-label-md whitespace-nowrap bg-surface-container-low text-on-surface hover:bg-surface-container transition-all" data-filter="spiritual">
          Spiritual &amp; Pilgrimage
        </button>
<button class="filter-pill px-4 py-2 rounded-full font-label-md text-label-md whitespace-nowrap bg-surface-container-low text-on-surface hover:bg-surface-container transition-all" data-filter="international">
          International Gateways
        </button>
</div>
<!-- Quick Filter Dropdowns -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-2">
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Region / Zone</label>
<div class="relative">
<select class="w-full bg-surface-ice py-2.5 px-3 rounded-lg font-body-md text-body-md text-on-surface appearance-none focus:outline-none focus:ring-1 focus:ring-lagoon-blue" id="zoneSelect">
<option value="">All Zones (North, South, East, West, Global)</option>
<option value="north">North India Circuit</option>
<option value="south">South India Escapes</option>
<option value="east">East &amp; North East</option>
<option value="west">West Coast &amp; Deserts</option>
<option value="international">International Gateways</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3 pointer-events-none text-on-surface-variant text-[20px]">arrow_drop_down</span>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Holiday Theme</label>
<div class="relative">
<select class="w-full bg-surface-ice py-2.5 px-3 rounded-lg font-body-md text-body-md text-on-surface appearance-none focus:outline-none focus:ring-1 focus:ring-lagoon-blue" id="themeSelect">
<option value="">All Holiday Types</option>
<option value="family">Family &amp; Leisure Getaways</option>
<option value="honeymoon">Honeymoon &amp; Couple Sanctuaries</option>
<option value="adventure">High Altitude &amp; Adventure</option>
<option value="wellness">Ayurveda, Yoga &amp; Wellness</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3 pointer-events-none text-on-surface-variant text-[20px]">arrow_drop_down</span>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Ideal Duration</label>
<div class="relative">
<select class="w-full bg-surface-ice py-2.5 px-3 rounded-lg font-body-md text-body-md text-on-surface appearance-none focus:outline-none focus:ring-1 focus:ring-lagoon-blue">
<option value="">Any Trip Duration</option>
<option value="short">Short Break (3 - 4 Days)</option>
<option value="medium">Signature Escape (5 - 7 Days)</option>
<option value="long">Grand Expedition (8+ Days)</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3 pointer-events-none text-on-surface-variant text-[20px]">arrow_drop_down</span>
</div>
</div>
</div>
</div>
</section>
<!-- Featured Flagship Destination Circuits -->
<section class="max-w-7xl mx-auto w-full px-margin mb-20">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
<div>
<div class="inline-flex items-center gap-space-xs text-secondary font-label-md text-label-md uppercase tracking-widest mb-2">
<span class="material-symbols-outlined text-[16px]">stars</span>
<span>Flagship Signatures</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-primary tracking-tight">
          Most Celebrated Member Holiday Circuits
        </h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md mt-2 md:mt-0">
        End-to-end luxury hospitality curated with personalized excursions, gourmet meals, and guaranteed villa allotments.
      </p>
</div>
<!-- 6 Flagship Cards Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Card 1: Kashmir -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Scenic Dal Lake in Srinagar Kashmir with traditional carved wooden shikara boats resting on calm crystalline waters surrounded by snow-draped Pir Panjal mountain ranges and golden chinar trees in warm sunset glow." src="/images/design/a57cfb2ad312.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy/80 via-transparent to-transparent"></div>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-coral-vibrant text-on-primary font-label-sm text-label-sm px-2.5 py-1 rounded-full uppercase tracking-wider">Top Rated</span>
<span class="bg-deep-navy/80 text-white font-label-sm text-label-sm px-2.5 py-1 rounded-full backdrop-blur-sm">Hill &amp; Snow</span>
</div>
<div class="absolute bottom-4 left-4 right-4 text-white">
<div class="font-label-md text-label-md text-sunset-gold uppercase tracking-wider">North Circuit • 6 Nights</div>
<h3 class="font-headline-md text-headline-md font-bold leading-tight">Kashmir – Paradise on Earth</h3>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">
              Srinagar, Gulmarg, Pahalgam, and Sonmarg. Enjoy Dal Lake Shikara rides, Gulmarg Gondola heights, alpine chinar meadows, and fireside luxury chalets.
            </p>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-primary mb-3">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Best Time: <strong>Mar – Oct (Snow: Dec – Feb)</strong></span>
</div>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-secondary mb-5">
<span class="material-symbols-outlined text-[18px]">workspace_premium</span>
<span>Member Perk: <strong>Complimentary Shikara Ride &amp; Room Upgrade</strong></span>
</div>
</div>
<a class="inline-flex items-center justify-between px-4 py-3 rounded-lg bg-surface-ice text-primary hover:bg-primary hover:text-white font-label-md text-label-md uppercase tracking-wider transition-all" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 2: Kerala -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Traditional luxury thatch houseboat sailing serenely through Alleppey backwaters in Kerala lined by vibrant emerald coconut palms and blooming water lilies under a soft tropical sky." src="/images/design/81efcf5e546c.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy/80 via-transparent to-transparent"></div>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-lagoon-blue text-on-primary font-label-sm text-label-sm px-2.5 py-1 rounded-full uppercase tracking-wider">Wellness &amp; Nature</span>
<span class="bg-deep-navy/80 text-white font-label-sm text-label-sm px-2.5 py-1 rounded-full backdrop-blur-sm">Family Favorite</span>
</div>
<div class="absolute bottom-4 left-4 right-4 text-white">
<div class="font-label-md text-label-md text-sunset-gold uppercase tracking-wider">South Circuit • 5 Nights</div>
<h3 class="font-headline-md text-headline-md font-bold leading-tight">Kerala – God's Own Country</h3>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">
              Alleppey Backwaters, Munnar Tea Gardens, Thekkady Spice Hills, and Kovalam Beach. Luxury private houseboat cruises and authentic Ayurvedic wellness therapies.
            </p>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-primary mb-3">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Best Time: <strong>Sep – Mar (Monsoon Wellness: Jun – Aug)</strong></span>
</div>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-secondary mb-5">
<span class="material-symbols-outlined text-[18px]">workspace_premium</span>
<span>Member Perk: <strong>Complimentary Ayurvedic Spa Session</strong></span>
</div>
</div>
<a class="inline-flex items-center justify-between px-4 py-3 rounded-lg bg-surface-ice text-primary hover:bg-primary hover:text-white font-label-md text-label-md uppercase tracking-wider transition-all" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 3: Sikkim & Darjeeling -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Dramatic morning view of snow-capped Mount Kanchenjunga seen above misty lush Darjeeling tea gardens with a colorful Buddhist prayer flag banner fluttering in cool Himalayan air." src="/images/design/39c0de18cabe.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy/80 via-transparent to-transparent"></div>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-primary-container text-on-primary font-label-sm text-label-sm px-2.5 py-1 rounded-full uppercase tracking-wider">Mountain Retreat</span>
<span class="bg-deep-navy/80 text-white font-label-sm text-label-sm px-2.5 py-1 rounded-full backdrop-blur-sm">Member Signature</span>
</div>
<div class="absolute bottom-4 left-4 right-4 text-white">
<div class="font-label-md text-label-md text-sunset-gold uppercase tracking-wider">East Circuit • 6 Nights</div>
<h3 class="font-headline-md text-headline-md font-bold leading-tight">Sikkim &amp; Darjeeling – Serenity</h3>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">
              Gangtok, glacial Tsomgo Lake, Nathula Pass, Pelling, Tiger Hill sunrise over Mount Kanchenjunga, and historic DHR Toy Train heritage journeys.
            </p>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-primary mb-3">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Best Time: <strong>Mar – Jun &amp; Oct – Dec</strong></span>
</div>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-secondary mb-5">
<span class="material-symbols-outlined text-[18px]">workspace_premium</span>
<span>Member Perk: <strong>VIP Heritage Tea Estate Tasting Tour</strong></span>
</div>
</div>
<a class="inline-flex items-center justify-between px-4 py-3 rounded-lg bg-surface-ice text-primary hover:bg-primary hover:text-white font-label-md text-label-md uppercase tracking-wider transition-all" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 4: Andaman -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Turquoise clear ocean lagoon at Radhanagar Beach Havelock Island Andaman with white powder sand, lush tropical coastal jungle, and a sun-drenched azure sky with gentle ocean waves." src="/images/design/f5c4fe9a754d.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy/80 via-transparent to-transparent"></div>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-lagoon-blue text-on-primary font-label-sm text-label-sm px-2.5 py-1 rounded-full uppercase tracking-wider">Island Paradise</span>
<span class="bg-deep-navy/80 text-white font-label-sm text-label-sm px-2.5 py-1 rounded-full backdrop-blur-sm">Scuba &amp; Beach</span>
</div>
<div class="absolute bottom-4 left-4 right-4 text-white">
<div class="font-label-md text-label-md text-sunset-gold uppercase tracking-wider">Islands • 5 Nights</div>
<h3 class="font-headline-md text-headline-md font-bold leading-tight">Andaman – Tropical Island Escape</h3>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">
              Port Blair, Swaraj Dweep (Havelock), Neil Island, Radhanagar Beach, Elephant Beach water sports, and sunset catamaran cruises across coral reefs.
            </p>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-primary mb-3">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Best Time: <strong>Oct – May</strong></span>
</div>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-secondary mb-5">
<span class="material-symbols-outlined text-[18px]">workspace_premium</span>
<span>Member Perk: <strong>Complimentary Snorkeling Experience Pass</strong></span>
</div>
</div>
<a class="inline-flex items-center justify-between px-4 py-3 rounded-lg bg-surface-ice text-primary hover:bg-primary hover:text-white font-label-md text-label-md uppercase tracking-wider transition-all" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 5: Goa -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Luxury coastal resort in South Goa overlooking shimmering Arabian Sea waves at golden hour with private cabanas, swaying palm trees, and elegant coastal stone architecture." src="/images/design/ac1419384753.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy/80 via-transparent to-transparent"></div>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2.5 py-1 rounded-full uppercase tracking-wider font-bold">Coastal Vibe</span>
<span class="bg-deep-navy/80 text-white font-label-sm text-label-sm px-2.5 py-1 rounded-full backdrop-blur-sm">Year-Round</span>
</div>
<div class="absolute bottom-4 left-4 right-4 text-white">
<div class="font-label-md text-label-md text-sunset-gold uppercase tracking-wider">West Coast • 4 Nights</div>
<h3 class="font-headline-md text-headline-md font-bold leading-tight">Goa – Golden Shores &amp; Luxury</h3>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">
              North &amp; South Goa beaches, Calangute, Vagator, luxury Mandovi sunset cruises, Portuguese heritage quarters in Fontainhas, and world-class beachfront dining.
            </p>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-primary mb-3">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Best Time: <strong>Oct – Apr</strong></span>
</div>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-secondary mb-5">
<span class="material-symbols-outlined text-[18px]">workspace_premium</span>
<span>Member Perk: <strong>VIP Sunset Cruise on Mandovi River</strong></span>
</div>
</div>
<a class="inline-flex items-center justify-between px-4 py-3 rounded-lg bg-surface-ice text-primary hover:bg-primary hover:text-white font-label-md text-label-md uppercase tracking-wider transition-all" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 6: Rajasthan -->
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Majestic golden sandstone fort and royal palace arches in Udaipur over Lake Pichola in Rajasthan during a royal sunset with glowing palace lanterns and traditional jharokhas." src="/images/design/00eb969b1543.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy/80 via-transparent to-transparent"></div>
<div class="absolute top-4 left-4 flex gap-2">
<span class="bg-secondary text-on-secondary font-label-sm text-label-sm px-2.5 py-1 rounded-full uppercase tracking-wider">Royal Heritage</span>
<span class="bg-deep-navy/80 text-white font-label-sm text-label-sm px-2.5 py-1 rounded-full backdrop-blur-sm">Cultural Odyssey</span>
</div>
<div class="absolute bottom-4 left-4 right-4 text-white">
<div class="font-label-md text-label-md text-sunset-gold uppercase tracking-wider">Heritage • 7 Nights</div>
<h3 class="font-headline-md text-headline-md font-bold leading-tight">Rajasthan – Royal Circuit</h3>
</div>
</div>
<div class="p-6 flex flex-col flex-1 justify-between">
<div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">
              Jaipur Amber Fort, Jodhpur Blue City, Udaipur Lake Pichola palaces, and Jaisalmer Thar Desert camel safaris with folk performances under starlit skies.
            </p>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-primary mb-3">
<span class="material-symbols-outlined text-[18px]">calendar_month</span>
<span>Best Time: <strong>Oct – Mar</strong></span>
</div>
<div class="flex items-center gap-space-xs text-body-sm font-body-sm text-secondary mb-5">
<span class="material-symbols-outlined text-[18px]">workspace_premium</span>
<span>Member Perk: <strong>Royal Heritage Welcome &amp; Palace High Tea</strong></span>
</div>
</div>
<a class="inline-flex items-center justify-between px-4 py-3 rounded-lg bg-surface-ice text-primary hover:bg-primary hover:text-white font-label-md text-label-md uppercase tracking-wider transition-all" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<!-- Comprehensive Destination Grid -->
<section class="max-w-7xl mx-auto w-full px-margin mb-24">
<!-- Group A: Himalayan & Hill Stations -->
<div class="mb-16 destination-group" data-category="himalayas" data-zone="north,east">
<div class="flex items-center justify-between pb-4 mb-8">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-lagoon-blue text-on-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">landscape</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">Himalayan &amp; Hill Stations</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Alpine sanctuaries, misty tea estates, and high-altitude mountain trails</p>
</div>
</div>
<span class="hidden sm:inline-flex px-3 py-1 bg-surface-ice rounded-full font-label-md text-label-md text-primary">8 Escapes</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Shimla -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="shimla himachal pradesh north ridge kufri hill">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Charming colonial Christ Church on the Ridge in Shimla Himachal Pradesh surrounded by snow pine trees and misty Himalayan peaks." src="/images/design/9c6e762b14d3.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North India</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Shimla</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">The Ridge, Mall Road, Christ Church, Jakhoo Temple, Kufri &amp; Scandal Point.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Mar – Jun &amp; Dec – Jan</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Free Room Upgrade</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Manali -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="manali himachal solang atal tunnel rohtang snow hill">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Solang Valley in Manali Himachal Pradesh covered in winter snow with wooden chalets and towering pine trees under bright sunlight." src="/images/design/9a5b0e8a6f3b.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North India</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Manali</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Hadimba Temple, Solang Valley, Rohtang Pass, Atal Tunnel, Sissu &amp; Vashisht Hot Springs.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Jun</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>VIP Snow Excursion Pass</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Ooty -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="ooty nilgiri tamil nadu south botanical gardens pykara lake hill">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Lush rolling tea plantations and Doddabetta Peak in Ooty Nilgiri Hills with misty green slopes and colonial hill town charm." src="/images/design/f79aa67a5655.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">South India</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Ooty</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Nilgiri Mountain Railway, Doddabetta Peak, Botanical Garden, Emerald Lake &amp; Pykara.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Throughout the year</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Complimentary High Tea</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Dalhousie -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="dalhousie khajjiar himachal mini switzerland dainkund hill">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Khajjiar meadow known as Mini Switzerland in Dalhousie Himachal Pradesh with central lake surrounded by dense cedar forests." src="/images/design/adf7b3c4643a.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North India</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Dalhousie</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Khajjiar (Mini Switzerland), Kalatop Wildlife Sanctuary, Dainkund Peak &amp; Panchpula.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Mar – Jun &amp; Dec – Feb</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Free Valley Tour Guide</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Shillong -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="shillong meghalaya scotland of the east umiam lake laitlum waterfalls hill">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Misty landscape of Umiam Lake in Shillong Meghalaya surrounded by rolling pine-covered Khasi hills under a serene overcast morning." src="/images/design/9feb3bebfb40.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North East</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Shillong</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Umiam Lake, Elephant Falls, Laitlum Canyons, Ward's Lake &amp; Living Root Bridges access.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Sep – May</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>VIP Airport Pickup</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Spiti Valley -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="spiti valley himachal kaza key monastery chandratal lake adventure hill">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Ancient whitewashed Key Monastery perched dramatically on a high rocky cliff overlooking the rugged Spiti Valley desert landscape." src="/images/design/b3c373202ac8.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North India</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Spiti Valley</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Kaza, Key Monastery, Chandratal Lake, Langza, Hikkim &amp; Dhankar high-altitude passes.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Jun – Oct</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Oxygen-Equipped Luxury Cab</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Ladakh -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="ladakh leh pangong lake nubra valley khardung la monasteries adventure">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Deep turquoise blue Pangong Tso Lake in Ladakh framed by barren yellow and brown desert mountains under crisp azure high-altitude sky." src="/images/design/f426789900c9.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North India</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Ladakh</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Pangong Lake, Nubra Valley sand dunes, Khardung La pass &amp; Thiksey Monastery.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: May – Sep</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Bactrian Camel Safari Pass</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Arunachal Pradesh -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="arunachal pradesh tawang sela pass dirang bomdila monasteries north east">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Grand Tawang Monastery nestled on an Arunachal Pradesh mountain peak with prayer flags and snow-clad Eastern Himalayan summits." src="/images/design/ce419a741b53.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North East</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Arunachal Pradesh</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Tawang Monastery, Sela Pass, Dirang, Bomdila &amp; untouched alpine wilderness.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Complimentary ILP Permit Support</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
</div>
</div>
<!-- Group B: Coastal & Beach Paradises -->
<div class="mb-16 destination-group" data-category="coastal" data-zone="east,south,west">
<div class="flex items-center justify-between pb-4 mb-8">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-sunset-gold text-deep-navy flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">waves</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">Coastal &amp; Beach Paradises</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Golden shores, coral reefs, sea-facing boutique resorts, and oceanfront sanctuaries</p>
</div>
</div>
<span class="hidden sm:inline-flex px-3 py-1 bg-surface-ice rounded-full font-label-md text-label-md text-primary">6 Coastal Hubs</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Puri -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="puri odisha jagannath temple golden beach chilika lake coastal spiritual east">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Sunrise over Puri Golden Beach in Odisha with fishing boats riding gentle ocean waves under an amber and soft lavender morning sky." src="/images/design/72b44c60a778.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">East Coast</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Puri – Sacred Coastal Retreat</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Jagannath Temple, Golden Beach, Chilika Lake dolphin sanctuary, Raghurajpur heritage crafts, and Konark Sun Temple.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Dedicated Jagannath Temple Darshan Assistance</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Digha & Mandarmani -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="digha mandarmani tajpur west bengal coastal beach bay of bengal east">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Expansive serene beach in Mandarmani West Bengal with crashing ocean foam and casuarina groves stretching into sea horizon." src="/images/design/b541e0bcd778.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">West Bengal Coast</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Digha &amp; Mandarmani</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">New Digha Beach, Udaipur Beach, Marine Aquarium, Mandarmani drive-in beach, Tajpur casuarina groves &amp; Shankarpur.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Guaranteed Sea-Facing Room Allotment</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Lakshadweep -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="lakshadweep agatti bangaram kavaratti island coral atoll south beach">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Pristine white sand sandbar at Bangaram Atoll Lakshadweep bordered by luminescent turquoise clear lagoon and coconut palms." src="/images/design/ffcf7cc969fe.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Indian Atolls</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Lakshadweep – Coral Atolls</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Agatti Island, Bangaram Island, Kavaratti lagoon, coral reef snorkeling, scuba diving, and untouched tropical solitude.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Fast-Track Lakshadweep Entry Permit</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Vizag & Araku Valley -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="vizag araku valley andhra pradesh rushikonda borra caves coastal hill south">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Golden curves of Rushikonda Beach Vizag meeting scenic green Eastern Ghats headlands along the Bay of Bengal coastline." src="/images/design/382b7debc6f9.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">East Coast / South</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Vizag &amp; Araku Valley</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Rushikonda Beach, INS Kurusura Submarine Museum, Kailasagiri, Yarada Beach, Borra Caves &amp; Araku coffee plantations.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Vistadome Glass-Coach Rail Tickets Support</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Puducherry -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="puducherry pondicherry french quarter auroville promenade beach coastal south">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Charming pastel yellow French colonial villa in Puducherry French Quarter with flowering pink bougainvillea and clean cobblestone street." src="/images/design/7960af156f6b.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Coromandel Coast</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Puducherry – French Pearl</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">French Quarter colonial lanes, Sri Aurobindo Ashram, Promenade Beach, Auroville Matrimandir &amp; Paradise Beach.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Complimentary Auroville Guided Pass</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Kanyakumari -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="kanyakumari vivekananda rock tamil nadu three oceans sunrise sunset coastal spiritual south">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Vivekananda Rock Memorial and Thiruvalluvar Statue standing in the ocean at Kanyakumari surrounded by waves of three oceans at sunrise." src="/images/design/c0c0737052c8.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Southernmost Tip</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Kanyakumari – Ocean Confluence</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Vivekananda Rock Memorial, Thiruvalluvar Statue, Bhagavathy Amman Temple &amp; the rare confluence of three oceans.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Sunset Viewing Terrace Reservation</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
</div>
</div>
<!-- Group C: Spiritual, Wildlife & Heritage Circuits -->
<div class="mb-16 destination-group" data-category="spiritual,heritage" data-zone="north,west,east,south">
<div class="flex items-center justify-between pb-4 mb-8">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-coral-vibrant text-on-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">temple_hindu</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">Spiritual, Wildlife &amp; Heritage Circuits</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Sacred Jyotirlingas, ancient UNESCO marvels, river aartis, and deep tiger safaris</p>
</div>
</div>
<span class="hidden sm:inline-flex px-3 py-1 bg-surface-ice rounded-full font-label-md text-label-md text-primary">8 Grand Circuits</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Varanasi -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="varanasi kashi ganga aarti ghats dashashwamedh sarnath spiritual heritage north">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Evening Ganga Aarti at Dashashwamedh Ghat in Varanasi with glowing brass lamps and devotees along the sacred River Ganges." src="/images/design/d6d45398b13a.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Uttar Pradesh</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Varanasi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Kashi Vishwanath, Ganga Aarti, Dashashwamedh Ghat, peaceful sunrise boat rides &amp; Sarnath.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Exclusive Private Boat Aarti Pass</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Rishikesh & Haridwar -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="rishikesh haridwar uttarakhand ganges rafting triveni ghat yoga ashrams spiritual adventure north">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Suspension bridge across turquoise Ganges river in Rishikesh surrounded by green Himalayan foothills with yoga ashrams along the river bank." src="/images/design/67fb95d6ba2f.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Uttarakhand</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Rishikesh &amp; Haridwar</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Triveni Ghat, Parmarth Niketan, river rafting, Lakshman Jhula &amp; Har Ki Pauri divine aarti.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Sep – May</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Riverside Yoga &amp; Rafting Package</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Amritsar -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="amritsar punjab golden temple wagah border jallianwala bagh heritage spiritual north">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="The shimmering Golden Temple in Amritsar reflected in the holy Sarovar water at twilight with golden domes illuminated." src="/images/design/9b886070bf8e.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Punjab</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Amritsar</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Sacred Golden Temple, Jallianwala Bagh, Gobindgarh Fort &amp; Wagah Border retreat ceremony.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Wagah Border VIP Gallery Assistance</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Tirupati -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="tirupati andhra pradesh venkateswara tirumala balaji silathoranam pilgrimage spiritual south">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Sacred Tirumala hills and temple towers in Tirupati Andhra Pradesh bathed in golden morning light." src="/images/design/4ce7be032643.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Andhra Pradesh</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Tirupati</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Sri Venkateswara (Tirumala), Padmavathi Temple, Kapila Theertham &amp; natural Silathoranam.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Sep – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Seamless Special Darshan Escort</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Gujarat Circuit -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="gujarat dwarka somnath rann of kutch gir lion statue of unity spiritual heritage west">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Vast white salt desert of Rann of Kutch Gujarat under sunset twilight with colorful Gujarati tents." src="/images/design/1234aff125e6.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Western India</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Gujarat Circuit</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Dwarkadhish, Somnath Jyotirlinga, White Rann of Kutch, Statue of Unity &amp; Gir Lions.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Tent City Premium Upgrade</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Jim Corbett -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="jim corbett uttarakhand wildlife tiger safari kosi river resort nature north">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Majestic Bengal Tiger walking along the forest track of Jim Corbett National Park near lush sal trees and Kosi river." src="/images/design/5a49130b254d.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Uttarakhand</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Jim Corbett</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Tiger National Park safaris, Garjiya Devi Temple, Kosi riverbank luxury eco-lodges &amp; birding.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Nov – Jun</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Confirmed Open-Top Jeep Safari Allotment</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Assam & Dooars -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="assam dooars kaziranga rhino tea estates kamakhya jaldapara wildlife east">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="One-horned rhinoceros grazing in elephant grass meadow of Kaziranga National Park in Assam with misty green hills behind." src="/images/design/1db0a7b32a0d.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">North East &amp; Bengal</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Assam &amp; Dooars</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Kaziranga One-Horned Rhinos, Kamakhya Temple, Gorumara &amp; Jaldapara wilderness tea estates.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Nov – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>VIP Kamakhya Darshan Escort</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Agra -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="agra uttar pradesh taj mahal fatehpur sikri baby taj heritage mughal north">
<div>
<div class="relative h-44 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Taj Mahal in Agra reflected in the pristine marble pool at sunrise with clear sky and grand Mughal minarets." src="/images/design/9d764636a835.jpg"/>
<span class="absolute top-3 left-3 bg-deep-navy/80 text-white font-label-sm text-label-sm px-2 py-0.5 rounded backdrop-blur-sm">Uttar Pradesh</span>
</div>
<div class="p-4">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Agra – Eternal Mughal Grace</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 mb-3">Taj Mahal sunrise, Agra Fort, Itmad-ud-Daulah (Baby Taj), Mehtab Bagh &amp; Fatehpur Sikri.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Mar</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Private Historian-Guided Tour</span>
</div>
</div>
</div>
<div class="p-4 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
</div>
</div>
<!-- Group D: International Gateway Escapes -->
<div class="mb-16 destination-group" data-category="international" data-zone="international">
<div class="flex items-center justify-between pb-4 mb-8">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-primary text-on-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">flight_takeoff</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">International Gateway Escapes</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Overwater villas, futuristic skylines, tropical islands, and ancient Himalayan kingdoms</p>
</div>
</div>
<span class="hidden sm:inline-flex px-3 py-1 bg-surface-ice rounded-full font-label-md text-label-md text-primary">9 Global Gateways</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Nepal -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="nepal kathmandu pokhara pashupatinath himalayas sarangkot international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Phewa Lake in Pokhara Nepal with colorful wooden boats reflecting the snowy peaks of Annapurna and Machhapuchhre." src="/images/design/b912911a3ff5.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Nepal – Temples &amp; Trails</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Pashupatinath Temple, Boudhanath Stupa, Pokhara Phewa Lake, Sarangkot sunrise &amp; Chitwan safaris.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Sep – Nov &amp; Mar – May</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Himalayan Mountain Flight Assistance</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Bhutan -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="bhutan paro thimphu tigers nest punakha dzong himalayas international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Paro Taktsang Tiger's Nest Monastery perched dramatically on the vertical granite cliff in the pine forests of Bhutan." src="/images/design/a0f9127fde38.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Bhutan – Timeless Mountain Kingdom</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Thimphu, Paro, iconic Tiger's Nest Monastery, Punakha Dzong, Dochula Pass &amp; Buddha Dordenma.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Mar – May &amp; Sep – Nov</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Comprehensive Visa &amp; SDF Clearance Support</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Dubai -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="dubai uae burj khalifa palm jumeirah desert safari marina international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Dubai Marina skyline with luxury superyachts moored along the illuminated water canal at twilight with towering glass skyscrapers." src="/images/design/00413726496c.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Dubai – Desert Dreams &amp; Skylines</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Burj Khalifa 124th floor, Palm Jumeirah, Dubai Marina, Museum of the Future &amp; Red Dune Desert Safari.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Oct – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>VIP Marina Dhow Dinner Cruise Included</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Maldives -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="maldives male baa atoll overwater villa turquoise ocean beach international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Overwater luxury bungalows stretching across shallow crystalline turquoise waters in Maldives with wooden walkways under bright sunlight." src="/images/design/d5fea9ebcae5.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Maldives – Ocean Paradise</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Private overwater villas, Baa Atoll biosphere, manta ray encounters, private sandbank dinners &amp; water planes.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Nov – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Complimentary Speedboat / Seaplane Transfer</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Bali & Indonesia -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="bali indonesia ubud tanah lot nusa penida uluwatu beaches temples international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Tegallalang emerald green rice terraces in Ubud Bali at sunrise with tropical palms and morning mist." src="/images/design/b747691835bd.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Bali &amp; Indonesia – Island of Gods</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Ubud, Tanah Lot Temple, Uluwatu sea cliff, Tegallalang Rice Terraces, Nusa Penida &amp; Balinese spa retreats.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Apr – Oct</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Floating Breakfast &amp; Private Villa Upgrade</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Singapore -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="singapore marina bay sands sentosa gardens by the bay merlion universal studios international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Futuristic Supertree Grove at Gardens by the Bay in Singapore lit up at night with Marina Bay Sands in background." src="/images/design/31cf14805526.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Singapore – Lion City Wonders</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Marina Bay Sands, Gardens by the Bay, Sentosa Island, Universal Studios Singapore, Merlion Park &amp; Jewel Changi.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Throughout the year</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Universal Studios Express Pass Benefit</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Thailand -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="thailand bangkok phuket krabi phi phi islands coral island wat arun international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Traditional Thai long-tail boat moored in the turquoise waters of Maya Bay in Phi Phi Islands Thailand with towering limestone cliffs." src="/images/design/fc3475f23805.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Thailand – Golden Temples &amp; Seas</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Bangkok Grand Palace, Pattaya Coral Island, Phuket Patong, Krabi limestone karst islands &amp; Phi Phi catamaran cruises.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Nov – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Speedboat Island Hopping Pass</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Sri Lanka -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="sri lanka sigiriya rock ella kandy bentota galle yala safari international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Sigiriya Lion Rock Fortress rising dramatically above the lush tropical green forests of central Sri Lanka under golden sunset light." src="/images/design/e924f1199f95.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Sri Lanka – Heritage &amp; Tropics</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Sigiriya Rock Fortress, misty Nuwara Eliya tea country, historic Galle Fort, Bentota Beach &amp; Yala leopard safaris.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Dec – Apr</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Scenic Ella Tea Train Reserved Seats</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
<!-- Malaysia -->
<div class="destination-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all flex flex-col justify-between" data-search="malaysia kuala lumpur petronas twin towers batu caves langkawi genting international">
<div>
<div class="relative h-48 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Petronas Twin Towers in Kuala Lumpur Malaysia shining brightly against evening sky surrounded by modern park fountains." src="/images/design/6238d3e679e9.jpg"/>
<span class="absolute top-3 left-3 bg-sunset-gold text-deep-navy font-label-sm text-label-sm px-2 py-0.5 rounded font-bold">International</span>
</div>
<div class="p-5">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold mb-1">Malaysia – Southeast Asian Jewel</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Petronas Twin Towers, Batu Caves rainbow steps, Langkawi UNESCO Geopark &amp; Genting Highlands cable car.</p>
<div class="flex items-center gap-1 text-[12px] text-on-surface-variant mb-2">
<span class="material-symbols-outlined text-[15px] text-lagoon-blue">calendar_today</span>
<span>Best: Throughout the year</span>
</div>
<div class="flex items-center gap-1 text-[12px] text-secondary font-medium mb-4">
<span class="material-symbols-outlined text-[15px]">verified</span>
<span>Langkawi Island Hopping Cruise Pass</span>
</div>
</div>
</div>
<div class="p-5 pt-0">
<a class="w-full py-2.5 px-3 rounded-lg bg-surface-ice hover:bg-primary hover:text-white text-primary text-center font-label-md text-label-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-path="contact-us" href="/contact-us.html">
<span>Explore Stays &amp; Itinerary</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Member Experience / Testimonial Spotlight Section -->
<section class="w-full bg-deep-navy text-on-primary py-20 relative overflow-hidden">
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(#94cdfa_1px,transparent_1px)] [background-size:28px_28px] pointer-events-none"></div>
<div class="relative max-w-7xl mx-auto px-margin">
<div class="text-center max-w-2xl mx-auto mb-14">
<div class="inline-flex items-center gap-space-xs text-sunset-gold font-label-md text-label-md uppercase tracking-widest mb-3">
<span class="material-symbols-outlined text-[18px]">verified_user</span>
<span>Verified Member Experiences</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-white font-bold tracking-tight mb-4">
          How Our Vacationers Experience India &amp; Beyond
        </h2>
<p class="font-body-md text-body-md text-surface-container-high/80">
          Real feedback from verified Happy Miles Vacation Club families enjoying peak season holidays with effortless concierge coordination.
        </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Review 1: Ashish Mishra -->
<div class="p-6 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md flex flex-col justify-between shadow-lg">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-3">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-sm text-body-sm text-surface-container-high/90 leading-relaxed mb-6 italic">
              “Our Kashmir circuit through Happy Miles was flawless. From Gulmarg Gondola phase-2 fast-track boarding to our Dal Lake luxury cedar houseboat, the ground concierge took care of every single requirement for my elderly parents.”
            </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-white/10">
<div class="w-10 h-10 rounded-full bg-sunset-gold/30 text-sunset-gold flex items-center justify-center font-bold text-headline-sm">
              AM
            </div>
<div>
<h4 class="font-headline-sm text-[16px] text-white font-semibold">Ashish Mishra</h4>
<p class="font-body-sm text-[12px] text-surface-dim">Member since 2021 • Kashmir Tour</p>
</div>
</div>
</div>
<!-- Review 2: Krishnendu Roy Chowdhury -->
<div class="p-6 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md flex flex-col justify-between shadow-lg">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-3">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-sm text-body-sm text-surface-container-high/90 leading-relaxed mb-6 italic">
              “Staying at Camellia Sea Retreat in Puri was heavenly. Waking up to ocean breezes, coupled with their dedicated priest coordination for Lord Jagannath darshan without long queues, made this our most peaceful spiritual retreat ever.”
            </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-white/10">
<div class="w-10 h-10 rounded-full bg-primary-fixed-dim/30 text-primary-fixed-dim flex items-center justify-center font-bold text-headline-sm">
              KR
            </div>
<div>
<h4 class="font-headline-sm text-[16px] text-white font-semibold">Krishnendu Roy Chowdhury</h4>
<p class="font-body-sm text-[12px] text-surface-dim">Member • Puri Sea Retreat</p>
</div>
</div>
</div>
<!-- Review 3: Pradyut Kr. Ghoshal -->
<div class="p-6 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md flex flex-col justify-between shadow-lg">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-3">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-sm text-body-sm text-surface-container-high/90 leading-relaxed mb-6 italic">
              “Our Guwahati &amp; Maa Kamakhya pilgrimage was conducted with top-class devotion and care. Clean luxury vehicles, attentive chauffeurs, and river cruise across the Brahmaputra made this journey deeply memorable.”
            </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-white/10">
<div class="w-10 h-10 rounded-full bg-coral-vibrant/30 text-coral-vibrant flex items-center justify-center font-bold text-headline-sm">
              PG
            </div>
<div>
<h4 class="font-headline-sm text-[16px] text-white font-semibold">Pradyut Kr. Ghoshal</h4>
<p class="font-body-sm text-[12px] text-surface-dim">Member • Guwahati &amp; Kamakhya</p>
</div>
</div>
</div>
<!-- Review 4: Debjit Chatterjee -->
<div class="p-6 rounded-xl bg-surface-container-lowest/10 backdrop-blur-md flex flex-col justify-between shadow-lg">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-3">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-sm text-body-sm text-surface-container-high/90 leading-relaxed mb-6 italic">
              “Alleppey houseboat stay paired with the misty tea hills of Munnar was pure rejuvenation. The Happy Miles holiday desk checked in every evening to make sure all arrangements were up to five-star standards.”
            </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-white/10">
<div class="w-10 h-10 rounded-full bg-sunset-gold/30 text-sunset-gold flex items-center justify-center font-bold text-headline-sm">
              DC
            </div>
<div>
<h4 class="font-headline-sm text-[16px] text-white font-semibold">Debjit Chatterjee</h4>
<p class="font-body-sm text-[12px] text-surface-dim">Member • Kerala Backwaters</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Vacation Planning Concierge & Custom Itinerary Builder Banner -->
<section class="max-w-7xl mx-auto w-full px-margin my-20">
<div class="bg-gradient-to-br from-primary via-primary-container to-deep-navy rounded-2xl p-8 md:p-12 text-white shadow-xl relative overflow-hidden">
<div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-sunset-gold/15 blur-3xl pointer-events-none"></div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
<div class="lg:col-span-7 flex flex-col">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-lowest/15 text-sunset-gold text-label-md font-label-md uppercase tracking-wider self-start mb-4">
<span class="material-symbols-outlined text-[16px]">edit_calendar</span>
<span>Bespoke Travel Engineering</span>
</div>
<h2 class="font-headline-lg text-headline-lg font-bold tracking-tight text-white mb-4">
            Can't Find Your Dream Destination?
          </h2>
<p class="font-body-lg text-body-lg text-surface-container-high/90 leading-relaxed mb-8 max-w-xl">
            Our senior vacation planners craft bespoke domestic &amp; global itineraries tailored to your family's travel style, dietary preferences, and seasonal wishes.
          </p>
<div class="flex flex-wrap items-center gap-4">
<a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-lg bg-sunset-gold text-deep-navy font-label-md text-label-md uppercase tracking-wider font-bold shadow-md hover:bg-yellow-400 transition-colors" href="tel:18002033188">
<span class="material-symbols-outlined text-[20px]">call</span>
<span>1800 2033 188 (Toll Free)</span>
</a>
<a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-lg bg-[#25D366] text-white font-label-md text-label-md uppercase tracking-wider font-bold shadow-md hover:opacity-95 transition-opacity" href="https://wa.me/9118002033188" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>WhatsApp Consultation</span>
</a>
</div>
</div>
<!-- Fast-Track Callback Widget -->
<div class="lg:col-span-5 bg-surface-container-lowest text-on-surface rounded-xl p-6 shadow-2xl">
<h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-2">Request Quick Custom Itinerary</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-5">Receive a customized itinerary proposal &amp; resort allotment quote within 2 business hours.</p>
<form class="flex flex-col gap-3" id="quickItineraryForm">
<div>
<label class="block font-label-md text-label-md uppercase text-on-surface-variant mb-1">Your Full Name</label>
<input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-ice text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-lagoon-blue" placeholder="e.g. Rajesh Sharma" required="" type="text"/>
</div>
<div class="grid grid-cols-2 gap-3">
<div>
<label class="block font-label-md text-label-md uppercase text-on-surface-variant mb-1">Phone Number</label>
<input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-ice text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-lagoon-blue" placeholder="+91 98765 43210" required="" type="tel"/>
</div>
<div>
<label class="block font-label-md text-label-md uppercase text-on-surface-variant mb-1">Target Destination</label>
<input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-ice text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-lagoon-blue" placeholder="e.g. Kashmir / Bali" required="" type="text"/>
</div>
</div>
<div>
<label class="block font-label-md text-label-md uppercase text-on-surface-variant mb-1">Preferred Travel Month &amp; Family Size</label>
<input class="w-full px-3.5 py-2.5 rounded-lg bg-surface-ice text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-lagoon-blue" placeholder="e.g. December • 2 Adults + 2 Kids" type="text"/>
</div>
<button class="mt-2 w-full py-3 rounded-lg bg-coral-vibrant text-on-primary font-label-md text-label-md uppercase tracking-wider font-semibold shadow hover:opacity-95 transition-opacity" type="submit">
              Send Callback Request
            </button>
<p class="hidden text-center text-body-sm font-body-sm text-primary font-medium mt-1" id="formFeedback">Thank you! Our senior concierge will connect shortly.</p>
</form>
</div>
</div>
</div>
</section>
<!-- Interactive Search & Filtering Logic -->
<script>
    (function() {
      const searchInput = document.getElementById('destinationSearchInput');
      const filterPills = document.querySelectorAll('.filter-pill');
      const zoneSelect = document.getElementById('zoneSelect');
      const themeSelect = document.getElementById('themeSelect');
      const cards = document.querySelectorAll('.destination-card');
      const groups = document.querySelectorAll('.destination-group');
      const form = document.getElementById('quickItineraryForm');
      const feedback = document.getElementById('formFeedback');

      let currentFilter = 'all';

      function applyFilters() {
        const query = (searchInput ? searchInput.value.toLowerCase().trim() : '');
        const zone = (zoneSelect ? zoneSelect.value.toLowerCase() : '');

        cards.forEach(card => {
          const searchData = (card.getAttribute('data-search') || '').toLowerCase();
          const matchesQuery = !query || searchData.includes(query);
          const parentGroup = card.closest('.destination-group');
          const groupCategories = (parentGroup ? parentGroup.getAttribute('data-category') || '' : '').split(',');
          const groupZones = (parentGroup ? parentGroup.getAttribute('data-zone') || '' : '').split(',');

          // Check pill category
          let matchesCategory = (currentFilter === 'all') || groupCategories.includes(currentFilter) || searchData.includes(currentFilter);
          
          // Check Zone dropdown
          let matchesZone = !zone || groupZones.includes(zone) || searchData.includes(zone);

          if (matchesQuery && matchesCategory && matchesZone) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });

        // Hide empty groups
        groups.forEach(group => {
          const visibleCards = group.querySelectorAll('.destination-card:not([style*="display: none"])');
          if (visibleCards.length === 0) {
            group.style.display = 'none';
          } else {
            group.style.display = 'block';
          }
        });
      }

      if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
      }

      if (filterPills) {
        filterPills.forEach(pill => {
          pill.addEventListener('click', function() {
            filterPills.forEach(p => {
              p.classList.remove('bg-lagoon-blue', 'text-on-primary');
              p.classList.add('bg-surface-container-low', 'text-on-surface');
            });
            this.classList.remove('bg-surface-container-low', 'text-on-surface');
            this.classList.add('bg-lagoon-blue', 'text-on-primary');
            currentFilter = this.getAttribute('data-filter') || 'all';
            applyFilters();
          });
        });
      }

      if (zoneSelect) {
        zoneSelect.addEventListener('change', applyFilters);
      }
      if (themeSelect) {
        themeSelect.addEventListener('change', applyFilters);
      }

      if (form) {
        form.addEventListener('submit', function(e) {
          e.preventDefault();
          if (feedback) {
            feedback.classList.remove('hidden');
          }
          form.reset();
        });
      }
    })();
  </script>
</div></main><footer class="w-full bg-[#061325] text-surface-container-high pt-16 pb-8"><div class="max-w-7xl mx-auto px-margin"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-xl pb-12"><div class="flex flex-col gap-space-md"><div class="flex items-center gap-space-sm"><div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-sunset-gold font-bold text-headline-sm">HM</div><div><h4 class="font-headline-sm text-headline-sm text-white tracking-tight">Happy Miles</h4><p class="font-label-sm text-label-sm text-sunset-gold tracking-widest uppercase">Dream Hospitality</p></div></div><p class="font-body-sm text-body-sm text-surface-dim leading-relaxed">Crafting peerless luxury vacation ownership, coastal sanctuaries, and transformative hospitality journeys tailored for distinguished families and discerning travelers across Asia. IATA Affiliate Partner &amp; Govt. Regd. Enterprise.</p><div class="flex items-center gap-space-sm pt-space-xs"><span class="inline-flex items-center gap-1 text-[11px] font-label-sm uppercase tracking-wider bg-surface-container-highest/10 px-2.5 py-1 rounded text-sunset-gold"><span class="material-symbols-outlined text-[14px]">verified</span>ISO 9001:2015</span><span class="inline-flex items-center gap-1 text-[11px] font-label-sm uppercase tracking-wider bg-surface-container-highest/10 px-2.5 py-1 rounded text-on-primary-container"><span class="material-symbols-outlined text-[14px]">flight_takeoff</span>IATA Partner</span></div></div><div class="flex flex-col gap-space-sm"><h3 class="font-headline-sm text-[16px] text-white tracking-wide uppercase">Verticals &amp; Offerings</h3><ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-surface-dim"><li><a class="hover:text-sunset-gold transition-colors" data-path="verticals" href="/benefits.html">Luxury Vacation Ownership</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="properties" href="/our-hotels.html">Coastal Beach Villas</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="verticals" href="/benefits.html">MICE &amp; Corporate Retreats</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="verticals" href="/benefits.html">Culinary Wellness Resorts</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="membership" href="/membership">Exchange Escapes</a></li></ul></div><div class="flex flex-col gap-space-sm"><h3 class="font-headline-sm text-[16px] text-white tracking-wide uppercase">Destinations &amp; Stays</h3><ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-surface-dim"><li><a class="hover:text-sunset-gold transition-colors" data-path="destination" href="/destinations.html">Goa Sunset Shore</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="destination" href="/destinations.html">Andaman Coral Bay</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="destination" href="/destinations.html">Kerala Lagoon Haven</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="destination" href="/destinations.html">Puri Coastal Sanctuary</a></li><li><a class="hover:text-sunset-gold transition-colors" data-path="destination" href="/destinations.html">International Gateways</a></li></ul></div><div class="flex flex-col gap-space-sm"><h3 class="font-headline-sm text-[16px] text-white tracking-wide uppercase">Registered Office</h3><p class="font-body-sm text-body-sm text-surface-dim leading-relaxed">AVS House, 42/1A Gurupada Halder Road, Kolkata - 700026, West Bengal, India.</p><div class="flex flex-col gap-1 font-body-sm text-body-sm text-surface-dim"><span>Phone: 1800 2033 188 / 1800-309-8800</span><span>Support: 10:00 AM - 07:00 PM (IST)</span></div><div class="pt-space-xs"><a class="inline-flex items-center gap-space-xs px-4 py-2 rounded-lg bg-[#25D366] text-white font-label-md text-label-md uppercase tracking-wider hover:opacity-90 transition-opacity" data-path="connect-us" href="/contact-us.html"><span class="material-symbols-outlined text-[18px]">chat</span><span>WhatsApp Support</span></a></div></div></div><div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-space-md text-body-sm font-body-sm text-surface-dim/80"><p>© 2025 The Happy Miles Dream Hospitality Ltd. • Registered at Kolkata, West Bengal.</p><div class="flex items-center gap-space-md flex-wrap"><a class="hover:text-white transition-colors" data-path="connect-us" href="/contact-us.html">Privacy Policy</a><span>•</span><a class="hover:text-white transition-colors" data-path="membership" href="/membership">Terms of Membership</a><span>•</span><span class="flex items-center gap-1 text-sunset-gold"><span class="material-symbols-outlined text-[15px]">lock</span>256-Bit SSL Secured</span></div></div></div></footer>
@endverbatim
@endsection
