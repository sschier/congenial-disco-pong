<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $guarded = [
    	'id'
    ];

    public function teams()

    {
    	return $this->hasMany(Team::class);
    }

    public function addTeam($name)

    {

    	$this->teams()->create(compact('name'));

        // return Team::create([

        //     'name' => $name
        //     'tournament_id' => $this->id

        // ]);

    }
}
