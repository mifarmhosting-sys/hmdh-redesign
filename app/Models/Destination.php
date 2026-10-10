<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'image_path',
        'description',
        'sort_order',
        'show_on_home',
        'home_order',
        'category',
        'zone',
        'tag',
        'duration',
        'best_time',
        'member_perk',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}
