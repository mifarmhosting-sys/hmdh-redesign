<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['page', 'question', 'answer', 'is_active', 'sort_order'];

    protected $casts = ['is_active' => 'boolean'];

    public function scopeLiveFor($query, string $page)
    {
        return $query->where('is_active', true)->where('page', $page)->orderBy('sort_order');
    }
}
