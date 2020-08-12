<?php

/**
 * Modelo programas
 */
class Program
{
	private $id;
	private $description;
	private $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new Database;
		} catch (PDOException $e) {
			die($e->getMessage());
		}	
	}

	public function getAll()
	{
        try {
        	$strSql = "SELECT * FROM programa";
        	$query = $this->pdo->select($strSql);
        	return $query;
        } catch (PDOException $e) {
        	die($e->getMessage);
        }
	}
}