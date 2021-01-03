<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // mise en relation avec la table photo
    public function photos()
    {
        return $this->hasMany('app\Models\Photo');
    }

    // mise en relation avec la table photo
    public function photo()
    {
        return $this->belongsToMany('app\Models\Photo')
                    ->using('Illuminate\Database\Eloquence\Collection');
    }

    // mise en relation avec la table photo
    public function PhotoAppearance()
    {
        return $this->belongsToMany('app\Models\Photo')
                    ->using('app\Models\PhotoUser');
    }

    // mise en relation avec la table comment
    public function comments()
    {
        return $this->hasMany('app\Models\Comment');
    }

    // mise en relation avec la table group
    public function groups()
    {
        return $this->belongsToMany('app\Models\Group')
                    ->using('app\Models\GroupUser');
    }

    // mise en relation avec la table group
    public function group()
    {
        return $this->belongsToMany('app\Models\Group');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
