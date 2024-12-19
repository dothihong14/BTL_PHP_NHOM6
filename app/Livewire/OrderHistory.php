<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking; // Nhập Booking model

class OrderHistory extends Component
{
    public $bookings;

    public function mount()
    {
        $this->bookings = Booking::where('user_id', auth()->id())->get(); // Lấy danh sách đơn hàng của người dùng đã đăng nhập
    }

    public function render()
    {
        return view('livewire.order-history');
    }

 
}
