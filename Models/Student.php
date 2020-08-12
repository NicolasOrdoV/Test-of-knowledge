<?php

/**
 * Modelo estudiantes
 */
class Student
{
	private $id;
	private $name;
	private $lastName;
	private $typeId;
	private $numberId;
	private $program;
	private $semester;
	private $age;
	private $dateOfBirth;
	private $typeOfBlood;
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
			$strSql = "SELECT e.*,ti.tipo_id as typeId,ts.tipo_sangre as typeOfBlood,p.descripcion as program FROM estudiantes e
			          INNER JOIN tipoid ti ON ti.id = e.id_tipo_id
			          INNER JOIN tiposangre ts ON ts.id = e.id_tipo_sangre
			          INNER JOIN programa p ON p.id = e.id_programa ORDER BY id ASC";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
	 	    die($e->getMessage());
	    }
	}

	public function newStudent($data)
	{
        try {
            $this->pdo->insert('estudiantes' , $data);      	
        } catch (PDOException $e) {
	 	    die($e->getMessage());
	    } 
	}

	public function getById($id)
	{
		try {
			$strSql = "SELECT * FROM estudiantes WHERE id = :id";
			$array = ["id" => $id];
			$query = $this->pdo->select($strSql , $array);
			return $query;
		} catch (PDOException $e) {
	 	    die($e->getMessage());
	    } 
	}

	public function updateStudent($data)
	{
		try {
			$strWhere = "id=" . $data['id'];
			$this->pdo->update('estudiantes' , $data , $strWhere);
		} catch (PDOException $e) {
	 	   die($e->getMessage());
	    } 
	}

	public function deleteStudent($data)
	{
		try {
			$strWhere = "id=" . $data['id'];
			$this->pdo->delete('estudiantes' , $strWhere);
		} catch (PDOException $e) {
	 	   die($e->getMessage());
	    }
	}
}