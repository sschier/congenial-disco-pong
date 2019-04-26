<?php

require 'functions.php';
require 'Player.php';

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(Connection::make());
