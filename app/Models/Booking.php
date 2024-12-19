<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'hotel_id', 
        'status', 
        'total_price',
        'first_name',  
        'last_name',
        'email',
        'street',
        'city',
        'zip_code',
        'country',
        'message',
        'payment_method', // Thêm cột payment_method vào đây
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel() // Thêm phương thức quan hệ với Hotel
    {
        return $this->belongsTo(Hotel::class);
    }

    public function bookingDetails()
    {
        return $this->hasMany(BookingDetail::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
