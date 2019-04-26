<?php

class QueryBuilder

{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class)
	{
		$statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

	 	return $statement->fetchAll(PDO::FETCH_CLASS, $class);
	}
}
