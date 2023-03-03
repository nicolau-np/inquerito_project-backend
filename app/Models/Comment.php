<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'id_post',
        'nome',
        'ano_formacao',
        'comment',
        'status',
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class, 'id_comment');
    }
}