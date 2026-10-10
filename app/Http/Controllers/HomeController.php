<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\HeroSection;
use App\Models\WelcomeSection;
use App\Models\AboutSection;
use App\Models\Destination;
use App\Models\HotelCategory;
use App\Models\Hotel;
use App\Models\Testimonial;
use App\Models\Benefit;
use App\Models\Award;
use App\Models\Stat;
use App\Models\ContactMessage;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private function getCommonData()
    {
        return [
            'settings' => SiteSetting::first() ?? new SiteSetting(),
        ];
    }

    public function home()
    {
        $data = $this->getCommonData();

        // Everything on the home page is editable: texts/pictures via Admin -> Page Content,
        // the cards below via the "Show on the home page" boxes of Hotels / Destinations / Testimonials.
        $data['homeHotels'] = Hotel::where('show_on_home', true)
            ->with('categories')->orderBy('home_order')->orderBy('id')->get();

        $data['homeCategories'] = HotelCategory::whereNotIn('slug', ['all', 'all-hotels'])
            ->whereHas('hotels', fn ($q) => $q->where('show_on_home', true))
            ->orderBy('id')->get();

        $data['homeDestinations'] = Destination::where('show_on_home', true)
            ->orderBy('home_order')->orderBy('id')->get();
        $data['otherDestinations'] = Destination::where('show_on_home', false)
            ->orderBy('sort_order')->orderBy('name')->get();
        $data['searchDestinations'] = Destination::orderBy('sort_order')->orderBy('name')->get();

        $data['homeTestimonials'] = Testimonial::where('type', 'home')
            ->where('show_on_home', true)->orderBy('sort_order')->orderBy('id')->get();

        return view('home', $data);
    }

    public function hotels(Request $request)
    {
        $data = $this->getCommonData();

        $filters = [
            'q' => trim((string) $request->query('q', '')),
            'country' => trim((string) $request->query('country', '')),
            'theme' => trim((string) $request->query('theme', '')),
            'region' => trim((string) $request->query('region', '')),
        ];
        $filtered = collect($filters)->filter()->isNotEmpty();

        $directory = Hotel::query()
            ->when($filters['q'], fn ($q, $v) => $q->where(fn ($w) => $w
                ->where('name', 'like', "%{$v}%")
                ->orWhere('location', 'like', "%{$v}%")
                ->orWhere('description', 'like', "%{$v}%")))
            ->when($filters['country'], fn ($q, $v) => $q->where('country', $v))
            ->when($filters['theme'], fn ($q, $v) => $q->where('theme', $v))
            ->when($filters['region'], fn ($q, $v) => $q->where('region', $v))
            ->orderBy('sort_order')->orderBy('name')
            ->paginate(24)
            ->withQueryString();

        $distinct = fn (string $col) => Hotel::whereNotNull($col)->where($col, '!=', '')->distinct()->orderBy($col)->pluck($col);

        $data += [
            'filters' => $filters,
            'filtered' => $filtered,
            'directory' => $directory,
            'total' => Hotel::count(),
            'featured' => $filtered ? collect() : Hotel::where('is_featured', true)->orderBy('sort_order')->get(),
            'international' => $filtered ? collect() : Hotel::whereNotNull('country')->where('country', '!=', 'India')->orderBy('sort_order')->get(),
            'countries' => $distinct('country'),
            'themes' => $distinct('theme'),
            'regions' => $distinct('region'),
            'themeCounts' => Hotel::whereNotNull('theme')->where('theme', '!=', '')->selectRaw('theme, count(*) as c')->groupBy('theme')->pluck('c', 'theme'),
        ];

        return view('hotels', $data);
    }

    public function destinationsPage()
    {
        $data = $this->getCommonData();
        $destinations = Destination::orderBy('sort_order')->orderBy('name')->get();

        $data['destinations'] = $destinations;
        $data['featured'] = $destinations->where('is_featured', true)->values();
        $order = ['Hill Stations & Himalayas', 'Coastal & Beaches', 'Heritage & Royal', 'Spiritual & Pilgrimage', 'Wildlife & Nature', 'International Gateways'];
        $data['groups'] = $destinations
            ->groupBy(fn ($d) => $d->category ?: 'More Destinations')
            ->sortBy(fn ($items, $cat) => ($i = array_search($cat, $order, true)) === false ? count($order) : $i);
        $data['zones'] = $destinations->pluck('zone')->filter()->unique()->values();
        $data['hotelCount'] = Hotel::count();
        return view('destinations', $data);
    }

    public function benefits()
    {
        $data = $this->getCommonData();
        $data['welcome'] = WelcomeSection::first() ?? new WelcomeSection();
        $data['benefits'] = Benefit::orderBy('sort_order')->get();
        return view('benefits', $data);
    }

    public function awards()
    {
        $data = $this->getCommonData();
        $data['awards'] = Award::orderBy('sort_order')->get();
        $data['stats'] = Stat::orderBy('sort_order')->get();
        return view('awards', $data);
    }

    public function about()
    {
        $data = $this->getCommonData();
        $data['about'] = AboutSection::first() ?? new AboutSection();
        $data['testimonials'] = Testimonial::where('type', 'about')->orderBy('id', 'desc')->get();
        return view('about', $data);
    }

    public function contact()
    {
        $data = $this->getCommonData();
        $data['faqs'] = \App\Models\Faq::liveFor('contact')->get();
        return view('contact', $data);
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        if ($request->ajax()) {
            return response()->json(['success' => 'Thank you for getting in touch! We will get back to you shortly.']);
        }

        return redirect()->back()->with('success', 'Thank you for getting in touch! We will get back to you shortly.');
    }

    public function blogIndex()
    {
        $data = $this->getCommonData();
        $data['blogs'] = BlogPost::orderBy('published_at', 'desc')->get();
        return view('blog.index', $data);
    }

    public function blogShow($slug)
    {
        $data = $this->getCommonData();
        $data['blog'] = BlogPost::with(['comments' => function($q) {
            $q->where('is_approved', true);
        }])->where('slug', $slug)->firstOrFail();
        return view('blog.show', $data);
    }

    public function blogCommentStore(Request $request, $slug)
    {
        $blog = BlogPost::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
        ]);

        $blog->comments()->create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'is_approved' => false,
        ]);

        return redirect()->route('blog.show', $slug)->with('success', 'Thank you! Your comment has been submitted and is awaiting approval.');
    }

    public function membership()
    {
        $data = $this->getCommonData();
        $data['plans'] = \App\Models\MembershipPlan::live()->get();
        $data['offers'] = \App\Models\Offer::live()->get();
        $data['faqs'] = \App\Models\Faq::liveFor('membership')->get();
        $data['testimonials'] = Testimonial::where('type', 'home')->orderBy('sort_order')->limit(3)->get();
        return view('membership', $data);
    }

    public function membershipEnquire(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
        ]);

        \App\Models\MembershipEnquiry::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Thank you! Your membership enquiry has been submitted. We will contact you soon.');
    }
}
