<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('membership_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tagline')->nullable();
            $table->string('audience')->nullable();       // e.g. "Young Couples & Solo"
            $table->string('badge')->nullable();          // e.g. "Most Popular"
            $table->string('headline_1')->nullable();     // e.g. "6 Nights / Year"
            $table->string('headline_2')->nullable();     // e.g. "25 Years Transferable Tenure"
            $table->string('price_label')->default('Membership Price');
            $table->string('price')->nullable();          // shown as typed, e.g. "12,49,999"
            $table->string('price_note')->nullable();     // e.g. "Or ₹3,999/mo"
            $table->string('annual_label')->nullable();   // e.g. "Annual Utility Charge"
            $table->string('annual_charge')->nullable();  // e.g. "14,999"
            $table->string('heads')->nullable();          // e.g. "2 Adults + 2 Kids (below 8 years)"
            $table->text('perks')->nullable();            // one perk per line
            $table->text('features')->nullable();         // comparison rows, one per line: "Label | Value"
            $table->string('cta_label')->default('Enquire Now');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('membership_plans');
    }
};
