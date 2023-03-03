<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reaction_type',
        'id_comment',
        'status',
    ];

    public function reaction_types()
    {
        return $this->belongsTo(ReactionType::class, 'id_reaction_type');
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class, 'id_comment');
    }
}