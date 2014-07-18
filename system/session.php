<?php
	session_start();
	
	if(!isset($_SESSION["email"])){
		header("Location:/prode/system/logout.php");
	}
	
	if(!isset($_SESSION["contrasena"])){
		header("Location:/prode/system/logout.php");	
	}	
?>