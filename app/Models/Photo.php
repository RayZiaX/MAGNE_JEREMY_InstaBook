<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Photo extends Model
{
    use HasFactory;

    // mise en relation avec la table tag
    public function tags()
    {
        return $this->belongsToMany('app\Models\Tag')
                    ->using("app\Models\PhotoTag");
    }

    // mise en relation avec la table user  
    public function users()
    {
        return $this->belongsToMany('app\Models\User')
                    ->using("app\Models\PhotoUser");
    }

    // mise en relation avec la table comment
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // mise en relation avec la table group
    public function group() {
        return $this->belongsTo('app\Models\Group');
    }

    // mise en relation avec la table user
    public function user()
    {
        return $this->belongsTo('app\Models\User');
    }

    // mise en relation avec la table tag
    public function Tag()
    {
        return $this->belongsTo('app\Models\Tag');
    }

}
 