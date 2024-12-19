<?php

namespace App\Livewire\Page;

use Livewire\Component;
 


use App\Models\Hotel;
use App\Models\Location;

class Home extends Component
{
    public function render()
    {
        // Lấy danh sách hotels cùng với dữ liệu liên quan (location và country)
        $hotels = Hotel::with(['locationRelation', 'locationRelation.country'])
            ->get();

        // Lấy danh sách locations, tính tổng số khách sạn và giá thấp nhất
        $locations = Location::with('country')
            ->withCount('hotels') // Tính tổng số khách sạn
            ->with(['hotels' => function ($query) {
                $query->selectRaw('location_id, MIN(price_per_night) as lowest_price')->groupBy('location_id');
            }])
            ->get();
        return view('livewire.page.home', [
            'hotels' => $hotels,
            'locations' => $locations,
        ]);
    }
}
