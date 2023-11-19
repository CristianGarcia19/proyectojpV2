var usu_id = $("#usu_idx").val();

function init() {
  $("#instructor_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#instructor_form")[0]);
  console.log(formData);
  $.ajax({
    url: "/Proyecto/controller/instructor.php?opc=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
      $("#instructor_data").DataTable().ajax.reload();
      $("#modalInstructor").modal("hide");
      Swal.fire({
        title: "Correcto",
        text: "Se guardó el registro",
        icon: "success",
        confirmButtonText: "Aceptar",
      }).then(function () {
        // Refrescar la página
        window.location.reload();
      });
    },
  });
}

$(document).ready(function () {
  $("#instructor_data").DataTable({
    aProcessing: true,
    aServerSide: true,
    dom: "Bfrtip",
    buttons: ["excelHtml5", "csvHtml5"],
    ajax: {
      url: "/Proyecto/controller/instructor.php?opc=listar",
      type: "post",
      data: { usu_id: usu_id },
    },
    bDestroy: true,
    responsive: true,
    bInfo: true,
    iDisplayLength: 15,
    order: [[0, "desc"]],
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar MENU registros",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo:
        "Mostrando registros del START al END de un total de TOTAL registros",
      sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      sInfoFiltered: "(filtrado de un total de MAX registros)",
      sInfoPostFix: "",
      sSearch: "Buscar:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending:
          ": Activar para ordenar la columna de manera ascendente",
        sSortDescending:
          ": Activar para ordenar la columna de manera descendente",
      },
    },
  });
});

function nuevo() {
  $("#titulo_modal").html("Crear un instructor");
  $("#instructor_form")[0].reset(); //borrar los valores usados en los imput
  $("#modalInstructor").modal("show");
}

function editar(inst_id) {
  $.post(
    "/Proyecto/controller/instructor.php?opc=mostrar",
    { inst_id: inst_id },
    function (data) {
      data = JSON.parse(data);
      console.log(data);
      $("#inst_id").val(data.inst_id);
      $("#nombrei").val(data.nombrei);
      $("#ape_paternoi").val(data.ape_paternoi);
      $("#ape_maternoi").val(data.ape_maternoi);
      $("#correo").val(data.correo);
      $("#sexo").val(data.sexo);
      $("#telefono").val(data.telefono);
    }
  );
  $("#titulo_modal").html("Editar un Instructor");
  $("#modalInstructor").modal("show");
}

function eliminar(inst_id) {
  Swal.fire({
    title: "Eliminar",
    text: "Desea eliminar el registro",
    icon: "error",
    showCancelButton: true,
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.value) {
      $.post("/Proyecto/controller/instructor.php?opc=eliminar",{ inst_id: inst_id },
        function (data) {
          $("#instructor_data").DataTable().ajax.reload();
          Swal.fire({
            title: "Correcto",
            text: "Se elimino el registro",
            icon: "success",
            confirmButtonText: "Aceptar",
          });
        }
      );
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

                  $.post(
                    "/proyectojpV2/controller/instructor.php?opc=guardar_desde_excel",
                    {
                      nombrei: columns[0],
                      ape_paternoi: columns[1],
                      ape_maternoi: columns[2],
                      correo: columns[3],
                      sexo: columns[4],
                      telefono: columns[5],
                    },
                    function (data) {
                      console.log(data);
                    }
                  );

              }
              /* TODO:Despues de subir la informacion limpiar inputfile */
              document.getElementById("upload").value=null;

              /* TODO: Actualizar Datatable JS */
              $('#instructor_data').DataTable().ajax.reload();
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