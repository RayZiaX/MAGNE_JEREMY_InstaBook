<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // mise en relation avec la table photo
    public function photo(){
        return $this->hasMany(Photo::class);
    }

    // mise en relation avec la table photo
    public function photos(){
        return $this->belongsTo('app\Models\Photo')
                    ->using("app\Models\PhotoTag");
    }
}
