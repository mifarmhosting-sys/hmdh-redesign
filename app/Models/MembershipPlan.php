<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipPlan extends Model
{
    protected $fillable = [
        'name', 'tagline', 'audience', 'badge', 'headline_1', 'headline_2',
        'price_label', 'price', 'price_note', 'annual_label', 'annual_charge', 'heads',
        'perks', 'features', 'cta_label', 'is_featured', 'is_active', 'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeLive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }

    /** @return string[] one entry per non-empty line of "perks" */
    public function perkList(): array
    {
        return self::lines($this->perks);
    }

    /** @return array<string,string> label => value, from "Label | Value" lines */
    public function featureMap(): array
    {
        $map = [];
        foreach (self::lines($this->features) as $line) {
            [$label, $value] = array_pad(array_map('trim', explode('|', $line, 2)), 2, '');
            if ($label !== '') {
                $map[$label] = $value;
            }
        }
        return $map;
    }

    public static function lines(?string $text): array
    {
        return array_values(array_filter(array_map('trim', preg_split('/\R/', (string) $text))));
    }
}
