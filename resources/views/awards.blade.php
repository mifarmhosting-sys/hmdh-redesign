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
@include('partials.design-header', ['active' => 'awards'])
@verbatim
<main class="w-full pt-[116px] bg-surface min-h-[calc(100vh-28rem)]"><div class="flex flex-col w-full">
<!-- Sub-Hero & Breadcrumbs Section -->
<section class="relative w-full bg-gradient-to-b from-surface-container-low via-surface-ice/40 to-surface pb-12 pt-4">
<div class="max-w-7xl mx-auto px-6 lg:px-12">
<!-- Breadcrumb Navigation -->
<nav aria-label="Breadcrumb" class="flex items-center gap-2 mb-6 text-on-surface-variant font-label-md text-label-md">
<a class="hover:text-primary transition-colors flex items-center gap-1" data-path="home" href="/">
<span class="material-symbols-outlined text-[15px]">home</span>
<span>Home</span>
</a>
<span class="material-symbols-outlined text-[14px] text-outline-variant">chevron_right</span>
<span class="text-primary font-semibold">Awards &amp; Recognitions</span>
</nav>
<!-- Eyebrow Pill & Headline -->
<div class="max-w-3xl space-y-4">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 text-lagoon-blue font-label-md text-label-md tracking-wider uppercase font-semibold">
<span class="material-symbols-outlined text-sunset-gold text-[16px]" style="font-variation-settings: 'FILL' 1;">military_tech</span>
<span>Celebrating Hospitality Excellence &amp; Trust</span>
</div>
<h1 class="font-headline-xl text-headline-xl-mobile lg:text-headline-xl text-deep-navy tracking-tight font-bold leading-tight">
          Honoring Our Milestones, Excellence &amp; Unforgettable Journeys
        </h1>
<p class="font-body-lg text-body-md lg:text-body-lg text-on-surface-variant leading-relaxed">
          Discover the premier industry accolades, traveler choice honors, and statutory hospitality benchmarks achieved by Happy Miles Dream Hospitality since inception.
        </p>
</div>
<!-- Trust Ribbon / Metrics Grid -->
<div class="mt-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 lg:gap-4">
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-2">
<span class="font-headline-md text-headline-md font-bold text-deep-navy tracking-tight">5,000+</span>
<span class="material-symbols-outlined text-lagoon-blue text-[22px]">family_restroom</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">Happy Vacation Members</span>
</div>
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-2">
<span class="font-headline-md text-headline-md font-bold text-deep-navy tracking-tight">42+</span>
<span class="material-symbols-outlined text-lagoon-blue text-[22px]">travel_explore</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">Global &amp; Domestic Destinations</span>
</div>
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-2">
<span class="font-headline-md text-headline-md font-bold text-deep-navy tracking-tight">10+</span>
<span class="material-symbols-outlined text-sunset-gold text-[22px]" style="font-variation-settings: 'FILL' 1;">emoji_events</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">Hospitality &amp; MICE Awards</span>
</div>
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-1">
<span class="font-headline-md text-headline-md font-bold text-deep-navy tracking-tight">4.7</span>
<span class="material-symbols-outlined text-sunset-gold text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<span class="material-symbols-outlined text-lagoon-blue text-[22px]">reviews</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">1,800+ Verified Reviews</span>
</div>
<div class="col-span-2 md:col-span-1 bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-center justify-between mb-2">
<span class="font-headline-md text-headline-md font-bold text-deep-navy tracking-tight">100%</span>
<span class="material-symbols-outlined text-coral-vibrant text-[22px]" style="font-variation-settings: 'FILL' 1;">verified_user</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">Guaranteed Voucher Claims</span>
</div>
</div>
</div>
</section>
<!-- Landmark Spotlight Card -->
<section class="w-full py-10 bg-surface">
<div class="max-w-7xl mx-auto px-6 lg:px-12">
<div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-deep-navy via-primary to-deep-navy text-surface-ice shadow-xl p-8 lg:p-12">
<!-- Ambient decorative background glow -->
<div class="absolute -right-24 -top-24 w-96 h-96 bg-lagoon-blue/40 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute right-1/4 -bottom-24 w-72 h-72 bg-sunset-gold/15 rounded-full blur-2xl pointer-events-none"></div>
<div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
<div class="lg:col-span-8 space-y-5">
<div class="flex flex-wrap items-center gap-3">
<span class="px-3.5 py-1 rounded-full bg-sunset-gold text-deep-navy font-label-md text-label-md font-bold tracking-wide flex items-center gap-1.5 shadow-sm">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                FLAGSHIP CITATION 2025
              </span>
<span class="text-surface-variant font-label-md text-label-md tracking-wider uppercase">
                Indian Hospitality &amp; Tourism Excellence Forum
              </span>
</div>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-primary font-bold tracking-tight leading-tight">
              Best Curated Travel Experience 2025
            </h2>
<p class="font-body-lg text-body-md lg:text-body-lg text-surface-ice/90 leading-relaxed">
              “Awarded for redefining holiday ownership in Eastern India through personalized coastal itineraries, immaculate transparent booking covenants, and seamless lifestyle integrations spanning luxury partner resorts and gourmet dining credits.”
            </p>
<div class="pt-2 flex flex-wrap items-center gap-6 text-surface-ice/80 font-body-sm text-body-sm">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">check_circle</span>
<span>Unanimous Jury Selection</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">verified</span>
<span>Audited Member Retention</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sunset-gold text-[18px]">award_star</span>
<span>Annual National Forum Award</span>
</div>
</div>
</div>
<!-- Evaluation Seal Badge Column -->
<div class="lg:col-span-4 flex flex-col items-center justify-center">
<div class="relative bg-surface-container-lowest/10 backdrop-blur-md rounded-2xl p-7 text-center w-full max-w-xs shadow-lg">
<div class="w-16 h-16 mx-auto mb-3 rounded-full bg-gradient-to-tr from-sunset-gold to-secondary-container flex items-center justify-center text-deep-navy shadow-md">
<span class="material-symbols-outlined text-[34px]" style="font-variation-settings: 'FILL' 1;">trophy</span>
</div>
<div class="font-headline-xl text-headline-xl font-bold text-sunset-gold tracking-tight">98.4<span class="text-headline-sm font-normal text-surface-ice/70">/100</span></div>
<div class="font-label-lg text-label-lg uppercase tracking-wider text-surface-ice font-semibold mt-1">Jury Audit Score</div>
<p class="font-body-sm text-body-sm text-surface-variant/80 mt-2">Highest score in traveler satisfaction index across eastern regional travel enterprises.</p>
<div class="mt-4 pt-3 text-surface-ice/60 font-label-sm text-label-sm tracking-widest uppercase">
                New Delhi Convention Center
              </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Award Hall of Fame Grid -->
<section class="w-full py-12 bg-surface">
<div class="max-w-7xl mx-auto px-6 lg:px-12 space-y-10">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div class="space-y-2 max-w-2xl">
<span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold block">The Hall of Fame</span>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-deep-navy font-bold tracking-tight">
            Distinctions Earned Through Relentless Guest Devotion
          </h2>
</div>
<div class="text-on-surface-variant font-body-sm text-body-sm max-w-sm">
          Every honor reflects our dedication to transparent membership management and premium vacation planning.
        </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Card 1 -->
<div class="group bg-surface-container-lowest rounded-2xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-5">
<span class="px-3 py-1 rounded-full bg-surface-ice text-lagoon-blue font-label-sm text-label-sm font-semibold tracking-wide">
                Excellence in Guest Delight
              </span>
<span class="font-label-md text-label-md text-sunset-gold font-bold">2025</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-lagoon-blue mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-[26px]">travel_explore</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mb-2.5">
              Best Travel Experience
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
              Honoring meticulously curated itineraries that harmonize coastal comfort, authentic regional gastronomy, and end-to-end coordinated concierge transits.
            </p>
</div>
<div class="pt-4 bg-surface-container-low/40 -mx-7 -mb-7 px-7 py-4 rounded-b-2xl mt-4">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block font-semibold">Awarding Committee</span>
<span class="font-body-sm text-body-sm text-deep-navy font-medium">National Tourism Excellence Council</span>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-surface-container-lowest rounded-2xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-5">
<span class="px-3 py-1 rounded-full bg-surface-ice text-lagoon-blue font-label-sm text-label-sm font-semibold tracking-wide">
                Destination Stewardship
              </span>
<span class="font-label-md text-label-md text-sunset-gold font-bold">2024</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-lagoon-blue mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-[26px]">public</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mb-2.5">
              Global Hospitality Excellence Trophy
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
              Recognized for curating elite partner sanctuaries spanning India, Bhutan, and Nepal, supported by an omnipresent 24/7 centralized travel desk.
            </p>
</div>
<div class="pt-4 bg-surface-container-low/40 -mx-7 -mb-7 px-7 py-4 rounded-b-2xl mt-4">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block font-semibold">Awarding Committee</span>
<span class="font-body-sm text-body-sm text-deep-navy font-medium">South Asia Leisure &amp; Hospitality Alliance</span>
</div>
</div>
<!-- Card 3 -->
<div class="group bg-surface-container-lowest rounded-2xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-5">
<span class="px-3 py-1 rounded-full bg-surface-ice text-lagoon-blue font-label-sm text-label-sm font-semibold tracking-wide">
                Customer Centricity
              </span>
<span class="font-label-md text-label-md text-sunset-gold font-bold">2024</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-lagoon-blue mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-[26px]">grade</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mb-2.5">
              5-Star Client Satisfaction Distinction
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
              Commended for unrivaled member service, zero redemption friction, and compassionate emergency vacation resolution that transforms members into brand ambassadors.
            </p>
</div>
<div class="pt-4 bg-surface-container-low/40 -mx-7 -mb-7 px-7 py-4 rounded-b-2xl mt-4">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block font-semibold">Awarding Committee</span>
<span class="font-body-sm text-body-sm text-deep-navy font-medium">Consumer Choice Hospitality Index</span>
</div>
</div>
<!-- Card 4 -->
<div class="group bg-surface-container-lowest rounded-2xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-5">
<span class="px-3 py-1 rounded-full bg-surface-ice text-lagoon-blue font-label-sm text-label-sm font-semibold tracking-wide">
                Innovation &amp; Lifestyle
              </span>
<span class="font-label-md text-label-md text-sunset-gold font-bold">2024</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-lagoon-blue mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-[26px]">wb_sunny</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mb-2.5">
              Luxury Travel Innovator Award
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
              Celebrated for pioneering multi-vertical lifestyle privileges—merging resort night allocations with fine dining privileges like Barbeque Nation vouchers and scenic day-outs.
            </p>
</div>
<div class="pt-4 bg-surface-container-low/40 -mx-7 -mb-7 px-7 py-4 rounded-b-2xl mt-4">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block font-semibold">Awarding Committee</span>
<span class="font-body-sm text-body-sm text-deep-navy font-medium">Hospitality Horizons Innovators Summit</span>
</div>
</div>
<!-- Card 5 -->
<div class="group bg-surface-container-lowest rounded-2xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-5">
<span class="px-3 py-1 rounded-full bg-surface-ice text-lagoon-blue font-label-sm text-label-sm font-semibold tracking-wide">
                Regional Growth Leader
              </span>
<span class="font-label-md text-label-md text-sunset-gold font-bold">2023</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-lagoon-blue mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-[26px]">trending_up</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mb-2.5">
              Top Emerging Brand of Eastern India
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
              Honoring exponential expansion across Kolkata, Puri, Mandarmani, and Northeast circuits, driven by customer transparency and reliable hospitality standards.
            </p>
</div>
<div class="pt-4 bg-surface-container-low/40 -mx-7 -mb-7 px-7 py-4 rounded-b-2xl mt-4">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block font-semibold">Awarding Committee</span>
<span class="font-body-sm text-body-sm text-deep-navy font-medium">Bengal Chamber of Commerce &amp; Industry (BCCI)</span>
</div>
</div>
<!-- Card 6 -->
<div class="group bg-surface-container-lowest rounded-2xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-5">
<span class="px-3 py-1 rounded-full bg-surface-ice text-lagoon-blue font-label-sm text-label-sm font-semibold tracking-wide">
                Trust &amp; Governance
              </span>
<span class="font-label-md text-label-md text-sunset-gold font-bold">2023</span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-low flex items-center justify-center text-lagoon-blue mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-[26px]">handshake</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-deep-navy font-bold mb-2.5">
              Trusted Travel Partner of the Year
            </h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-4">
              Presented for unwavering integrity: zero hidden utility charges, reliable reservation confirmations, and honest membership term disclosures.
            </p>
</div>
<div class="pt-4 bg-surface-container-low/40 -mx-7 -mb-7 px-7 py-4 rounded-b-2xl mt-4">
<span class="font-label-sm text-label-sm text-outline uppercase tracking-wider block font-semibold">Awarding Committee</span>
<span class="font-body-sm text-body-sm text-deep-navy font-medium">Eastern India Travel Operators Forum</span>
</div>
</div>
</div>
</div>
</section>
<!-- Accreditations & Statutory Affiliations Banner -->
<section class="w-full py-12 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-6 lg:px-12">
<div class="bg-surface-container-lowest rounded-2xl p-8 lg:p-10 shadow-sm">
<div class="text-center max-w-2xl mx-auto mb-8 space-y-2">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Official Governance</span>
<h2 class="font-headline-md text-headline-md text-deep-navy font-bold tracking-tight">
            Accreditations &amp; Institutional Certifications
          </h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Operating under strict statutory hospitality standards to ensure 100% legal security and guest peace of mind.
          </p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 text-center">
<div class="flex flex-col items-center p-4 rounded-xl bg-surface-ice/50 hover:bg-surface-ice transition-colors">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-lagoon-blue mb-3">
<span class="material-symbols-outlined text-[24px]">account_balance</span>
</div>
<span class="font-label-md text-label-md font-bold text-deep-navy">Govt. Registered</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Tourism Partner West Bengal &amp; India Tourism</span>
</div>
<div class="flex flex-col items-center p-4 rounded-xl bg-surface-ice/50 hover:bg-surface-ice transition-colors">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-lagoon-blue mb-3">
<span class="material-symbols-outlined text-[24px]">flight_takeoff</span>
</div>
<span class="font-label-md text-label-md font-bold text-deep-navy">IATA Affiliate</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Global Aviation Ticketing Integration Standards</span>
</div>
<div class="flex flex-col items-center p-4 rounded-xl bg-surface-ice/50 hover:bg-surface-ice transition-colors">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-lagoon-blue mb-3">
<span class="material-symbols-outlined text-[24px]">verified</span>
</div>
<span class="font-label-md text-label-md font-bold text-deep-navy">ISO 9001:2015</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Quality Management System Certified Operations</span>
</div>
<div class="flex flex-col items-center p-4 rounded-xl bg-surface-ice/50 hover:bg-surface-ice transition-colors">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-lagoon-blue mb-3">
<span class="material-symbols-outlined text-[24px]">shield</span>
</div>
<span class="font-label-md text-label-md font-bold text-deep-navy">ADTOI Compliant</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">Aligned with Association of Domestic Tour Operators</span>
</div>
<div class="flex flex-col items-center p-4 rounded-xl bg-surface-ice/50 hover:bg-surface-ice transition-colors">
<div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-lagoon-blue mb-3">
<span class="material-symbols-outlined text-[24px]">lock</span>
</div>
<span class="font-label-md text-label-md font-bold text-deep-navy">256-Bit SSL</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">End-to-End Encrypted Member Financial Portal</span>
</div>
</div>
</div>
</div>
</section>
<!-- Member Testimonials & Award Validation -->
<section class="w-full py-14 bg-surface">
<div class="max-w-7xl mx-auto px-6 lg:px-12 space-y-10">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div class="space-y-2">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold block">Voice of our Members</span>
<h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-deep-navy font-bold tracking-tight">
            Why Our Travelers Confirm Every Award
          </h2>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sunset-gold text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sunset-gold text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sunset-gold text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sunset-gold text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sunset-gold text-[20px]" style="font-variation-settings: 'FILL' 1;">star_half</span>
<span class="font-body-sm text-body-sm font-bold text-deep-navy ml-1">4.7 / 5.0 Rating</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Review 1 -->
<div class="bg-surface-container-lowest p-7 rounded-2xl shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-4">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant italic mb-6 leading-relaxed">
              “We booked our annual trip at Puri Camellia Sea Retreat. The promptness of their customer care team and the smooth check-in process was exactly what was promised. The awards they receive are thoroughly well-deserved!”
            </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-surface-container-high/40">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary font-bold flex items-center justify-center font-headline-sm text-[16px]">
              KR
            </div>
<div>
<h4 class="font-headline-sm text-[15px] font-bold text-deep-navy">Krishnendu Roy Chowdhury</h4>
<span class="font-label-sm text-label-sm text-outline">Gold Member • Puri Holiday</span>
</div>
</div>
</div>
<!-- Review 2 -->
<div class="bg-surface-container-lowest p-7 rounded-2xl shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-4">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant italic mb-6 leading-relaxed">
              “The coordination for our Guwahati and Maa Kamakhya pilgrimage was effortless. Dedicated cab, immaculate boutique hotel, and zero surprise charges. Happy Miles sets the benchmark for genuine trust.”
            </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-surface-container-high/40">
<div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary font-bold flex items-center justify-center font-headline-sm text-[16px]">
              PG
            </div>
<div>
<h4 class="font-headline-sm text-[15px] font-bold text-deep-navy">Pradyut Kr. Ghoshal</h4>
<span class="font-label-sm text-label-sm text-outline">Club Member • Guwahati Circuit</span>
</div>
</div>
</div>
<!-- Review 3 -->
<div class="bg-surface-container-lowest p-7 rounded-2xl shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center gap-1 text-sunset-gold mb-4">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant italic mb-6 leading-relaxed">
              “We utilized our day-out package at Kolaghat Rupasi Rupnarayan Kuthi. The riverfront setting, mouthwatering lunch, and warmth of the staff made our family anniversary deeply memorable.”
            </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-surface-container-high/40">
<div class="w-10 h-10 rounded-full bg-lagoon-blue text-on-primary font-bold flex items-center justify-center font-headline-sm text-[16px]">
              SM
            </div>
<div>
<h4 class="font-headline-sm text-[15px] font-bold text-deep-navy">Subhashis &amp; Madhumita R.</h4>
<span class="font-label-sm text-label-sm text-outline">Platinum Member • Day-Out Privilege</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- High-Impact CTA Section -->
<section class="w-full py-16 bg-gradient-to-r from-deep-navy via-primary to-deep-navy text-surface-ice relative overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-deep-navy/80 via-transparent to-transparent pointer-events-none"></div>
<div class="max-w-5xl mx-auto px-6 lg:px-12 text-center relative z-10 space-y-6">
<span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sunset-gold/20 text-sunset-gold font-label-md text-label-md tracking-wider uppercase font-semibold">
<span class="material-symbols-outlined text-[16px]">flight</span>
        BE PART OF AN AWARD-WINNING COMMUNITY
      </span>
<h2 class="font-headline-xl text-headline-xl-mobile lg:text-headline-xl font-bold tracking-tight text-surface-ice max-w-3xl mx-auto leading-tight">
        Ready to Experience Award-Winning Vacations with Happy Miles?
      </h2>
<p class="font-body-lg text-body-md lg:text-body-lg text-surface-ice/80 max-w-2xl mx-auto leading-relaxed">
        Join thousands of satisfied vacation club members enjoying handcrafted getaways, verified hotel stays, and premier lifestyle privileges across India and beyond.
      </p>
<div class="flex flex-wrap items-center justify-center gap-4 pt-4">
<a class="inline-flex items-center gap-2 bg-gradient-to-r from-secondary-container via-coral-vibrant to-secondary text-on-secondary px-8 py-3.5 rounded-full font-label-lg text-label-lg shadow-lg hover:shadow-xl hover:opacity-95 transition-all transform hover:-translate-y-0.5" data-path="membership" href="/membership">
<span>Explore Our Membership Plans</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-2 bg-surface-container-lowest text-deep-navy px-7 py-3.5 rounded-full font-label-lg text-label-lg shadow hover:bg-surface-ice transition-colors" href="https://wa.me/9118002033188" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-lagoon-blue text-[20px]">chat</span>
<span>Speak to Our Travel Desk (WhatsApp)</span>
</a>
</div>
<div class="pt-6 flex flex-wrap items-center justify-center gap-6 text-surface-ice/70 font-label-sm text-label-sm">
<span class="inline-flex items-center gap-1.5">
<span class="material-symbols-outlined text-sunset-gold text-[16px]">verified</span>
          Zero Blackout Dates on Gold &amp; Platinum
        </span>
<span class="inline-flex items-center gap-1.5">
<span class="material-symbols-outlined text-sunset-gold text-[16px]">published_with_changes</span>
          25-Year Transferable Membership Privileges
        </span>
<span class="inline-flex items-center gap-1.5">
<span class="material-symbols-outlined text-sunset-gold text-[16px]">credit_card</span>
          Flexible No-Cost EMI Options
        </span>
</div>
</div>
</section>
</div></main><footer class="w-full bg-deep-navy text-surface-ice"><div class="max-w-7xl mx-auto px-6 lg:px-12 pt-16 pb-12"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10"><div class="lg:col-span-2 space-y-4"><div class="flex items-center gap-3"><span class="font-headline-md text-headline-md text-surface-ice tracking-tight font-bold">HAPPY MILES</span><span class="font-label-sm text-label-sm text-sunset-gold uppercase tracking-wider font-semibold">Dream Hospitality</span></div><p class="font-body-sm text-body-sm text-surface-variant/80 max-w-sm leading-relaxed">Crafting extraordinary holiday memories, bespoke resort memberships, and tranquil coastal sanctuaries across premium world-class destinations.</p><div class="inline-flex items-center gap-2 px-3 py-2 bg-primary/40 rounded-lg text-surface-ice font-label-sm text-label-sm"><span class="material-symbols-outlined text-sunset-gold text-[16px]">verified</span><span>IATA Affiliate Partner • Govt. Regd. Enterprise</span></div></div><div class="space-y-3"><span class="block font-label-lg text-label-lg text-sunset-gold uppercase tracking-wider">Verticals &amp; Offerings</span><ul class="space-y-2 font-body-sm text-body-sm text-surface-variant/75"><li><a class="hover:text-surface-ice transition-colors" data-path="verticals" href="/benefits.html">Luxury Vacation Ownership</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="verticals" href="/benefits.html">Coastal Beach Villas</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="verticals" href="/benefits.html">MICE &amp; Corporate Retreats</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="verticals" href="/benefits.html">Culinary Wellness Resorts</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="verticals" href="/benefits.html">Exchange Escapes</a></li></ul></div><div class="space-y-3"><span class="block font-label-lg text-label-lg text-sunset-gold uppercase tracking-wider">Destinations &amp; Stays</span><ul class="space-y-2 font-body-sm text-body-sm text-surface-variant/75"><li><a class="hover:text-surface-ice transition-colors" data-path="destinations" href="/destinations.html">Goa Sunset Shore</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="destinations" href="/destinations.html">Andaman Coral Bay</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="destinations" href="/destinations.html">Kerala Lagoon Haven</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="destinations" href="/destinations.html">Puri Coastal Sanctuary</a></li><li><a class="hover:text-surface-ice transition-colors" data-path="destinations" href="/destinations.html">International Gateways</a></li></ul></div><div class="space-y-3"><span class="block font-label-lg text-label-lg text-sunset-gold uppercase tracking-wider">Registered Office</span><div class="space-y-2 font-body-sm text-body-sm text-surface-variant/80"><p class="leading-relaxed">AVS House, 42/1A Gurupada Halder Road, Kolkata - 700026, West Bengal, India</p><p class="flex items-center gap-1.5"><span class="material-symbols-outlined text-[15px] text-sunset-gold">call</span>1800 2033 188 / 1800-309-8800</p><a class="inline-flex items-center gap-1.5 bg-lagoon-blue hover:bg-tertiary-container text-surface-ice px-3 py-1.5 rounded font-label-sm text-label-sm transition-colors mt-2" data-path="connect-us" href="/contact-us.html"><span class="material-symbols-outlined text-[15px] text-sunset-gold">chat</span>WhatsApp Support</a></div></div></div></div><div class="border-t border-surface-variant/10"><div class="max-w-7xl mx-auto px-6 lg:px-12 py-6 flex flex-col md:flex-row items-center justify-between gap-4 font-body-sm text-body-sm text-surface-variant/70"><div class="flex flex-wrap items-center gap-2 text-center md:text-left"><span>© 2025 The Happy Miles Dream Hospitality Ltd.</span><span>• Registered at Kolkata, West Bengal.</span></div><div class="flex items-center gap-6 font-label-md text-label-md"><a class="hover:text-surface-ice transition-colors" data-path="privacy-policy" href="#">Privacy Policy</a><a class="hover:text-surface-ice transition-colors" data-path="terms-and-conditions" href="#">Terms</a><span class="inline-flex items-center gap-1 text-sunset-gold"><span class="material-symbols-outlined text-[16px]">lock</span>256-Bit SSL Secured</span></div></div></div></footer>
@endverbatim
@endsection
