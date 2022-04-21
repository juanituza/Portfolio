<?php

$pg = "proyect";

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css" />
  <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../css/estilos.css" />

  <title>Proyect</title>
</head>

<body id="proyectos">
  <?php include_once("header_en.php"); ?>
  <main class="container">
    <div class="row">
      <div class="col-12 col-sm-4 text-center mt-3 mb-4 mt-5">
        <h1>Projects</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-12 mt-3">
        <p>The following are some of the work I have done:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
        <div class=" row card">
          <div class="col-12 p-0">
            <img src="../images/abmclientes.png" alt="abm clientes" class="img-fluid">
          </div>
          <div class="col-12 p-0">
            <h2 class="p-3  d-block gradiente">ABM CUSTOMERS</h2>
          </div>
          <div class="col-12 p-2">
            <p class=" d-block parrafo ">Registration, cancellation and modification of a customer record. Made in HTML, CSS, PHP, Bootstrap and Json.</p>
          </div>
          <div class="class row py-5">

            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo ">Watch online</a>
            </div>
            <div class="col-6">
              <a href="" target="_blank" class="codigo text-center">Source code</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
        <div class=" row card">
          <div class="col-12 p-0">
            <img src="../images/abmventas.png" alt="abm clientes" class="img-fluid">
          </div>
          <div class="col-12 p-0">
            <h2 class="p-3  d-block gradiente">SALES MANAGEMENT SYSTEM</h2>
          </div>
          <div class="col-12 p-2">
            <p class=" d-block parrafo ">Customer, product and sales management system. Made in HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery and MySQL database.</p>
          </div>
          <div class="class row py-5">

            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo ">Watch online</a>
            </div>
            <div class="col-6">
              <a href="" target="_blank" class="codigo text-center">Source code</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
        <div class="row card">
          <div class="col-12 p-0">
            <img src="../images/proyecto-integrador.png" alt="abm clientes" class="img-fluid">
          </div>
          <div class="col-12 p-0">
            <h2 class="p-3  d-block gradiente">INTEGRATING PROJECT</h2>
          </div>
          <div class="col-12 p-2">
            <p class=" d-block parrafo ">Full Stack Project developed in PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago with administrator panel, user manager, permissions module and functionalities for purposes.</p>
          </div>
          <div class="class row py-5">

            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo ">Watch online</a>
            </div>
            <div class="col-6">
              <a href="" target="_blank" class="codigo text-center">Source code</a>
            </div>
          </div>
        </div>

      </div>


    </div>
  </main>
  <?php include_once("../footer.php"); ?>

</body>

</html>