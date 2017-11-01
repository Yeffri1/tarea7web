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
		if($_POST)
		{
			$data = array('Nombre'=>$_POST['txtnombre'],'Apellido'=>$_POST['txtapellido'],'Correo'=>$_POST['txtcorreo'],'Clave'=>$_POST['txtclave']);
			$this->db->insert('usuarios',$data);
		    $_SESSION['id'] = $this->db->insert_id();
            $_SESSION['usuario'] = $_POST['txtcorreo'];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (60*30);
			$this->load->view('Usuarios/login');
		}
		else
		{
	      $this->load->view("Usuarios/signup");
		}

		
	}

	function loguearUsuario()
	{

        require 'application\views\session.php';
	    if($_POST)
        {
	    $user = $_POST['txtcorreo'];
	    $pss = $_POST['txtpass'];
   	    $result = $this->db->query("select Id,Correo,Clave from usuarios where Correo='{$user}' and Clave='{$pss}';");
   	    if($result->num_rows()>0)
   	    {
   	    	$r = $result->row();
   	       $_SESSION['id'] = $r->Id;
           $_SESSION['usuario'] = $user;
           $_SESSION['start'] = time();
           $_SESSION['expire'] = $_SESSION['start'] + (60*30);
           echo "<script>window.location='index.php?/Factura/'</script>";
	    }
	    else
	    {
	      $this->salirUsuario();
	    }
	   }
    } 
	
	function salirUsuario()
	{
		require 'application\views\session.php';
        unset ($_SESSION['usuario']);
        session_destroy();
		$this->load->view("Usuarios/login");
	}

}



 ?>