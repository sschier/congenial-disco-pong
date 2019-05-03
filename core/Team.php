<?php

class Team 

{

	public $name;
	public $winLastMatch = true;
}

public function won()
{
	$this->winLastMatch = true;
}

public function lost()
{
	$this->winLastMatch = false;
}