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
        Schema::table('mines', function (Blueprint $table) {
            $table->foreign(['office_id'], 'mines_ibfk_1')->references(['office_id'])->on('offices')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mines', function (Blueprint $table) {
            $table->dropForeign('mines_ibfk_1');
        });
    }
};
