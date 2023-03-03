<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reaction_type',
        'id_post',
        'status',
    ];

    public function reaction_types()
    {
        return $this->belongsTo(ReactionType::class, 'id_reaction_type');
    }

    public function posts()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}