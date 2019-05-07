<?php

interface Bracket {

	public function setupMatches();

	public function getNumberOfRounds();


}

class Bracket8Team implements Bracket {

	public $teams;

	private $numberOfRounds = 8;

	public function __construct($teams) 

	{
		$this->teams = $teams;
	}


	public function getNumberOfRounds() 

	{
		return $numberOfRounds;
	}

	public function setupMatches () 

	{
		foreach ($this->teams as $team) {
			var_dump($team->name);
		}
	}

	public function populateRound($round) {}
}