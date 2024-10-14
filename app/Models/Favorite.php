<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorites'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'user_id', // ID người dùng
        'content_id' // ID nội dung
    ];

    // Quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ với model Content
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}