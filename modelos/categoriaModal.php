<div class="modal fade" id="modalCategoria">
  <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titulo_modal"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
        <form method="POST" id="categoria_form">
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre">Categoria</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Ingrese una categoria">
                        </div>
                    </div>
                </div>
           
             </div>
             <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="action" value="add">Guardar</button>
            </div>
        </form>
    </div>
          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->

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