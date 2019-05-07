<?php

//Dependency injection container

class App 

{

	protected $registry = [

		'config' => [],
		'database' => $queryBuilder;
	];

	//within a static, don't have instance of the object

public static function bind($key, $value)

{

	static::registry[$key] = $value;
}

public static function get($key) 

{
	if (! array_key_exists($key, static::$registry)) {

		throw new Exception("No {$key} is bound in the container.");
	}
	

	return static::$registry[$key];
}

}