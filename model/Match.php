<?php

class Match 

{

	public $team1;
	public $team2;
	public $matchName;
	public $loserId;

	public function __construct($team1, $team2)

	{
		$this->team1 = $team1;
		$this->team2 = $team2;

		$this->matchName = "{$this->team1->name} VS {$this->team2->name}";
	}

	public function getMatchName()

	{
		return $this->matchName;
	}

	public function setLoserId($team)

	{
		$this->loserId = $team->id;
	}

	public function getLoserId()

	{
		return $this->loserId;
	}
}