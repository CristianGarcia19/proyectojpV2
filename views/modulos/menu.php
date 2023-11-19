<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../index.php" class="brand-link">
          <img
            src="../html/dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">Uniminuto</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="../HTML/dist/img/avatar.png"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info" style="color: white;">
            <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"] ?>">
            <input type="hidden" id="rol_id" value="<?php echo $_SESSION["rol_id"] ?>">
        <?php echo $_SESSION["nombre"] ." ". $_SESSION["ape_paterno"] ?>

            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="../views/inicio.php" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Inicio
                </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../views/perfil.php" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Perfil
                </p>
                </a>
              </li>

              <?php
                       if ($_SESSION["rol_id"]==1){

                       
                      ?>

              <li class="nav-item">
                <a href="../views/cursos.php" class="nav-link">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>
                    Mis cursos
                </p>
                </a>
              </li>

              <?php
                       }else{

                        
                      ?>

              <li class="nav-item">
                <a href="../views/admCursos.php" class="nav-link">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>
                    cursos
                </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../views/categorias.php" class="nav-link">
                  <i class="nav-icon fas fa-university"></i>
                  <p>
                    Categorias
                </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../views/instructor.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Instructor
                </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../views/usuario.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Usuarios
                </p>
                </a>
              </li>
              
              <?php } 
                      ?>

              <li class="nav-item">
                <a href="../controller/cerrar_sesion.php" class="nav-link">
                  <i class="nav-icon fa fa-unlock"></i>
                  <p>
                    Salir
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>