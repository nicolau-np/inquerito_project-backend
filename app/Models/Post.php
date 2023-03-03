<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'post',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_post');
    }

    public function reaction_posts()
    {
        return $this->hasMany(ReactionPost::class, 'id_post');
    }
}