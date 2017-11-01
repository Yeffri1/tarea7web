<?php 
error_reporting(0);
include('application\views\master.php');
plantilla::inicio();

 ?>

<div class="container">
   	<h2 class="h2">Registrarse</h2>
		<div class="col col-md-6 offset-3">
		<form action="<? echo base_url('index.php?/Usuarios/registrarUsuario') ?>" method="post">

			 <div class="form-group input-group">
				<span class="input-group-addon">Nombre:</span>
				<input type="text" class="form-control" placeholder="Ingrese nombre" name="txtnombre">
			  </div>

			  <div class="form-group input-group">
				<span class="input-group-addon">Apellido:</span>
				<input type="text" class="form-control" placeholder="Ingrese apellido" name="txtapellido">
			  </div>

			  <div class="form-group input-group">
				<span class="input-group-addon">Correo:</span>
				<input type="text" class="form-control" placeholder="Ingrese correo" name="txtcorreo">
			  </div>

			  <div class="form-group input-group">
				<span class="input-group-addon">Clave:</span>
				<input type="password" class="form-control" placeholder="Ingrese clave" name="txtclave">
			  </div>

			  <input type="submit" value="Entrar" class="btn btn-primary">
		</form>
		</div>
</div>