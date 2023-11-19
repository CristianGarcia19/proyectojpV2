$(document).ready(function(){
 const canvas = document.getElementById('canvas');
 const ctx = canvas.getContext('2d');

 /*permite adquirir lo que se envie por parametros en la url*/
    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent (window.location.search.substring(1)), 
        sURLVariables = sPageURL.split('&'), 
        sParameterName,
        i;
    for (i = 0; i < sURLVariables.length; i++) { 
        sParameterName = sURLVariables[i].split('=');
    
        if (sParameterName[0] === sParam) {
         return sParameterName[1] === undefined ? true : sParameterName[1];
    }
   }
  };

    var curusu_id = getUrlParameter('curusu_id');
    $.post("/proyectojpV2/controller/usuario.php?opc=mostrar_curso_detalle", { curusu_id : curusu_id }, function (data) {
     //console.log(data);
     data = JSON.parse(data);
     /* Inicializamos la imagen */
     var image = new Image();
     image.src = 'http://localhost/proyectojpV2/HTML/dist/Certificado.png'; //ruta de la imagen// 
     image.onload = function() {
     ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
     ctx.textAlign = "center";
     ctx.textBaseline = 'middle';
     var x = canvas.width / 2;
     ctx.font='44px Arial';
     ctx.fillText(data.nombre+' '+ data.ape_paterno+' '+data.ape_materno, x, 280);
     ctx.font='36px Arial';
     ctx.fillText(data.usu_id, x, 330);
     ctx.font='30px Arial';
     ctx.fillText(data.curso, x, 380);
     ctx.font = '28px Arial';
     ctx.fillText(data.nombrei+' '+ data.ape_paternoi+' '+data.ape_maternoi, x, 440);
     ctx.font= '26px Arial';
     ctx.fillText('DOCENTE', x, 470);
     ctx.font = '20px Arial';
     ctx.fillText('Fecha de Inicio: '+data. fecha_ini+'   /   '+'Fecha de Finalización: '+data. fecha_fin+'', x, 540);

     $('#descripcion').html(data.descripcion);
     }
    });
  });

    $(document).on("click","#btnpng", function(){
        let lblpng = document.createElement('a'); //creamos una etiqueta llamada a 
        lblpng.download = "Certificado.png"; //asignamos el nombre de la descarga 
        lblpng.href = canvas.toDataURL(); //se asigna una referencia 
        lblpng.click(); //evento
    });

    $(document).on("click","#btnpdf", function(){
        var imgData = canvas.toDataURL('image/png'); //inicializamos la imagen
        var doc = new jsPDF ('l', 'mm'); //llamamos a la función formato horizontal 
        doc.addImage(imgData, 'PNG', 30, 15); //adicionamos la imagen
        doc.save('Certificado.pdf'); //guardamos
    });