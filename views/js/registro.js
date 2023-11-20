var usu_id = $("#usu_idx").val();

function init() {
  $("#registro_usuario").on("submit", function (e) {
    guardaryeditar(e);
  });
}

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#registro_usuario")[0]);
  console.log(formData);
  $.ajax({
    url: "/proyectojpV2/controller/registro.php?opc=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
      $("#usuario_data").DataTable().ajax.reload();
      $("#modalUsuario").modal("hide");
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
  $("#usuario_data").DataTable({
    aProcessing: true,
    aServerSide: true,
    dom: "Bfrtip",
    buttons: ["excelHtml5", "csvHtml5", "pdfHtml5"],
    ajax: {
      url: "/proyectojpV2/controller/registro.php?opc=listar",
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
  $("#titulo_modal").html("Crear un usuario");
  $("#registro_usuario")[0].reset(); //borrar los valores usados en los imput
  $("#modalUsuario").modal("show");
}

function editar(usu_id) {
  $.post(
    "/proyectojpV2/controller/registro.php?opc=mostrar",
    { usu_id: usu_id },
    function (data) {
      data = JSON.parse(data);
      console.log(data);
      $("#usu_id").val(data.usu_id);
      $("#nombre").val(data.nombre);
      $("#ape_paterno").val(data.ape_paterno);
      $("#ape_materno").val(data.ape_materno);
      $("#usu_correo").val(data.usu_correo);
      $("#usu_pass").val(data.usu_pass);
      $("#sexo").val(data.sexo);
      $("#telefono").val(data.telefono);
      $("#rol_id").val(data.rol_id);
    }
  );
  $("#titulo_modal").html("Editar un usuario");
  $("#modalUsuario").modal("show");
}

function eliminar(usu_id) {
  Swal.fire({
    title: "Eliminar",
    text: "Desea eliminar el registro",
    icon: "error",
    showCancelButton: true,
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.value) {
      $.post(
        "/proyectojpV2/controller/registro.php?opc=eliminar",
        { usu_id: usu_id },
        function (data) {
          $("#usuario_data").DataTable().ajax.reload();
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
init();
