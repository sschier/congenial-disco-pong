<?php
var_dump($_SERVER);

$app['database']->clearTable('teams');

header('Location: /setup');