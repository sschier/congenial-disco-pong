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

 	public function getActiveTeams()

 	{
 		
 		$activeTeams = $this->teams->where('advance', 1); //TODO: should be == 1;

 		
 		return $activeTeams;
 	}


 	public function setupRound()

 	{

 		$teams_array = array();

 		$activeTeams = $this->getActiveTeams();


 		foreach ($activeTeams as $team) {

 			array_push($teams_array, $team);

 			
 		}


 		$counter = 0;

 		while($counter < count($teams_array)) {

 			$match = $this->match($teams_array[$counter], $teams_array[$counter+1]);

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
 	
 	
 	
