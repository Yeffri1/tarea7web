<?php 
error_reporting(0);
require 'application\views\session.php';
if(isset($_SESSION['usuario']))
{?>
<?

include('application\views\master.php');
plantilla::inicio();
$CI =& get_instance();


 ?>


<div class="container">
	<div class="row">
		<div class="col col-md-7">
<h2>Lista de facturas</h2>

<form action="" method="post">
	<label for="txtnombre">Buscar x Cliente:</label>
<input type="text" title="No se acepta numeros y simbolos extraños" name="txtnombre">
<input class="btn btn-info" type="submit" value="Ir">
</form>


 <table class="table">
 	
 	<thead>
 		<th>Codigo</th>
 		<th>Fecha</th>
 		<th>Cliente</th>
 		<th>RNC</th>
 	</thead>
 	<tbody>
 		<?php
 		if($_POST)
          {
             $nombre = $_POST['txtnombre'];
             $datos = $CI->db->query("Select * from factura where cliente like '%{$nombre}%' and 
             	 usuario_id='{$_SESSION['id']}'");
         
          if($datos->num_rows()>0)
           {
            foreach($datos->result_array() as $dat)
             {
            	$url = base_url("index.php?/factura/Editar/{$dat['codigo']}");
            	$url1 = base_url("index.php?/factura/imprimir_factura/{$dat['codigo']}");
         	    echo "
				<tr>
				<td>{$dat['codigo']}</td>
				<td>{$dat['fecha']}</td>
				<td>{$dat['cliente']}</td>
				<td>{$dat['rnc']}</td>

				<td>
	             <a class='btn btn-primary' href='{$url}'>Actualizar</a>
	             <a class='btn btn-success' href='{$url1}'>Imprimir</a>
	            </td>
				</tr>

				";	
			}
		}
	
		else
		{
			echo "<h4>No encontrado</h4>";
		}
      }

        else
        {
          $datos = $CI->db->query("Select * from factura where usuario_id='{$_SESSION['id']}'");
         if($datos->num_rows()>0)
          {
           foreach($datos->result_array() as $dat)
            {
            	$url = base_url("index.php?/factura/Editar/{$dat['codigo']}");
            	$url1 = base_url("index.php?/factura/imprimir_factura/{$dat['codigo']}");
         	    echo "
				<tr>
				<td>{$dat['codigo']}</td>
				<td>{$dat['fecha']}</td>
				<td>{$dat['cliente']}</td>
				<td>{$dat['rnc']}</td>

				<td>
	             <a class='btn btn-primary' href='{$url}'>Actualizar</a>
	             <a class='btn btn-success' href='{$url1}'>Imprimir</a>
	            </td>
				</tr>

				";	
			}
		   }
		else
		{
			echo "<h4>No Existen Facturas</h4>";
		}
		}

 		?>

 	</tbody>

 
 		
 </table>
</div>
</div>
</div>
<?php
}
else
{
	echo "<script>
	alert('Lo siento, No tienes permiso para acceder a este sitio.');
	window.location='index.php?/Usuarios';
	</script>";

}
?>