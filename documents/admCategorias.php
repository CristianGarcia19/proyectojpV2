<?php 
  define( "BASE_URL", "/proyectojpV2/documents/");
  /* Llamamos al archivo de conexion.php */
require_once("../config/conexion.php");
if (isset($_SESSION["usu_id"])){
?> 
<!DOCTYPE html>
<script type="text/javascript" src="js/tablas.js"></script>
<html lang="en">
  <head>
    <?php
     
      include ("../views/modulos/head.php");    
    ?>
    <?php
    
  /* Llamamos al archivo de conexion.php */
  require_once("../config/conexion.php");
 
  if(isset($_SESSION["usu_id"])){
    
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."html/404.html");
  }
  
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
          <div class="container-fluid">
          <div class="card">
        <div class="card-header">
          <h3 class="card-title">Categorias</h3>
        </div>

        <div class="card-body">
        <button type="button" class="btn btn-outline-primary mb-2" onClick="nuevo()">Crear Categoria</button>
         <table id="categoria_data" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Categoria</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            
            </tbody>
          </table>
        </div>
      </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
      
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
      require_once("../modelos/categoriaModal.php");
      include ("../views/modulos/js.php");
    ?>
    <script type="text/javascript" src="js/categoria.js"></script>
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  header("Location:".Conectar::ruta()."views/404.php");
}
?>