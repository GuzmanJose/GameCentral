<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function avatars()
    {
            return $this->hasOne('App\Avatar');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function games()
    {
        return $this->hasMany('App\Game');
    }

    public function issues()
    {
        return $this->hasMany('App\Issue');
    }
}
