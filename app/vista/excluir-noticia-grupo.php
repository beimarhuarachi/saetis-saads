<?php
include '../modelo/conexion.php';
$conect = new conexion();
$noticia = $_GET['id'];



$delComen = $conect->consulta("DELETE FROM comentarios WHERE   ID_N= '$noticia'");
$delNoti = $conect->consulta("DELETE FROM noticias WHERE   ID_N= '$noticia'");

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">

alert ("Tema eliminado con satisfactoriamente.")

</SCRIPT>
<script>
  location.href="lista-de-noticias-grupo.php";
</script>