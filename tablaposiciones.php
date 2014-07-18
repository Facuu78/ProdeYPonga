<?php	
	require("system/session.php");
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
							<li><a href="otrasfechas.php">Ver todas las fechas</a></li>
							<li class="active"><a href="tablaposiciones.php">Ver tabla de posiciones</a></li>
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
			<div class="bs-example">
				<div class="panel panel-primary">
					<div class="panel-heading">Tabla de posiciones</div>
					<!-- Table -->
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Posición</th>
								<th>Fecha 1</th>
								<th>Fecha 2</th>
								<th>Fecha 3</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>