<?php

class Team 

{

	public $name;
	private $winLastMatch = true;


	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setWin($win)
	{
		$this->winLastMatch = $win;
	}

	public function getWin()
	{
		return $this->winLastMatch;
	}
}