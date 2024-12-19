<?php

namespace App\Livewire;

use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReviewModal extends Component
{
    public $hotel_id;
    public $is_booked;
    public $hotel;
    public $rooms;
    public $ratings; // Thêm biến để chứa đánh giá
    public $comfort_score;
    public $facilities_score;
    public $staff_score;
    public $food_score;
    public $value_score;
    public function mount($hotel_id, $is_booked)
    {
        $this->hotel_id = $hotel_id;
        $this->is_booked = $is_booked;
    }
    public function submitRating()
    {
        $this->validate([
            'comfort_score' => 'required|numeric|min:0|max:10',
            'facilities_score' => 'required|numeric|min:0|max:10',
            'staff_score' => 'required|numeric|min:0|max:10',
            'food_score' => 'required|numeric|min:0|max:10',
            'value_score' => 'required|numeric|min:0|max:10',
        ]);

        // Lưu đánh giá mới vào cơ sở dữ liệu
        Rating::create([
            'user_id' => Auth::id(),
            'hotel_id' => $this->hotel_id,
            'comfort_score' => $this->comfort_score,
            'facilities_score' => $this->facilities_score,
            'staff_score' => $this->staff_score,
            'food_score' => $this->food_score,
            'value_score' => $this->value_score,
        ]);

        // Reset lại các thuộc tính đánh giá
        $this->reset(['comfort_score', 'facilities_score', 'staff_score', 'food_score', 'value_score']);

        // Cập nhật lại danh sách đánh giá
        $this->ratings = Rating::where('hotel_id', $this->hotel_id)->get();

        // Đóng modal sau khi gửi đánh giá
        $this->dispatch('closeRatingModal');
    }
    public function render()
    {
        return view('livewire.review-modal');
    }
}
