<?php 

include('application/views/master.php');
plantilla::inicio();
 ?>
<style type="text/css">
<?php
include('application/views/style.css');
?>
</style>
 <div id="page-wrapper">
			<div class="main-page">
				<div class="login-form">
					<h4>Login</h4>
					<h5><strong>Bienvenido</strong> favor logearse para empezar!</h5>
					<form name="login" action="" method="post">
					
						<input type="text" placeholder="Correo" name="txtcorreo" required>
						<input type="password" class="pass" name="txtpass" placeholder="Password" required>
						<div class="clearfix"></div>
						<input class="btn btn-info btn-block" type="submit" value="Sign in">
						
						<p class="center-block mg-t mg-b">No tienes una cuenta?
						<a href="<?php echo base_url('index.php?/Usuarios/registrarUsuario') ?>">Registrate aqui!</a>
						</p>
					</form>
				</div>
		</div>	
	</div>	