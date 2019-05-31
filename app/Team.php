<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //Mass assignment 
    // protected $fillable = [

    // 	'name'
    // ];

    protected $guarded = [

    	'id'
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function matchesWon()

    {

    	return $this->hasMany(Match::class, 'winnerId');
    }
}

// can loop over matches in a round with something like:
// @if ($round->matches->count()) 
// 	  @foreach($round->matches as $match)
// 		  <form method="POST" action="/match/{{ $match->id }}">"
// 			@method('PATCH')
// 				//some way to edit or something.....
//  to submit with a click or something, <input type="checkbox" .. onChange="this.form.submit()">  (JS)
