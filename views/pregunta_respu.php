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

    <!--Introduccion-->
    <div class="container text-center">
      <h5 class="my-3">
        Hay dos tipos de preguntas: las preguntas cerradas y las preguntas
        abiertas.
      </h5>
      <h2 class="mb-3">CLOSED QUESTIONS</h2>
      <img
        src="../HTML/dist/img/closed.jpg"
        alt="closed questions"
        class="rounded-3 img-fluid mb-3"
        style="width: 600px"
      />
      <p>
        Las Preguntas cerradas requieren una respuesta “yes” o “no”, “right” o
        “wrong”. Ya hemos visto algunos ejemplos de preguntas cerradas en la
        lección, Constructing Sentences. Estas preguntas se forman con un verbo
        auxiliar (“do”, “be” o “have got”).
      </p>
      <p>
        1. Con los verbos “to be” y “have got”: Verbo + sujeto + sustantivo,
        adjetivo…?
      </p>
    </div>

    <div class="container mx-auto">
        <div class="row mx-auto">
      <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center"                                                                                                        >
        <div class="card" style="width: 21rem;">
          <img
            src="../HTML/dist/img/chicaalta.png"
            class="card-img-top img-fluid"
            alt="chicaalta"
          />
          <div class="card-body text-center">
            <h5 class="card-title text-center">Is she tall? Yes, she is.</h5>
            <p class="card-text">(¿Ella es alta? Sí, lo es.)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
            <div class="card" style="width: 21rem;">
            <img
                src="../HTML/dist/img/mascota.png"
                class="card-img-top img-fluid"
                alt="mascota"
            />
            <div class="card-body">
                <h5 class="card-title text-center">
                Have you got a pet? No, I haven’t.
                </h5>
                <p class="card-text">(¿Tienes una mascota? No, no tengo.)</p>
            </div>
            </div>
      </div>
      </div>
        <p class="text-center py-2"> 
            2. Todos los otros verbos: Verbo auxiliar (to do) + sujeto + verbo
            principal + sustantivo, adjetivo…?
        </p>
        <div class="container mx-auto p-0">
        <div class="row mx-auto">
      <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center"                                                                                                        >
        <div class="card" style="width: 21rem;">
          <img
            src="../html/dist/img/colegio.png"
            class="card-img-top img-fluid"
            alt="colegio"
          />
          <div class="card-body text-center">
            <h5 class="card-title text-center">Does he work in a school? No, he doesn’t.</h5>
            <p class="card-text">(¿Trabaja en una escuela? No, no trabaja en una escuela.)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
            <div class="card" style="width: 21rem;">
            <img
                src="../HTML/dist/img/newyork.png"
                class="card-img-top img-fluid"
                alt="newyork"
            />
            <div class="card-body">
                <h5 class="card-title text-center">
                    Did you like New York?
                </h5>
                <p class="card-text">(¿Te gustó Nueva York? Sí, me gustó.)</p>
            </div>
            </div>
      </div>
      </div>       
    </div>
    </div>
    
    <!--fin de Introduccion-->

    

    <header class="jumbotron text-center text-white" style="background: #2e3132;">
      <h2>OPEN QUESTIONS</h2>
      <p style="margin-top: 50px">
        Las Preguntas abiertas no se pueden contestar con un simple “yes” o
        “no”, pero obtienen información, explicación, descripción u opinión. Las
        preguntas abiertas se crean utilizando pronombres interrogativos o
        “question words”. Dentro de las preguntas abiertas, podemos distinguir
        entre preguntas del objeto y preguntas del sujeto.
      </p>
      <p>
        1. Con los verbos “to be” y “have got”: Pronombre interrogativo + verbo
        + sujeto + sustantivo, adjetivo…?
      </p>
      <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4">
            <div class="card my-3" style="height: 100%">
              <img
                src="../HTML/dist/img/bolso.png"
                class="card-img-top"
                style="height: 250px"
                alt="bolso"
              />
              <div class="card-body">
                <h5 class="card-title">What have you got in your bag?</h5>
                <p class="card-text">(¿Qué tienes en tu bolsa?)</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <!-- Añadido el mb-4 para separar las tarjetas -->
            <div class="card my-3">
              <img
                src="../HTML/dist/img/galletas.png"
                class="card-img-top"
                style="height: 250px"
                alt="galletas"
              />
              <div class="card-body">
                <h5 class="card-title">How are the cookies?</h5>
                <p class="card-text">(¿Cómo están las galletas?)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p style="margin-top: 50px">
        2. Todos los otros verbos: Pronombre interrogativo + verbo auxiliar (to
        do) + sujeto + verbo principal + sustantivo, adjetivo…?
      </p>

      <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4 h-100">
            <div class="card h-100 d-flex flex-column my-3">
              <img
                src="../HTML/dist/img/comida.png"
                class="card-img-top"
                style="height: 250px"
                alt="comida"
              />
              <div class="card-body">
                <h5 class="card-title">What do you like to eat?</h5>
                <p class="card-text">(¿Qué te gusta comer?)</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 h-100">
            <div class="card h-100 d-flex flex-column my-3">
              <img
                src="../HTML/dist/img/vacaciones.png"
                class="card-img-top"
                style="height: 250px"
                alt="vacaciones"
              />
              <div class="card-body">
                <h5 class="card-title">When do they go on vacation?</h5>

                <p class="card-text">(¿Cuándo se van de vacaciones?)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="text-center">
      <h2>OBJECT QUESTIONS</h2>
      <p style="margin-top: 50px">
        Las Preguntas del objeto solicitan el objeto de la frase y requieren el
        uso del verbo auxiliar “do”.
      </p>
      <p>
        Pronombre interrogativo + verbo auxiliar + sujeto + verbo (infinitivo)…?
      </p>
      <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-4">
            <div class="card my-3" style="height: 100%">
              <img
                src="../HTML/dist/img/persona.png"
                class="card-img-top"
                style="height: 250px"
                alt="persona"
              />
              <div class="card-body">
                <h5 class="card-title">Who did you call last night?</h5>
                <p class="card-text">(¿A quién llamaste anoche?)</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <!-- Añadido el mb-4 para separar las tarjetas -->
            <div class="card my-3">
              <img
                src="../HTML/dist/img/personad.png"
                class="card-img-top"
                style="height: 250px"
                alt="personad"
              />
              <div class="card-body">
                <h5 class="card-title">What did you do to yourself?</h5>
                <p class="card-text">(¿Qué te has hecho?)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-3 text-center" style="background: #2e3132;">
      <div class="container p-5">
        <!-- Wrap the content in a container to center it and add padding -->
        <div class="row justify-content-center">
          <div class="col-md-6 mb-3 mb-sm-0">
            <!-- Use col-md-6 to control the column size on medium-sized screens -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Accede a nuestro recurso audiovisual</h5>
                <p class="card-text">
                  Haz que tu aprendizaje sea más divertido y dinámico, por eso
                  te sugerimos visualizar el siguiente video.
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                  <!-- Use Bootstrap's responsive embed class for videos -->
                  <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/rlh-XnGLtjo?si=5Ae8ShGb8SS-mcf3"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                  ></iframe>
                </div>
                <div class="text-center" style="margin-top: 30px">
                  <h5>Pon en práctica lo aprendido</h5>
                  <a
                    href="https://forms.gle/tY4ca6YPsiqq5VuT9"
                    class="btn btn-warning"
                    style="margin-top: 30px"
                    >Comenzar</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <?php
        include('../views/modulos/footer2.php');    
        include('../views/modulos/js.php');    
    ?>

    
</body>
</html>
