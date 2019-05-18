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
 		
 		$activeTeams = $data->filter(function($entry) {

 			return $entry['advance'] > 0; //TODO: should be == 1;

 		});
 		return $activeTeams;
 	}


 	public function setupRound()

 	{
 		//dd($this->getTeams());
 		$activeTeams = $this->getActiveTeams($this->getTeams());
 		$counter = 0;

 		 // dd($activeTeams);
 		while($counter < count($activeTeams)) {
 			// dd($counter);
 			// dd($activeTeams[$counter]);
 			// dd($activeTeams[3]);
 			$match = $this->match($activeTeams[$counter], $activeTeams[$counter+1]);
 			$this->round[] = $match; 
 			$counter+=2;
 		}
 	}

 	// public function getNMatches()

 	// public function getNRounds()

 	// {
 	// 	$n_rounds = '';
 	// }

 	// public function getRounds()

 	// {

 	// }

 	// public function setupTournament()

 	// {
 	// 	$rounds = $this->getRounds();
 	// }

 } 	
 	
 	
 	
