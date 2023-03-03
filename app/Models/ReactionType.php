<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'image',
        'status',
    ];

    public function reaction_posts(){
        return $this->hasMany(ReactionPost::class, 'id_reaction_type');
    }
}