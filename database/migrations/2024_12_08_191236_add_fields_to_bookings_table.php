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
        Schema::table('bookings', function (Blueprint $table) {
            // Thêm các trường mới vào bảng bookings
            $table->string('first_name')->after('total_price')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('email')->after('last_name')->nullable();
            $table->string('street')->after('email')->nullable();
            $table->string('city')->after('street')->nullable();
            $table->string('zip_code')->after('city')->nullable();
            $table->string('country')->after('zip_code')->nullable();
            $table->text('message')->after('country')->nullable(); // Special requirements
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
};
