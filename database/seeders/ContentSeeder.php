<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentSeeder extends Seeder
{
    public function run()
    {
        $contents = [
            [
                'title' => 'Inception',
                'description' => 'A mind-bending thriller by Christopher Nolan.',
                'image_url' => 'https://image.tmdb.org/t/p/w500//image_inception.jpg',
                'trailer_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
                'start_date' => '2010-07-16',
                'content_type' => 'VIP',
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A sci-fi classic about virtual reality.',
                'image_url' => 'https://image.tmdb.org/t/p/w500//image_matrix.jpg',
                'trailer_url' => 'https://www.youtube.com/watch?v=vKQi3bBA1y8',
                'start_date' => '1999-03-31',
                'content_type' => 'Regular',
            ],
            // Add more content entries as needed
        ];

        foreach ($contents as $content) {
            Content::create($content);
        }
    }
}