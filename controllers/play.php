<?php

$players = $app['database']->selectAll('players', 'Player');

require 'views/play.view.php';
