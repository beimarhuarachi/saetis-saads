<?php
include '../modelo/conexion.php';
$conectar = new conexion();
session_start();

//Crear variables--------------------------

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$addini = $_POST['ini'];
$addfin = $_POST['fin'];
$addRol = $_POST['rol'];

    $seleccion = $conectar->consulta("SELECT NOM_G FROM gestion WHERE NOM_G = '$addRol'");
    $verificarG = mysql_fetch_row($seleccion);

    if (!is_array($verificarG)) 
    {            
        $seleccion = $conectar->consulta("SELECT NOM_G FROM gestion WHERE FECHA_INICIO_G = '$addini' and FECHA_FIN_G = '$addfin'");
        $verificarD = mysql_fetch_row($seleccion);
        if(!is_array($verificarD))
        {
            $peticion = $conectar->consulta("INSERT INTO `gestion` (`ID_G`, `NOM_G`, `FECHA_INICIO_G`, `FECHA_FIN_G`) VALUES (NULL, '$addRol', '$addini', '$addfin')");    
            echo"<script type=\"text/javascript\">alert('La gestion fue registrada satisfactoriamente'); window.location='agregar-gestion.php';</script>";    
        }
        else
        {
            echo"<script type=\"text/javascript\">alert('El rango de fechas esta siendo utilizado en otra gestion'); window.location='agregar-gestion.php';</script>";    
        }
    }
    else
    {
        echo"<script type=\"text/javascript\">alert('Ya existe una gestion registrada con el mismo nombre'); window.location='agregar-gestion.php';</script>";
    }
?>