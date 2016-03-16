<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
	 protected $fillable = [
        'nickname', 'description', 'optradio',
    ];


    public function users()
    {
    	return $this->hasOne('App\User');
    }
}
 