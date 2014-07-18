<?php
	require("system/config.php");
	require("system/data.php");
	
	$msg = '';
	if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){
		if(login($_POST["usuario"],$_POST["contrasena"])){
			session_start();
			$_SESSION['estado'] = login3($_POST["usuario"],$_POST["contrasena"]);
				if($_SESSION['estado']==1){	
					$tipoUsuario = login($_POST["usuario"],$_POST["contrasena"]);
					$_SESSION['usuario'] = $_POST["usuario"];
					$_SESSION['idUsuario']= login2($_POST["usuario"],$_POST["contrasena"]);
					$_SESSION['tipoUsuario']= login($_POST["usuario"],$_POST["contrasena"]);
						
					switch($tipoUsuario){
						case 1:
							header("Location:/prode/home.php");
						break;
						
						case 2:
							header("Location:/prode/home.php");
						break;
						
						case 3:
							header("Location:/prode/home.php");
						break;
						
						case 4:
							header("Location:/prode/home.php");
						break;
						
						default:
						break;
					}
				}else{
					$msg= "<div class='alert alert-danger'>El usuario esta dado de baja</div>";
				}
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
			  <a class="navbar-brand">Prode&Ponga </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
			  <ul class="nav navbar-nav">
				<li><a href="index.php">Inicio</a></li>
			  	<li class="active"><a href="reglas.php">Cuales son las reglas?</a></li>
				<li><a href="contacto.php">Quiero participar</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </nav>
		</div><!-- /example -->
    </div> <!-- /container -->
	<div class="row">

	<div class="jumbotron">
		  <div class="row-fluid">
			<div class="span15">
			vsddvs
			</div>
		  </div>
	</div>
   
  </body>
  
</html>