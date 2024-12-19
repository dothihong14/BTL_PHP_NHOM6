<?php

namespace App\Livewire\Page;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HotelDetail extends Component
{
    public $hotel;
    public $rooms;
    public $is_booked = false; // Biến mặc định
    public $ratings; // Thêm biến để chứa đánh giá
    public $comfort_score;
    public $facilities_score;
    public $staff_score;
    public $food_score;
    public $value_score;

    public function mount($id)
    {
        // Lấy thông tin khách sạn mà không lấy rooms ngay lập tức
        $this->hotel = Hotel::with(['locationRelation.country'])->findOrFail($id);

        // Lấy danh sách rooms riêng
        $rooms = Room::where('hotel_id', $id)->get();

        // Duyệt qua từng room và gắn các tên tiện ích vào thuộc tính facilities
        foreach ($rooms as $room) {
            $room->facilities = $room->getFacilityNames(); // Lấy tên tiện ích
        }

        // Lưu danh sách rooms vào biến để sử dụng trong view
        $this->rooms = $rooms;

        // Kiểm tra xem user hiện tại đã đặt phòng ở khách sạn này chưa
        if (Auth::check()) { // Kiểm tra user đã đăng nhập chưa
            $this->is_booked = Booking::where('user_id', Auth::id()) // User hiện tại
                ->where('hotel_id', $id) // Khách sạn hiện tại
                ->exists(); // Trả về true nếu tồn tại bản ghi
        }

        // Lấy tất cả đánh giá của khách sạn
        $this->ratings = Rating::where('hotel_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.page.hotel-detail', [
            'hotel' => $this->hotel,
            'rooms' => $this->rooms,
            'is_booked' => $this->is_booked, // Truyền biến vào view
            'ratings' => $this->ratings, // Truyền danh sách đánh giá vào view
        ]);
    }

    public function openRatingModal()
    {
        // Mở modal đánh giá
        $this->dispatch('openRatingModal');
    }

  
}
