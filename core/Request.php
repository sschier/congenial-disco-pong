<?php

class Request

{


	public static function uri()

	{

		//var_dump(trim($_SERVER['REQUEST_URI'],  '/?'));
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	}
}