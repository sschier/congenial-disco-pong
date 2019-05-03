<?php

$router->define([


	'' => 'controllers/index.php',

	'play' => 'controllers/play.php',

	'setup' => 'controllers/setup.php',

	'team' => 'controllers/add-team.php' //only for post types


]);

// $router->get('','controllers/index.php');
// $router->get('play', 'controllers/play.php');
// $router->get('setup', 'controllers/setup.php');
// $router->post('team', 'controllers/add-team.php');