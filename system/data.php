<?php 

	function abrirDB(){
		
		$conexion = mysqli_connect("mysql.hostinger.com.ar","u930875527_prode","prodeyponga1990","u930875527_prode") or die("Error " . mysqli_error($link));
		return $conexion;	
	}

	function cerrarDB($conexion){
		if(isset($conexion)){
			mysqli_close($conexion);
		}
	}

	function consultarDB($consulta){		
		$conexion = abrirDB();	
		$resultado = mysqli_query($conexion, $consulta);
		cerrarDB($conexion);
		return $resultado;
	}

?>