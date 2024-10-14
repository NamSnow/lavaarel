<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    // Define the table if it's not the default name ('seasons')
    protected $table = 'seasons';

    // Specify which fields can be mass-assigned
    protected $fillable = [
        'season_number',
        'title',
        'description',
        'content_id',
    ];

    // Define the relationship to the content model
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}