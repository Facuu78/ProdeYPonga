<?php

	function login($usuario, $contrasena){
	
		$consulta = "SELECT * FROM usuario WHERE email = '" . $usuario . "' AND contrasena = '" . $contrasena . "'";
		$resultado = consultarDB($consulta);
				
		if (!isset($resultado)){
			die('Consulta no válida: ' . mysql_error());
			
			return false;
		}else{
				while($row = mysqli_fetch_assoc($resultado)) {
				
				if($row["email"] == $usuario && $row["contrasena"] == $contrasena){
					session_unset();
					session_destroy();				
					session_start();
				
					$_SESSION["id_usuario"] = $row["id_usuario"];
					$_SESSION["email"] = $row["email"];
					$_SESSION["contrasena"] = $row["contrasena"];
					$_SESSION["id_tipo_usuario"] = $row["id_tipo_usuario"];
					$_SESSION["abonado"] = $row["abonado"];
													
				}
			}
		return true;
		}				
	}

	function crearUsuario($email, $contrasena, $nombre, $apellido, $telefono){
		$msg_register = '';

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$msg_register = "<div class='alert alert-danger'>Los datos ingresados son inválidos</div>";
		}else{
			$conexion = abrirDB();	
			$consulta = "INSERT INTO `prode`.`usuario` (`email`, `contrasena`, `nombre`, `apellido`, `telefono`, `estado` , `id_tipo`) VALUES ('$email', '$contrasena', '$nombre', '$apellido', '$telefono', 0, 2);";
			$resultado = consultarDB($consulta, $conexion);
			cerrarDB($conexion);
			
			if(isset($resultado)){
				header("Location:/prode/index.php");
				$msg_register = "<script languaje='javascript'>alert('Gracias por registrarte!')</script>";
			}else{
				$msg_register = "<div class='alert alert-danger'>Ocurrió un error, intenta más tarde.</div>";
			}
		}
		
		return $msg_register;
	}

?>