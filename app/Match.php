<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $guarded = [

    	'id'
    ];

    public function winningTeam()
    {
    	return $this->hasOne(Team::class, 'id', 'winnerId');
    } 
}
