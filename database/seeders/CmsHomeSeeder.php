<?php

namespace Database\Seeders;

use App\Cms\Cms;
use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Database\Seeder;

/**
 * Prepares the home page for editing in the admin:
 *  - stores the built-in lists (story cards, banner highlights) so they can be edited;
 *  - picks the hotels and destinations shown on the home page the first time (only if none is picked yet).
 * Safe to run repeatedly; it never overwrites what was chosen in the admin.
 */
class CmsHomeSeeder extends Seeder
{
    public function run(): void
    {
        foreach (array_keys(config('cms.pages.home.lists')) as $list) {
            Cms::seedList('home', $list);
        }

        if (! Destination::where('show_on_home', true)->exists()) {
            // the seven tiles of the approved design, in design order (the first one is the big tile)
            $wanted = ['Kashmir Tour', "Kerala – God", 'Rajasthan', 'Darjeeling', 'Andaman', 'Maldives', 'Bali'];
            foreach ($wanted as $i => $needle) {
                if ($d = Destination::where('name', 'like', "%{$needle}%")->first()) {
                    $d->update(['show_on_home' => true, 'home_order' => $i + 1]);
                }
            }
        }

        if (! Hotel::where('show_on_home', true)->exists()) {
            foreach (Hotel::orderBy('sort_order')->orderBy('id')->limit(6)->get() as $i => $hotel) {
                $hotel->update(['show_on_home' => true, 'home_order' => $i + 1]);
            }
        }
    }
}
