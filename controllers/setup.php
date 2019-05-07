<?php

$teams = $app['database']->selectAll('teams', 'Team');

require 'views/setup.view.php';



