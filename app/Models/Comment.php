<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // mise en relation avec table comment
    public function replyTo()
    {
        return $this->belongsTo('app\Models\Comment','comment_id');
    }

    // mise en relation avec table comment
    public function repliesTo()
    {
        return $this->hasMany('app\Models\Comment');
    }

    // mise en relation avec la table user
    public function user()
    {
        return $this->belongsTo('app\Models\User');
    }

    // mise en relation avec la table photo
    public function Photo()
    {
        return $this->belongsTo('app\Models\Photo');
    }
}
