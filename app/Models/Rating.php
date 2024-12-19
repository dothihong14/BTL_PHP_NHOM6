<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'comfort_score',
        'facilities_score',
        'staff_score',
        'food_score',
        'value_score',
    ];

    /**
     * Quan hệ với model User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Quan hệ với model Hotel.
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
