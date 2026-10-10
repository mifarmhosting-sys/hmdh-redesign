{{-- Hotel card. Expects $hotel; optional $large for flagship cards. --}}
@php
    $hasLink = $hotel->view_url && $hotel->view_url !== '#';
    $location = $hotel->location && strcasecmp($hotel->location, 'Various') !== 0 ? $hotel->location : null;
    $amenities = array_slice($hotel->amenityList(), 0, 3);
@endphp
<article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] flex flex-col group hover:-translate-y-1.5 transition-all duration-300">
  <div class="relative {{ !empty($large) ? 'h-64' : 'h-52' }} w-full overflow-hidden">
    <img src="{{ $hotel->image_url }}" alt="{{ $hotel->name }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
    @if($hotel->badge)
      <span class="absolute top-3 left-3 bg-coral-vibrant text-on-primary font-label-sm text-label-sm uppercase px-2.5 py-1 rounded-full shadow-md font-bold">{{ $hotel->badge }}</span>
    @endif
    @if($hotel->rating)
      <span class="absolute bottom-3 right-3 bg-deep-navy/85 backdrop-blur-md text-sunset-gold font-label-md text-label-md px-3 py-1 rounded-lg flex items-center gap-1 shadow">
        <span class="material-symbols-outlined text-[16px] fill-current">star</span>{{ $hotel->rating }} Star
      </span>
    @endif
  </div>
  <div class="p-space-md flex flex-col flex-grow gap-space-sm">
    @if($location || $hotel->country)
      <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wide">
        <span class="material-symbols-outlined text-[16px] text-sunset-gold">location_on</span>
        <span>{{ collect([$location, $hotel->country])->filter()->implode(', ') }}</span>
      </div>
    @endif
    <h3 class="font-headline-sm text-headline-sm text-deep-navy">{{ $hotel->name }}</h3>
    @if($hotel->description)
      <p class="font-body-sm text-body-sm text-on-surface-variant {{ !empty($large) ? 'line-clamp-4' : 'line-clamp-3' }}">{{ $hotel->description }}</p>
    @endif
    @if($amenities)
      <div class="flex flex-wrap gap-1.5">
        @foreach($amenities as $a)<span class="px-2 py-1 bg-surface-ice rounded text-primary font-label-sm text-label-sm font-semibold">{{ $a }}</span>@endforeach
      </div>
    @endif
    <div class="mt-auto pt-space-sm flex items-center justify-between gap-space-sm">
      @if($hotel->privilege_value)
        <div class="min-w-0">
          <span class="font-label-sm text-label-sm text-on-surface-variant uppercase block">{{ $hotel->privilege_label ?: 'Member Privilege' }}</span>
          <span class="font-body-md text-body-md text-coral-vibrant font-bold block truncate">{{ $hotel->privilege_value }}</span>
        </div>
      @else
        <span></span>
      @endif
      <a href="{{ $hasLink ? $hotel->view_url : route('contact') }}" @if($hasLink) target="_blank" rel="noopener" @endif class="shrink-0 px-4 py-2 rounded-lg bg-deep-navy hover:bg-lagoon-blue text-surface-ice font-label-md text-label-md transition-colors">{{ $hasLink ? 'View Property' : 'Enquire' }}</a>
    </div>
  </div>
</article>
