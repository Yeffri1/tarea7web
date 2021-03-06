<?php 
require 'application\views\session.php';
include('application\views\master.php');
plantilla::inicio();

$CI =& get_instance();

if(isset($_SESSION['usuario']))
{
 ?>


<div class="container">
<h2>Sistema de Facturacion</h2>
<form action="<?php echo base_url('index.php?/Factura/save_factura')  ?>" method="post">
<div class="row">


<div class="col col-md-4">
<div class="form-group input-group">
<span class="input-group-addon">Cliente:</span>
<input type="text"  name="txtcliente"  class="form-control" required placeholder="Cliente">
</div>
</div>

<div class=" offset-4 col col-md-4">
<div class="form-group input-group">
<span class="input-group-addon">RNC:</span>
<input type="text" name="txtrnc"  class="form-control" required placeholder="RNC" minlength="9" maxlength="9">
</div>
</div>

<div class=" offset-4 col col-md-4">
<div class="form-group input-group">
<span class="input-group-addon">Fecha:</span>
<input type="date" name="txtfecha" class="form-control" required placeholder="Fecha">
</div>
</div>

<div class="col col-md-4">
<div class="form-group input-group">
<span class="input-group-addon">Descripcion:</span>
<input type="text"  name="txtdescripcion" class="form-control" required placeholder="Descripcion">
</div>
</div>

</div>

<fieldset>
	<legend>Productos</legend>
	
	<table class="table table-bordered">
		<thead>
			<th>Codigo Articulo</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Cantidad</th>
		</thead>
		<tbody id="tbl_articulos">
			
		</tbody>

	  <tfoot>
 		<tr>
 			<td id="subtotal"></td>
 			<td id="itbis"></td>
 			<td id="total"></td>
 		</tr>
 	</tfoot>

	</table>

</fieldset>
<input type="submit" class="btn btn-success" value="Guardar">
<a class='btn btn-info' onclick='agregarfila();'>Agregar Productos</a>
</form>
</div>
 <?php
}
else
{
	echo "<script type='text/javascript'>
		alert('Lo siento, no tiene permiso para ver esta pagina');
		window.location='index.php?/Usuarios';
	</script>";
	
}
?>

