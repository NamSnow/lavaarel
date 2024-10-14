<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'trailer_url',
        'start_date',
        'content_type',
    ];

    /**
     * Get the categories for the content.
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Get the genres for the content.
     */
    public function genres()
    {
        return $this->hasMany(Genre::class);
    }

    /**
     * Get the seasons for the content.
     */
    public function seasons()
    {
        return $this->hasMany(Season::class);
    }

    /**
     * Get the watchlist entries for the content.
     */
    public function watchlistEntries()
    {
        return $this->hasMany(Watchlist::class);
    }

    /**
     * Get the favorite entries for the content.
     */
    public function favoriteEntries()
    {
        return $this->hasMany(Favorite::class);
    }

    
}