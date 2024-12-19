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
        Schema::table('hotels', function (Blueprint $table) {
            // Thêm cột status để lưu trạng thái
            $table->enum('status', [
                'special_price', 
                'best_seller', 
                'regular', 
                'new_arrival', 
                'limited_offer', 
                'recommended',
                'last_room', 
                'discounted'
            ])->nullable();
            // Thêm cột price_per_night để lưu giá theo đêm
            $table->decimal('price_per_night', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            //
        });
    }
};
