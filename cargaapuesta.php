<?php		
	require("system/config.php");
	require("system/data.php");
	require("system/session.php");
	require("system/partidos.php");
	
	$msg = ' ';
	
	if(isset($_POST["enviar"])){
		if(isset($_POST['1']) && isset($_POST['2']) && isset($_POST['3']) && isset($_POST['4']) && isset($_POST['5']) && isset($_POST['6']) && isset($_POST['7']) && isset($_POST['8']) && isset($_POST['9']) && isset($_POST['10'])){
		
			cargaApuesta(1, $_POST['1']);		
			cargaApuesta(2, $_POST['2']);
			cargaApuesta(3, $_POST['3']);
			cargaApuesta(4, $_POST['4']);
			cargaApuesta(5, $_POST['5']);
			cargaApuesta(6, $_POST['6']);
			cargaApuesta(7, $_POST['7']);
			cargaApuesta(8, $_POST['8']);
			cargaApuesta(9, $_POST['9']);
			cargaApuesta(10, $_POST['10']);
			
			echo $_POST['1'],
			$_POST['2'],
			$_POST['3'],
			$_POST['4'],
			$_POST['5'],
			$_POST['6'],
			$_POST['7'],
			$_POST['8'],
			$_POST['9'],
			 $_POST['10'];
			
			
			
			
			
			
			
		}else{
			$msg = "<div class='alert alert-danger'>Por favor, completa tu apuesta para todos los partidos.</div>";
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

		<title>Prode&Ponga </title>

		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.css" rel="stylesheet">
		<link href="dist/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/home.css" rel="stylesheet">
		<script src="dist/js/bootstrap.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<script type="text/javascript" src="ajaxtabs/ajaxtabs.js"></script>
		<script src="http://www.dynamicdrive.com/ddincludes/scripts.js"></script>
		
		<script type="text/javascript" src="ajaxtabs/ajaxtabs.js">

		/***********************************************
		* Ajax Tabs Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
		* This notice MUST stay intact for legal use
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
		***********************************************/

		</script>

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
						<a class="navbar-brand" href="#">Prode&Ponga</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
						<ul class="nav navbar-nav">
							<li><a href="home.php">Inicio</a></li>
							<li class="active"><a href="cargaapuesta.php">Cargar apuesta</a></li>
							<li><a href="otrasfechas.php">Ver todas las fechas</a></li>
							<li><a href="tablaposiciones.php">Ver tabla de posiciones</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="system/logout.php">Salir</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
			
		<div class="container">
			<div class="panel panel-primary">
				<ul id="tabs" class="nav nav-tabs">
				  <li><a href="#" rel="#default">Fecha actual</a></li>
				</ul>		
				<div id="tabscontainer" class="panel-body">		
					<form method="POST" action="cargaapuesta.php" class="form-signin" role="form">
						<?= $msg ?>
						<?php
							$local = listaFecha('id_local');
							$visitante = listaFecha('id_visitante');
							static $a = 1;
							while(isset($local) && $row_l = mysqli_fetch_assoc($local)) {
								if(isset($visitante) && $row_v = mysqli_fetch_assoc($visitante)) {
									
									echo "<li class='list-group-item'>
											<span class='badge'>V <input type='radio' id=$a value=".$row_v['id_visitante']." name='$a'></span>
											<span class='badge'>E <input type='radio' id=$a value=E name='$a'></span>
											<span class='badge'>L <input type='radio' id=$a value=".$row_l['id_local']." name='$a'></span>";
									
									echo "  <div class='row'>
												<div class='col-md-2'>". $row_l['descripcion']."</div>
												<div class='col-md-2'> VS </div>
												<div class='col-md-2'>". $row_v['descripcion'] ."</div>
											</div>";									
									$a++;
									//Guardo el ID de la fecha actual
									$_SESSION["fecha_actual"] = $row_l['id_fecha'];
									echo "</li>";
								}
							}
						?>
						<input type="submit" id="enviar" name="enviar" value="Enviar apuesta" class="btn btn-success btn-lg btn-block"/>
					</form>
			
					<script type="text/javascript">

					var tab=new ddajaxtabs("tabs", "tabscontainer")
					tab.setpersist(true)
					tab.setselectedClassTarget("link") //"link" or "linkparent"
					tab.init()

					</script>
									
				</div>
			</div>
		</div>
	</body>
</html>