<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Season;

class SeasonSeeder extends Seeder
{
    public function run()
    {
        $seasons = [
            ['season_number' => 1, 'title' => 'Season 1', 'description' => 'The first season of the show.', 'content_id' => 1],
            ['season_number' => 2, 'title' => 'Season 2', 'description' => 'The second season of the show.', 'content_id' => 2],
            // Repeat for 20 entries
        ];

        foreach ($seasons as $season) {
            Season::create($season);
        }
    }
}