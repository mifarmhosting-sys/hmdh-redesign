---
name: Luxe Coastline & Resort
colors:
  surface: '#f7f9ff'
  surface-dim: '#c9dcf2'
  surface-bright: '#f7f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#edf4ff'
  surface-container: '#e3efff'
  surface-container-high: '#d9eaff'
  surface-container-highest: '#d2e4fb'
  on-surface: '#0a1d2d'
  on-surface-variant: '#41484e'
  inverse-surface: '#203243'
  inverse-on-surface: '#e8f2ff'
  outline: '#71787f'
  outline-variant: '#c1c7cf'
  surface-tint: '#24638b'
  primary: '#003a58'
  on-primary: '#ffffff'
  primary-container: '#045279'
  on-primary-container: '#8cc5f1'
  inverse-primary: '#94cdfa'
  secondary: '#a04100'
  on-secondary: '#ffffff'
  secondary-container: '#ff8340'
  on-secondary-container: '#682800'
  tertiary: '#003b52'
  on-tertiary: '#ffffff'
  tertiary-container: '#005371'
  on-tertiary-container: '#83c6ed'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#cae6ff'
  primary-fixed-dim: '#94cdfa'
  on-primary-fixed: '#001e30'
  on-primary-fixed-variant: '#004b70'
  secondary-fixed: '#ffdbcb'
  secondary-fixed-dim: '#ffb693'
  on-secondary-fixed: '#341000'
  on-secondary-fixed-variant: '#7a3000'
  tertiary-fixed: '#c3e7ff'
  tertiary-fixed-dim: '#8bcff6'
  on-tertiary-fixed: '#001e2c'
  on-tertiary-fixed-variant: '#004c69'
  background: '#f7f9ff'
  on-background: '#0a1d2d'
  surface-variant: '#d2e4fb'
  surface-ice: '#EBF6FB'
  sunset-gold: '#E5A93C'
  deep-navy: '#0B1E2E'
  coral-vibrant: '#D3491C'
  lagoon-blue: '#045279'
typography:
  headline-xl:
    fontFamily: Plus Jakarta Sans
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
  headline-xl-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 36px
    fontWeight: '600'
    lineHeight: 44px
  headline-lg-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 26px
    fontWeight: '600'
    lineHeight: 34px
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  headline-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 15px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Plus Jakarta Sans
    fontSize: 13px
    fontWeight: '400'
    lineHeight: 20px
  label-lg:
    fontFamily: Outfit
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
  label-md:
    fontFamily: Outfit
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
  label-sm:
    fontFamily: Outfit
    fontSize: 10px
    fontWeight: '700'
    lineHeight: 14px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 0.75rem
  margin: 3rem
  margin-mobile: 1.25rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 1rem
  space-lg: 1.5rem
  space-xl: 2.5rem
---

## Brand & Style

This design system expresses the indulgence, tranquility, and prestige of premium coastal holidays and luxury resort memberships. It caters to discerning travelers, families seeking curated hospitality, and vacation club members. The interface channels the transition from brilliant daytime waters to dusk twilight at a seaside getaway.

The aesthetic blends **Modern Hospitality Elegance** with **Refined Glassmorphism**. Dark ocean navy foundations support illuminated tropical cyan accents, warm sunset gold highlights, and vibrant coral call-to-actions. Translucent frosted navigations, layered luxury card surfaces, and pristine typography evoke exclusivity, leisure, and seamless travel booking.

## Colors

The palette draws directly from oceanic resort vistas, shifting between midnight waters and warm sunlit coasts:

- **Primary (`#045279`)**: Lagoon Blue anchors primary navigation elements, active indicators, and formal interactive components.
- **Secondary (`#C85A17`)**: Warm Sunset Terracotta drives high-conversion triggers, booking call-to-action buttons, and promotional focus states.
- **Tertiary (`#73B7DD`)**: Sky Cyan serves as a soft luminance layer, handling badge backgrounds, delicate highlight borders, and secondary charts.
- **Neutral (`#0B1E2E`)**: Deep Oceanic Night provides contrast for high-priority typography, luxury headers, and immersive dark backdrop zones.

### Semantic & Surface Rules
- `surface-ice` (`#EBF6FB`) constitutes the main soft canvas background for light-mode flows, ensuring warmth rather than stark clinical whites.
- `sunset-gold` (`#E5A93C`) is reserved for VIP/exclusive tier badges, ratings, and luxury perks.
- `coral-vibrant` (`#D3491C`) acts as an energetic alert and special offer badge color.

## Typography

Typography balances contemporary clarity with premium hospitality appeal. 

- **Display & Headings**: Set in **Plus Jakarta Sans** with clean letter-proportions, geometric balance, and humanistic warmth. Heavy display weights are reserved for resort titles, hero claims, and tier categories.
- **Body Content**: Set in **Plus Jakarta Sans** for neutral legibility across long destination descriptions, itineraries, and booking terms.
- **Labels & Micro-copy**: Set in **Outfit** to introduce crisp geometric distinction in status badges, navigation links, filters, and numeric pricing breakdowns.

## Layout & Spacing

The layout is grounded in a 12-column responsive fluid grid designed to display large experiential photography and booking tools without crowding:

- **Desktop (>= 1024px)**: 12-column layout with `3rem` margins and `1.5rem` gutters. Maximum content width caps at `1280px` to maintain focused visual scanning.
- **Tablet (768px - 1023px)**: 8-column layout with `2rem` margins and `1rem` gutters.
- **Mobile (< 768px)**: 4-column layout with `1.25rem` margins and `0.75rem` gutters.

Spacing tokens follow a proportional rhythm calibrated for spacious hospitality interfaces:
- Component-level gaps and badge padding use `space-xs` and `space-sm`.
- Form inputs, standard cards, and list arrangements use `space-md` and `space-lg`.
- Section dividers and hero banners expand into `space-xl` and above to reinforce an airy, resort atmosphere.

## Elevation & Depth

Visual hierarchy uses layered translucent surfaces and ambient ocean-tinted shadows:

- **Glassmorphic Navigation & Panels**: Top navigation headers and floating filter bars employ a backdrop filter blur of `16px` with an 85% opacity fill of either `#0B1E2E` (dark mode / hero over-image state) or `#EBF6FB` (light mode).
- **Cards & Resort Modules**: Cards sit on pure white or faint `#FFFFFF` translucent layers with subtle double-layered ambient shadows: `0 4px 20px -2px rgba(11, 30, 46, 0.08)` and `0 1px 3px 0 rgba(11, 30, 46, 0.04)`.
- **Raised & Hover States**: Resort cards elevate smoothly upon interaction, using `0 16px 32px -4px rgba(4, 82, 121, 0.16)` to produce an illuminated blue-tinted elevation.
- **Overlays & Modals**: Modals and celebratory offer sheets utilize deep `#0B1E2E` backing with 60% opacity blur and crisp `1px` inner highlights (`rgba(255, 255, 255, 0.2)`).

## Shapes

The system uses balanced curves (`roundedness: 2`) that convey warmth and friendliness while maintaining structural luxury:

- **Buttons & Chips**: Default to `0.5rem` (8px) for buttons and inputs, or full pill radius (`9999px`) for promotional badges, status tags, and floating action buttons.
- **Cards & Panels**: Resort showcases, membership tiles, and dialog windows use `1rem` (16px) corner radiuses.
- **Hero Containers & Media Framing**: Visual media frames feature `1.5rem` (24px) corners when separated from edge boundaries.

## Components

### Buttons
- **Primary CTA**: Background `#C85A17`, text white, subtle top bevel shadow. Used for "Book Now", "Check Plans", and immediate reservation actions.
- **Secondary CTA**: Translucent lagoon blue or pure outline using `#045279` border with matching text; fills with `#045279` on hover.
- **Glass Floating Action**: Frosted `#0B1E2E` (or primary blue) background with 80% opacity and blurred backdrop for quick support and scroll-to-top buttons.

### Badges & Chips
- **Offer / Promo Badges**: Solid pill form using `#D3491C` with white text and `0.25rem 0.75rem` padding.
- **Membership Status Chips**: `#E5A93C` background with `#0B1E2E` high-contrast typography, accompanied by a subtle gold border.
- **Feature Tags**: Faint tint `#EBF6FB` surface with `#045279` text for amenities (e.g., "Pool Access", "All-Inclusive").

### Cards
- **Resort & Plan Cards**: Stacked layout with top-edge aspect ratio 16:9 media, rounded-lg (`1rem`) outer wrapper, internal padding of `space-md`, and floating pricing tags anchored in the upper-right corner over imagery.
- **Membership Package Cards**: Deep navy `#0B1E2E` background option with gold accent borders, displaying year privileges and redemption counters.

### Input Fields & Search Bars
- **Booking Date & Guest Selectors**: Clean rectangular inputs with `0.5rem` radius, light `#EBF6FB` surface, and `#045279` active border indicators.
- **Labels**: Rendered with **Outfit** uppercase micro-tracking above input containers for rapid legibility.

### Navigation Bars
- **Glass Header**: Sticky fixed navigation utilizing frosted glass (`backdrop-filter: blur(16px)`), slim bottom border in `rgba(115, 183, 221, 0.2)`, containing crisp white or deep blue typography and contrasting action buttons.