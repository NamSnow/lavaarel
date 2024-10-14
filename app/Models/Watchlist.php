<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $table = 'watchlist';

    // Các cột có thể được gán giá trị
    protected $fillable = [
        'user_id',
        'content_id',
        'status',
    ];

    /**
     * Mối quan hệ với bảng User.
     * Một watchlist thuộc về một người dùng.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mối quan hệ với bảng Content.
     * Một watchlist chứa một nội dung.
     */
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}