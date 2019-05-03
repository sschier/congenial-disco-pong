

<?php
var_dump($_SERVER);

$app['database']->insert('players', ['player_name' =>  $_POST['player_name']]);

header('Location: /setup');