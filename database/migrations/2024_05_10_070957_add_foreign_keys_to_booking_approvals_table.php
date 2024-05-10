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
        Schema::table('booking_approvals', function (Blueprint $table) {
            $table->foreign(['booking_id'], 'booking_approvals_ibfk_1')->references(['booking_id'])->on('bookings')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['approver1_id'], 'booking_approvals_ibfk_2')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['approver2_id'], 'booking_approvals_ibfk_3')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booking_approvals', function (Blueprint $table) {
            $table->dropForeign('booking_approvals_ibfk_1');
            $table->dropForeign('booking_approvals_ibfk_2');
            $table->dropForeign('booking_approvals_ibfk_3');
        });
    }
};
