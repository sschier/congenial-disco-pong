<?php

require 'functions.php';
require 'Player.php';

$pdo = connectToDb();

$players = fetchAllPlayers($pdo);

require 'views/index.view.php';
