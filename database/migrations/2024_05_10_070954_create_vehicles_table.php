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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->integer('vehicle_id', true);
            $table->enum('vehicle_type', ['angkutan orang', 'angkutan barang']);
            $table->string('vehicle_manufacturer', 32)->nullable();
            $table->string('vehicle_model', 32);
            $table->string('vehicle_license_plate', 20);
            $table->boolean('is_rented');
            $table->string('rental_company', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
