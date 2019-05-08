<?php

interface Bracket {

	public function setupRound($teams);

	public function getNumberOfRounds();


}

class Bracket8Team implements Bracket {

	public $teams;

	private $numberOfRounds = 8;

	public $round = array();

	public function __construct($teams) 

	{
		$this->teams = $teams;
	}


	public function getNumberOfRounds() 

	{
		return $numberOfRounds;
	}

	public function setupRound ($teams) 

	{
		$counter=0;
		while($counter < 8) {

			$match = new Match($teams[$counter], $teams[$counter+1]);
			$this->round[] = $match; 
			$counter+=2;  //counter = 0,2,4,6 (won't get to 8)
		}

		// return $this->round;
		
	}

	public function populateRound($round) {}
}