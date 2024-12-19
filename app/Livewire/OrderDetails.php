<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;

class OrderDetails extends Component

{
    public $booking;

    public function mount($bookingId)
    {
        $this->booking = Booking::with('bookingDetails.room')->findOrFail($bookingId);
    }

    public function render()
    {
        return view('livewire.order-details');
    }
}
