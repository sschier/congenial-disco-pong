<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use \App\{Team, Tournament};

class TournamentTeamsController extends Controller
{
       public function update(Tournament $tournament, Team $team)

    {

    	// dd($team->advance);
        if (request()->has('die')) 
    	{
		    $team->update([
        		'advance' => false
	        ]);
		}

        return back();
    }

    public function store(Tournament $tournament)

    {

    	$tournament->addTeam(request('name'));

    	$tournament->update([
    		'player_count' => $tournament->teams()->count()
    	]);
        // Team::create([

        //     'name' => request('name'),  //'required | min:3'
        //     'tournament_id' => $tournament->id

        // ]);

       return back();
    }
}
