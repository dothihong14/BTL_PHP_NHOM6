<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'country_id'];

    // Quan hệ với bảng quốc gia
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    // Quan hệ với bảng hotels
    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'location_id');
    }
}
