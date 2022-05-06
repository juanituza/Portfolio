<?php

$pg = "contacto";


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
        <div class="row offset-sm-3">
            <div class="col-12 col-sm-6 text-center  m-5 ">
                <h1>Gracias por contactarte</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>
                    Si queres podes enviarme un mensaje por
                    whatsapp
                </p>
                <p class="mt-5">¡Escanea el código y contactame!</p>
                <a href="https://wa.me/5491150571913?text=hola!%20Quisiera%20contactar" target="_blank" title="codigo qr">
                    <img src="images/qr.jpg" alt="codigo qr" class="qr ms-5 my-sm-2 mb-5">
                </a>
            </div>


        </div>
    </main>
    <?php include_once("footer.php"); ?>


</body>

</html>