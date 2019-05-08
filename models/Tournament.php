<?php



class Tournament  {



	public $teams;
	public $bracket;

	public function __construct($teams)
	{
		$this->teams = $teams;
	}

	public function setupTournament() {
		//Create bracket object based number of players or elimination type
		$this->bracket = new Bracket8Team($this->teams);
		$this->bracket->setupRound($this->teams);
	}

	public function getActivePlayers() {

		$activeTeams = array_filter($this->teams, function ($team) {
			return $team->getWin() == true;

		});

		return $activeTeams;
	}
}