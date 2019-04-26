<?php

$players = $app['database']->selectAll('players', 'Player');

require 'views/index.view.php';
