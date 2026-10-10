<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\MembershipPlan;
use App\Models\Offer;
use Illuminate\Database\Seeder;

/**
 * Seeds membership content. Only fills empty tables, so it never overwrites admin edits.
 *
 * The REAL membership plan is the one the current site advertises and is active.
 * Everything taken from the design mockup (extra tiers, offers, FAQs) is inserted INACTIVE
 * as a draft: the owner reviews it in the admin panel and switches on only what is true.
 */
class MembershipContentSeeder extends Seeder
{
    public function run(): void
    {
        if (MembershipPlan::count() === 0) {
            MembershipPlan::create([
                'name' => 'Happy Miles Membership',
                'tagline' => 'Exclusive holiday privileges for you and your family.',
                'price_label' => 'Normal Membership Price',
                'price' => '12,49,999',
                'annual_label' => 'Annual Utility Charge',
                'annual_charge' => '14,999',
                'heads' => '2 Adults + 2 Kids (below 8 years)',
                'cta_label' => 'Submit Enquiry',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ]);

            foreach ($this->draftPlans() as $i => $plan) {
                MembershipPlan::create($plan + ['is_active' => false, 'sort_order' => 10 + $i]);
            }
        }

        if (Offer::count() === 0) {
            foreach ($this->draftOffers() as $i => $offer) {
                Offer::create($offer + ['is_active' => false, 'sort_order' => $i + 1]);
            }
        }

        if (Faq::count() === 0) {
            foreach ($this->draftFaqs() as $i => $faq) {
                Faq::create($faq + ['is_active' => false, 'sort_order' => $i + 1]);
            }
        }
    }

    private function draftPlans(): array
    {
        return [
            [
                'name' => 'Silver Explorer', 'audience' => 'Young Couples & Solo',
                'tagline' => 'Affordable gateway into luxury coastal and hill station retreats.',
                'headline_1' => '6 Nights / Year', 'headline_2' => '25 Years Transferable Tenure',
                'price_label' => 'One-time Investment', 'price' => '1,49,000', 'price_note' => 'Or ₹3,999/mo (No-Cost EMI)',
                'perks' => "2 Dinner Buffets / yr at Barbeque Nation\n2 Day-Excursion Passes at Rupasi Rupnarayan Kuthi\n10% Flat Discount on Resort F&B services\n₹2,500 Annual Spa & Ayurveda Credit\nStandard Travel Concierge Desk",
                'features' => "Annual Resort Stays | 6 Nights / Year\nBarbeque Nation Dining Vouchers | 2 Buffet Passes\nSpa & Wellness Annual Credit | ₹2,500 / year",
                'cta_label' => 'Select Silver Plan',
            ],
            [
                'name' => 'Gold Club', 'audience' => 'Complete Family Vacation Hub', 'badge' => 'Family Favorite • Most Popular',
                'tagline' => 'The quintessential choice for yearly multi-city family holidays.',
                'headline_1' => '12 Nights / Year', 'headline_2' => 'Splittable into 2 to 3 getaways',
                'price_label' => 'One-time Investment', 'price' => '2,85,000', 'price_note' => 'Or ₹6,999/mo (No-Cost EMI)',
                'perks' => "4 Dinner Buffets / yr at Barbeque Nation\n4 Excursion Day-Passes (Family of 4)\n15% Flat Discount on Resort F&B & Dining\n₹5,000 Annual Spa & Wellness Credit\n2 Domestic Flight Booking Subsidies\nPriority WhatsApp Concierge Desk (24/7)",
                'features' => "Annual Resort Stays | 12 Nights / Year\nBarbeque Nation Dining Vouchers | 4 Buffet Passes\nSpa & Wellness Annual Credit | ₹5,000 / year",
                'cta_label' => 'Join Gold Club', 'is_featured' => true,
            ],
            [
                'name' => 'Platinum Elite', 'audience' => 'Multi-Generational Prestige',
                'tagline' => 'For families demanding spacious suites & frequent vacationing.',
                'headline_1' => '21 Nights / Year', 'headline_2' => 'Studio & 2-Bedroom Suites',
                'price_label' => 'One-time Investment', 'price' => '4,95,000', 'price_note' => 'Or ₹11,999/mo (No-Cost EMI)',
                'perks' => "6 Dinner Buffets / yr + VIP Table Reservation\nUnlimited Day-Out Passes across retreats\n20% Flat Discount on F&B and banquets\n₹10,000 Annual Spa Wellness Credit\nDedicated Travel Butler & Vacation Director",
                'features' => "Annual Resort Stays | 21 Nights / Year\nBarbeque Nation Dining Vouchers | 6 Buffet Passes + VIP\nSpa & Wellness Annual Credit | ₹10,000 / year",
                'cta_label' => 'Apply for Platinum',
            ],
        ];
    }

    private function draftOffers(): array
    {
        return [
            ['tag' => 'Advance Booking', 'title' => 'Early Bird Discount', 'description' => 'Get FLAT 35% Early Bird DISCOUNT for reserving 35 Days in advance.'],
            ['tag' => 'Adventure Expeditions', 'title' => 'Rishikesh Rafting Holiday', 'description' => 'Get ₹4,000 Special DISCOUNT on member Rishikesh water rafting holiday package.'],
            ['tag' => 'Weekend Getaway', 'title' => 'Staycation Escapes', 'description' => 'Stay for 3 Nights & Pay for 2 with complimentary breakfast, dinner, & high-speed Wi-Fi.'],
            ['tag' => 'Holiday Khul Ke', 'title' => 'Celebration Tariffs', 'description' => 'Flat 30% DISCOUNT on luxury suite tariffs across selected premier properties.'],
        ];
    }

    private function draftFaqs(): array
    {
        return [
            ['page' => 'membership', 'question' => 'How do I book stays during peak holiday seasons & festivals?', 'answer' => 'Submit your booking request 30 to 45 days in advance through the Member Portal or contact our member desk.'],
            ['page' => 'membership', 'question' => 'Can my parents or relatives travel if I am not accompanying them?', 'answer' => 'Please confirm with our team and replace this answer with your actual guest policy.'],
            ['page' => 'membership', 'question' => 'What if I need to cancel or reschedule a confirmed booking?', 'answer' => 'Please replace this answer with your actual cancellation policy.'],
            ['page' => 'contact', 'question' => 'How soon will a travel advisor contact me after submitting the inquiry?', 'answer' => 'Please replace this answer with your actual response time.'],
        ];
    }
}
