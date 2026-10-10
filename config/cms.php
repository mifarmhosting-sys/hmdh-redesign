<?php

/*
|--------------------------------------------------------------------------
| Editable page content
|--------------------------------------------------------------------------
| Every page that can be edited from  Admin -> Page Content  is described here.
|
|   pages.<page>.sections.<section>.fields.<field> = [label, type, default, help]
|   pages.<page>.lists.<list>                       = repeating blocks (cards, rows)
|
| Field types: text | textarea | url | image | toggle | lines (one value per line)
| Texts and images are stored in `site_contents` (key "<page>.<section>.<field>"),
| list items in `content_items`. The defaults below are what the site shows until
| somebody edits it. To make another page editable, add it here and use cms() in its view.
*/

return [
    'pages' => [
        'home' => [
            'label' => 'Home Page',
            'url' => '/',
            'sections' => [

                'hero' => [
                    'label' => 'Hero (top of the page)',
                    'fields' => [
                        'badge' => ['label' => 'Orange badge text', 'type' => 'text', 'default' => 'Travel Beyond Expectations'],
                        'pill' => ['label' => 'Small pill text', 'type' => 'text', 'default' => 'Resort Life Awaits You'],
                        'title' => ['label' => 'Main heading', 'type' => 'text', 'default' => 'Discover the World with Comfort & Elegance'],
                        'text' => ['label' => 'Intro paragraph', 'type' => 'textarea', 'default' => 'Where every mile begins with a happy smile! Combining comfort, quality, and personalized service, we transform your travel dreams into cherished memories that last a lifetime.'],
                        'button1_label' => ['label' => 'Main button text', 'type' => 'text', 'default' => 'Explore Membership & Hotels'],
                        'button1_url' => ['label' => 'Main button link', 'type' => 'url', 'default' => '/membership'],
                        'button2_label' => ['label' => 'Second button text', 'type' => 'text', 'default' => 'View Destinations'],
                        'button2_url' => ['label' => 'Second button link', 'type' => 'url', 'default' => '#destinations-section'],
                        'background' => ['label' => 'Background image', 'type' => 'image', 'default' => 'images/design/32eb0e4102ab.jpg', 'help' => 'Wide landscape photo, at least 1600 px wide.'],
                    ],
                ],

                'offer' => [
                    'label' => 'Offer card (right side of the hero)',
                    'fields' => [
                        'show' => ['label' => 'Show this card', 'type' => 'toggle', 'default' => '1'],
                        'label' => ['label' => 'Small heading', 'type' => 'text', 'default' => 'Limited Anniversary Privileges'],
                        'badge' => ['label' => 'Badge', 'type' => 'text', 'default' => 'Best Price Guarantee'],
                        'number' => ['label' => 'Round emblem text', 'type' => 'text', 'default' => '10+'],
                        'number_caption' => ['label' => 'Text beside emblem (small)', 'type' => 'text', 'default' => 'Glorious Years'],
                        'headline' => ['label' => 'Text beside emblem (large)', 'type' => 'text', 'default' => 'Best Holiday Company'],
                        'perk1_title' => ['label' => 'Box 1 - title', 'type' => 'text', 'default' => 'Free Maldives Trip'],
                        'perk1_text' => ['label' => 'Box 1 - text', 'type' => 'text', 'default' => 'On 10-Yr Club Membership'],
                        'perk2_title' => ['label' => 'Box 2 - title', 'type' => 'text', 'default' => 'Free Domestic Trip'],
                        'perk2_text' => ['label' => 'Box 2 - text', 'type' => 'text', 'default' => 'On 5-Yr Luxury Ownership'],
                        'button_label' => ['label' => 'Button text', 'type' => 'text', 'default' => 'Claim Holiday Privilege'],
                        'button_url' => ['label' => 'Button link', 'type' => 'url', 'default' => '/membership'],
                    ],
                ],

                'search' => [
                    'label' => 'Search bar (below the hero)',
                    'fields' => [
                        'show' => ['label' => 'Show the search bar', 'type' => 'toggle', 'default' => '1'],
                        'trip_types' => ['label' => 'Trip types (one per line)', 'type' => 'lines', 'default' => "Luxury Resort Stays\nFamily Vacations\nRomantic Escapes\nDay Excursion & Dining\nWellness & Rejuvenation"],
                        'guest_options' => ['label' => 'Guest options (one per line)', 'type' => 'lines', 'default' => "2 Adults, 1 Room\nFamily (2 Adults, 2 Kids)\nGroup (4+ Adults)\nSolo Member Traveler"],
                        'button_label' => ['label' => 'Button text', 'type' => 'text', 'default' => 'Search Stays'],
                    ],
                ],

                'story' => [
                    'label' => 'About / brand story',
                    'fields' => [
                        'eyebrow' => ['label' => 'Small heading', 'type' => 'text', 'default' => 'Happy Miles'],
                        'title' => ['label' => 'Heading', 'type' => 'text', 'default' => 'Dream Hospitality'],
                        'text1' => ['label' => 'Paragraph 1 (large)', 'type' => 'textarea', 'default' => 'Happy Miles Dream Hospitality is more than a travel company—we are dedicated to crafting unforgettable travel experiences. From relaxing holidays and family vacations to romantic getaways and adventure trips, we design every journey with care and attention to detail.'],
                        'text2' => ['label' => 'Paragraph 2', 'type' => 'textarea', 'default' => 'From tailor-made holiday packages and memorable vacations to private celebrations, day excursions, romantic dining experiences, wellness, and personal grooming services, Happy Miles Dream Hospitality brings a wide range of hospitality solutions together in one place. We are committed to providing personalized, reliable, and high-quality services that cater to your unique preferences and create exceptional experiences every time.'],
                        'tagline' => ['label' => 'Highlighted tagline', 'type' => 'text', 'default' => 'Where every mile begins with a happy smile!'],
                        'badge_image' => ['label' => 'Badge / logo image', 'type' => 'image', 'default' => 'images/design/bb3d6942c8bf.png'],
                        'badge_caption' => ['label' => 'Badge caption', 'type' => 'text', 'default' => 'Certified Hospitality Excellence'],
                    ],
                ],

                'hotels' => [
                    'label' => 'Hotels showcase',
                    'fields' => [
                        'show' => ['label' => 'Show this section', 'type' => 'toggle', 'default' => '1'],
                        'eyebrow' => ['label' => 'Small heading', 'type' => 'text', 'default' => 'Our Hotels'],
                        'title' => ['label' => 'Heading', 'type' => 'text', 'default' => 'Handcrafted Resorts & Signature Stays'],
                        'button_label' => ['label' => '"View all" button text', 'type' => 'text', 'default' => 'View All Properties'],
                    ],
                    'note' => 'Choose which hotels appear here with the "Show on home page" box in Hotels / Properties.',
                ],

                'destinations' => [
                    'label' => 'Destinations showcase',
                    'fields' => [
                        'show' => ['label' => 'Show this section', 'type' => 'toggle', 'default' => '1'],
                        'eyebrow' => ['label' => 'Small heading', 'type' => 'text', 'default' => 'Find Your Escape in Our'],
                        'title' => ['label' => 'Heading', 'type' => 'text', 'default' => 'Destinations Across India & The World'],
                        'text' => ['label' => 'Intro text', 'type' => 'textarea', 'default' => 'Immerse yourself in hand-selected destinations spanning snow-capped peaks, regal palaces, tranquil backwaters, and exotic international shores.'],
                        'cloud_title' => ['label' => 'List box heading', 'type' => 'text', 'default' => 'Explore Every Happy Miles Destination'],
                        'cloud_badge' => ['label' => 'List box badge', 'type' => 'text', 'default' => ''],
                    ],
                    'note' => 'The big picture tiles are the destinations ticked "Show on home page" in Destinations. All other destinations appear in the list box.',
                ],

                'testimonials' => [
                    'label' => 'Member stories',
                    'fields' => [
                        'show' => ['label' => 'Show this section', 'type' => 'toggle', 'default' => '1'],
                        'eyebrow' => ['label' => 'Small heading', 'type' => 'text', 'default' => 'Guest Moments'],
                        'title' => ['label' => 'Heading', 'type' => 'text', 'default' => 'Stories From Our Members'],
                        'text' => ['label' => 'Intro text', 'type' => 'textarea', 'default' => 'Real vacations, genuine joy, and authentic testimonials from our vacation club family across India.'],
                        'show_rating' => ['label' => 'Show the rating box', 'type' => 'toggle', 'default' => '0'],
                        'rating_value' => ['label' => 'Rating box - rating', 'type' => 'text', 'default' => '4.9 / 5.0 Rating'],
                        'rating_label' => ['label' => 'Rating box - small heading', 'type' => 'text', 'default' => 'Over 10,000+'],
                        'rating_caption' => ['label' => 'Rating box - caption', 'type' => 'text', 'default' => 'Happy Vacations Delivered'],
                    ],
                    'note' => 'The stories come from Testimonials. Untick "Show on home page" on a testimonial to hide it here.',
                ],

                'cta' => [
                    'label' => 'Membership banner (bottom of the page)',
                    'fields' => [
                        'show' => ['label' => 'Show this banner', 'type' => 'toggle', 'default' => '1'],
                        'badge' => ['label' => 'Gold badge', 'type' => 'text', 'default' => 'Exclusive Member Benefits'],
                        'subtitle' => ['label' => 'Text beside badge', 'type' => 'text', 'default' => 'Tailored Vacation Ownership'],
                        'title' => ['label' => 'Heading', 'type' => 'text', 'default' => 'Unlock Lifetime Travel Memories with Happy Miles'],
                        'text' => ['label' => 'Paragraph', 'type' => 'textarea', 'default' => 'Enjoy priority resort reservations, complimentary domestic and international holiday vouchers, curated fine-dining allowances, and dedicated personal travel concierges ready 24/7.'],
                        'box_title' => ['label' => 'Contact box heading', 'type' => 'text', 'default' => 'Connect With Concierge'],
                        'button_label' => ['label' => 'Contact box button text', 'type' => 'text', 'default' => 'Inquire About Plans'],
                        'button_url' => ['label' => 'Contact box button link', 'type' => 'url', 'default' => '/contact-us.html'],
                    ],
                    'note' => 'Phone number and address in the contact box come from Site Settings.',
                ],
            ],

            'lists' => [
                'story_cards' => [
                    'section' => 'story',
                    'label' => 'Story cards (the four small cards)',
                    'item_label' => 'card',
                    'fields' => [
                        'icon' => ['label' => 'Icon name', 'type' => 'text', 'help' => 'A Google "Material Symbols" icon name, e.g. luggage, cake, restaurant, spa, flight, hotel. Browse: fonts.google.com/icons'],
                        'title' => ['label' => 'Title', 'type' => 'text'],
                        'text' => ['label' => 'Text', 'type' => 'textarea'],
                    ],
                    'title_field' => 'title',
                    'defaults' => [
                        ['icon' => 'luggage', 'title' => 'Tailor-Made Holidays', 'text' => 'Customized domestic & global itineraries crafted for couples, retirees, and energetic families.'],
                        ['icon' => 'cake', 'title' => 'Private Celebrations', 'text' => 'Day excursions, anniversaries, milestone banquets, and serene scenic picnics arranged with flair.'],
                        ['icon' => 'restaurant', 'title' => 'Romantic Dining', 'text' => 'Curated culinary reservations at top partner destinations including Barbeque Nation & waterfront venues.'],
                        ['icon' => 'spa', 'title' => 'Wellness & Resorts', 'text' => 'Ayurvedic therapies, personal grooming packages, and tranquil riverside spa privileges.'],
                    ],
                ],
                'cta_perks' => [
                    'section' => 'cta',
                    'label' => 'Banner highlights (the three ticks)',
                    'item_label' => 'highlight',
                    'fields' => [
                        'icon' => ['label' => 'Icon name', 'type' => 'text', 'help' => 'Material Symbols icon, e.g. verified, room_service, flight_takeoff'],
                        'text' => ['label' => 'Text', 'type' => 'text'],
                    ],
                    'title_field' => 'text',
                    'defaults' => [
                        ['icon' => 'verified', 'text' => 'Zero Surge Pricing'],
                        ['icon' => 'room_service', 'text' => 'Personal Concierge'],
                        ['icon' => 'flight_takeoff', 'text' => 'Free Air Trip Perks'],
                    ],
                ],
            ],
        ],
    ],
];
