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
    <title>Contacto</title>
</head>

<body id="contacto">
    <?php include_once("header_en.php"); ?>
    <main class="container">
        <div class="row offset-sm-3">
            <div class="col-12 col-sm-6 text-center  my-5 ">
                <h1>Thanks for the contact</h1>
                <p class="my-3">
                    I will answer you soon.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>
                    If you want you can send me a message
                    WhatsApp
                </p>
                <p class="mt-3">Scan the code and contact me!</p>
                <a href="https://wa.me/5491150571913?text=hola!%20Quisiera%20contactar" target="_blank" title="codigo qr">
                    <img src="../images/qr.jpg" alt="codigo qr" class="qr ms-5 my-sm-2 mb-5">
                </a>
            </div>


        </div>
    </main>
    <?php include_once("../footer.php"); ?>


</body>

</html>