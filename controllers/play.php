<?php


$teams = $app['database']->selectAll('teams', 'Team');

$tournament = new Tournament($teams);
$tournament->setupTournament();

// var_dump($tournament);

// var_dump($tournament->getActivePlayers());

require 'views/play.view.php';
