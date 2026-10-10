<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentItem extends Model
{
    protected $fillable = ['page', 'list', 'data', 'sort_order', 'is_active'];

    protected $casts = [
        'data' => 'array',
        'is_active' => 'boolean',
    ];
}
