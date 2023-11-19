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

  $query=mysqli_query($mysqli,"SELECT id, nombre FROM categoria");

  $query2=mysqli_query($mysqli,"SELECT inst_id, nombrei FROM instructor");

  
  if(isset($_POST['id_categoria'])){
    $id_categoria = $_POST['id_categoria'];
    echo $id_categoria;
  }

  if(isset($_POST['profesor'])){
    $profesor = $_POST['profesor'];
    echo $profesor;
  }
?>
  </head>

      <!-- /.modal -->      
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
            <h1 class="card-title">ADMINISTRADOR DE CURSOS</h1>
            </div>
      </div>
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="card card-info">
        <div class="card-body">
          <button type="button" class="btn btn-primary mb-3" onClick="nuevo()">Crear Cursos</button>
          <button type="button" id="botonplantilla" class="btn btn-outline-success mb-3">Subir Excel</button>
          <table id="curso_data" class="table display responsive nowrap">
            <thead>
              <tr>
                <th>Categoria</th>
                <th>Nombre</th>
                <th>Fecha inicio</th>
                <th>Fecha final</th>
                <th>Docentes</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
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
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php
      require_once("../modelos/admCursoModal.php");
      include('modulos/js.php');
      
    ?>
    <script type="text/javascript" src="js/admCursos.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
    
    
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  header("Location:".Conectar::ruta()."views/404.php");
}
?>