<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    // CategorySeeder.php
public function run()
{
    // Fetch content ids from the Content table
    $contents = Content::all()->pluck('id')->toArray();

    $categories = [
        ['name' => 'Action', 'description' => 'Action-packed movies.', 'slug' => 'action', 'content_id' => $contents[0] ?? null], // Use the first content id
        ['name' => 'Comedy', 'description' => 'Comedy and humor.', 'slug' => 'comedy', 'content_id' => $contents[1] ?? null], // Use the second content id
        ['name' => 'Drama', 'description' => 'Emotional and dramatic films.', 'slug' => 'drama', 'content_id' => $contents[2] ?? null], // Use the third content id
        // Ensure all other categories have unique names and slugs
    ];

    foreach ($categories as $category) {
        // Check if content_id exists before creating the category
        if (in_array($category['content_id'], $contents)) {
            Category::updateOrCreate(['name' => $category['name']], $category);
        }
    }
}

}