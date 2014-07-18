<?php		
	require("system/config.php");
	require("system/data.php");
	require("system/session.php");
	require("system/partidos.php");
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
		
		<link href="bootstrap-master/docs/assets/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-master/docs/assets/css/bootstrap-select.css" rel="stylesheet" />
<script src="bootstrap-master/docs/assets/js/bootstrap-select.js" type="text/javascript"></script>
<script>
$('.selectpicker').selectpicker({
      style: 'btn-info',
      size: 4
  });
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
							<li><a href="cargaapuesta.php">Cargar apuesta</a></li>
							<li class="active"><a href="otrasfechas.php">Ver todas las fechas</a></li>
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
				<form method="POST" action="otrasfechas.php" class="form-signin" role="form">				
					  <input type="submit" id="1"  name="1" value="1" class="btn btn-primary"/></a>
					  <input type="submit" id="2"  name="2" value="2" class="btn btn-primary"/></a>
					  <input type="submit" id="3"  name="3" value="3" class="btn btn-primary"/></a>
					  <input type="submit" id="4"  name="4" value="4" class="btn btn-primary"/></a>
					  <input type="submit" id="5"  name="5" value="5" class="btn btn-primary"/></a>
					  <input type="submit" id="6"  name="6" value="6" class="btn btn-primary"/></a>
					  <input type="submit" id="7"  name="7" value="7" class="btn btn-primary"/></a>
					  <input type="submit" id="8"  name="8" value="8" class="btn btn-primary"/></a>
					  <input type="submit" id="9"  name="9" value="9" class="btn btn-primary"/></a>
					  <input type="submit" id="10" name="10" value="10" class="btn btn-primary"/></a>
					  <input type="submit" id="11" name="11" value="11" class="btn btn-primary"/></a>
					  <input type="submit" id="12" name="12" value="12" class="btn btn-primary"/></a>
					  <input type="submit" id="13" name="13" value="13" class="btn btn-primary"/></a>
					  <input type="submit" id="14" name="14" value="14" class="btn btn-primary"/></a>
					  <input type="submit" id="15" name="15" value="15" class="btn btn-primary"/></a>
					  <input type="submit" id="16" name="16" value="16" class="btn btn-primary"/></a>
					  <input type="submit" id="17" name="17" value="17" class="btn btn-primary"/></a>
					  <input type="submit" id="18" name="18" value="18" class="btn btn-primary"/></a>
					  <input type="submit" id="19" name="19" value="19" class="btn btn-primary"/></a>
				</form>	
					<div id="container" class="panel-body">		
						<?php							
							$fecha = '1';
							
							if(isset($_POST["1"])){
								$fecha = $_POST["1"];
							}
							if(isset($_POST["2"])){
								$fecha = $_POST["2"];
							}
							if(isset($_POST["3"])){
								$fecha = $_POST["3"];
							}
							if(isset($_POST["4"])){
								$fecha = $_POST["4"];
							}
							if(isset($_POST["5"])){
								$fecha = $_POST["5"];
							}
							if(isset($_POST["6"])){
								$fecha = $_POST["6"];
							}
							if(isset($_POST["7"])){
								$fecha = $_POST["7"];
							}
							if(isset($_POST["8"])){
								$fecha = $_POST["8"];
							}
							if(isset($_POST["9"])){
								$fecha = $_POST["9"];
							}
							if(isset($_POST["10"])){
								$fecha = $_POST["10"];
							}
							if(isset($_POST["11"])){
								$fecha = $_POST["11"];
							}
							if(isset($_POST["12"])){
								$fecha = $_POST["12"];
							}
							if(isset($_POST["13"])){
								$fecha = $_POST["13"];
							}
							if(isset($_POST["14"])){
								$fecha = $_POST["14"];
							}
							if(isset($_POST["15"])){
								$fecha = $_POST["15"];
							}
							if(isset($_POST["16"])){
								$fecha = $_POST["16"];
							}
							if(isset($_POST["17"])){
								$fecha = $_POST["17"];
							}
							if(isset($_POST["18"])){
								$fecha = $_POST["18"];
							}
							if(isset($_POST["19"])){
								$fecha = $_POST["19"];
							}
										
							$local = listaTodasFechas('id_local', $fecha);
							$visitante = listaTodasFechas('id_visitante', $fecha);
							static $a = 1;
							
							while(isset($local) && $row_l = mysqli_fetch_assoc($local)) {
								if(isset($visitante) && $row_v = mysqli_fetch_assoc($visitante)) {
									echo $row_l["id_equipo_ganador"], $row_l["id_local"], $row_l["id_visitante"];
									if(($row_l["id_equipo_ganador"]) == ($row_l["id_local"])){
										echo "<li class='list-group-item'>
										<span class='badge'>".$row_l['descripcion']."</span>";
									}
									if($row_v["id_equipo_ganador"] == $row_v["id_visitante"]){
										echo "<li class='list-group-item'>
										<span class='badge'>".$row_v['descripcion']."</span>";
									}
									if($row_l["empate"] == 'E'){
										echo "<li class='list-group-item'>
										<span class='badge'>Empate</span>";
									}
									if($row_l["id_equipo_ganador"] == NULL && $row_l["empate"] == NULL){
										echo "<li class='list-group-item'>
										<span class='badge'>Sin apuesta</span>";
									}
									
									echo "  <div class='row'>
												<div class='col-md-2'>". $row_l['descripcion']."</div>
												<div class='col-md-2'> VS </div>
												<div class='col-md-2'>". $row_v['descripcion'] ."</div>
											</div>";									
									$a++;
									echo "</li>";
								}
							}
						?>					
					</div>	
										
			</div>
		</div>
	</body>
</html>