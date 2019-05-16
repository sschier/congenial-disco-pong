<?php 

namespace App\Helpers;

use App\Team;
use App\Match;

 
 class Helper



 {
 	//vars

 	public $teams;

 	public $round = array();



 	//methods
 	public function __construct() {

 		$this->teams = Team::all();
 	}

 	public function getTeams() 

 	{

 		return $this->teams;

 	}

 	// public function match(Team $team1, Team $team2)
 	public function match($team1, $team2)

 	{
 		$match = new Match();
 		$match->team1Id = $team1->id;
 		$match->team1Name = $team1->name;
 		$match->team2Id = $team2->id;
 		$match->team2Name = $team2->name;
 		$match->matchName = "{$team1->name} VS {$team2->name}";


 		return $match;
 	}

 	public function getActiveTeams($data)

 	{
 		// $activeTeams = array_filter($this->teams->toArray(), function($entry) {
 		$activeTeams = $data->filter(function($entry) {
 			return $entry['advance'] > 0;

 		});
 		return $activeTeams;
 	}


 	public function setupRound()

 	{
 		//dd($this->getTeams());
 		$activeTeams = $this->getActiveTeams($this->getTeams());
 		$counter = 0;

 		while($counter < count($activeTeams)) {
 			$match = $this->match($activeTeams[$counter], $activeTeams[$counter+1]);
 			$this->round[] = $match; 
 			$counter+=2;
 		}
 	}
 } 	
 	
 	
