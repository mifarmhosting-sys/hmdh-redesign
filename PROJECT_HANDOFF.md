# Happy Miles Dream Hospitality (hmdh) — Project Handoff

> Purpose: a complete briefing so an AI assistant (or developer) can continue this project in a fresh session without re-exploring it.
> Snapshot date: 2026-10-09. Branch: `redesign` (branched from `main` at commit `3147694`). **Nothing from the redesign is committed yet.**

---

## 0. LATEST STATE (read this first) — pixel-faithful static front end

**Current direction from the owner:** show the UI design *exactly*, frontend only, **no backend changes now**, keep all data intact and wire it in later "when needed". Animations wanted.

What was done (supersedes the "dynamic" redesign described in §6 for the 7 public pages):
- The 7 public views — `home`, `hotels`, `benefits`, `destinations`, `awards`, `membership`, `contact` (`resources/views/*.blade.php`) — are now **generated, verbatim ports of the design HTML** from `hmdh-new-design/*/code.html` (header + body + footer + the design's own inline scripts), wrapped in `@verbatim`. Content is therefore **static design content**, not database content. The controllers still load the DB data and pass it to the views, but the views ignore it. DB, models, migrations, admin, routes were not changed in this step.
- The **data-driven versions** (everything described in §6) are preserved, unused, in `resources/views/_dynamic/` (`home, hotels, destinations, benefits, awards, membership, contact` + `partials/` + `layouts/site.blade.php`). Wiring data back = copy a section pattern from there, or rebuild sections of the static views with `{{ }}` bindings.
- Layout for these pages: `resources/views/layouts/design.blade.php` (fonts, Material Symbols, `@vite`, `@stack('head'|'scripts')`; adds `js` class to `<html>`).
- Tailwind theme is **generated from the merged Tailwind configs of the 7 designs** (52 colours, 12 font sizes, spacing, radius), plus Tailwind-v3 compatibility values (radius/shadow/blur scale, default border colour, `flex-grow`/`flex-shrink-0` utilities) so v4 renders like the CDN v3 mock-ups. `resources/css/app.css` is machine-generated (generator script lived in the session scratchpad; to change the theme edit the file directly now). **Do not** hand-"fix" colours — they come from the design.
- Design images (88 hotlinked Google URLs) were downloaded to `public/images/design/<hash>.jpg|png`; one stock avatar was replaced by `public/images/design/avatar.svg`. No page depends on Google-hosted images any more.
- Links: every design `data-path` was mapped to a real route (`properties*`→`/our-hotels.html`, `verticals`→`/benefits.html`, `destination(s)`→`/destinations.html`, `awards*`→`/awards.html`, `membership`/`explore-membership`/`book-experience`→`/membership`, `connect-us`/`contact-us`/`pay-now`/`payment-gateway`→`/contact-us.html`, `member-*`/`login`→`/member/login`, legal pages→`#`). **Blog links were removed** (owner: hide blog).
- Animations (`resources/js/app.js` + CSS in `app.css`): header drop-in + shadow on scroll; scroll-reveal for headings/cards with staggered delay (IntersectionObserver, class `reveal` added automatically to section headings, grid children, forms, tables, details, `.rounded-2xl` bands); count-up for numeric stats; slow Ken-Burns zoom on the hero background; floating blurred accent blobs; CTA hover-lift; WhatsApp pulse; smooth in-page anchors; **mobile hamburger menu injected by JS** (the designs have desktop nav only). All respect `prefers-reduced-motion`.
- Only functional wiring added to a design: the **Connect Us form** now `fetch`-POSTs to the existing `/contact-us.html` endpoint (stores a `ContactMessage`; extra fields city/callback time/WhatsApp opt-in are appended to the message; the design's success banner is kept).
- **Known consequences to decide later:** (a) the static pages show the design's *invented* contact details/prices/tiers/offers (e.g. 1800-309-8800, ₹1,49,000 tiers, EMI calculator) — these must be replaced with real data before going public; (b) the Membership design has **no enquiry form**, so `MembershipEnquiry` can't be collected from the UI until one is added back (the form exists in `_dynamic/partials/membership-enquiry-form.blade.php`); (c) the admin screens for plans/offers/FAQs and the new hotel/destination fields still exist but currently drive nothing on the public pages.
- How to regenerate/adjust: the page generator (design HTML → Blade) and CSS generator were scratch scripts; the views are plain HTML inside `@verbatim`, so edit them directly.
- Run locally: `npm run build` then `php artisan serve --port=8000` (use PowerShell `Start-Process` if the server must survive the shell).

### 0a. Dashboard (admin) login details

| Item | Value |
|---|---|
| Admin login URL | `/admin/login` (local: http://127.0.0.1:8000/admin/login) |
| Email | `admin@happymilesdreamhospitality.com` |
| Password | `adminpassword` (seeded default from `DatabaseSeeder` — **change it before going live**) |
| After login | `/admin` dashboard → sidebar: **Page Content** (Home Page), Home Page Content, Hotels, Destinations, Testimonials, etc. |
| Member login URL | `/member/login` (sample member: Customer ID `PTC-1001`, password `memberpassword`) |

Notes:
- The admin user is only created by the seeder if that email does not exist yet; a changed password in the database is never overwritten by re-seeding.
- To change the password: use `php artisan tinker` → `App\Models\User::where('email','admin@happymilesdreamhospitality.com')->update(['password'=>Hash::make('NEW_PASSWORD')])`.
- If the live server's database was synced from local, the same credentials apply there.

### 0b. Home page is now editable from the admin (2026-10-11)

`resources/views/home.blade.php` is **data-driven** again (same markup as the design, no `@verbatim` body). The static version is gone from the working tree (see git history / `_dynamic/home`).
- **Texts, images, toggles** are defined in `config/cms.php` (`pages.home.sections.*.fields.*`, with defaults = the approved design copy) and stored in `site_contents` (`home.hero.title` …). Read in views with `cms()`, `cms_on()`, `cms_image()`, `cms_lines()`, `cms_items()` (`app/Support/helpers.php`, class `app/Cms/Cms.php`). Edited at **Admin → Page Content → Home Page** (`AdminPageController`, views `admin/pages/*`).
- **Repeating cards** (`story_cards`, `cta_perks`) live in `content_items`; `CmsHomeSeeder` stores the defaults once so they can be edited.
- **Hotels / Destinations / Testimonials** on the home page are chosen with the "Show on the home page" checkbox + position (`show_on_home`, `home_order` columns; migration `2026_10_10_000001_create_cms_tables`). Destination tile title = shorter half of "A – B" in the name, caption = `tag` or the longer half.
- Phone/address in the header, banner and footer come from **Site Settings** (header previously showed a fabricated toll-free number).
- To make another page editable: add it to `config/cms.php`, use the helpers in its view.
- Unauthenticated utility routes now require `?key=<DEPLOY_KEY>` (`App\Http\Middleware\DeployKey`; set `DEPLOY_KEY` in `.env`).

Everything below (§1–§12) is still accurate for the database, admin, routes and the dynamic work, except where §0 says the public pages are now static.

---

## 1. What this project is

A Laravel marketing website + CMS for **Happy Miles Dream Hospitality** (Kolkata, India), a holiday-club / vacation-membership and travel company. It has:

- a public website (home, properties/hotels, destinations, verticals/benefits, awards, membership, contact, about, blog),
- an admin CMS (`/admin`) that edits nearly all content,
- a member area (`/member`) where registered members log in and request bookings.

Owner's goal at this moment: **re-design the whole site** using a new UI design (folder `hmdh-new-design/`) while keeping the **real data** exactly right. The new design is applied to 7 pages already (see §6). The blog is intentionally **hidden for now**.

---

## 2. Tech stack and how to run

| Item | Value |
|---|---|
| PHP / framework | PHP ^8.3, Laravel **13.x** (`laravel/framework ^13.8`) |
| Database | **SQLite**, file `database/database.sqlite` (committed to git; it IS the content store) |
| Front end | Blade + **Tailwind CSS 4 via Vite** (`@tailwindcss/vite`), built assets in `public/build` (gitignored) |
| Fonts/icons | Google Fonts (Plus Jakarta Sans, Outfit), Material Symbols Outlined, Font Awesome 6.5 (CDN) |
| Sessions/cache/queue | all `database` driver |
| Mail | `MAIL_MAILER=log` locally (emails are written to the log, not sent) |
| Auth guards | `web` (admin, `users` table) and `member` (`members` table) |

Run locally (Windows, Git Bash/PowerShell, from `d:\next\hmdh`):

```bash
composer install            # if vendor/ missing
npm install                 # if node_modules/ missing
npm run build               # builds public/build (needed once, and after any view/CSS change)
php artisan migrate         # applies the new tables/columns (already applied locally)
php artisan serve --port=8000   # http://127.0.0.1:8000
```

Gotchas learned:
- If `public/hot` exists, Laravel loads assets from the Vite dev server (`localhost:5173`) and the site looks unstyled unless `npm run dev` is running. Delete `public/hot` or run `npm run dev`.
- In this Windows Git Bash, long commands with heredocs/`$`/`₹`/backslashes sometimes fail to parse; prefer the editor's Write/Edit tools for files and keep shell commands short.
- Admin default login (from `DatabaseSeeder`): `admin@happymilesdreamhospitality.com` / `adminpassword` — **change in production**.

---

## 3. Repository map (what matters)

```
app/
  Http/Controllers/
    HomeController.php            public pages (home, hotels, destinations, benefits, awards, about, contact, membership, blog)
    AdminController.php           login, dashboard, site settings, homepage content, about content, contact messages
    AdminHotelController.php      hotels CRUD (+ new display fields)
    AdminContentController.php    destinations, testimonials, benefits, awards, stats CRUD
    AdminMemberController.php     members CRUD
    AdminBlogController.php       blog posts CRUD + comment moderation
    AdminMembershipController.php membership enquiries list/delete
    AdminMembershipPlanController.php  NEW  membership plans CRUD
    AdminOfferController.php           NEW  offers CRUD
    AdminFaqController.php             NEW  FAQs CRUD
    MemberAuthController.php      member login/register (+ emails)
    MemberBookingController.php   member profile + booking request (+ emails)
  Models/                         see §5
  Mail/                           BookingReceivedAdmin/Customer, MemberRegisteredAdmin/Customer
  Support/Media.php               NEW  Media::url($path, $fallback) — resolves a stored path to a URL
  Providers/AppServiceProvider.php  View composer: injects $settings into all admin.* views
database/
  database.sqlite                 the live content (commit/sync this to move content between machines)
  migrations/                     base tables + 5 NEW migrations dated 2026_10_09_*
  seeders/DatabaseSeeder.php      admin user, settings, hero, welcome, about, destinations, testimonials, benefits, awards, stats; calls the seeders below
  seeders/HotelsTableSeeder.php   hotel categories + hotels (existing)
  seeders/MembershipContentSeeder.php  NEW  real plan (active) + design drafts (inactive)
  seeders/DestinationGroupingSeeder.php NEW  fills destinations.category/zone by name keyword (only where empty)
resources/
  css/app.css                     Tailwind theme tokens (design system) — see §7
  js/app.js                       mobile nav toggle + generic data-tabs switcher
  views/layouts/site.blade.php    NEW layout used by redesigned pages
  views/layouts/app.blade.php     OLD layout (uses public/css/master.css) — still used by about, blog, member pages
  views/partials/                 NEW page-hero, hotel-card, destination-card, membership-enquiry-form
  views/admin/                    CMS views (own layout `admin/layout.blade.php`, FontAwesome, custom CSS)
public/
  images/ (81 MB), storage -> storage/app/public (uploads), css/master.css (old site CSS), js/hotel-tabs.js (old home tabs, now unused by home)
hmdh-new-design/                  the new UI designs (Stitch exports: code.html + screen.png per page, DESIGN.md)
membership page/                  copy of the membership design + its DESIGN.md
PROJECT_HANDOFF.md                this file
```

Images: seeded images live in `public/images/...` (e.g. `images/destinations/*.jpg`, `images/properties/*.jpg`); admin uploads go to `storage/app/public/images` and are served via `public/storage`. `Media::url()` handles both plus absolute URLs. Hotel has its own `image_url` accessor with the same logic.

---

## 4. Routes

### Public
| URL | Route name | Controller@method | Notes |
|---|---|---|---|
| `/`, `/home`, `/home.html` | `home` | HomeController@home | |
| `/our-hotels.html` | `hotels` | @hotels | query: `q`, `country`, `theme`, `region`; paginated 24 |
| `/destinations.html` | `destinations` | @destinationsPage | client-side search/zone/category filter |
| `/benefits.html` | `benefits` | @benefits | nav label "Verticals" |
| `/awards.html` | `awards` | @awards | |
| `/about.html` | `about` | @about | **not in the nav**, still OLD layout |
| `/membership` | `membership` | @membership | POST `/membership/enquire` stores `MembershipEnquiry` |
| `/contact-us.html` | `contact` | @contact | POST `/contact-us.html` stores `ContactMessage` (also supports AJAX JSON) |
| `/blog`, `/blog/{slug}`, POST `/blog/{slug}/comment` | `blog.*` | blog methods | **hidden from nav/footer; routes still work**; comments need approval |

### Member (`/member`, guard `member`)
`login`, `register` (guest); `logout`, `profile`, `booking` (GET form / POST submit) require `auth:member`. Members log in with **`customer_id`** + password (e.g. `PTC-1001`). Registration and booking send emails (see §9).

### Admin (`/admin`, guard `web`, all under `auth`)
`login`/`logout`; `dashboard`; `settings`; `homepage`; `about`; resources: `hotels`, `members`, `blogs`; plus `destinations`, `testimonials`, `benefits`, `awards`, `stats` (index/store/edit/update/destroy), `messages/{id}` (view/delete), blog `comments` (list/approve/delete), `membership-enquiries` (list/delete), and NEW `membership-plans`, `offers`, `faqs` (resources, no `show`).
Sidebar (`resources/views/admin/layout.blade.php`) lists all of these.

### Utility routes in `routes/web.php` — SECURITY RISK, **unauthenticated**
`/run-migrations` (migrate + `db:seed`), **`/fresh-database` (migrate:fresh --seed → WIPES the database)**, `/storage-link`, `/clear-cache` (also runs migrations and some renames), `/list-tables`, `/test-db`, `/update-db-live` (reseeds hotels). They exist because the host has no SSH. Anyone who finds `/fresh-database` can erase the site. **Recommend removing/protecting them (auth or secret token) before/after deployment.**

---

## 5. Data model and the REAL data currently in the database

All counts are from the local `database/database.sqlite` at snapshot time.

| Table / Model | Rows | Fields (besides id/timestamps) | Used for |
|---|---|---|---|
| `users` / User | 1 | name, email, password | admin login |
| `site_settings` / SiteSetting | 1 | site_name, contact_email, contact_phone, contact_address, working_hours, facebook_url, instagram_url, youtube_url, logo_path, footer_logo_path, footer_blurb | header/footer/contact everywhere |
| `hero_sections` / HeroSection | 1 | eyebrow, title, subtitle, video_path, image_fallback_path | home hero |
| `welcome_sections` / WelcomeSection | 1 | tagline, title, description1, description2, accent_text, image1..4_path | home intro |
| `about_sections` / AboutSection | 1 | title, subtitle, description1-3, amenities_title/description/image_path, offers_title/description/image_path, about_image1/2_path | about page |
| `destinations` / Destination | 45 | name, image_path, description, sort_order, **category, zone, tag, duration, best_time, member_perk, is_featured** (new) | destinations page + home |
| `hotel_categories` / HotelCategory | 9 | name, slug, icon_svg | home hotel tabs. Slugs: all-hotels, india, bali, sri-lanka, malaysia, nepal, thailand, indonesia, bhutan (only `all-hotels` and `india` have hotels; empty ones are hidden) |
| `hotels` / Hotel | 100 | name, rating(1-5), location, country, description, image_path, view_url, sort_order, **region, theme, badge, amenities(lines), privilege_label, privilege_value, is_featured** (new) | properties page + home |
| `category_hotel` | pivot | hotel_id, category_id | hotel ↔ categories (many-to-many) |
| `testimonials` / Testimonial | 12 (8 `home`, 4 `about`) | quote, author, role, avatar_path, type(`home`/`about`), sort_order | home, membership, about |
| `benefits` / Benefit | 12 | title, description, icon_path (a Font Awesome class like `fa-solid fa-dumbbell` OR an image path), sort_order | verticals page |
| `awards` / Award | 7 | title, description, icon_class (Font Awesome), sort_order | awards page |
| `stats` / Stat | 4 | value, label, sort_order | awards page (the stat labelled "Awards Won" is deliberately hidden) |
| `contact_messages` / ContactMessage | 0 | name, email, phone, subject, message, read_at | contact form inbox |
| `members` / Member | 1 | customer_id(unique), password, customer_name, age, co_customer_name/age, kid_1/2 name+age, address, mobile_1/2, email, membership_issue_date, membership_expiry_date, membership_category, membership_terms, profile_image_path | member login (sample: `PTC-1001`, "Platinum Club Elite") |
| `bookings` / Booking | 0 | member_id, extra_member_name/age, journey_start/end_date, journey_tenure, destination_type(Single/Multi), destination_details, opt_ticket/pickup_drop/sightseeing/food, status(default Pending) | member booking requests |
| `blog_posts` / BlogPost | 3 | title, slug, category, author, summary, content, image_path, published_at | blog (hidden) |
| `blog_comments` / BlogComment | 3 | blog_post_id, name, email, comment, is_approved | blog comments |
| `membership_enquiries` / MembershipEnquiry | 1 | name, phone, email, address | membership page form |
| `membership_plans` / MembershipPlan **(new)** | 4 (1 live) | name, tagline, audience, badge, headline_1/2, price_label, price, price_note, annual_label, annual_charge, heads, perks(lines), features(lines "Label \| Value"), cta_label, is_featured, is_active, sort_order | membership page |
| `offers` / Offer **(new)** | 4 (0 live) | tag, title, description, image_path, cta_label, cta_url, valid_until, is_active, sort_order | "Top Offers of the Month" |
| `faqs` / Faq **(new)** | 4 (0 live) | page(`membership`/`contact`), question, answer, is_active, sort_order | FAQ accordions |

### Key real facts (do not change without the owner's say-so)
- **Company:** Happy Miles Dream Hospitality · AVS House, 42/1A Gurupada Halder Road, Kolkata - 700026 · phone **+91 8910364270** · email **info@happymilesdreamhospitality.com** · hours Mon–Sat 11:00 AM–7:00 PM.
- **Hero copy:** eyebrow "Travel Beyond Expectations", title "Discover the World with Comfort & Elegance", subtitle "Resort Life Awaits". Tagline "Where every mile begins with a happy smile!".
- **The only real membership plan:** "Happy Miles Membership" — **₹12,49,999** (Normal Membership Price), **Annual Utility Charge ₹14,999**, **2 Adults + 2 Kids (below 8 years)**. This is `membership_plans` row 1, active.
- **Hotels:** 100, all country "India"; ~90 have `location = "Various"` (placeholder → the new UI hides that word). Names/images are real; ratings are 1–5 stars as stored.
- **Destinations:** 45 (names like "Kashmir", "Kerala – God's Own Country", "Nepal – A Land of Temples, Trails & Treasures", Bali, Dubai, Maldives, …). Kashmir, Kerala and Arunachal each appear twice (real data quirk, possibly worth cleaning up).
- **Benefits (12):** Curated Holidays, Exclusive Events, Club Access, Fitness & Gym, Yoga & Wellness, Zumba Sessions, Variety, Flexibility, Automatic Subscription to RCI, Best Price, Club H10 Grand Class, Customer Service.
- **Awards (7):** Best Travel Experience, Global Hospitality Excellence, 5-Star Client Satisfaction, Luxury Travel Innovator, Top Emerging Brand, Trusted Travel Partner, Best Travel Experience 2025. **Stats:** 5K+ Happy Travelers, 42+ Global Destinations, 10+ Awards Won (hidden), 4.7★ Average Rating.
- **Testimonials:** real member quotes (e.g. Debjit Chatterjee, Prithviraj Dasgupta, Ashish Mishra, Subhashis & Madhumita Roy Chowdhury, Nitesh Tiwari & Srishty Dubey, Pradyut Kr. Ghoshal, Krishnendu Roy Chowdhury).

### The design mock-ups contain INVENTED data — never copy it into the site
The Stitch designs include placeholder/fabricated content: toll-free `1800-309-8800` / `1800 2033 188`, `+91 33 2455 0100`, `care@happymileshospitality.com`, WhatsApp `+91 98300 00000`, regional desks (Siliguri/Bhubaneswar/Guwahati), "256-bit SSL", "4.9/5 rating", "10,000+ vacations", "80+/70+ resorts", the Silver/Gold/Platinum/Signature tiers with prices (₹1,49,000 …), EMI calculator, "Barbeque Nation / ITC Fortune" partnerships, the "Free Maldives trip" banner, the four "Top Offers", and the four "Pillars" on the Verticals page. Some reference screenshots (`image.png_*`) are from a different company (GO Holidays).
Policy used so far: **layout/styling from the design, content from the database/settings.** The unverified design tiers/offers/FAQs were imported only as **inactive drafts** in admin (owner reviews and enables).

---

## 6. Redesign status (branch `redesign`)

New layout: `resources/views/layouts/site.blade.php` (fixed header with top bar + nav + mobile menu, footer from settings, WhatsApp floating button using the settings phone). Nav: Home, Properties & Hotels, Verticals, Destinations, Membership, Awards, Connect Us (**Blog hidden**).

| Page | View | Status | Data source / behaviour |
|---|---|---|---|
| Home | `home.blade.php` | **Done** | hero (video or image) from HeroSection; welcome copy+4 images; hotel category tabs (first 6 hotels per non-empty category, client-side tabs via `data-tabs`); destinations (5 featured tiles + pill list); testimonials (`type=home`); membership CTA. Search box sends `q` to the hotels page. |
| Properties | `hotels.blade.php` | **Done** | search/filter (q, country, theme, region); "Curated Themes" only if hotels have `theme`; "Flagship" only if `is_featured`; directory paginated; "Cross-border" section for non-India hotels; cards via `partials/hotel-card` (button = "View Property" if `view_url` is real else "Enquire" → contact). |
| Destinations | `destinations.blade.php` | **Done** | grouped by `category` in fixed order (Hill → Coastal → Heritage → Spiritual → Wildlife → International); JS search + zone + category filter; "Flagship circuits" only if `is_featured`; card "Explore Stays" → hotels `?q=`; anchors `#destination-{id}`. Categories/zones for all 45 were assigned by keyword (editable in admin). |
| Verticals | `benefits.blade.php` | **Done** | grid of the 12 real benefits (FA icon or image). The design's 4 invented "pillars" were NOT built. |
| Awards | `awards.blade.php` | **Done** | stats strip + award cards + CTA. |
| Membership | `membership.blade.php` + `partials/membership-enquiry-form` | **Done** | live plans (1 → card + enquiry form; ≥2 → cards, comparison table from `features`, form below), live offers, live FAQs, testimonials (first 3 `home`). Form posts to `membership.enquire`. |
| Connect Us | `contact.blade.php` | **Done** | contact cards from settings (call/WhatsApp/email/map), form (name, phone, email, subject, message → `contact.submit`), hours/office, live `contact` FAQs. |
| About | `about.blade.php` | **Not redesigned** | no design exists; still OLD layout. Not in nav. |
| Member login/register/profile/booking | `resources/views/member/*` | **Not redesigned** | old styling. |
| Blog | `resources/views/blog/*` | **Hidden**, not redesigned | owner: "hide blog for now". |
| Admin | `resources/views/admin/*` | Old look kept; extended | new screens: Membership Plans, Offers, FAQs; new fields on Hotels and Destinations forms (`admin/hotels/_extra`, `admin/destinations/_extra`). |

New admin behaviours: **"Show on website" (is_active)** switches live/draft; offers also auto-hide after `valid_until`; plans/offers/FAQs created from the design are Hidden (draft) until the owner enables them. Admin list pages show Live / Hidden (draft) / Expired badges.

Other changes: `vite.config.js` simplified (removed unused Instrument Sans font plugin); `public/hot` deleted; `HomeController::home()` now passes `categories` (with hotels) and no longer builds `HOTEL_DATA` JSON (old `public/js/hotel-tabs.js` is unused by the new home); `HomeController::hotels()`, `destinationsPage()`, `membership()`, `contact()` rewritten as above.

---

## 7. Design system (Tailwind tokens in `resources/css/app.css`)

Source: `hmdh-new-design/*/code.html` (Tailwind CDN configs; all 7 pages share one palette). Note the top-level `DESIGN.md` ("Twilight & Gold") and `luxe_coastline_resort/DESIGN.md` are **not** what the pages actually use — the pages use the palette below.

- Colours: `deep-navy #0B1E2E`, `lagoon-blue #045279`, `primary #003a58`, `coral-vibrant #D3491C` (main CTA), `secondary #a04100` (hover), `sunset-gold #E5A93C` (accents/stars), `surface-ice #EBF6FB`, `surface #f7f9ff`, `whatsapp #25d366`, plus the full Material-style set (surface-container-*, on-surface, outline…).
- Fonts: Plus Jakarta Sans (headlines/body), Outfit (labels). Sizes as utilities: `text-headline-xl|lg|md|sm`, `text-body-lg|md|sm`, `text-label-lg|md|sm` (+ `-mobile` variants). Spacing: `space-xs…space-xl`, `margin`, `margin-mobile`, `gutter`.
- Conventions: container `max-w-[1280px] mx-auto px-margin-mobile lg:px-margin`; cards `rounded-xl` with soft navy shadows; icons are Material Symbols (`material-symbols-outlined`, add `fill-current` for filled).
- Tailwind v4 note: class names must appear literally in templates (no `lg:grid-cols-{{ $n }}`).

---

## 8. Admin CMS — what the owner can edit

Dashboard (messages inbox + counts) · Site Settings · Home Page Content (hero + welcome) · About Page Content · Hotels (incl. categories, region/theme/badge/highlights/privilege/flagship) · Destinations (incl. category/zone/badge/duration/best time/perk/feature) · Testimonials · Exclusive Benefits · Awards & Stats · Registered Members · Blog Posts · Blog Comments · **Membership Plans · Offers · FAQs** · Membership Enquiries.

---

## 9. Emails and integrations

- Member registration → email to the member and to the admin; booking request → email to the member and to the admin. Classes in `app/Mail`, templates in `resources/views/emails`.
- Admin notification address is **hard-coded** `mifarmhosting@gmail.com` in `MemberAuthController` (line ~108); booking admin address in `MemberBookingController` (~line 93). Consider moving to `.env`/Site Settings.
- Contact form and membership enquiry only store rows (no email is sent). Check them in admin.
- Locally `MAIL_MAILER=log`; production mail settings are not in the repo.
- No payment, no online booking engine, no external APIs. WhatsApp is a plain `wa.me` link using the settings phone.

---

## 10. Deployment notes (hosting has no SSH)

- Content lives in `database/database.sqlite`; earlier workflow was to commit the DB ("Sync local database to server") and hit helper URLs (`/run-migrations`, `/storage-link`, `/clear-cache`).
- **Assets**: `public/build` is gitignored. If the server has no Node, either commit `public/build` (remove it from `.gitignore`) or build on the server. Without it the redesigned pages are unstyled (`@vite`).
- After deploying code that adds migrations: run `migrate` (via `/run-migrations`, which also runs `db:seed`; the seeders are idempotent: `MembershipContentSeeder` and `DestinationGroupingSeeder` only fill empty data; `DatabaseSeeder`/`HotelsTableSeeder` run every time — check `HotelsTableSeeder` behaviour before running on live data).
- The local DB was backed up before migrating (`%TEMP%\db-backup-before-redesign.sqlite`); back up again before overwriting a live DB.
- Run `php artisan storage:link` (or `/storage-link`) so uploaded images appear.

---

## 11. Open items / decisions pending

1. **Commit** the `redesign` branch? (nothing committed). Decide how built CSS gets to the server (§10).
2. Redesign remaining pages: **About** (needs a design or a decision), **member** pages, **blog** (later), optionally the admin look.
3. Owner to review hidden drafts in admin: extra membership tiers (Silver/Gold/Platinum), 4 offers, 4 FAQs (their answers are placeholders).
4. Fill the new optional fields for richer pages: hotels (`region`, `theme`, `badge`, `amenities`, privilege, flagship) and destinations (`duration`, `best_time`, `member_perk`, `tag`, flagship). Until filled, the related sections stay hidden.
5. Hotels: replace `location = "Various"` with real cities; set real `view_url`s (currently `#`, so cards show "Enquire").
6. Remove or protect the unauthenticated utility routes (§4), change the default admin password, move hard-coded admin email to config.
7. Remove duplicate destinations (Kashmir ×2, Kerala ×2, Arunachal ×2) if unintended.
8. Mobile layouts were built responsively but only checked at desktop width in screenshots — do a real-device pass.
9. Home "Search" currently searches hotels by text; the design also had date/guest fields (not implemented — no booking engine exists).
10. Old `public/css/master.css`, `public/js/hotel-tabs.js` and `layouts/app.blade.php` are still needed by About/blog/member pages; remove only after those are migrated.

---

## 12. Conventions for continuing the work

- New public pages: `@extends('layouts.site')`, use `partials/page-hero` for inner-page heroes, bind to DB/settings (never hard-code company facts), hide sections when their data is empty.
- New editable content: migration + model (`$fillable`, casts) + admin controller/routes/views following the `AdminOfferController` pattern (single `form.blade.php` for create+edit, `is_active` checkbox, Live/Hidden badges) + sidebar link + seeder that only fills empty tables.
- After any Blade/CSS change: `npm run build`. After DB changes: `php artisan migrate`.
- Never invent business data (prices, phone numbers, partner names, ratings); if the design shows something unverified, make it admin-editable and leave it hidden until the owner confirms.
