<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('../views/modulos/head2.php');
    ?>
</head>
<body>

    <!-- header -->
    <nav
      class="navbar navbar-expand-lg navbar-dark px-5 py-2"
      aria-label="Offcanvas navbar large"
    >
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
          <img src="../HTML/dist/img/logo.png" alt="logo" class="logo" />
        </a>
       <a href="../index.php" class="navbar-brand">Online Academy</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar2"
          aria-controls="offcanvasNavbar2"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end text-bg-dark"
          tabindex="-1"
          id="offcanvasNavbar2"
          aria-labelledby="offcanvasNavbar2Label"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbar2Label">
              OnlineAcademy
            </h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">            
                <a class="nav-link text-white" href="../views/cursoingles.php">Inicio</a>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!--Fin header-->

    <!-- nivel basico -->
    <div class="row px-3 py-5 mx-3 justify-content-center align-items-center">
      <div class="col-md-6">
        <h2 class="text-center mb-3">Nivel Básico</h2>
        <p class="mb-4">
          Conoce las bases para empezar a hablar inglés y aprende vocabulario
          esencial que te ayudará a comprender conversaciones cortas, construir
          frases simples y comunicarte en situaciones diarias. Haz que tus
          primeras interacciones en inglés sean claras y significativas.
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img
          src="../HTML/dist/img/basico.jpg"
          alt="bienvenido"
          class="img-fluid"
        />
      </div>
    </div>
    <!-- fin de nivel basico -->

    <!-- seccion -->
    <div class=" row mx-auto py-5 px-5" style="background: #2e3132">
        <h2 class="text-center pb-4 text-white">¿Por donde deseas empezar?</h2>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img
                src="../HTML/dist/img/preguntas.jpg"
                class="card-img-top img-fluid"
                alt="materialDidactico"
                style="height: 200px"
                />
                <div class="card-body">
                    <h5 class="card-title text-center">Questions and Answers</h5>
                    <p class="card-text">
                        Vas a aprender y mejorar varias habilidades como: Vocabulario,
                        gramática, comprensión auditiva y desarrollo de habilidades.
                    </p>
                    <div class="text-center">
                        <a href="pregunta_respu.php" class="btn btn-warning px-5 py-2"
                        >Comenzar</a
                        >
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="card">
                <img
                src="../HTML/dist/img/cuerpo.jpg"
                class="card-img-top img-fluid"
                alt="videos"
                style="height: 200px"
                />
                <div class="card-body">
                <h5 class="card-title text-center">Partes del cuerpo</h5>
                <p class="card-text">
                    Aprenderás las partes del cuerpo en inglés, esto te permitirá
                    comunicarte sobre dolencias o problemas de salud, en caso de estar
                    en un entorno de habla inglesa.
                </p>
                <div class="text-center">
                    <a href="partescuerpo.php" class="btn btn-warning px-5 py-2">Comenzar</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="card">
                <img
                src="../HTML/dist/img/familia.png"
                class="card-img-top img-fluid"
                alt="cursosfree"
                style="height: 200px"
                />
                <div class="card-body">
                <h5 class="card-title text-center">Miembros de la familia</h5>
                <p class="card-text">
                    Aprenderás las palabras y frases relacionadas con los diferentes
                miembros de una familia. Estas lecciones son esenciales para
                adquirir un vocabulario básico en inglés.
                </p>
                <div class="text-center">
                    <a href="familia.php" class="btn btn-warning px-5 py-2">Comenzar</a>
                </div>
                </div>
            </div>
            </div>
    </div>
    <!--Fin de seccion-->


    <!--footer y js-->
    <?php
        include('../views/modulos/footer2.php');
        include('../views/modulos/js.php');
    ?>
    


</body>
</html>
