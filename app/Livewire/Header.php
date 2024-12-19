<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $locations;
    public $loggedInUser;

    public function mount()
    {
        // Lấy danh sách địa điểm với số lượng khách sạn
        $this->locations = Location::withCount('hotels')->get();
        $this->loggedInUser = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
    }

    public function render()
    {
        return view('livewire.inc.header', [
            'locations' => $this->locations,
            'loggedInUser' => $this->loggedInUser, // Truyền thông tin người dùng vào view
        ]);
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); // Chuyển hướng về trang chủ sau khi đăng xuất
    }
}
