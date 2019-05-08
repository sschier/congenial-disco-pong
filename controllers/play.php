<?php


$teams = $app['database']->selectAll('teams', 'Team');

$tournament = new Tournament($teams);
$tournament->setupTournament();

require 'views/play.view.php';
