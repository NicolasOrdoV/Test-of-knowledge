<?php

require 'Models/Student.php';
require 'Models/Program.php';
require 'Models/TypeId.php';
require 'Models/TypeBlood.php';
/**
 * Controlador estudiantes
 */
class StudentController
{
	private $model;
	private $program;
	private $type_id;
	private $type_blood;

	public function __construct()
	{
		$this->model = new Student;
		$this->program = new Program;
		$this->type_id = new TypeId;
		$this->type_blood = new TypeBlood;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$students = $this->model->getAll();
		require 'Views/students/list.php';
	}

	public function new ()
	{
		require 'Views/Layout.php';
		$programs = $this->program->getAll();
		$typesId = $this->type_id->getAll();
		$typeBloods = $this->type_blood->getAll();
		require 'Views/students/new.php';
	}

	public function save()
	{
		$this->model->newStudent($_REQUEST);
		header('Location: ?controller=student');
	}

	public function edit()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->model->getById($id);
			require 'Views/Layout.php';
			$programs = $this->program->getAll();
			$typesId = $this->type_id->getAll();
			$typeBloods = $this->type_blood->getAll();
		    require 'Views/students/edit.php';
		}
	}

	public function update()
	{
		try {
			if ( isset($_POST) ) {
				$this->model->updateStudent($_POST);
				header('Location: ?controller=student');
		    }
		} catch (Exception $e) {
			echo "Error, no se realizo";
		}
	}

	public function delete()
	{
		$this->model->deleteStudent($_REQUEST);
        header('Location: ?controller=student');
	}
}