<?php


require 'vendor/autoload.php';
require 'core/bootstrap.php';


$uri = trim($_SERVER['REQUEST_URI'], '/');


require Router::load('routes.php')->direct(Request::uri());

