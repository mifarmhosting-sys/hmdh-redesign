<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('region')->nullable()->after('country');          // e.g. "North & Hills"
            $table->string('theme')->nullable()->after('region');            // e.g. "Hill Retreats & Tea Estates"
            $table->string('badge')->nullable()->after('theme');             // e.g. "Heritage Partner"
            $table->text('amenities')->nullable()->after('badge');           // one per line
            $table->string('privilege_label')->nullable()->after('amenities'); // e.g. "Member Privilege"
            $table->string('privilege_value')->nullable()->after('privilege_label'); // e.g. "Complimentary High Tea"
            $table->boolean('is_featured')->default(false)->after('privilege_value');
        });
    }

    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn(['region', 'theme', 'badge', 'amenities', 'privilege_label', 'privilege_value', 'is_featured']);
        });
    }
};
