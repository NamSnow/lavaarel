<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Watchlist;
use App\Models\User;
use App\Models\Content;

class WatchlistSeeder extends Seeder
{
    public function run()
    {
        // Ensure these users and content exist before inserting
        $watchlists = [
            ['user_id' => 1, 'content_id' => 1, 'status' => 'watching'],
            ['user_id' => 2, 'content_id' => 2, 'status' => 'completed'],
            // Add more entries as needed
        ];

        foreach ($watchlists as $watchlist) {
            if (User::find($watchlist['user_id']) && Content::find($watchlist['content_id'])) {
                Watchlist::create($watchlist);
            }
        }
    }
}