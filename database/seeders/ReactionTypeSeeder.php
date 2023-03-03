<?php

namespace Database\Seeders;

use App\Models\ReactionType;
use Illuminate\Database\Seeder;

class ReactionTypeSeeder extends Seeder
{


    static $reaction_types = [
        [
            'type' => 'Like',
            'image' => "https://img1.gratispng.com/20180409/loe/kisspng-emoticon-like-button-smiley-facebook-social-media-like-us-on-facebook-5acb0bd1228318.7664916915232562731414.jpg"
        ], [
            'type' => 'Adoro',
            'image' => "https://png.pngtree.com/png-clipart/20210311/big/pngtree-love-reaction-facebook-png-image_6025260.png"
        ], [
            'type' => 'Riso',
            'image' => "https://www.imagensempng.com.br/wp-content/uploads/2021/08/Emoji-contente-Png-800x445.png"
        ], [
            'type' => 'Triste',
            'image' => "https://www.designi.com.br/images/preview/10433651.jpg"
        ], [
            'type' => 'Admirado',
            'image' => "https://png.pngtree.com/png-clipart/20210125/ourmid/pngtree-3d-emoji-feeling-awe-and-amazed-expression-png-image_2815273.jpg"
        ],
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