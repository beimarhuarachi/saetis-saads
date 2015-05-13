 <?php  
  session_start();
  $uActivo = $_SESSION['usuario'];
  include '../modelo/conexion.php';
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

        <div class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="administrar-grupo-empresa.php"><i class="glyphicon glyphicon-book"></i> Administrar Grupo Empresas</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-files-o "></i> Documentos <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../vista/documentos-generados.php">Contratos Emitidos</a>
                            </li>
                            <li>
                                <a href="lista-doc-subidos.php">Documentos Subidos </a>  
                            </li>
                            <li>
                                <a href="documentos-recibidos.php">Documentos Recibidos</a>
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
        <div class ="form-horizontal">
                <div class="row">
                    <div class="col-lg-12">
                    </br></br>
                    <h2>Publicaciones</h2>     
                        <form id = "publicar" method = "POST" action="" onsubmit = "return validarCampos(this);">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <fieldset class="campos-border">
                                        <legend class="campos-border">Documentos</legend>
                                        <table class="table form-group">      
                                            <thead>
                                                    <tr>
                                                      <th># ID </th>
                                             
                                                      <th>Nombre</th>
                                                      <th>Descripcion</th>
                                                      <th>Accion</th>   
                                                    </tr>
                                            </thead>
                                            <tbody>                                                    
                                            <?php 
                                           
                                            $indice = 1;

                                            $Sel_Desc = $con->consulta("SELECT d.RUTA_D,r.NOMBRE_R, ds.DESCRIPCION_D 
                                                    FROM documento as d, registro as r,descripcion as ds 
                                                    WHERE r.NOMBRE_U = '$uActivo' AND r.TIPO_T = 'publicaciones' AND r.ID_R=ds.ID_R AND d.ID_R = r.ID_R"); 

                                            while ($Desc = mysql_fetch_row($Sel_Desc)) {

                                                if(!empty($Desc[0]))
                                                {
                                                   
                                                echo   '<tr>
                                                            <td>'.$indice.'</td>
                                                            
                                                            <td>
                                                                <a class="link-dos" target="_blank" href='.$Desc[0].' onclick="">'.$Desc[1].'<span class="instancename">    
                                                                <span class="accesshide "></span></a>
                                                            </td>

                                                            <td>'.$Desc[2].'</td>
                                                            <td><a class="link-dos" href="../vista/eliminar-publicacion.php?id_us='.$Desc[1].'">Eliminar</a></td>
                                                        </tr>';
                                                    }

                                                $indice++;
                                            }



                                            ?>
                                            </tbody>
                                        </table>
                                    </fieldset>
                             

                                </div>
                                <div class="panel-footer">
                                    <a href="../vista/publicar-asesor.php" class="link" ><i class="fa fa-plus "></i> Agregar recurso<span class="fa arrow"></span></a>
                                </div>
                            </div>
                        </form>

                         <form id = "publicar" method = "POST" action="" onsubmit = "return validarCampos(this);">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <fieldset class="campos-border">
                                        <legend class="campos-border">Anuncios</legend>
                                        <table class="table form-group">      
                                            <thead>
                                                    <tr>
                                                      <th># ID </th>
                                             
                                                      <th>Nombre</th>
                                                      <th>Descripcion</th>
                                                      <th>Accion</th>   
                                                    </tr>
                                            </thead>
                                            <tbody>                                                    
                                            <?php 
                                           
                                            $indiceA = 1;

                                            $Sel_Desc = $con->consulta("SELECT d.RUTA_D,r.NOMBRE_R, ds.DESCRIPCION_D 
                                                    FROM documento as d, registro as r,descripcion as ds 
                                                    WHERE r.NOMBRE_U = '$uActivo' AND r.TIPO_T = 'publicaciones' AND r.ID_R=ds.ID_R AND d.ID_R = r.ID_R"); 

                                            while ($Desc = mysql_fetch_row($Sel_Desc)) {

                                                if(empty($Desc[0]))
                                                {
                                                     echo   '<tr>
                                                            <td>'.$indiceA.'</td>
                                                            
                                                            <td>'.$Desc[1].
                                                            '</td>
                                                            <td>'.$Desc[2].'</td>
                                                            <td><a class="link-dos" href="../vista/eliminar-publicacion.php?id_us='.$Desc[1].'">Eliminar</a></td>
                                                        </tr>';
                                                        $indiceA++;
                                               
                                                }

                                                
                                            }



                                            ?>
                                            </tbody>
                                        </table>
                                    </fieldset>
                             

                                </div>
                                <div class="panel-footer">
                                    <a href="../vista/publicar-asesor.php" class="link" ><i class="fa fa-plus "></i> Agregar recurso<span class="fa arrow"></span></a>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.col-lg-12 -->
                </div>
        </div>
    </div><!-- /#page-wrapper -->
</div>

    <script src="../../lib/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../lib/js/sb-admin.js"></script>
</body>

</html>
