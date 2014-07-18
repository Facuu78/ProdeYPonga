<?php

	function listaFecha($id){
		
		$msg_register = '';
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		$fecha = date('Y-m-d');
		
		$conexion = abrirDB();	
		$consulta = "SELECT * 
					FROM `partido` 
					INNER JOIN `equipo` 
							ON `partido`.$id=`equipo`.`id_equipo` 
					INNER JOIN `fecha` 
							ON `partido`.`id_fecha`=`fecha`.`id_fecha` 
					WHERE `fecha_inicio`<='$fecha' AND `fecha_fin`>='$fecha';";
		$resultado = consultarDB($consulta, $conexion);
		cerrarDB($conexion);
			
		return $resultado;		
	}
	
	
	function cargaApuesta($id_partido, $result){
	
		if($result == 'E'){
			$user = $_SESSION['id_usuario'];
					
			$conexion = abrirDB();	
			$consulta = "INSERT INTO `prode`.`apuesta` (`id_apuesta`, `id_usuario`, `id_partido`, `empate`) VALUES ('', '$user', $id_partido, '$result');";
			$resultado = consultarDB($consulta, $conexion);
			cerrarDB($conexion);
		}else{
		
			$user = $_SESSION['id_usuario'];
					
			$conexion = abrirDB();	
			$consulta = "INSERT INTO `prode`.`apuesta` (`id_apuesta`, `id_usuario`, `id_partido`, `id_equipo_ganador`) VALUES ('', '$user', $id_partido, $result);";
			$resultado = consultarDB($consulta, $conexion);
			cerrarDB($conexion);
		}				
	}
	
	
	function listaTodasFechas($id, $id_fecha){
				
		$conexion = abrirDB();	
		$consulta = "SELECT * 
					FROM `partido` 
					INNER JOIN `equipo` 
							ON `partido`.$id=`equipo`.`id_equipo` 
					INNER JOIN `fecha` 
							ON `partido`.`id_fecha`=`fecha`.`id_fecha` 
					LEFT JOIN `apuesta`
							ON `apuesta`.`id_partido` = `partido`.`id_partido`
					WHERE `fecha`.`id_fecha` = $id_fecha;";
					
		$resultado = consultarDB($consulta, $conexion);
		cerrarDB($conexion);
			
		return $resultado;		
	}
	
	

?>