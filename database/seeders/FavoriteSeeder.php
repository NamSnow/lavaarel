<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favorite; // Sửa lại tên model
use App\Models\User;
use App\Models\Content;

class FavoriteSeeder extends Seeder
{
    public function run()
    {
        $favorites = [
            ['user_id' => 1, 'content_id' => 1],
            ['user_id' => 2, 'content_id' => 2],
            // Thêm nhiều mục yêu thích hơn nếu cần
        ];

        foreach ($favorites as $favorite) {
            if (User::find($favorite['user_id']) && Content::find($favorite['content_id'])) {
                Favorite::create($favorite);
            }
        }
    }
}