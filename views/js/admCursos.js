var usu_id = $('#usu_idx').val();

function init() {
    $("#curso_form").on("submit", function (e) {
        guardaryeditar(e);
    });
}

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#curso_form")[0]);
    console.log(formData);
    $.ajax({
        url: "/proyectojpV2/controller/cursos.php?opc=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            console.log(data);
            $('#curso_data').DataTable().ajax.reload();
            $('#modalCrearCurso').modal('hide');

            Swal.fire({
                title: "Correcto",
                text: "Se guardó el registro",
                icon: "success",
                confirmButtonText: "Aceptar"
            }).then(function () {
                // Refrescar la página
                window.location.reload();
            });
        }
    });
}

function nuevo() {
    $('#titulo_modal').html('Crear curso');
    $('#curso_form')[0].reset();
    $('#modalCrearCurso').modal('show');
}

$(document).ready(function () {
    $("#curso_data").DataTable({
        processing: true,
        serverSide: true,
        dom: 'Bfrtip',
        buttons: ['excelHtml5', 'csvHtml5'],
        ajax: {
            url: "/proyectojpV2/controller/cursos.php?opc=listar",
            type: "post"
        },
        destroy: true,
        responsive: true,
        info: true,
        pageLength: 15,
        order: [[0, "desc"]],
        language: {
            processing: "Procesando...",
            lengthMenu: "Mostrar _MENU_ registros",
            zeroRecords: "No se encontraron resultados",
            emptyTable: "Ningún dato disponible en esta tabla",
            info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            infoPostFix: "",
            search: "Buscar:",
            infoThousands: ",",
            loadingRecords: "Cargando...",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            },
            aria: {
                sortAscending: ": Activar para ordenar la columna de manera ascendente",
                sortDescending: ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
});

function editar(cur_id) {
    $.post("/proyectojpV2/controller/cursos.php?opc=mostrar",
        { cur_id: cur_id },
        function (data) {
            data = JSON.parse(data);
            console.log(data);
            $('#cur_id').val(data.cur_id);
            $('#id_categoria').val(data.id_categoria);
            $('#curso').val(data.curso);
            $('#descripcion').val(data.descripcion);
            $('#fecha_ini').val(data.fecha_ini);
            $('#fecha_fin').val(data.fecha_fin);
            $('#profesor').val(data.profesor);
        });
    $('#titulo_modal').html('Editar curso');
    $('#modalCrearCurso').modal('show');
}

function eliminar(cur_id) {
    Swal.fire({
        title: 'Eliminar!',
        text: '¿Deseas eliminar el registro?',
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("/proyectojpV2/controller/cursos.php?opc=eliminar", { cur_id: cur_id }, function (data) {
                $('#curso_data').DataTable().ajax.reload();
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Se eliminó correctamente',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            }).then(function () {
                // Refrescar la página
                window.location.reload();
            });
        }
    });
}

$(document).on('click', '#botonplantilla', function () {
    $('#modalCrearPlantilla').modal('show');
});

var ExcelToJSON = function () {
    this.parseExcel = function (file) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var data = e.target.result;
            var workbook = XLSX.read(data, {
                type: 'binary'
            });

            workbook.SheetNames.forEach(function (sheetName) {
                var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                var json_object = JSON.stringify(XL_row_object);
                AsignaturaList = JSON.parse(json_object);

                for (i = 0; i < AsignaturaList.length; i++) {
                    var columns = Object.values(AsignaturaList[i])

                    $.post("/proyectojpV2/controller/cursos.php?opc=guardar_desde_excel", {
                        id_categoria: columns[0],
                        curso: columns[1],
                        descripcion: columns[2],
                        fecha_ini: columns[3],
                        fecha_fin: columns[4],
                        profesor: columns[5]
                    }, function (data) {
                        console.log(data);
                    });
                }

                document.getElementById("upload").value = null;

                // Recargar la página después de completar las tareas
                location.reload();
            });
        };

        reader.onerror = function (ex) {
            console.log(ex);
        };

        reader.readAsBinaryString(file);
    };
};

function handleFileSelect(evt) {
    var files = evt.target.files;
    var xl2json = new ExcelToJSON();
    xl2json.parseExcel(files[0]);
}

document.getElementById('upload').addEventListener('change', handleFileSelect, false);  

init();
