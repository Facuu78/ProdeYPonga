<?php
	require("system/config.php");
	require("system/data.php");
	require("system/usuario.php");
	
	$msg = '';	
	
	if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){
				
		$usuario = $_POST["usuario"];
		$contrasena = $_POST["contrasena"];
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$telefono = $_POST["telefono"];
		$msg = crearUsuario($usuario, $contrasena, $nombre, $apellido, $telefono);
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prode&Ponga </title>

    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/bootstrap-responsive.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
	    <div class="bs-example">
		    <nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">Prode&Ponga </a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="reglas.php">Cuales son las reglas?</a></li>
						<li class="active"><a href="contacto.php">Quiero participar</a></li>
					</ul>
				</div>
			</nav>
		</div>
    </div> 
	
	<div class="row">
		<div class="jumbotron">
			<div class="row-fluid">
				<div class="span8">
					<h1>A tener en cuenta:</h1>
					<p> Para poder participar en el campeonato de PRODE&PONGA tenés que registrarte para que nos podamos contactar
						con vos y arreglar la entrega de los porotos.
					</p>
					<p>	Una vez hecho esto, el administrador va a habilitar tu usuario para que puedas ingresar al sitio y asi empezar
						a cargar tus fechas. 
					</p>
				</div>
				<div class="span4">
					<form method="post" class="form-signin" action="contacto.php" role="form">
						<?= $msg ?>
						<h2 class="form-signin-heading">Registrate</h2>
						<input id="usuario" name="usuario" type="text" class="form-control" placeholder="Email" required autofocus>
						<input id="contrasena" name="contrasena" type="password" class="form-control" placeholder="Contraseña" required>
						<input id="nombre" name="nombre" type="text" class="form-control" placeholder="nombre" required>
						<input id="apellido" name="apellido" type="text" class="form-control" placeholder="apellido" required>
						<input id="telefono" name="telefono" type="text" class="form-control" placeholder="telefono" required>
						
						<input type="submit" id="Registrar" name="Registrar" value="Registrar" class="btn btn-lg btn-primary btn-block" />
					</form>
				</div>
			</div>
		</div>
	</div>
   
  </body>
  
</html>