var usu_id = $('#usu_idx').val();
$(document).ready(function(){
    $.post("/proyectojpV2/controller/usuario.php?opc=mostrar", {usu_id : usu_id}, function(data){ 
        data =JSON.parse(data);
        $('#nombre').val(data.nombre);
        $('#ape_paterno').val(data.ape_paterno);
        $('#ape_materno').val(data.ape_materno);
        $('#usu_correo').val(data.usu_correo);
        $('#telefono').val(data.telefono);
        $('#usu_pass').val(data.usu_pass);
        $('#sexo').val(data.sexo).trigger("change");
    });
});

$(document).on("click", "#btnactualizar", function(){
    $.post("/proyectojpV2/controller/usuario.php?opc=update_perfil",{ 
        usu_id : usu_id,
        nombre : $('#nombre').val(),
        ape_paterno : $('#ape_paterno').val(),
        ape_materno : $('#ape_materno').val(),        
        telefono : $('#telefono').val(),
        clave : $('#usu_pass').val(),
        sexo : $('#sexo').val()
    }, function (data) {        
    });
    Swal.fire({
        title:'Correcto',
        text:'Se actualizo Correctamente',
        icon:'success',
        confirmButtonText:'Aceptar'
    });
});

