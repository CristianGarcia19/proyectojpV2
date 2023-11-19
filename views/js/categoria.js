var usu_id = $('#usu_idx').val();

function init(){
    $("#categoria_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#categoria_form")[0]);
    console.log(formData);
    $.ajax({
        url: "/proyectojpV2/controller/categoria.php?opc=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            console.log(data);
            $('#categoria_data').DataTable().ajax.reload();
            $('#modalCategoria').modal('hide');
            Swal.fire({
                title: 'Correcto',
                text: 'Se guardó el registro',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            }).then(function () {
                // Refrescar la página
                window.location.reload();
            });
        }
    });
}



$(document).ready(function(){
    $('#categoria_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/proyectojpV2/controller/categoria.php?opc=listar",
            type:"post",
            data:{usu_id:usu_id},
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 15,
        "order": [[ 0, "desc" ]],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
    });

});

function nuevo(){
    $('#titulo_modal').html('Crear una categoría');
    $('#categoria_form')[0].reset(); //borrar los valores usados en los imput 
    $('#modalCategoria').modal('show');
}

function editar(id){
    $.post("/proyectojpV2/controller/categoria.php?opc=mostrar",{id:id},function(data) {
        data = JSON.parse(data);
        console.log(data);
        $('#id').val(data.id);
        $('#nombre').val(data.nombre);
    });
    $('#titulo_modal').html('Editar una categoría');
    $('#modalCategoria').modal('show');
}

function eliminar(id){
    Swal.fire({
        title: 'Eliminar',
        text: 'Desea eliminar el registro',
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("/proyectojpV2/controller/categoria.php?opc=eliminar",{id:id},function(data){
                $('#categoria_data').DataTable().ajax.reload();
                Swal.fire({
                    title: 'Correcto',
                    text: 'Se elimino el registro',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                })
            });
        }
    });
}

$(document).on('click','#botonplantilla', function(){
    $('#modalCrearPlantilla').modal('show');
  });
  
  var ExcelToJSON = function() {
    this.parseExcel = function(file) {
        var reader = new FileReader();
  
        reader.onload = function(e) {
            var data = e.target.result;
            var workbook = XLSX.read(data, {
                type: 'binary'
            });
            //TODO: Recorrido a todas las pestañas
            workbook.SheetNames.forEach(function(sheetName) {
                // Here is your object
                var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                var json_object = JSON.stringify(XL_row_object);
                AsignaturaList = JSON.parse(json_object);
  
                console.log(AsignaturaList)
                for (i = 0; i < AsignaturaList.length; i++) {
  
                    var columns = Object.values(AsignaturaList[i])
  
                    $.post("/proyectojpV2/controller/categoria.php?opc=guardar_desde_excel",{
                        nombre : columns[0],
                        
                    }, function (data) {
                        console.log(data);
                    });
  
                }
                /* TODO:Despues de subir la informacion limpiar inputfile */
                document.getElementById("upload").value=null;
  
                /* TODO: Actualizar Datatable JS */
                $('#categoria_data').DataTable().ajax.reload();
                $('#modalCrearPlantilla').modal('hide');
            })
        };
        reader.onerror = function(ex) {
            console.log(ex);
        };
  
        reader.readAsBinaryString(file);
    };
  };
  
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    var xl2json = new ExcelToJSON();
    xl2json.parseExcel(files[0]);
  }
  
  document.getElementById('upload').addEventListener('change', handleFileSelect, false)   
  
init();