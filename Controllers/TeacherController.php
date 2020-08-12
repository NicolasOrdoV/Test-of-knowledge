<?php

require 'Models/Teacher.php';
require 'Models/Program.php';
require 'Models/TypeId.php';
require 'Models/TypeBlood.php';
require 'Models/TypeVinculation.php';
/**
 * Controlador profesores
 */
class TeacherController
{
	private $model;
	private $program;
	private $type_id;
	private $type_blood;
	private $type_vinculation;

	public function __construct()
	{
		$this->model = new Teacher;
		$this->program = new Program;
		$this->type_id = new TypeId;
		$this->type_blood = new TypeBlood;
		$this->type_vinculation = new TypeVinculation;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$teachers = $this->model->getAll();
		require 'Views/teachers/list.php';
	}

	public function new()
	{
		require 'Views/Layout.php';
		$programs = $this->program->getAll();
		$typesId = $this->type_id->getAll();
		$typeBloods = $this->type_blood->getAll();
		$typesVinculation = $this->type_vinculation->getAll();
		require 'Views/teachers/new.php';
	}

	public function save()
	{
		$this->model->newTeacher($_REQUEST);
		header('Location: ?controller=teacher');
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
			$typesVinculation = $this->type_vinculation->getAll();
		    require 'Views/teachers/edit.php';
		}
	}

	public function update()
	{
		if (isset( $_POST )) {
			$this->model->updateTeacher($_POST);
			header('Location: ?controller=teacher');
		}
	}

	public function delete()
	{
		$this->model->deleteTeacher($_REQUEST);
	    header('Location: ?controller=teacher');
	}
}