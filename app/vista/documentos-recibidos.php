 <?php  
 include '../modelo/conexion.php';
 session_start();
 $uActivo = $_SESSION['usuario'];
 $con=new conexion();
 ?> 
  <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Apoyo a la Empresa TIS</title>

    <!-- JQuery -->
    <script type="text/javascript" src="../../lib/lib/jquery-2.1.0.min.js"></script>
    <!-- icheck -->
    <link href="../../lib/icheck/skins/square/green.css" rel="stylesheet">
    <script src="../../lib/lib/icheck.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="../../lib/lib/bootstrap.js"></script>
    <!-- Docs -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/docs.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="../../lib/font-awesome/css/font-awesome.css">
    <!-- Bootstrap-datetimepicker -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/bootstrap-datetimepicker.css">
    <script type="text/javascript" src="../../lib/lib/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../../lib/lib/bootstrap-datetimepicker.es.js"></script>
    <!-- Bootstrap-multiselect -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/bootstrap-multiselect.css">
    <script type="text/javascript" src="../../lib/lib/bootstrap-multiselect.js"></script>
    <!-- Bootstrap-validator -->
    <link rel="stylesheet" type="text/css" href="../../lib/lib/css/bootstrapValidator.css">
    <script type="text/javascript" src="../../lib/lib/bootstrapValidator.js"></script>
    <!-- Validators -->
    <script type="text/javascript" src="../../lib/lib/validator/diferenteActividadPlanificacion.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/diferenteEntregable.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/stringLength.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/notEmpty.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/callback.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/date.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/numeric.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/porcentajeMax.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/porcentajeMin.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/integerN.js"></script>
    <script type="text/javascript" src="../../lib/lib/validator/porcentajeAc.js"></script>
    <!-- JS -->
    <script type="text/javascript" src="../../lib/lib/funcion.js"></script>
    <script type="text/javascript" src="../../lib/lib/funcionSeguimiento.js"></script>





    <link href="../../lib/css/plugins/timeline/timeline.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
      <link href="../../lib/css/sb-admin.css" rel="stylesheet">
    <link href="../../css/estilos-vista/style.css" rel="stylesheet" type="text/css" />


</head>

<body>

   
<div id="wrapper">
     <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicio-asesor.php">Inicio </a>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="ayuda-asesor.php">Ayuda </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="lista-de-noticias.php"><i class="glyphicon glyphicon-comment"></i> Foro</a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $uActivo.' '; ?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li>
                        <a href="modificar-asesor.php"><i class="fa fa-user fa-fw"></i> Modificar Datos personales</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="unlog.php"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
                    </li>
                </ul>
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default navbar-static-side" role="navigation" onclick="$('.seleccionado-color').css('color', ''); $('.seleccionado').css('background-color', '');">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="administrar-grupo-empresa.php"><i class="glyphicon glyphicon-book"></i> Administrar Grupo Empresas</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-files-o "></i> Documentos <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
                            <li>
                                <a href="../vista/documentos-generados.php">Contratos Emitidos</a>
                            </li>
                            <li>
                                <a href="lista-doc-subidos.php">Documentos Subidos </a>  
                            </li>
                            <li class="seleccionado" style="background-color:#eee">
                                <a class="seleccionado-color" style="color:#084B8A" href="documentos-recibidos.php">Documentos Recibidos</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-tasks fa-fw"></i> Tareas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inscripcion-proyecto.php">Registrar Proyecto</a>
                            </li>
                            <li>
                                <a href="../vista/subir-archivo-asesor.php">Subir Documentos</a>
                            </li>
                            <li>
                                <a href="../vista/registrar-documentos-requeridos.php">Registrar Documentos Requeridos</a>
                            </li>
                            
                            <li>
                                <a href="configuracion-fechas-recepcion.php" >Configurar Fechas para la Recepci&oacute;n de Documentos</a>
                            </li>
                            <li>
                                <a href="../vista/publicar-asesor.php">Crear Publicaci&oacute;n </a>
                            </li>
                            <li>
                                <a href="orden-de-cambio.php">Emitir Orden de Cambio</a>
                            </li>
                            <li>
                                <a href="notificacion-conformidad.php">Emitir Notificaci&oacute;n de Conformidad</a>
                            </li>
                            <li>
                                <a href="contrato.php">Emitir Contrato </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a id="SeguimientoSemanal" href="#"><i class="glyphicon glyphicon-list-alt"></i> Seguimiento Semanal</a>
                    </li>

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-th-list"></i> Evaluacion<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="lista-evaluacion.php">Evaluacion 2 Fase </a>                             
                            </li>
                            <li>
                                <a href="#">Evaluacion 3 Fase <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="crear-modalidad-evaluacion.php">Criterio de Evaluaci&oacute;n </a>                             
                                    </li>

                                    <li>
                                        <a href="#">Criterio de Calificaci&oacute;n<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="crear-modalidad-calificacion.php"> Crear Criterio de Calificaci&oacute;n</a>
                                            </li>
                                            <li>
                                                <a href="eliminar-criterio-calificacion.php"> Eliminar Criterio de Calificaci&oacute;n</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Formulario de Evaluacion<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="crear-formulario.php">Crear Formulario de Evaluacion</a>
                                            </li>
                                            <li>
                                                <a href="seleccionar-formulario.php"> Habilitar Formulario de Evaluacion </a>   
                                            </li>
                                            <li>
                                                <a href="eliminar-formulario.php">Eliminar Formulario de Evaluacion</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="evaluar-grupo-empresa.php">Evaluar Grupo Empresa </a>   
                                    </li>                                    
                                    
                                </ul>    
                            </li>
                            <li>
                                <a href="../vista/evaluacion-general.php">Evaluacion Final </a>   
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../vista/publicaciones.php"><i class="fa fa-book"></i> Publicaciones </a>
                    </li>
                </ul><!-- /#side-menu -->
            </div><!-- /.sidebar-collapse -->
        </div>
    </nav>
       
  

        <div class="modal fade modalRegistroAsistencia" role="dialog" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Asistencia</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade modalRegistroReportes" role="dialog" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Reportes</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modalSeguimiento" role="dialog" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Ver Seguimientos</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Recepci&oacute;n de Propuestas </h2>
                    <div class="col-lg-6" >
                        
                            <div class="form-group">
                                Grupo Empresa:
                                <form method="POST" action="archivo-recibido.php" enctype="Multipart/form-data">
                                    <select name="grupoempresa" class="form-control">
                                        <option>Seleccione una grupo empresa</option>
                                            <?php
                                            $idAsesor= $_SESSION['usuario']  ;
                                            $estado = "Habilitado";
                                            $c1="SELECT ge.`NOMBRE_LARGO_GE` FROM `inscripcion` AS i,`asesor` AS a,`grupo_empresa` AS `ge` WHERE i.`NOMBRE_UA` = a.`NOMBRE_U` AND i.`NOMBRE_UGE` = ge.`NOMBRE_U` AND a.`NOMBRE_U` LIKE '$idAsesor' AND i.`ESTADO_INSCRIPCION` LIKE '$estado'";
                                            $a1=$con->consulta($c1);

                                            while($grupoE =  mysql_fetch_array($a1)){
                                                echo "<option>".$grupoE[0]."</option>";
                                            }
                                            echo "<input type='hidden' name='idAsesor' value='$idAsesor'>";           
                                            ?>
                                    </select>
                                    <br>
                                    <input type="submit" class="btn btn-primary" name="Enviar" value="Entrar" class="btn-primary">
                                </form>
                            </div>
                        
                    </div>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /#page-wrapper -->

    </div>

    <script src="../../lib/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../lib/js/sb-admin.js"></script>
</body>

</html>
