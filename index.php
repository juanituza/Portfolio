<?php

$pg ="index";

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

  <title>Inicio</title>
</head>

<body id="inicio">
  <?php include_once("header.php"); ?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center div-imagen">
          <a href="sobre-mi.php">
            <img src="images/web-development.png" alt="cohete" class="computer" />
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 my-1  text-center offset-sm-3 ">
          <div class="input-home">
            <p class="texto-inicio p-1">
              Bienvenid@ a mi sitio web.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <button class="btn btn-blanco px-4 mb-3" id="btnConoce" name="btnConoce">
            <a href="proyectos.php" class="conocer">Conoce mis proyectos</a>
          </button>
        </div>
      </div>
    </div>
  </main>

  <?php include_once("footer.php"); ?>

</body>

</html>