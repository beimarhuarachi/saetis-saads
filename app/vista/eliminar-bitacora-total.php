<?php
    include '../modelo/conexion.php';
    $conectar = new conexion();
    session_start();


$usuario= $_SESSION['usuario'];
$contrasena= $_SESSION['contrasena'];

$delActiv = 0;

//Peticion
$peticion = $conectar->consulta("DELETE FROM `sesion` WHERE 1");
//cerrar conexion--------------------------

 //volver a la pagina---------------
         echo '<script>alert("Se elimino satisfactoriamente");</script>';
         echo '<script>window.location="../vista/bitacora-ingreso.php";</script>';
?>

