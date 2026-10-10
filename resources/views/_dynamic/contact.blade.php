@extends('layouts.site')

@section('title', 'Connect Us | ' . $settings->site_name . ' Dream Hospitality')
@section('meta_description', 'Get in touch with the Happy Miles Dream Hospitality team.')

@php
    $phone = $settings->contact_phone;
    $phoneDigits = preg_replace('/[^\d+]/', '', (string) $phone);
    $cards = array_values(array_filter([
        $phone ? ['icon' => 'call', 'title' => 'Call Us', 'value' => $phone, 'href' => 'tel:' . $phoneDigits, 'cta' => 'Call now'] : null,
        $phone ? ['icon' => 'chat', 'title' => 'WhatsApp', 'value' => $phone, 'href' => 'https://wa.me/' . preg_replace('/\D/', '', $phone), 'cta' => 'Chat on WhatsApp'] : null,
        $settings->contact_email ? ['icon' => 'mail', 'title' => 'Email', 'value' => $settings->contact_email, 'href' => 'mailto:' . $settings->contact_email, 'cta' => 'Compose email'] : null,
        $settings->contact_address ? ['icon' => 'location_on', 'title' => 'Visit Us', 'value' => $settings->contact_address, 'href' => 'https://maps.google.com/?q=' . urlencode($settings->contact_address), 'cta' => 'View on map'] : null,
    ]));
@endphp

@section('content')
@include('partials.page-hero', [
    'heroTitle' => "We're Here to Craft Your Perfect Getaway",
    'crumb' => 'Connect Us',
    'heroEyebrow' => 'Connect Us',
    'heroText' => 'Questions about membership, resort reservations or holidays? Our team is happy to help.',
])

@if($cards)
<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin -mt-10 relative z-20">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
    @foreach($cards as $c)
      <a href="{{ $c['href'] }}" @if(str_starts_with($c['href'], 'http')) target="_blank" rel="noopener" @endif class="bg-surface-container-lowest rounded-xl p-space-lg shadow-[0_8px_30px_rgba(11,30,46,0.12)] flex flex-col gap-space-xs hover:-translate-y-1 transition-all">
        <span class="w-12 h-12 rounded-full bg-surface-ice text-coral-vibrant flex items-center justify-center"><span class="material-symbols-outlined">{{ $c['icon'] }}</span></span>
        <h2 class="font-headline-sm text-headline-sm text-deep-navy">{{ $c['title'] }}</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant break-words">{{ $c['value'] }}</p>
        <span class="mt-auto font-label-md text-label-md text-lagoon-blue">{{ $c['cta'] }} &rarr;</span>
      </a>
    @endforeach
  </div>
</section>
@endif

<section class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl grid grid-cols-1 lg:grid-cols-5 gap-space-xl items-start">
  <div class="lg:col-span-3 bg-surface-container-lowest rounded-2xl p-space-lg lg:p-space-xl shadow-[0_8px_30px_-6px_rgba(11,30,46,0.12)]">
    <h2 class="font-headline-md text-headline-md text-deep-navy">Send Us a Message</h2>
    <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-lg">Fill out the form and a Happy Miles team member will get back to you.</p>

    @if(session('success'))
      <div class="rounded-lg bg-emerald-50 text-emerald-800 px-space-md py-3 mb-space-md font-body-md text-body-md" role="status">{{ session('success') }}</div>
    @endif
    @if($errors->any())
      <ul class="rounded-lg bg-error-container text-on-error-container px-space-md py-2 mb-space-md font-body-sm text-body-sm list-disc list-inside" role="alert">
        @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
      </ul>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
      @csrf
      @foreach([['name', 'Full Name', 'text', true], ['phone', 'Mobile Number', 'tel', false], ['email', 'Email Address', 'email', true], ['subject', 'Subject', 'text', false]] as [$field, $label, $type, $req])
        <div class="flex flex-col gap-1.5">
          <label for="c-{{ $field }}" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold">{{ $label }}@if($req) *@endif</label>
          <input id="c-{{ $field }}" type="{{ $type }}" name="{{ $field }}" value="{{ old($field) }}" @if($req) required @endif class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md focus:outline-2 focus:outline-coral-vibrant">
        </div>
      @endforeach
      <div class="sm:col-span-2 flex flex-col gap-1.5">
        <label for="c-message" class="font-label-md text-label-md uppercase tracking-wider text-primary font-bold">Message *</label>
        <textarea id="c-message" name="message" rows="5" required class="w-full bg-surface-ice rounded-lg px-3 py-2.5 font-body-md text-body-md focus:outline-2 focus:outline-coral-vibrant">{{ old('message') }}</textarea>
      </div>
      <div class="sm:col-span-2">
        <button type="submit" class="w-full sm:w-auto px-space-xl py-3 rounded-lg bg-coral-vibrant hover:bg-secondary text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-2 transition-all shadow-md cursor-pointer">Send Message<span class="material-symbols-outlined text-[18px]">send</span></button>
      </div>
    </form>
  </div>

  <aside class="lg:col-span-2 flex flex-col gap-space-md">
    @if($settings->working_hours)
      <div class="bg-deep-navy text-surface-bright rounded-2xl p-space-lg flex flex-col gap-space-xs">
        <span class="material-symbols-outlined text-sunset-gold">schedule</span>
        <h3 class="font-headline-sm text-headline-sm">Working Hours</h3>
        <p class="font-body-md text-body-md text-surface-ice/90">{{ $settings->working_hours }}</p>
      </div>
    @endif
    @if($settings->contact_address)
      <div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-sm flex flex-col gap-space-xs">
        <span class="material-symbols-outlined text-coral-vibrant">location_on</span>
        <h3 class="font-headline-sm text-headline-sm text-deep-navy">Our Office</h3>
        <p class="font-body-md text-body-md text-on-surface-variant">{{ $settings->contact_address }}</p>
        <a href="https://maps.google.com/?q={{ urlencode($settings->contact_address) }}" target="_blank" rel="noopener" class="font-label-md text-label-md text-lagoon-blue">Get directions &rarr;</a>
      </div>
    @endif
  </aside>
</section>

@if($faqs->isNotEmpty())
<section class="max-w-3xl mx-auto px-margin-mobile lg:px-margin pb-space-xl">
  <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-deep-navy tracking-tight mb-space-lg text-center">Frequently Asked Questions</h2>
  <div class="flex flex-col gap-space-sm">
    @foreach($faqs as $faq)
      <details class="group bg-surface-container-lowest rounded-xl shadow-sm px-space-lg py-space-md">
        <summary class="flex items-center justify-between gap-space-md cursor-pointer list-none font-headline-sm text-body-lg text-deep-navy font-semibold">{{ $faq->question }}<span class="material-symbols-outlined text-coral-vibrant transition-transform group-open:rotate-180">expand_more</span></summary>
        <p class="pt-space-sm font-body-md text-body-md text-on-surface-variant">{{ $faq->answer }}</p>
      </details>
    @endforeach
  </div>
</section>
@endif
@endsection
