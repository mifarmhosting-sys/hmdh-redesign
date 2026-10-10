<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // One row per editable text / image / toggle, keyed like "home.hero.title".
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->timestamps();
        });

        // Repeating blocks (cards, list rows) that belong to a page section.
        Schema::create('content_items', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('list');            // e.g. "story_cards"
            $table->json('data');              // field values for the item
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->index(['page', 'list']);
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->boolean('show_on_home')->default(false);
            $table->integer('home_order')->default(0);
        });

        Schema::table('destinations', function (Blueprint $table) {
            $table->boolean('show_on_home')->default(false);
            $table->integer('home_order')->default(0);
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('tag')->nullable();            // small chip, e.g. "Kashmir Tour"
            $table->unsignedTinyInteger('rating')->default(5);
            $table->boolean('show_on_home')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('testimonials', fn (Blueprint $t) => $t->dropColumn(['tag', 'rating', 'show_on_home']));
        Schema::table('destinations', fn (Blueprint $t) => $t->dropColumn(['show_on_home', 'home_order']));
        Schema::table('hotels', fn (Blueprint $t) => $t->dropColumn(['show_on_home', 'home_order']));
        Schema::dropIfExists('content_items');
        Schema::dropIfExists('site_contents');
    }
};
