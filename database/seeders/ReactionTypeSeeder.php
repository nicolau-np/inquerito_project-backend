<?php

namespace Database\Seeders;

use App\Models\ReactionType;
use Illuminate\Database\Seeder;

class ReactionTypeSeeder extends Seeder
{


    static $reaction_types = [
        [
            'type' => 'Like',
            'image' => null
        ], [
            'type' => 'Adoro',
            'image' => null
        ], [
            'type' => 'Riso',
            'image' => null
        ], [
            'type' => 'Triste',
            'image' => null
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Self::$reaction_types as $reaction_type) {
            ReactionType::create($reaction_type);
        }
    }
}