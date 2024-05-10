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
        Schema::create('booking_approvals', function (Blueprint $table) {
            $table->integer('approval_id', true);
            $table->enum('approval_status', ['tertunda', 'disetujui', 'ditolak']);
            $table->dateTime('approval_date')->nullable();
            $table->integer('approval_level')->nullable();
            $table->integer('booking_id')->nullable()->index('booking_id');
            $table->unsignedBigInteger('approver1_id')->nullable()->index('approver1_id');
            $table->unsignedBigInteger('approver2_id')->nullable()->index('approver2_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_approvals');
    }
};
