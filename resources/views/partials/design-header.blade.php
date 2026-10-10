{{--
  Shared site header (the approved Home-page header), used by every page.
  Usage: @include('partials.design-header', ['active' => 'home'])
  active: home | properties | verticals | destinations | membership | awards | contact
--}}
@php
    $nav = [
        'home' => ['/', 'Home'],
        'properties' => ['/our-hotels.html', 'Properties & Hotels'],
        'verticals' => ['/benefits.html', 'Verticals'],
        'destinations' => ['/destinations.html', 'Destinations'],
        'membership' => ['/membership', 'Membership'],
        'awards' => ['/awards.html', 'Awards'],
        'contact' => ['/contact-us.html', 'Contact Us'],
    ];
$headerSettings = $settings ?? \App\Models\SiteSetting::first() ?? new \App\Models\SiteSetting();
@endphp
<header class="fixed top-0 left-0 right-0 z-50">
  <div class="bg-deep-navy text-surface-ice py-space-xs px-margin-mobile lg:px-margin shadow-[0_1px_8px_rgba(0,0,0,0.12)]">
    <div class="max-w-[1280px] mx-auto flex items-center justify-between text-body-sm">
      <div class="flex items-center gap-space-lg">
        @if($headerSettings->contact_address)
        <div class="hidden sm:flex items-center gap-space-xs text-surface-ice">
          <span class="material-symbols-outlined text-[16px] text-sunset-gold">location_on</span>
          <span>{{ $headerSettings->contact_address }}</span>
        </div>
        @endif
        @if($headerSettings->contact_phone)
        <div class="flex items-center gap-space-xs text-surface-ice">
          <span class="material-symbols-outlined text-[16px] text-sunset-gold">call</span>
          <span>{{ $headerSettings->contact_phone }}</span>
        </div>
        @endif
      </div>
      <div class="flex items-center gap-space-md">
        <a class="flex items-center gap-space-xs font-label-md text-label-md tracking-wider uppercase text-sunset-gold hover:text-surface-ice transition-colors" href="/member/login">
          <span class="material-symbols-outlined text-[16px]">lock</span>
          <span>Member Login</span>
        </a>
      </div>
    </div>
  </div>
  <div class="h-20 bg-surface/85 backdrop-blur-xl shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] px-margin-mobile lg:px-margin">
    <div class="max-w-[1280px] h-full mx-auto flex items-center justify-between gap-space-md">
      <a class="flex items-center gap-space-sm shrink-0" href="/">
        <img src="/images/design/8da08c5f01b5.png" alt="Happy Miles Dream Hospitality" class="h-10 w-auto object-contain">
      </a>
      <nav class="hidden xl:flex items-center gap-space-lg" aria-label="Primary">
        @foreach($nav as $key => [$href, $label])
          <a href="{{ $href }}" @if(($active ?? '') === $key) aria-current="page" @endif
             class="{{ ($active ?? '') === $key ? 'font-label-lg text-label-lg transition-colors text-primary font-bold' : 'font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors' }}">{{ $label }}</a>
        @endforeach
      </nav>
      <div class="flex items-center gap-space-md shrink-0">
        <a class="inline-flex items-center justify-center px-space-md py-space-sm rounded-lg bg-coral-vibrant text-on-primary font-label-lg text-label-lg tracking-wide hover:bg-secondary transition-all shadow-[0_4px_14px_rgba(211,73,28,0.3)]" href="/membership">Book Experience</a>
        <a href="/member/login" aria-label="Member login"><img alt="Profile" class="w-8 h-8 rounded-full object-cover ring-2 ring-sunset-gold" src="/images/design/avatar.svg"></a>
      </div>
    </div>
  </div>
</header>
