var usu_id = $('#usu_idx').val();

$(document).ready(function(){
    $.post("/proyectojpV2/controller/usuario.php?opc=total", {usu_id : usu_id}, function(data){ 
        data =JSON.parse(data);
        $("#datotal").html(data.total);
    });
});

$(document).ready(function(){
    $.post("/proyectojpV2/controller/usuario.php?opc=total_usuario", {usu_id : usu_id}, function(data){ 
        data =JSON.parse(data);
        $("#total_usuario").html(data.total_usuario);
    });
});

$(document).ready(function(){
    $.post("/proyectojpV2/controller/usuario.php?opc=total_instructor", {usu_id : usu_id}, function(data){ 
        data =JSON.parse(data);
        $("#total_instructor").html(data.total_instructor);
    });
});

