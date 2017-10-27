<?php 

/**
* 
*/
class Usuarios extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	function index()
	{
		$this->load->view("Usuarios/login");
	}
	function registrarUsuario()
	{

		$this->load->view("Usuarios/signup");
	}

	function loguearUsuario()
	{

		$this->load->view("Usuarios/login");
	}
	function salirUsuario()
	{

		$this->load->view("Usuarios/logout");
	}

}



 ?>