<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Hotel;
use App\Models\Location;

class Hotels extends Component
{
    use WithPagination;

    public $search_keyword = '';
    public $location_id;
    public $price_range = [];
    public $statuses = [];
    public $sort_by = 'default'; // Giá trị mặc định cho sắp xếp

    public function mount()
    {
        $this->search_keyword = request('search_keyword', '');
        $this->location_id = request('location_id', null);
        $this->price_range = request('price_range', []);
        $this->statuses = request('statuses', []);
    }

    public function updatedSortBy($value)
    {
        // Reset về trang đầu khi thay đổi sắp xếp
        $this->resetPage();
    }

    public function render()
    {
        $locations = Location::all();

        $hotels = Hotel::query()
            ->when($this->search_keyword, function ($query) {
                $query->where('name', 'like', '%' . $this->search_keyword . '%');
            })
            ->when($this->location_id, function ($query) {
                $query->where('location_id', $this->location_id);
            })
            ->when($this->price_range, function ($query) {
                foreach ($this->price_range as $range) {
                    if ($range === '200000-plus') {
                        $query->orWhere('price_per_night', '>=', 200000);
                    } else {
                        list($min, $max) = explode('-', $range);
                        $query->orWhereBetween('price_per_night', [(int)$min, (int)$max]);
                    }
                }
            })
            ->when($this->statuses, function ($query) {
                $query->whereIn('status', $this->statuses);
            })
            ->when($this->sort_by === 'price_asc', function ($query) {
                $query->orderBy('price_per_night', 'asc');
            })
            ->when($this->sort_by === 'price_desc', function ($query) {
                $query->orderBy('price_per_night', 'desc');
            })
            ->paginate(10);

        return view('livewire.page.hotels', [
            'hotels' => $hotels,
            'locations' => $locations,
        ]);
    }
}
