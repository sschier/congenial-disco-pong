<?php

$players = $app['database']->selectAll('players', 'Player');

require 'views/setup.view.php';



