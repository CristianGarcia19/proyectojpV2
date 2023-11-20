<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('../views/modulos/head2.php');
    ?>
</head>
<body>

    <!--header-->
    <?php
        include('../views/modulos/header3.php');
    ?>
    <!--fin header-->

    <!-- Encabezado de la página -->
    <header class="jumbotron text-center">
    <h1 style="color: #212529;">MEMBERS OF FAMILY</h1>
    <div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center align-items-center">
    <div class="col-md-4">
    <div class="card">
    <img src="../HTML/dist/img/abuelo.png" class="card-img-top" style="height: 250px" alt="abuelo">
    <div class="card-body">
    <h5 class="card-title">Grandfather</h5>
    <p class="card-text">Abuelo</p>
    </div>
    </div>
    </div>
            
    <div class="col-md-4">
    <div class="card">
    <img src="../HTML/dist/img/abuela.png" class="card-img-top" style="height: 250px" alt="abuela">
    <div class="card-body">
    <h5 class="card-title">Grandmother</h5>
    <p class="card-text">Abuela</p>
    </div>
    </div>
    </div>
            
    <div class="col-md-4">
    <div class="card">
    <img src="../HTML/dist/img/papá.png" class="card-img-top" style="height: 250px" alt="papá">
    <div class="card-body">
    <h5 class="card-title">Father-Husband</h5>
    <p class="card-text">Padre-Esposo</p>
    </div>
    </div>
    </div>
    </div>
    </div>
        
           
    <div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center align-items-center">
    <div class="col-md-4">
    <div class="card">
    <img src="../HTML/dist/img/mamá.png" class="card-img-top" style="height: 250px" alt="mamá">
    <div class="card-body">
    <h5 class="card-title">Mother-Wife</h5>
    <p class="card-text">Mamá-Esposa</p>
    </div>
    </div>
    </div>
            
    <div class="col-md-4">
    <div class="card">
    <img src="../HTML/dist/img/hija.png" class="card-img-top" style="height: 250px" alt="hija">
    <div class="card-body">
    <h5 class="card-title">Daughter</h5>
    <p class="card-text">Hija</p>
    </div>
    </div>
    </div>
            
    <div class="col-md-4">
    <div class="card">
    <img src="../HTML/dist/img/hijo.png" class="card-img-top" style="height: 250px" alt="hijo">
    <div class="card-body">
    <h5 class="card-title">Son</h5>
    <p class="card-text">Hijo</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </header>
   
    <header class="jumbotron text-center">
        <div class="container"> <!-- Wrap the content in a container to center it and add padding -->
        <div class="row justify-content-center">
        <div class="col-md-6 mb-3 mb-sm-0"> <!-- Use col-md-6 to control the column size on medium-sized screens -->
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">Accede a nuestro recurso audiovisual</h5>
        <p class="card-text">Haz que tu aprendizaje sea más divertido y dinámico, por eso te sugerimos visualizar el siguiente video.</p>
        <div class="embed-responsive embed-responsive-16by9"> <!-- Use Bootstrap's responsive embed class for videos -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tS8q86ODHuc?si=xnZtoCfwQkyCoKwP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="text-center" style="margin-top: 30px;">
        <h5>Pon en práctica lo aprendido</h5>
        <a href="https://forms.gle/V4vcDJgE5FeNRxx66" class="btn btn-primary" style="margin-top: 30px;">Comenzar</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </header>
   
   

    <!--footer y js-->
    <?php
        include('../views/modulos/footer2.php');
        include('../views/modulos/js.php');
    ?>
</body>
</html>
