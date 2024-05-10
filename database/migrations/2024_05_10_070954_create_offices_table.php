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
        Schema::create('offices', function (Blueprint $table) {
            $table->integer('office_id', true);
            $table->string('office_name', 32);
            $table->text('office_address');
            $table->string('office_phonenumber', 13)->nullable();
            $table->string('office_type', 32)->nullable();
            $table->integer('region_id')->nullable()->index('region_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
