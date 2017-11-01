<?php 
error_reporting(0);
include('application/views/master.php');
plantilla::inicio();
 ?>


<center>
	<div class="container">
		<h2 class="h2">Login</h2>
		<div class="col col-md-6 offset-3">
		<form action="<? echo base_url('index.php?/Usuarios/loguearUsuario') ?>" method="post">

			 <div class="form-group input-group">
				<span class="input-group-addon">Usuario:</span>
				<input type="text" class="form-control" placeholder="Ingrese Correo" name="txtcorreo">
			  </div>

			  <div class="form-group input-group">
				<span class="input-group-addon">Clave:</span>
				<input type="password" class="form-control" placeholder="Ingrese Correo" name="txtpass">
			  </div>

			  <input type="submit" value="Entrar" class="btn btn-success">
		</form>
		</div>
	</div>
</center>