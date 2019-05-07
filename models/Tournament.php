<?php



class Tournament  {



	public $teams;

	public function __construct($teams)
	{
		$this->teams = $teams;
	}

	public function setupTournament() {
		//Create bracket object based number of players or elimination type
		$bracket = new Bracket8Team($this->teams);
		$bracket->setupMatches();
	}

	public function getActivePlayers() {

		$activeTeams = array_filter($this->teams, function ($team) {
			return $team->getWin() == true;

		});

		return $activeTeams;
	}
}