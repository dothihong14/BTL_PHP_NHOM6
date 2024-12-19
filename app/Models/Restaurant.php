<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'images',
        'operating_hours',
        'hotel_id',
        'phone',
    ];

    protected $casts = [
        'images' => 'array', // Chuyển đổi json sang mảng
    ];

    // Định nghĩa mối quan hệ với Hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
