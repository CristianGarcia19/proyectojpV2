<?php
define( "BASE_URL", "/proyectojpV2/views/");
require_once("../config/conexion.php");
if(isset($_SESSION["usu_id"])){ 
} 
?>
<!DOCTYPE html>
<html>

 <head>
  <title>CERTIFICADO</title>

  <style>
  .custom-btn {
    background-color: #3498db; /* Color de fondo del botón PNG */
    color: #fff; /* Color del texto del botón PNG */
    margin-right: 10px; /* Espacio entre los botones */
    border: 1px solid #3498db; /* Borde del botón PNG */
    border-radius: 5px; /* Bordes redondeados */
    padding: 10px 20px; /* Espaciado interior del botón */
    } 

   .custom-btn:hover {
    background-color: #2980b9; /* Color de fondo en hover */
    border: 1px solid #2980b9; /* Borde en el hover */
    }

    /* Estilos para el botón PDF (rojo) */
   #btnpdf {
    background-color: #e74c3c; /* Color de fondo del botón PDF (rojo) */
    border: 1px solid #e74c3c; /* Borde del botón PDF (rojo) */
    color: #fff; /* Color del texto del botón PDF (rojo) */
    }

   #btnpdf:hover {
    background-color: #c0392b; /* Color de fondo en hover para el botón PDF (rojo) */
    border: 1px solid #c0392b; /* Borde en hover para el botón PDF (rojo) */
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
    <section class="content">
        <div class="container">
            <!-- COLOR PALETTE -->
            <div class="card card-default color-palette-box">
                <div  style="text-align: center;" class="card-body">
                    <div class="col-12">
                        <!--
                        <img src="../html/dist/certificado.png" alt="certificado" class="img-fluid" height="650" width="900">
                        -->
                        <canvas id="canvas" height="700" width="1100" class="img-fluid" alt="Responsive image"></canvas>
                        <p class="text-center m-2" id="descripcion"></p>
                    </div>
                </div>
                <div style="text-align: center;" class="card-footer">
                  <button class="btn btn-outline-info custom-btn" id="btnpng"> <i class="fa fa-send mg-r-10"></i> PNG </button>
                  <button class="btn btn-outline-success custom-btn" id="btnpdf"> <i class="fa fa-send mg-r-10"></i> PDF </button>

                </div>
            </div>
        </div>
    </section>
    <?php
    include("modulos/js.php"); // Asegúrate de que el archivo js.php esté en la ubicación correcta.
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script> <!-- Librería que permite crear PDF con JavaScript -->
    <script type="text/javascript" src="js/certificado.js"></script> <!-- Asegúrate de que el archivo certificado.js esté en la ubicación correcta. -->
  </body>

</html>
