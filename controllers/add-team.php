<?php
var_dump($_SERVER);

$app['database']->insert('teams', ['name' =>  $_POST['name']]);

header('Location: /setup');