<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'slug',
        'location',
        'star_rating',
        'status',
        'price_per_night',
        'description',
        'location_id',
        'price',
    ];

    // Thêm casts cho thuộc tính 'image' là mảng
    protected $casts = [
        'image' => 'array', // Chuyển đổi trường 'image' thành kiểu mảng
    ];

    // Định nghĩa mối quan hệ với model Location
    public function locationRelation()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
    public function rooms()
    {
        return $this->hasMany(Room::class, 'hotel_id');
    }
}
