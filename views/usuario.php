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
     
      include ("modulos/head.php");    
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

    <!-- Main content -->
    <section class="content-header">
      
      <div class="card card-info">
            <div class="card-header">
            
            <h1 class="card-title">ADMINISTRADOR DE USUARIOS</h1>
                
            </div>
      </div>
    
          <div class="card card-info">
          <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" onClick="nuevo()">Crear usuario</button>
        <button type="button" id="botonplantilla" class="btn btn-outline-success mb-3">Subir Excel</button>
         <table id="usuario_data" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Nombre usuario</th>
                <th class="wd-15p">Apellido paterno</th>
                <th class="wd-15p">Apellido materno</th>
                <th class="wd-15p">Correo</th>
                <th class="wd-15p">Contraseña</th>
                <th class="wd-15p">Sexo</th>
                <th class="wd-15p">Telefono</th>            
                <th></th>
                <th></th>
              </tr>
            </thead>
          </table>
        </div>
          </div>
       </section>
    </div>
        <!-- /.content -->
  
      <?php
        include('modulos/footer.php');
      ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    
    <?php
      require_once("../modelos/usuarioModal.php");
      include ("modulos/js.php");
    ?>
    <script type="text/javascript" src="js/usuarios.js"></script>
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