<?php

namespace App\Livewire;

use App\Models\Hotel;
use App\Models\Location;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        // Lấy danh sách hotels cùng với dữ liệu liên quan (location và country)
        $hotels = Hotel::with(['location', 'location.country'])
            ->get();

        // Lấy danh sách locations, tính tổng số khách sạn và giá thấp nhất
        $locations = Location::with('country')
            ->withCount('hotels') // Tính tổng số khách sạn
            ->with(['hotels' => function ($query) {
                $query->selectRaw('location_id, MIN(price_per_night) as lowest_price')->groupBy('location_id');
            }])
            ->get();
        return view('livewire.home', [
            'hotels' => $hotels,
            'locations' => $locations,
        ]);
    }
}
