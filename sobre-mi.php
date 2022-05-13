<?php

$pg = "sobre-mi";

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="css/estilos.css" />
  <title>Sobre mí</title>
</head>

<body id="sobre-mi">
  <?php include_once("header.php"); ?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 mt-5">
          <div class="col-6 col-sm-6 m-4 background">
            <h1 class="text-center text">¡Hola! </br> ¡Soy Juan!</h1>
          </div>
          <div>
            <p class="info">
              Iniciando mi camino en la programación. Realizando cursos y capacitaciones para formarme en la carrera. ¡Espero que te encuentres a gusto navegando por mi portfolio y podamos contactarnos pronto!
            </p>
          </div>

          <div class="col-12 col-sm-6 my-4">
            <a href="contacto.php" class="btn btn-rojo" target="_blank">Enviar mensaje</a>
          </div>
        </div>

        <div class="col-12 col-sm-4 mt-4 offset-sm-2 borde text-color">
          <img src="images/perfil3.jpg" alt="Juan Mc kenna" class="img-fluid img-circle" />
        </div>
      </div>
    </div>
    <section class="color-gradiente pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 my-5">
            <h2 class="text-white ">
              <i class="fa-solid fa-user-graduate"></i>
              Conocimientos tecnológicos
            </h2>

          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Javascript</h3>
              <img src="images/javascript-logo-escudo.png" alt="javascript" class="img-fluid d-block mx-auto" width="90" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>PHP</h3>
              <img src="images/logo_php.png" alt="PHP" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>HTML5</h3>
              <img src="images/html5.png" alt="HTML5" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>

          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Bootstrap</h3>
              <img src="images/boostrap.png" alt="Bootstrap" class="img-fluid d-block mx-auto" width="70" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Laravel</h3>
              <img src="images/laravel.png" alt="Apache" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>React.js</h3>
              <img src="images/react.png" alt="Apache" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>CSS</h3>
              <img src="images/css.png" alt="CSS" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>


          <div class="col-6 col-sm-2  text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Git</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/git.png" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Apache</h3>
              <img src="images/descarga.jfif" alt="Apache" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Mercadopago</h3>
              <img src="images/mercado pago.png" alt="Apache" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>
          <div class="col-6 col-sm-2  text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Photoshop</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="images/Photoshop-Logo.png" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Illustrator</h3>
              <img src="images/Illustrator.png" alt="Illustrator" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>

        </div>
        <div class="row mt-4">
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>MySQL</h3>
              <img src="images/mysql.png" alt="CSS" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>
          <div class="col-6 col-sm-2 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>jQuery</h3>
              <img src="images/jquery.png" alt="CSS" class="img-fluid d-block mx-auto" width="60" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-12 my-4">
          <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
        </div>
      </div>
      <div class="row shadow bg-white rounded p-1">
        <div class="col-2 p-5 my-auto d-none d-sm-block">
          <img src="images/SOCIEDAD-RURAL.jpg" class="img-fluid baw" alt="Sociedad Rural Argentina" />
        </div>
        <div class="col-12 col-sm-10 pt-5">
          <div>
            <h3>Venta teléfonica</h3>
          </div>
          <div>
            <h4>Sociedad Rural Argentina</h4>
          </div>
          <div>
            <h5>2006 - 2007</h5>
          </div>
          <div>
            <p class="info">
              Venta teléfonica de cursos para la agroindustria. Avalados por La Sociedad Rural Argentina y la Universidad Nacional de La Plata
            </p>
          </div>
        </div>
        <div class="col-2 p-5 my-auto d-none d-sm-block">
          <img src="images/TELECOM.svg" class="img-fluid baw" alt="Fibertel" />
        </div>
        <div class="col-12 col-sm-10 pt-5">
          <div>
            <h3>Service técnico domiciliario</h3>
          </div>
          <div>
            <h4>TELECOM - PERSONAL - FLOW</h4>
          </div>
          <div>
            <h5>2007 - presente</h5>
          </div>
          <div>
            <p class="info">
              Ingrese en el sector de custumer service como soporte técnico teléfonico, luego de 1 año me transferí a la base técnica como administrativo hasta el año 2017 donde me traslade a service domiciliario de todos los productos de la empresa.
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 my-4">
          <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
        </div>
      </div>
      <div class="row shadow bg-white rounded ">
        <div class="col-2 p-5 my-auto d-none d-sm-block">
          <img src="images/logo-it.jpg" class="img-fluid baw" alt="Educacion IT" />
        </div>
        <div class="col-12 col-sm-10 pt-5">
          <div>
            <h3>Dreamweaver CS5/CS6: Construción de sitios web</h3>
          </div>
          <div>
            <h4>Educación IT</h4>
          </div>
          <div>
            <h5>2015</h5>
          </div>

        </div>
        <div class="col-2 p-5 my-auto d-none d-sm-block">
          <img src="images/depc.jpg" class="img-fluid baw" alt="Fibertel" />
        </div>
        <div class="col-12 col-sm-10 pt-5">
          <div>
            <h3>Desarrolador Web FullStack</h3>
          </div>
          <div>
            <h4>DEPC</h4>
          </div>
          <div>
            <h5>2021</h5>
          </div>

        </div>
      </div>

    </section>

    <section id="adicional">
      <div class="container p-5">
        <div class="row">
          <div class="col-12 col-sm-6 px-4 mb-3 ">
            <div class="row shadow bg-white caja  ">
              <div class="col-sm-4 col-12 text-center   card ">
                <i class="fa-solid fa-language"></i>
              </div>
              <div class="col-sm-8 col-12 ">
                <h3>IDIOMAS</h3>
                <ul>
                  <li>Español: Nativo</li>
                  <li>Ingles: Básico</li>
                </ul>
              </div>
            </div>

          </div>
          <div class="col-12 col-sm-6 px-4">
            <div class="row shadow bg-white caja  ">
              <div class="col-sm-4 text-center   card ">
                <i class="fa-solid fa-futbol "></i>
              </div>
              <div class="col-sm-8">
                <h3>HOBBIES</h3>
                <ul>
                  <li>Fútbol</li>
                  <li>Cine: Series / películas</li>
                  <li>Tenis</li>
                </ul>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>




  </main>
  <?php include_once("footer.php"); ?>


</body>

</html>