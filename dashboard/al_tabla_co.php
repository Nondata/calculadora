<?php 

    require_once "vistas/parte_superior.php";
    include("al_formulario_co.php"); // CAMBIO programa de la forma

?>

<!--INICIO del cont principal-->
<div class="container">
    <!--
    <h1>Página de buttons</h1>
    -->



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./media/alert/dist/sweetalert2.css">


  <!-- Custom fonts for this template-->

    <div class="container">
        <h1 style="text-align: rigth;">Tabla de Condiciones <!-- CAMBIO Se cambia el titulo de la tabla -->
        <br>
          <button type="button" class="btn btn-primary pull-right menu" data-toggle="modal" data-target="#myModals"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nueva Condicion</button> <!-- CAMBIO Se cambia el boton de altas -->
        </h1>
    </div>


    <div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12"> <!--REVISAR--> 
        <div class="col-sm-offset-2 col-sm-8">
          <h3 class="text-center">
            <small class="mensaje"></small>
          </h3>
        </div>

        <div class="container" >
          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
              <table id="dt_productos" class="table table-striped table-bordered table-condensed">
                <thead class="text-center">
                  <tr>
                    <!-- CAMBIO Se cambian las columnas segun las columnas a mostrar -->
                    <th>Id </th>
                    <th>Alumno </th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Cual</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
            </table>
              </div>
            </div>
          </div>
        </div>
    </div>



    <script src="./media/js/jquery-1.12.3.js"></script>
    <script src="./media/alert/dist/sweetalert2.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>

  
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
  
    <script language="javascript" src="al_tabla_co.js"></script>

  

</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>