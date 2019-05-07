<?php


$teams = $app['database']->selectAll('teams', 'Team');


require 'views/bracket.view.php';