<?php 
include('application\views\master.php');
plantilla::inicio();

 ?>
<style type="text/css">
<?php
include('application/views/style.css');
?>
</style>
 <div class="container">
    <div class="main-page">
		<div class="sign-form">
			<h4>Sign Up</h4>
			<h5><strong>Crear</strong> Cuenta.</h5>
			<form method="post" name="registro_user_form" action="guardar_usuario.php">
			<input type="text" class="pass" name="txtnombre" placeholder="Nombre" required>
			<input type="text" class="pass" name="txtapellido" placeholder="Apellido" required>
			<input type="text" class="pass" name="txtcorreo" placeholder="Email address" required>
			<input type="password" name="txtpassword"  placeholder="Password" required>
			<input type="password" name="txtpassword_confirm" class="pass" placeholder="Confirm password" required>
			<button class="btn btn-info btn-block" type="submit">Sign up</button>
			<p class="center-block mg-t mg-b text-center">Ya tienes una cuenta?</p>
						
			</form>
			<a href="index.php"><button class="btn btn-info btn-block" type="submit">Login</button></a>
		</div>
	</div>	
</div>