<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'id_user' => 1,
            'post' => "O quê que achas do SIGU na nossa Instituição",
        ]);
    }
}