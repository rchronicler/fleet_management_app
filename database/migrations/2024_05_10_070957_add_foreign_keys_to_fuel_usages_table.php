<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('fuel_usages', function (Blueprint $table) {
            $table->foreign(['vehicle_id'], 'fuel_usages_ibfk_1')->references(['vehicle_id'])->on('vehicles')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fuel_usages', function (Blueprint $table) {
            $table->dropForeign('fuel_usages_ibfk_1');
        });
    }
};
