 <?php  
    session_start();
    $uActivo = $_SESSION['usuario'];
    include '../modelo/conexion.php';  
    $conectar=new conexion();
    

     $_SESSION["ID"];
     $ID=$_SESSION["ID"];
     $fecha = $_POST['campo'];
    
          
        $conectar->consulta("  UPDATE `fecha_realizacion` SET `FECHA_FR` = '$fecha' WHERE `ID_R` ='$ID'");
          
          echo"<script type=\"text/javascript\">alert('La fecha se modifico satisfactoriamente.'); window.location='lista-evaluacion.php';</script>";
 ?> 

                      		