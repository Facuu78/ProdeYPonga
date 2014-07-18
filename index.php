<?php
	require("system/config.php");
	require("system/data.php");
	require("system/usuario.php");
	
	$msg = '';	
		
	if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){
				
		if(login($_POST["usuario"],$_POST["contrasena"])){
			header("Location:/prode/home.php");
		}else{
			$msg = "<div class='alert alert-danger'>El usuario y/o contraseña es incorrecto</div>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prode&Ponga </title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

  </head>

  <body>
      <div class="container">
	    <div class="bs-example">
		  <nav class="navbar navbar-inverse" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand">Prode&Ponga</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Inicio</a></li>
			  	<li><a href="reglas.php">Cuales son las reglas?</a></li>
				<li><a href="contacto.php">Quiero participar</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </nav>
		</div><!-- /example -->
    </div> <!-- /container -->
	<div class="row">

	<div class="jumbotron">
		  <div class="row-fluid">
			<div class="span8">
			<h1>Bienvenidos!</h1>
			<p>Un texto es una composición de signos codificado en un sistema de escritura
			   Un texto es una composición de signos codificado en un sistema de escritura
			   Un texto es una composición de signos codificado en un sistema de escritura
			   Un texto es una composición de signos codificado en un sistema de escritura
			</p>
			   
			</div>
			<div class="span4">
			  <form method="post" class="form-signin" role="form">
			  <?= $msg ?>
				<h2 class="form-signin-heading">Ya sos usuario?</h2>
				<input id="usuario" name="usuario" type="text" class="form-control" placeholder="Usuario" required autofocus>
				<input id="contrasena" name="contrasena" type="password" class="form-control" placeholder="Contraseña" required>
				 
				<input type="submit" id="ingresar" value="Ingresar"  class="btn btn-lg btn-primary btn-block" />
			  </form>
			</div>
		  </div>
	</div>
   
  </body>
  
</html>