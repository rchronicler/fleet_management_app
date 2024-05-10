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
        Schema::create('bookings', function (Blueprint $table) {
            $table->integer('booking_id', true);
            $table->dateTime('pickup_date');
            $table->dateTime('return_date')->nullable();
            $table->text('purpose')->nullable();
            $table->integer('vehicle_id')->nullable()->index('vehicle_id');
            $table->integer('driver_id')->nullable()->index('driver_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
