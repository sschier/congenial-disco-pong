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

// Remember: can add hidden inouts into forms, like round_id or whatever..

//Good idea to add another controller for completed matches and another for completed rounds
// (when in doubt, create a new controller and return to rest)
