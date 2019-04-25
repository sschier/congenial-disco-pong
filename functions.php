<?php

function connectToDb()
{
	try {
 	return new PDO('mysql:host=127.0.0.1;dbname=pong', 'root', '');
 } catch (PDOException $e) {
 	die($e->getMessage());
 }
}

function fetchAllPlayers($pdo)
{
	$statement = $pdo->prepare('select * from players');
 	$statement->execute();

 	return $statement->fetchAll(PDO::FETCH_CLASS, 'Player');
}


function dd($data) {

	echo '<pre>';
	die(var_dump($data));
	echo '<pre>';
}