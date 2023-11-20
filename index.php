<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OnlineAcademy</title>
    <!--Link de la libreria de bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./html/dist/css/style.css" />
  </head>
  <body>
    <!--header-->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-2"
      aria-label="Offcanvas navbar large"
    >
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
          <img src="./html/dist/img/logo.png" alt="logo" class="logo" />
        </a>
       <a href="index.php" class="navbar-brand">OnlineAcademy</a>
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
              <li class="nav-item dropdown mx-2">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Menú
                </a>
                <ul class="dropdown-menu mb-3">
                  <li><a class="dropdown-item" href="../proyectojpV2/views/cursoingles.php">Curso gratis de ingles</a></li>
                  
                  
                </ul>
              </li>
              <div class="d-flex d-inline justify-content-center">
                <li class="nav-item">
                  <a href="../proyectojpV2/views/login.php" class="btn btn-outline-info me-2">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                  <a href="../proyectojpV2/views/registro.php" class="btn btn-warning">Registrarse</a>
                </li>
              </div>
            </ul>
            
          </div>
        </div>
      </div>
    </nav>
    <!--fin de la cabecera-->
    <!---Banner-->
    <div class="banner d-flex justify-content-center align-items-center">
      <div class="container">
        <h2 class="texto text-white">
          "Descubre el conocimiento sin límites a través de nuestros cursos en
          línea: tu camino hacia el aprendizaje empieza aquí."
        </h2>
      </div>
    </div>
    <!--fin del banner-->
    <!--Ventajas de aprender con nosotros-->
    <div class="container">
      <h2 class="text-center mt-5 mb-5">Ventajas de aprender con nosotros</h2>
      <div class="row">
        <div class="col-md-4 mb-3 mb-sm-0 pb-3">
          <div class="card">
            <img
              src="./html/dist/img/1.jpg"
              class="card-img-top"
              alt="materialDidactico"
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Material Didáctico</h5>
              <p class="card-text">
                Nuestros cursos incluyen guias, elementos graficos y videos
                explicativos que te ayudaran a comprender mejor los temas.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-3">
          <div class="card">
            <img
              src="./html/dist/img/2.png"
              class="card-img-top"
              alt="videos"
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Videos explicativos</h5>
              <p class="card-text">
                Podras encontrar videos explicativos sobre algun tema que estes
                viendo para que no solo te quedes con las lecturas.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-3">
          <div class="card">
            <img
              src="./html/dist/img/3.png"
              class="card-img-top"
              alt="cursosfree"
              style="height: 200px"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Cursos gratis</h5>
              <p class="card-text">
                En nuestra pagina no solo encontraras cursos de pago, tenemos
                cursos totalmente gratuitos en los cuales puedes inscribirte.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--carousel-->
    <div class="container mt-5 w-75">
      <div id="carouselExampleCaptions" class="carousel slide w-100 h-25">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./html/dist/img/4.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Ingresa a este curso gratuito de ingles</h5>
              
              <a href="../proyectojpV2/views/cursoingles.php" class="btn btn-warning">Ver más</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./html/dist/img/5.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Entra en el mundo de la programación con este curso</h5>
              <button class="btn btn-warning">Ver más</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./html/dist/img/6.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5>Las bases para que domines excel estan aqui</h5>
              <button class="btn btn-warning">Ver más</button>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!--Footer-->
    <div
      class="footer d-flex justify-content-center align-items-center p-4 mt-5 "
    >
      <div class="row">
        <div class="col">
        <a href="#"
          ><img
            src="./html/dist/img/twitter.png"
            alt="twitter"
            class="twitter m-2"
        /></a>
        <a href="#"
          ><img
            src="./html/dist/img/facebook.png"
            alt="facebook"
            class="facebook m-2"
        /></a>
        <a href="#"
          ><img
            src="./html/dist/img/instagram.png"
            alt="instagram"
            class="instagram m-2"
        /></a>
      </div>
      <div class="col d-flex justify-content-center align-items-center">
        <p class="text-white m-0">Copyright &copy; 2023</p>
      </div>
      <div class="col d-flex justify-content-center align-items-center">
        <p class="text-white m-0">Hecho por: Laura Rico y Cristian Garcia</p>
      </div>
      </div>
    </div>
    <!--fin footer-->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
