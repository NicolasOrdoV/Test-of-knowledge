<?php

require 'Models/Program.php';


/**
 * Controlador Programas
 */
class ProgramController
{
	private $model;

	public function __construct()
	{
		$this->model = new Program;
	}

	public function index()
	{
		require 'Views/Layout.php';
		$programs = $this->model->getAll();
		require 'Views/programs/list.php';
	}
}