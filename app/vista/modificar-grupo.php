<?php
    include '../modelo/conexion.php';
    session_start();
	
	/**
	* Incluicion de la clase encriptadora
	*/
	require_once '../modelo/nucleo/encriptador.php';
	
	//Instanciamos el encriptador
	$encriptador = new Encriptador();
    $conexion = new conexion();
    $nombreUGE = $_SESSION['usuario'];
    
    $correo = $_POST['correo'];
    $telef = $_POST['telefono'];
    $direc = $_POST['direccion'];
    $contrasena = $encriptador->encriptar($_POST['contrasena1']);

    $conexion->consulta(" UPDATE usuario SET PASSWORD_U='$contrasena', TELEFONO_U='$telef', CORREO_ELECTRONICO_U='$correo' WHERE NOMBRE_U = '$nombreUGE'");
    $conexion->consulta(" UPDATE grupo_empresa SET DIRECCION_GE='$direc' WHERE NOMBRE_U = '$nombreUGE'");
                      
    echo"<script type=\"text/javascript\">alert('Se modificaron los datos satisfactoriamente'); window.location='modificar-grupo-empresa.php';</script>";
         
?>