<?php

/**
 * Modelo profesores
 */
class Teacher
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
	private $salary;
	private $typeVinculation;
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
		    $strSql = "SELECT t.*, ti.tipo_id as typeId,ts.tipo_sangre as typeOfBlood,p.descripcion as program , tv.tipo_vinc as typeVinculation FROM profesores t
		              INNER JOIN tipoid ti ON ti.id = t.id_tipo_id
		              INNER JOIN tiposangre ts ON ts.id = t.id_tipo_sangre
		              INNER JOIN programa p ON p.id = t.id_programa
		              INNER JOIN tipovinculacion tv ON tv.id = t.id_tipo_vinculacion ORDER BY id ASC";
		    $query = $this->pdo->select($strSql);
		    return $query;          	  
        } catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newTeacher($data)
	{
		try {
			$this->pdo->insert('profesores' , $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$strSql = "SELECT * FROM profesores WHERE id = :id";
			$array = ['id' => $id];
			$query = $this->pdo->select($strSql , $array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function updateTeacher($data)
	{
        try {
        	$strWhere = "id=" . $data['id'];
        	$this->pdo->update('profesores' , $data , $strWhere);
        } catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteTeacher($data)
	{
		try {
        	$strWhere = "id=" . $data['id'];
        	$this->pdo->delete('profesores' , $strWhere);
        } catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}