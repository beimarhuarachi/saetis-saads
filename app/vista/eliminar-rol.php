<?php
    include '../modelo/conexion.php';
    $conectar = new conexion();
    session_start();


$usuario= $_SESSION['usuario'];
$contrasena= $_SESSION['contrasena'];

$delRol = $_GET['id_us'];

//Peticion
$peticion = $conectar->consulta("DELETE FROM rol WHERE ROL_R='".$delRol."'");
//cerrar conexion--------------------------

 //volver a la pagina---------------
         echo '<script>alert("Se elimino satisfactoriamente");</script>';
         echo '<script>window.location="../vista/agregar-roles.php";</script>';
?>