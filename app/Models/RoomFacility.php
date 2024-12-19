<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    use HasFactory;

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = ['name', 'image']; // Thêm 'image' vào đây

    // Thiết lập mối quan hệ với bảng rooms
 
}
