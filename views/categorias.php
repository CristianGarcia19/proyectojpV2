<?php
define( "BASE_URL", "/proyectojpV2/views/");
require_once("../config/conexion.php");
if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include("modulos/head.php");
  ?>
  <title>Admin Categorias</title>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Header -->
  <?php
    include("modulos/header.php");
  ?>
  <!-- /.Header -->

  <!-- Menú -->
  <?php
    include("modulos/menu.php");
  ?>
  <!-- /.Menú -->

  <div class="content-wrapper">

    <section class="content-header">
      <div class="card card-info">
            <div class="card-header">
            <h1 class="card-title">ADMINISTRADOR DE CATEGORIAS</h1>
            </div>
      </div>
    </section>

    <section class="content">
      
      <div class="container-fluid">
        <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" onClick="nuevo()">Crear Categoría</button>
            <button type="button" id="botonplantilla" class="btn btn-outline-success mb-3">Subir Excel</button>
                <table id="categoria_data" class="table display responsive nowrap">
                    <thead>
                        <th class="wp-10">Categoria</th>
                        <th class="wp-10"></th>
                        <th class="wp-10"></th>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>
  
  </div>
  
  <?php
    include("modulos/footer.php");
  ?>
  <?php require_once("../modelos/categoriaModal.php"); ?>
   </div>
   <!-- /.Site warapper -->
  <?php
   include("modulos/js.php");
  
  ?>
    <script type="text/javascript" src="js/categoria.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
</body>
</html>
<?php
}else{
  header("Location:".Conectar::ruta()."views/404.php");
}
?>