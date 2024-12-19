<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['hotel_id', 'name', 'type', 'facilities', 'price', 'capacity', 'description', 'image'];

    protected $casts = [
        'facilities' => 'array', // Biến cột facilities thành một mảng
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class);
    }

    // Thêm hoặc cập nhật tiện ích vào phòng
    public function addFacilities(array $facilityIds)
    {
        $currentFacilities = $this->facilities ?? []; // Lấy tiện ích hiện tại (nếu có)
        $this->facilities = array_unique(array_merge($currentFacilities, $facilityIds)); // Gộp và loại bỏ trùng lặp
        $this->save();
    }
    public function getFacilityNames()
    {
        // Đảm bảo rằng 'facilities' là một mảng
        $facilityIds = is_array($this->facilities) ? $this->facilities : json_decode($this->facilities, true);
    
        if (empty($facilityIds) || !is_array($facilityIds)) {
            return []; // Trả về mảng rỗng nếu không có ID hợp lệ
        }
    
        // Truy vấn để lấy tên các tiện ích dựa trên ID
        return RoomFacility::whereIn('id', $facilityIds)->pluck('name')->toArray();
    }
    
}
