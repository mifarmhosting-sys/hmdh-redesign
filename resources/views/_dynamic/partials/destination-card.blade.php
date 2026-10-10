{{-- Destination card. Expects $d; $large = flagship variant (not part of the filterable list). --}}
@php
    $isLarge = !empty($large);
    $meta = collect([$d->zone && $isLarge ? $d->zone : null, $d->duration])->filter()->implode(' • ');
@endphp
<article id="{{ $isLarge ? 'featured-' : '' }}destination-{{ $d->id }}"
         @unless($isLarge) data-dest-card data-name="{{ \Illuminate\Support\Str::lower($d->name) }}" data-zone="{{ $d->zone }}" data-cat="{{ $d->category ?: 'More Destinations' }}" @else data-featured-copy @endunless
         class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_-2px_rgba(11,30,46,0.08)] flex flex-col group scroll-mt-32 hover:-translate-y-1.5 transition-all duration-300">
  <div class="relative {{ $isLarge ? 'h-60' : 'h-44' }} overflow-hidden">
    <img src="{{ \App\Support\Media::url($d->image_path) }}" alt="{{ $d->name }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
    @if($d->tag)<span class="absolute top-3 left-3 bg-coral-vibrant text-on-primary font-label-sm text-label-sm uppercase px-2.5 py-1 rounded-full shadow-md font-bold">{{ $d->tag }}</span>@endif
  </div>
  <div class="p-space-md flex flex-col flex-grow gap-space-sm">
    @if($meta)<span class="font-label-sm text-label-sm uppercase tracking-wide text-secondary font-bold">{{ $meta }}</span>@endif
    <h3 class="font-headline-sm text-headline-sm text-deep-navy">{{ $d->name }}</h3>
    @if($d->description)<p class="font-body-sm text-body-sm text-on-surface-variant {{ $isLarge ? 'line-clamp-4' : 'line-clamp-3' }}">{{ $d->description }}</p>@endif
    @if($d->best_time || $d->member_perk)
      <dl class="font-body-sm text-body-sm flex flex-col gap-0.5">
        @if($d->best_time)<div><dt class="inline font-semibold text-deep-navy">Best time: </dt><dd class="inline text-on-surface-variant">{{ $d->best_time }}</dd></div>@endif
        @if($d->member_perk)<div><dt class="inline font-semibold text-deep-navy">Member perk: </dt><dd class="inline text-coral-vibrant font-semibold">{{ $d->member_perk }}</dd></div>@endif
      </dl>
    @endif
    <a href="{{ route('hotels', ['q' => trim(preg_split('/\s[–-]\s/u', $d->name)[0])]) }}" class="mt-auto inline-flex items-center gap-1 font-label-md text-label-md text-lagoon-blue hover:text-coral-vibrant transition-colors">Explore Stays<span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
  </div>
</article>
