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
        Schema::create('fuel_usages', function (Blueprint $table) {
            $table->integer('usage_id', true);
            $table->date('usage_date');
            $table->decimal('liters_used', 10);
            $table->integer('vehicle_id')->nullable()->index('vehicle_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_usages');
    }
};
