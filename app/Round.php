<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $guarded = [

    	'id' //add number of matches
    ];

    public function matches()
    {
    	return $this->hasMany(Match::class);
    }

    
}
