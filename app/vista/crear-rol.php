<?php

session_start();
include '../modelo/conexion.php';
$conectar = new conexion();
//Crear variables--------------------------

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$addRol = $_POST['rol'];



//conexion-------------

	//Peticion
	$peticion = $conectar-> consulta("INSERT INTO `rol` (`ROL_R`) VALUES ('$addRol');");
	//cerrar conexion--------------------------
	
	 //volver a la pagina---------------
	 echo'
	<html>
		<head>
			<meta http-equiv="REFRESH" content="0;url=agregar-roles.php">
		</head>
	</html>';
 
?>