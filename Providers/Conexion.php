<?php

require 'config.php';
/**
 * Clase Conexion
 */
class Database extends PDO
{

  public function __construct()
  {
    try {
      parent::__construct(DRIVER.':host='.HOST.';dbname='.DBNAME.';charset='.CHARSET , USER , PASSWORD);
      $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Conexion fallida" . $e->getMessage();
    }
  }

  public function select($strSql , $arrayData = array() , $fetchMode = PDO::FETCH_OBJ )
  {
    try {
      $query = $this->prepare($strSql);
      foreach ($arrayData as $key => $value)
        $query->bindParam(":$key" , $value);
      if (!$query->execute()) {
        echo "La consulta no se realizo";
      }else{
        return $query->fetchAll($fetchMode);
      }
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function insert($table , $data)
  {
    try {
      ksort($data);
      unset($data['controller'], $data['method']);
      $fieldNames = implode('`, `', array_keys($data));
      $fieldValues = ':' . implode(', :', array_keys($data));
      $strSql = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
      foreach ($data as $key => $value) {
        $strSql->bindValue(":$key", $value);
      }
      $strSql->execute();
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }

  public function update($table , $data , $where)
  {
    try {
      ksort($data);
      $fieldDetails = null;
      foreach ($data as $key => $value) {
        $fieldDetails .= "`$key` =:$key,";
      }
      $fieldDetails = rtrim($fieldDetails , ',');
      $strSql = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
      foreach ($data as $key => $value) {
        $strSql->bindValue(":$key" , $value);
      }
      $strSql->execute();
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function delete($table , $where , $limit = 1)
  {
     try {
       return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
     } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

}