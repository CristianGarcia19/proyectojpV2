<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('../views/modulos/head2.php');
    ?>
</head>
<body>

    <!-- header -->
        <?php
            include('../views/modulos/header2.php');
        ?>
    <!--fin header-->

    <!--introduccion-->
    <div class="row px-3 py-5 mx-3 justify-content-center align-items-center">
      <div class="col-md-6 ">
        <h2 class="text-center mb-3">Bienvenido a nuestro Curso de Inglés</h2>
        <p class="mb-4">
          Aprender una segunda lengua es una habilidad vital que puede abrir
          muchas puertas en la vida. Aprende inglés ahora y cambia tu futuro. A
          lo largo del curso, exploraremos temas clave como gramática,
          vocabulario, pronunciación, comprensión auditiva y expresión escrita.
          
          ¡Prepárate para embarcarte en un emocionante viaje hacia la fluidez en
          inglés y el desarrollo de habilidades lingüísticas sólidas que te
          abrirán nuevas oportunidades personales y profesionales!
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img
          src="../html/dist/img/bienvenido.jpg"
          alt="bienvenido"
          class="img-fluid"
        />
      </div>
    </div>

    <div class="row px-3 py-5 mx-0 justify-content-center align-items-center text-white" style="background: #2E3132;">
      <div class="col-md-6 text-center">
        <img
          src="../html/dist/img/razones.jpg"
          alt="bienvenido"
          class="img-fluid w-75"
        />
      </div>
      <div class="col-md-6 my-4">
        <h2 class="text-center mb-3">¿Por qué aprender inglés en Online Academy?</h2>
        <p class="mb-4 pt-4 px-4">
          En OnlineAcademy vas a aprender inglés en línea. Allí encontrarás
          cursos por niveles (básico, intermedio, avanzado). Tendrás acceso a
          contenidos que ayudarán a tu pronunciación, vocabulario y gramática. 
        </p>
      </div>
    </div>
    <!--fin de introduccion-->

    <!-- seccion -->
    <div class="container p-5 mt-5">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img
              src="../html/dist/img/inglesbasico.jpg"
              class="card-img-top img-fluid"
              alt="materialDidactico"
              style="height: 200px;"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Nivel Básico</h5>
              <p class="card-text">
                En esta etapa, como estudiante vas a adquirir las habilidades
                fundamentales que te permitirán comunicarte en situaciones
                cotidianas.
              </p>
              <div class="text-center">
                <a href="inglesb.php" class="btn btn-warning px-5 py-2">Vamos!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img
              src="../html/dist/img/inglesinter.jpg"
              class="card-img-top img-fluid"
              alt="videos"
              style="height: 200px;"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Nivel Intermedio</h5>
              <p class="card-text">
                En este nivel aprenderás sobre: ampliación de vocabulario,
                gramática avanzada, habilidades de conversación, entre otros.
              </p>
              <div class="text-center">
                <a href="#" class="btn btn-warning px-5 py-2">Vamos!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img
              src="../html/dist/img/inglesa.jpg"
              class="card-img-top img-fluid"
              alt="cursosfree"
              style="height: 200px;"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Nivel Avanzado</h5>
              <p class="card-text">
                En este nivel aprenderás sobre: Escritura avanzada, comprensión
                auditiva avanzada, habilidades profesionales, entre otros.
              </p>
              <div class="text-center">
                <a href="#" class="btn btn-warning px-5 py-2">Vamos!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Fin de seccion-->



    <!--footer y js -->
    <?php
        include('../views/modulos/footer2.php');
        include('../views/modulos/js.php');
    ?>
    
</body>
</html>
