<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $fillable = [
    'gameTitle', 'gameDescription', 'gitHubLink', 'gameLink', 'zipGame', 'thumbnail', 'gameRequirements', 'gameWebsite',
    ];

    public function user()		
    {
    	return $this->hasOne('App\User');
    }
}
