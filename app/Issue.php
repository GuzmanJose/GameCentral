<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //

    protected $fillable = [
    'title', 'description', 'gitHubLink', 'webiste',
    ];

    public function user()
    {
    	return $this->hasOne('App\User');
    }
}
