<?php

/**
 * Modelo tipos de sangre
 */
class TypeBlood
{
	private $id;
	private $type_blood;
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
			$strSql = "SELECT * FROM tiposangre";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
		    die($e->getMessage());
	    }
	}
}