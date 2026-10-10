<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->string('category')->nullable();     // e.g. "Hill Stations & Himalayas"
            $table->string('zone')->nullable();         // e.g. "North India"
            $table->string('tag')->nullable();          // small badge, e.g. "Top Rated"
            $table->string('duration')->nullable();     // e.g. "6 Nights"
            $table->string('best_time')->nullable();    // e.g. "Mar – Oct"
            $table->string('member_perk')->nullable();  // e.g. "Complimentary Shikara Ride"
            $table->boolean('is_featured')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->dropColumn(['category', 'zone', 'tag', 'duration', 'best_time', 'member_perk', 'is_featured']);
        });
    }
};
