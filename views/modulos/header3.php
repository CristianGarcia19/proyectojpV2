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
                <a class="nav-link text-white" href="../views/cursoingles.php">Niveles</a>          
                <a class="nav-link text-white" href="../views/inglesb.php">Lecciones</a>
            </ul>
          </div>
        </div>
      </div>
    </nav>