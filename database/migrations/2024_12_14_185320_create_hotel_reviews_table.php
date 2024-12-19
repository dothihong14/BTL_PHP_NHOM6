<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->unsignedBigInteger('user_id'); // ID người dùng
            $table->unsignedBigInteger('hotel_id'); // ID khách sạn

            // Các trường điểm số
            $table->float('comfort_score', 3, 1); // Điểm "Sự thoải mái"
            $table->float('facilities_score', 3, 1); // Điểm "Tiện nghi"
            $table->float('staff_score', 3, 1); // Điểm "Nhân viên"
            $table->float('food_score', 3, 1); // Điểm "Thức ăn"
            $table->float('value_score', 3, 1); // Điểm "Tỷ lệ giá cả - chất lượng"

            // Thời gian tạo và cập nhật
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_reviews');
    }
};
