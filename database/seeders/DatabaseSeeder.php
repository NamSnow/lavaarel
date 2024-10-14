<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Add all the seeders here
        $this->call([
            ContentSeeder::class,
            CategorySeeder::class,
            GenreSeeder::class,
            SeasonSeeder::class,
            WatchlistSeeder::class,
            FavoriteSeeder::class,
            PaymentSeeder::class,
            SubscriptionSeeder::class,
            VipPackageSeeder::class,
            // Add other seeders as needed
        ]);
    }
}