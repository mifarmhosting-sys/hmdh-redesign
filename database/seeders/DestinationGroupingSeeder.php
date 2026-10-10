<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

/**
 * Assigns each existing destination a category and zone (simple geography) so the
 * Destinations page can group and filter them. Only fills destinations that have no
 * category yet, so edits made in the admin are never overwritten. Matching is by name.
 */
class DestinationGroupingSeeder extends Seeder
{
    private const HILL = 'Hill Stations & Himalayas';
    private const COAST = 'Coastal & Beaches';
    private const HERITAGE = 'Heritage & Royal';
    private const SPIRITUAL = 'Spiritual & Pilgrimage';
    private const WILD = 'Wildlife & Nature';
    private const INTL = 'International Gateways';

    private const NORTH = 'North India';
    private const SOUTH = 'South India';
    private const EAST = 'East & North East';
    private const WEST = 'West India';
    private const WORLD = 'International';

    /** keyword in destination name => [category, zone] */
    private function map(): array
    {
        return [
            'Nepal' => [self::INTL, self::WORLD], 'Bhutan' => [self::INTL, self::WORLD],
            'Maldives' => [self::INTL, self::WORLD], 'Dubai' => [self::INTL, self::WORLD],
            'Singapore' => [self::INTL, self::WORLD], 'Bali' => [self::INTL, self::WORLD],
            'Sri Lanka' => [self::INTL, self::WORLD], 'Malaysia' => [self::INTL, self::WORLD],
            'Thailand' => [self::INTL, self::WORLD], 'Indonesia' => [self::INTL, self::WORLD],
            'Kashmir' => [self::HILL, self::NORTH], 'Shimla' => [self::HILL, self::NORTH],
            'Manali' => [self::HILL, self::NORTH], 'Dalhousie' => [self::HILL, self::NORTH],
            'Spiti' => [self::HILL, self::NORTH], 'Ladakh' => [self::HILL, self::NORTH],
            'Ooty' => [self::HILL, self::SOUTH],
            'Sikkim' => [self::HILL, self::EAST], 'Darjeeling' => [self::HILL, self::EAST],
            'Shillong' => [self::HILL, self::EAST], 'Arunachal' => [self::HILL, self::EAST],
            'Kerala' => [self::COAST, self::SOUTH], 'Andaman' => [self::COAST, self::SOUTH],
            'Lakshadweep' => [self::COAST, self::SOUTH], 'Kanyakumari' => [self::COAST, self::SOUTH],
            'Puducherry' => [self::COAST, self::SOUTH], 'Vizag' => [self::COAST, self::SOUTH],
            'Goa' => [self::COAST, self::WEST], 'Mumbai' => [self::COAST, self::WEST],
            'Digha' => [self::COAST, self::EAST], 'Mandarmani' => [self::COAST, self::EAST],
            'Rajasthan' => [self::HERITAGE, self::WEST], 'Gujarat' => [self::HERITAGE, self::WEST],
            'Agra' => [self::HERITAGE, self::NORTH],
            'Puri' => [self::SPIRITUAL, self::EAST], 'Rishikesh' => [self::SPIRITUAL, self::NORTH],
            'Amritsar' => [self::SPIRITUAL, self::NORTH], 'Varanasi' => [self::SPIRITUAL, self::NORTH],
            'Tirupati' => [self::SPIRITUAL, self::SOUTH],
            'Assam' => [self::WILD, self::EAST], 'Dooars' => [self::WILD, self::EAST],
            'Jim Corbett' => [self::WILD, self::NORTH],
        ];
    }

    public function run(): void
    {
        $map = $this->map();

        foreach (Destination::whereNull('category')->get() as $destination) {
            foreach ($map as $keyword => [$category, $zone]) {
                if (stripos($destination->name, $keyword) !== false) {
                    $destination->update(['category' => $category, 'zone' => $zone]);
                    break;
                }
            }
        }
    }
}
