<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Intalador extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		 $this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('Intalador/Intalar');
	}
	function Create()
	{
      $cn = mysqli_connect($_POST['txtservidor'],$_POST['txtUsuario'],$_POST['txtPassword']);
      if($_POST && $cn==true)
      {
       $informacion2 = "<?php
       if (!defined('BASEPATH')) exit('No direct script access allowed');";
	   $informacion2.="\n";
       $informacion2.="$"."active_group = 'default';";
	   $informacion2.="\n";
       $informacion2.="$"."active_record = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['hostname'] = '{$_POST['txtservidor']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['username'] = '{$_POST['txtUsuario']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['password'] = '{$_POST['txtPassword']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['database'] = '{$_POST['txtdb']}';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['dbdriver'] = 'mysql';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['dbprefix'] = '';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['pconnect'] = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['db_debug'] = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['cache_on'] = FALSE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['cachedir'] = '';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['char_set'] = 'utf8';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['dbcollat'] = 'utf8_general_ci';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['swap_pre'] = '';";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['autoinit'] = TRUE;";
	   $informacion2.="\n";
       $informacion2.="$"."db['default']['stricton'] = FALSE; ";"";
      file_put_contents('application/config/database.php', $informacion2);
	
	  $sql = "CREATE DATABASE IF NOT EXISTS {$_POST['txtdb']};";
	  mysqli_query($cn,$sql);
	
	  $sql1 = "use {$_POST['txtdb']};";
	  mysqli_query($cn,$sql1);

	
		 
		 	$sql2 = "Create Table `factura` (
              `codigo` int(11) NOT NULL auto_increment,
              `cliente` varchar(50) NOT NULL,
              `rnc` varchar(9) NOT NULL,
              `fecha` date NOT NULL,
              `descripcion` varchar(100) default NULL,
              `usuario_id` int(11) NOT NULL,
              PRIMARY KEY  (`codigo`),
              KEY `usuario_id_idx` (`usuario_id`)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;"; 
              mysqli_query($cn,$sql2);

           $sql3 = "Create table detalle_factura
                   (
                       `id` int(11) NOT NULL auto_increment,
                       `codigo_factura` int(11) NOT NULL,
                       `codigo_articulo` int(11) NOT NULL,
                       `nombre_articulo` varchar(50) NOT NULL,
                       `precio_articulo` int(11) NOT NULL,
                       `cantidad_articulo` int(11) NOT NULL,
                       `comentario` varchar(200) default NULL,
                       PRIMARY KEY  (`id`),
                       KEY `codigo_factura_idx` (`codigo_factura`)
                       ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;"; 
                    mysqli_query($cn,$sql3);

             $sql4 = "
                    Create Table `usuarios` (
                   `Id` int(10) NOT NULL auto_increment,
                   `Nombre` varchar(50) NOT NULL,
                   `Apellido` varchar(50) NOT NULL,
                   `Correo` varchar(50) NOT NULL,
                   `Clave` varchar(50) NOT NULL,
                   PRIMARY KEY  (`Id`),
                   UNIQUE KEY `Correo` (`Correo`)
                   ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;"; 
                    mysqli_query($cn,$sql4);   


                    $sql5 = "Alter Table `detalle_factura`
                    ADD CONSTRAINT `codigo_factura` FOREIGN KEY (`codigo_factura`) 
                    REFERENCES `factura` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;";
                      mysqli_query($cn,$sql5); 

                      $sql6 = "Alter Table `factura`
                      ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;";
                      mysqli_query($cn,$sql6); 




$_POST = null;
    echo "<script>window.location='index.php?/Usuarios/registrarUsuario'</script>";
 
  } 
 else if(!$cn)
 {
	 echo "<h2>No hubo conexion</h2><a href='<?php echo base_url('index.php?/Intalador/Create') ?>'>
	 Ir a Intalador</a>";
 }
 else
 {
   echo "<h2>No hubo post</h2> <a href='<?php echo base_url('index.php?/Intalador/Create') ?>'>
	 Ir a Intalador</a>";
 }


 }


}

 ?>