<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            ['name' => 'Drama', 'slug' => 'drama', 'content_id' => 1],
            ['name' => 'Comedy', 'slug' => 'comedy', 'content_id' => 2],
            // Repeat for additional entries
        ];

        foreach ($genres as $genre) {
            Genre::updateOrCreate(
                ['name' => $genre['name']], // Unique key
                $genre // Data to insert or update
            );
        }
    }
}