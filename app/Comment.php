<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    'title',
    'body',
    'user_id',
    
    ];

    public function users()
    {
    	return $this->hasOne('App\User');
    }
}
