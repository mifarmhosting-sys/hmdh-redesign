@extends('layouts.site')

@section('title', 'Membership | ' . $settings->site_name . ' Dream Hospitality')
@section('meta_description', 'Happy Miles Membership: exclusive holiday privileges for you and your family.')

@php
    use App\Support\Media;
    $single = $plans->count() === 1;
    $featureLabels = $plans->flatMap(fn ($p) => array_keys($p->featureMap()))->unique()->values();
    $phone = $settings->contact_phone;
    $gridCols = match (true) {
        $single => 'lg:grid-cols-2',
        $plans->count() === 2 => 'md:grid-cols-2',
        $plans->count() === 3 => 'md:grid-cols-2 xl:grid-cols-3',
        default => 'md:grid-cols-2 xl:grid-cols-4',
    };
@endphp

@section('content')

{{-- Hero --}}
<section class="relative w-full overflow-hidden bg-deep-navy -mt-[116px] pt-[116px]">
  <div class="absolute inset-0 bg-gradient-to-br from-deep-navy via-primary to-lagoon-blue opacity-95"></div>
  <div class="absolute -top-24 right-0 w-[28rem] h-[28rem] bg-sunset-gold/15 rounded-full blur-3xl pointer-events-none"></div>
  <div class="relative z-10 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl lg:py-16 flex flex-col gap-space-md">
    <nav aria-label="Breadcrumb" class="flex items-center gap-2 font-body-sm text-body-sm text-surface-ice/80">
      <a href="{{ route('home') }}" class="hover:text-sunset-gold transition-colors">Home</a><span>/</span><span>Membership</span>
    </nav>
    <span class="self-start inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sunset-gold/20 text-sunset-gold font-label-md text-label-md tracking-wider uppercase">
      <span class="material-symbols-outlined text-[16px] fill-current">verified</span>Join the Elite
    </span>
    <h1 class="font-headline-xl text-headline-xl-mobile sm:text-headline-xl text-surface-bright tracking-tight max-w-3xl">Membership</h1>
    <p class="font-body-lg text-body-lg text-surface-ice/90 max-w-2xl">Experience unparalleled luxury and personalized service with our exclusive membership, designed for those who appreciate the extraordinary.</p>
    <div class="flex flex-wrap gap-space-md pt-space-xs">
      <a href="#enquiry" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-coral-vibrant text-on-primary font-label-lg text-label-lg hover:bg-secondary transition-all shadow-[0_4px_20px_rgba(211,73,28,0.4)]">Enquire Now<span class="material-symbols-outlined text-[18px]">arrow_downward</span></a>
      @if($phone)
        <a href="tel:{{ preg_replace('/[^\d+]/', '', $phone) }}" class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-surface-ice/15 hover:bg-surface-ice/25 text-surface-bright backdrop-blur-md font-label-lg text-label-lg transition-all"><span class="material-symbols-outlined text-[18px] text-sunset-gold">call</span>{{ $phone }}</a>
      @endif
    </div>
  </div>
</section>

{{-- Offers (admin: Offers) --}}
@if($offers->isNotEmpty())
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
  <div class="flex flex-col gap-space-xs mb-space-lg">
    <div class="flex items-center gap-space-xs"><span class="w-8 h-0.5 bg-coral-vibrant"></span><span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">Special Seasonal Privileges</span></div>
    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight">Top Offers of the Month</h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
    @foreach($offers as $offer)
      <article class="relative rounded-xl overflow-hidden bg-deep-navy text-surface-bright flex flex-col min-h-72 group shadow-md">
        @if($offer->image_path)
          <img src="{{ Media::url($offer->image_path) }}" alt="" loading="lazy" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500">
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-deep-navy via-deep-navy/70 to-deep-navy/20"></div>
        <div class="relative z-10 mt-auto p-space-md flex flex-col gap-space-xs">
          @if($offer->tag)<span class="self-start px-2 py-0.5 rounded bg-sunset-gold text-deep-navy font-label-sm text-label-sm uppercase font-bold">{{ $offer->tag }}</span>@endif
          <h3 class="font-headline-sm text-headline-sm">{{ $offer->title }}</h3>
          @if($offer->description)<p class="font-body-sm text-body-sm text-surface-ice/90">{{ $offer->description }}</p>@endif
          <a href="{{ $offer->cta_url ?: '#enquiry' }}" class="mt-space-xs inline-flex items-center gap-1 font-label-md text-label-md text-sunset-gold hover:text-surface-bright transition-colors">{{ $offer->cta_label }}<span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
        </div>
      </article>
    @endforeach
  </div>
</section>
@endif

{{-- Plans + enquiry (admin: Membership Plans) --}}
<section class="w-full bg-surface-ice/60 py-space-xl" id="plans">
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-lg">

    @if(session('success'))
      <div class="rounded-lg bg-emerald-50 text-emerald-800 px-space-md py-3 font-body-md text-body-md shadow-sm" role="status">{{ session('success') }}</div>
    @endif

    @unless($single)
      <div class="flex flex-col gap-space-xs max-w-2xl">
        <div class="flex items-center gap-space-xs"><span class="w-8 h-0.5 bg-coral-vibrant"></span><span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">Tailored Ownership Collections</span></div>
        <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight">Select Your Membership</h2>
      </div>
    @endunless

    <div class="grid grid-cols-1 {{ $gridCols }} gap-space-lg items-start">
      @foreach($plans as $plan)
        <article class="relative bg-surface-container-lowest rounded-2xl p-space-lg flex flex-col gap-space-md shadow-[0_8px_30px_-6px_rgba(11,30,46,0.12)] {{ $plan->is_featured ? 'ring-2 ring-sunset-gold' : '' }}">
          @if($plan->badge)
            <span class="absolute -top-3 left-space-lg inline-flex items-center gap-1 px-3 py-1 rounded-full bg-coral-vibrant text-on-primary font-label-sm text-label-sm uppercase font-bold shadow"><span class="material-symbols-outlined text-[14px] fill-current">star</span>{{ $plan->badge }}</span>
          @endif
          <header class="flex flex-col gap-1">
            @if($plan->audience)<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">{{ $plan->audience }}</span>@endif
            <h3 class="font-headline-md text-headline-md text-deep-navy">{{ $plan->name }}</h3>
            @if($plan->tagline)<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $plan->tagline }}</p>@endif
          </header>

          @if($plan->headline_1 || $plan->headline_2)
            <div class="flex flex-col gap-1 py-space-sm border-y border-outline-variant/50">
              @if($plan->headline_1)<span class="font-headline-sm text-headline-sm text-primary">{{ $plan->headline_1 }}</span>@endif
              @if($plan->headline_2)<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $plan->headline_2 }}</span>@endif
            </div>
          @endif

          @if($plan->price)
            <div class="flex flex-col">
              <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">{{ $plan->price_label }}</span>
              <span class="font-headline-lg text-headline-lg text-deep-navy leading-tight">₹ {{ $plan->price }}<span class="text-body-md text-on-surface-variant font-normal"> /-</span></span>
              @if($plan->price_note)<span class="font-body-sm text-body-sm text-secondary font-semibold">{{ $plan->price_note }}</span>@endif
            </div>
          @endif

          @if($plan->annual_charge)
            <div class="flex flex-col">
              <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">{{ $plan->annual_label ?: 'Annual Charge' }}</span>
              <span class="font-headline-md text-headline-md text-deep-navy">₹ {{ $plan->annual_charge }}<span class="text-body-md text-on-surface-variant font-normal"> /-</span></span>
            </div>
          @endif

          @if($plan->heads)
            <div class="flex items-center gap-space-sm bg-surface-ice rounded-lg px-space-md py-space-sm">
              <span class="material-symbols-outlined text-lagoon-blue">family_restroom</span>
              <div class="flex flex-col"><span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">No of Heads</span><span class="font-body-md text-body-md text-deep-navy font-semibold">{{ $plan->heads }}</span></div>
            </div>
          @endif

          @if($plan->perkList())
            <ul class="flex flex-col gap-space-sm">
              @foreach($plan->perkList() as $perk)
                <li class="flex items-start gap-space-sm font-body-sm text-body-sm text-on-surface"><span class="material-symbols-outlined text-[18px] text-coral-vibrant fill-current mt-0.5">check_circle</span><span>{{ $perk }}</span></li>
              @endforeach
            </ul>
          @endif

          @unless($single)
            <a href="#enquiry" class="mt-auto inline-flex items-center justify-center gap-1 py-3 rounded-lg {{ $plan->is_featured ? 'bg-coral-vibrant text-on-primary hover:bg-secondary' : 'bg-deep-navy text-surface-ice hover:bg-lagoon-blue' }} font-label-lg text-label-lg transition-colors">{{ $plan->cta_label }}<span class="material-symbols-outlined text-[18px]">chevron_right</span></a>
          @endunless
        </article>
      @endforeach

      @if($single)
        @include('partials.membership-enquiry-form')
      @endif
    </div>

    @unless($single)
      <div class="max-w-2xl w-full mx-auto">@include('partials.membership-enquiry-form')</div>
    @endunless
  </div>
</section>

{{-- Comparison (only with 2+ live plans that define rows) --}}
@if($plans->count() > 1 && $featureLabels->isNotEmpty())
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
  <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight mb-space-lg">Compare Membership Privileges</h2>
  <div class="overflow-x-auto rounded-xl shadow-md bg-surface-container-lowest">
    <table class="w-full text-left font-body-sm text-body-sm min-w-[640px]">
      <thead class="bg-deep-navy text-surface-bright">
        <tr><th class="p-space-md">Privileges</th>@foreach($plans as $plan)<th class="p-space-md">{{ $plan->name }}</th>@endforeach</tr>
      </thead>
      <tbody>
        @foreach($featureLabels as $label)
          <tr class="border-t border-outline-variant/40">
            <td class="p-space-md font-semibold text-deep-navy">{{ $label }}</td>
            @foreach($plans as $plan)<td class="p-space-md text-on-surface-variant">{{ $plan->featureMap()[$label] ?? '—' }}</td>@endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>
@endif

{{-- Member voices (real testimonials from admin) --}}
@if($testimonials->isNotEmpty())
<section class="w-full bg-deep-navy text-surface-ice py-space-xl">
  <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-lg">
    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-surface-bright tracking-tight">Voices of Our Club Members</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
      @foreach($testimonials as $t)
        <figure class="bg-white/10 rounded-xl p-space-lg flex flex-col justify-between gap-space-md">
          <blockquote class="font-body-sm text-body-sm text-surface-ice/90 italic leading-relaxed">{{ $t->quote }}</blockquote>
          <figcaption class="flex flex-col"><cite class="not-italic font-body-md text-body-md text-surface-bright font-bold">{{ $t->author }}</cite>@if($t->role)<span class="font-label-sm text-label-sm text-sunset-gold">{{ $t->role }}</span>@endif</figcaption>
        </figure>
      @endforeach
    </div>
  </div>
</section>
@endif

{{-- FAQs (admin: FAQs) --}}
@if($faqs->isNotEmpty())
<section class="max-w-3xl mx-auto px-margin-mobile lg:px-margin py-space-xl">
  <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight mb-space-lg text-center">Frequently Asked Questions</h2>
  <div class="flex flex-col gap-space-sm">
    @foreach($faqs as $faq)
      <details class="group bg-surface-container-lowest rounded-xl shadow-sm px-space-lg py-space-md">
        <summary class="flex items-center justify-between gap-space-md cursor-pointer list-none font-headline-sm text-body-lg text-deep-navy font-semibold">
          {{ $faq->question }}
          <span class="material-symbols-outlined text-coral-vibrant transition-transform group-open:rotate-180">expand_more</span>
        </summary>
        <p class="pt-space-sm font-body-md text-body-md text-on-surface-variant">{{ $faq->answer }}</p>
      </details>
    @endforeach
  </div>
</section>
@endif

@endsection
