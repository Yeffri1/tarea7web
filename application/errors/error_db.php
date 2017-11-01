 <?php 
  $CI =& get_instance();
 $CI->load->helper('url');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Intalar Servidor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	
<div class="container">
	<center>
<div class="col col-md-6">
<form method="post" action="<?php echo base_url('index.php?/Intalador/Create') ?>" >
<br><br><br>
<div class="row">
<br><br><br>
<h2>Instalador de Servidor</h2>

<div class="input-group form-group">
<span class="input-group-addon">Servidor:</span>
<input type="text" name="txtservidor" autofocus required placeholder="Escribe tu Servidor" class="form-control" alt="Escribir tu Servidor" />
</div>

<div class="input-group form-group">
<span class="input-group-addon">Usuario:</span>
<input type="text" name="txtUsuario"  required placeholder="Escribe tu Usuario" class="form-control" alt="Escribir tu Usuario" />
</div>

<div class="input-group form-group">
<span class="input-group-addon">Password:</span>
<input type="text" name="txtPassword"  placeholder="Escribe tu Password" class="form-control" alt="Escribir tu Password" />
</div>

<div class="input-group form-group">
<span class="input-group-addon">Base de datos:</span>
<input type="text" name="txtdb"  required placeholder="Escribe tu Base de datos" class="form-control" alt="Escribir tu Base de datos" />
</div>

</div>

<input type="submit" value="Intalar" class="btn btn-primary">

</form>
</div>
</center>
</div>

</body>
</html> 

<!--

<!DOCTYPE html>
<html lang="en">
<head>
<title>Database Error</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
		<h1><?php //echo $heading; ?></h1>
		<?php //echo $message; ?>
	</div>
</body>
</html>

-->