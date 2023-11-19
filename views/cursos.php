<?php 
define( "BASE_URL", "/proyectojpV2/views/");
/* Llamamos al archivo de conexion.php */
require_once("../config/conexion.php");
if (isset($_SESSION["usu_id"])){
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
     
      include ("../views/modulos/head.php");    
    ?>
    
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <?php
        include('modulos/header.php');
      ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php
        include('modulos/menu.php');
      ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
      <div class="card card-info">
            <div class="card-header">
            <h1 class="card-title">CERTIFICADO</h1>
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="inicio.php">INICIO</a></li>
                  <li class="breadcrumb-item active"><a href="usuario.php">Procesos</a></li>
                </ol>
            </div>
      </div>
    </section>

        <!-- Main content -->
        <div class="card">
        
        <div class="card-body">
         <table id="cursos_data" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Curso</th>
                <th class="wd-15p">Fecha Inicial</th>
                <th class="wd-20p">Fecha Final</th>
                <th class="wd-15p">Profesor</th>
                <th class="wd-10p"></th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      

      <?php
        include('modulos/footer.php');
      ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php
      include('modulos/js.php');
    ?>
    <script type="text/javascript" src="js/tablas.js"></script>
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  header("Location:".Conectar::ruta()."views/404.php");
}
?>