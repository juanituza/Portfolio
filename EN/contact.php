<?php

$pg = "contact";

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

  <title>Contact</title>
</head>

<body id="contacto">
  <?php include_once("header_en.php"); ?>
  <main class="container">
    <div class="row">
      <div class="col-12 col-sm-4 text-center mt-3 mb-4 mt-5">
        <h1>Contact me</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-12">
        <p>
          I invite you to contact me by sending me a message or by
          WhatsApp
        </p>
        <p class="mt-5">Scan the QR and contact me!</p>
        <a href="https://wa.me/5491150571913?text=hola!%20Quisiera%20contactar" target="_blank" title="codigo qr">
          <img src="../images/qr.jpg" alt="codigo qr" class="qr ms-5 my-sm-2 mb-5">
        </a>
      </div>
      <div class="col-sm-6 col-12">
        <form action="" method="post">
          <div class="mb-3">
            <input class="form-control shadow " type="text" id="txtNombre" name="txtNombre" placeholder="Name" required>
          </div>
          <div class="mb-3">
            <input class="form-control shadow  " type="text" id="txtCorreo" name="txtCorreo" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input class="form-control shadow " type="text" id="txtTelefono" name="txtTelefono" placeholder="Phone/Whatsapp" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control shadow " type="txtMensaje" id="txtMensaje" name="txtMensaje" placeholder="Write a message" required></textarea>
          </div class="me-auto text-right">
          <button class="btn btn-blanco px-4 mb-3" id="btnEnviar" name="btnEnviar">
            Send
          </button>
        </form>
      </div>

    </div>
  </main>
  <?php include_once("../footer.php"); ?>

</body>

</html>