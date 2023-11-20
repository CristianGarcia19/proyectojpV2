
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  /*TODO: Llamando Cadena de Conexion */
  require_once("../config/conexion.php");
  include("modulos/head.php");
?>
  </head>
  <body class="hold-transition login-page">
      <div class="login-box w-50">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="html/index2.html" class="h1"><b>Formulario de registro</b></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Crear una cuenta</p>

          <form method="POST" id="usuario_form">
                <input type="hidden" name="usu_id" id="usu_id">
                <div class="row mb-3 mx-2 my-1">
                    <label for="nombre" class="col-sm-3 col-form-label">Nombre:</label> 
                    <div class="col">                                
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_paternoi" class="col-sm-3 col-form-label">Apellido paterno:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_paterno" id="ape_paterno" placeholder="Ingrese el apellido paterno del usuario">
                    </div>       
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_maternoi" class="col-sm-3 col-form-label">Apellido materno:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_materno" id="ape_materno" placeholder="Ingrese el apellido paterno del usuario">
                    </div>
                </div>     
                <div class="row mb-3 mx-2 my-1">
                    <label for="correo" class="col-sm-3 col-form-label">Correo:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="usu_correo" id="usu_correo" placeholder="Ingrese el correo del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="usu_pass" class="col-sm-3 col-form-label">Contraseña:</label>
                    <div class="col">                                
                        <input class="form-control" type="password" name="usu_pass" id="usu_pass" placeholder="Ingrese el correo del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="sexo" class="col-sm-3 col-form-label">Sexo:</label>
                    <div class="col">                                
                        <select class="form-control select2" name="sexo" id="sexo" data-placeholder="Seleccione">
                            <option label="Seleccione el sexo"></option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>                    
                </div>
                <div class="row mb-3 mx-2 my-1">
                     <label for="telefono" class="col-sm-3 col-form-label">Telefono:</label>
                     <div class="col">                                
                        <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Ingrese el telefono del usuario">
                    </div>
                </div>
            </div>
            
            <div class="modal-footer justify-content-between">
              
              <div>
                <a href="../views/login.php" class="btn btn-info">Iniciar Sesion</a>
                <a href="../index.php" class="btn btn-warning">Volver a inicio</a>
              </div>
              <div>
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Borrar</button>
              <button type="submit" class="btn btn-primary" name="action" value="add">Guardar</button>
              </div>
            </div>
            </form>
            

          
          <!-- /.social-auth-links -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

   <?php
    include("modulos/js.php");
   ?>
   <script type="text/javascript" src="js/usuarios.js"></script>
  </body>
</html>
<?php
