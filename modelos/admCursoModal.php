<div class="modal fade" id="modalCrearCurso">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titulo_modal"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="curso_form">
                    <input type="hidden" name="cur_id" id="cur_id">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Categoría</label>
                                <select name="id_categoria" id="id_categoria" class="form-control" style="width:100%" required>
                                    <option>Seleccione una categoría</option>

                                    <?php
                                    while($datos = mysqli_fetch_array($query))
                                    {
                                    ?>      
                                    <option value="<?php echo $datos['id']?>"><?php echo $datos['nombre']?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Curso:</label>
                                <input name="curso" id="curso" class="form-control" style="width:100%" placeholder="Ingrese el nombre del curso" required>
                            </div>
                            <div class="form-group">
                                <label>Descripción:</label>
                                <input name="descripcion" id="descripcion" class="form-control" style="width:100%" placeholder="Ingrese descripción" required>
                            </div>
                            <div class="form-group">
                                <label>Fecha inicial:</label>
                                <input type="date" name="fecha_ini" id="fecha_ini" class="form-control" style="width:100%" placeholder="Ingrese fecha inicial del curso">
                            </div>
                            <div class="form-group">
                                <label>Fecha final:</label>
                                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" style="width:100%" placeholder="Ingrese fecha final del curso">
                            </div>
                            <div class="form-group">
                                <label>Profesor:</label>
                                <select name="profesor" id="profesor" class="form-control" style="width:100%">
                                    <option>Seleccione un profesor</option>

                                    <?php
                                    while($datos = mysqli_fetch_array($query2))
                                    {
                                    ?>      
                                    <option value="<?php echo $datos['inst_id']?>"><?php echo $datos['nombrei']?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="action" value="add">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modalCrearPlantilla" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titulo_plantilla">Cargar Excel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="plantilla_form">
                <input type="hidden" name="usu_id" id="usu_id">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-control-label">Seleccionar Archivo: <span class="tx-danger">*</span></label>
                            <form enctype="multipart/form-data">
                                <input id="upload" type="file" name="files[]">
                            </form>
                            
                        </div>
                    </div>
                </div>
           
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
             
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->