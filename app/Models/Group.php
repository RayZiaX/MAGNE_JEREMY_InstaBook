<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // Mise en relation avec la table user
    public function users()
    {
        return $this->belongsToMany('app\Models\User')
                    ->using("app\Models\GroupUser");
    }

    //Mise en relation avec la table photo
    public function photos(){
        return $this->hasMany('app\Models\Photo');
    }
}
