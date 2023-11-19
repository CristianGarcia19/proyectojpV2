<?php
define( "BASE_URL", "/proyectojpV2/views/");
/* Llamamos al archivo de conexion.php */
require_once("../config/conexion.php");
if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include ("../views/modulos/head.php"); 
         
    ?>
  
  <style>
  .centrar-parrado {
    text-align: center; /* Establece el texto en el centro */
  }

  </style>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php
  include("modulos/header.php");
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include("modulos/menu.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="card card-info">
            <div class="card-header">
            <h1 class="card-title">INICIO</h1>
               
            </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 class="centrar-parrado" id="datotal"> </h3>
                <p class="centrar-parrado">TOTAL CURSOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="cursos.php" class="small-box-footer">Mas informacion. <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 class="centrar-parrado" id="total_usuario"><sup style="font-size: 20px"></sup></h3>
                <p class="centrar-parrado">TOTAL USUARIOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="usuario.php" class="small-box-footer">Mas informacion. <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 class="centrar-parrado" id="total_instructor"></h3>
                <p class="centrar-parrado">TOTAL PROFESORES</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="instructor.php" class="small-box-footer">Mas informacion. <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Asegúrate de incluir jQuery -->
    <script type="text/javascript">
      google.charts.load("current", { packages: ["corechart"] });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        // Define una función para actualizar la gráfica con datos dinámicos
        function updatePieChart(curso, usuario, instructor) {
            var data = google.visualization.arrayToDataTable([
                ['INFO', 'TOTAL:'],
                ['CURSO', curso],
                ['USUARIO', usuario],
                ['INSTRUCTOR', instructor]
            ]);

            var options = {
                title: 'PAGINA PRINCIPAL',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }

        // Hacer tres solicitudes AJAX para obtener los totales de cada categoría

        $.post("/ProyectoJDVA/controller/usuario.php?opc=total", { usu_id: usu_id }, function (data) {
            data = JSON.parse(data);
            var cursoTotal = data.total;

            $.post("/ProyectoJDVA/controller/usuario.php?opc=total_usuario", { usu_id: usu_id }, function (data) {
                data = JSON.parse(data);
                var usuarioTotal = data.total_usuario;
            
                $.post("/ProyectoJDVA/controller/usuario.php?opc=total_instructor", { usu_id: usu_id }, function (data) {
                    data = JSON.parse(data);
                    var instructorTotal = data.total_instructor;

                    // Luego de obtener los totales de todas las categorías, actualiza la gráfica
                    updatePieChart(cursoTotal, usuarioTotal, instructorTotal);
                });
            });
        });
      }
    </script>
    <div id="piechart_3d" style="width: 99%; height: 500px;"></div> <!-- Ajusta el tamaño según tus necesidades -->
      <!-- /.card -->

    </section>

  
  <section>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="grafica" style="width: 99%; height: 500px;"></div>
  
  <script>
  // En tu archivo JavaScript
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGrafica);

function dibujarGrafica() {
    $.post("/ProyectoJDVA/controller/usuario.php?opc=estudiantes_por_curso", function(data) {
        var jsonData = JSON.parse(data);

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Curso');
        data.addColumn('number', 'Cantidad de Estudiantes');

        jsonData.forEach(function(item) {
            data.addRow([item.curso, parseInt(item.cantidad_estudiantes)]);
        });

        var options = {
            title: 'Estudiantes por Curso',
            pieHole: 0.4
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafica'));

        chart.draw(data, options);
    });
}
</script>
</section>

<section>
    <!-- Incluye la biblioteca de Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="graficaPastel" style="width: 99%; height: 500px;"></div>
</section>

<script>
    $(document).ready(function(){
        $.post("/ProyectoJDVA/controller/usuario.php?opc=grafica_sexo", {usu_id : usu_id}, function(data){ 
            data = JSON.parse(data);
            crearGraficaPastel(data.hombres, data.mujeres);
        });
    });

    function crearGraficaPastel(hombres, mujeres) { 
        // Carga la biblioteca de Google Charts
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Género', 'Cantidad'],
                ['Hombres', hombres],
                ['Mujeres', mujeres]
            ]);

            var options = {
                title: 'Cantidad de H y M dentro de la institución educativa.',
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('graficaPastel'));
            chart.draw(data, options);
        }
    }
</script>





    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <?php
  include("modulos/footer.php");
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
    <script type="text/javascript" src="js/inicio.js"></script>
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  header("Location:".Conectar::ruta()."views/404.php");
}
?>