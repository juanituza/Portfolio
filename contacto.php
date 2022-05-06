<?php

$pg="contacto";

if ($_POST) {

  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $telefono = $_POST["txtTelefono"];
  $mensaje = $_POST["txtMensaje"];


if (isset($_POST["btnEnviar"])) {
  



$para  = 'juanituza85@gmail.com' . ', ';


// título
$título = 'Contacto desde portfolio Juan Mc Kenna';

// mensaje
$mensaje = '
nombre: $nombre <br>;
correo: $correo <br>;
telefono: $telefono <br>;
mensaje: $mensaje <br>;

';


$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: juanituza85@gmail.com' . "\r\n";
$cabeceras .= 'From: info@jmckenna.com.ar' . "\r\n";


// Enviarlo
header('location: confirmacion-envio.php');


}
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
  <title>Contacto</title>
</head>

<body id="contacto">
  <?php include_once("header.php"); ?>
  <main class="container">
    <div class="row">
      <div class="col-12 col-sm-4 text-center mt-3 mb-4 mt-5">
        <h1>Contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-12">
        <p>
          Te invito a que te contactes enviándome un mensaje o bien por
          whatsapp
        </p>
        <p class="mt-5">¡Escanea el código y contactame!</p>
        <a href="https://wa.me/5491150571913?text=hola!%20Quisiera%20contactar" target="_blank" title="codigo qr">
          <img src="images/qr.jpg" alt="codigo qr" class="qr ms-5 my-sm-2 mb-5">
        </a>
      </div>
      <div class="col-sm-6 col-12">
        <form action="" method="post">
          <div class="mb-3">
            <input class="form-control shadow " type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" required>
          </div>
          <div class="mb-3">
            <input class="form-control shadow  " type="text" id="txtCorreo" name="txtCorreo" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input class="form-control shadow " type="text" id="txtTelefono" name="txtTelefono" placeholder="Teléfono/Whatsapp" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control shadow " type="txtMensaje" id="txtMensaje" name="txtMensaje" placeholder="Escribe un mensaje" required></textarea>
          </div class="me-auto text-right">
          <button class="btn btn-blanco px-4 mb-3" id="btnEnviar" name="btnEnviar">
            ENVIAR
          </button>
        </form>
      </div>

    </div>
  </main>
  <?php include_once("footer.php");?>

 
</body>

</html>