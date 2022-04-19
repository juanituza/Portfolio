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
  <header>
    <nav class="navbar navbar-expand-md mb-4">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">


          <i class="fa-solid fa-bars"></i>
        </button>




        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item ">
              <a class="nav-link px-4 py-1 " aria-current="page" href="index_en.php">Index</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-4 py-1 " href="about_me.php">About me</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-4 py-1" href="proyect.php">Proyect</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-4 py-1 active" href="contact.php">Contact</a>
            </li>
          </ul>
          <div class="d-inline">
            <button class="btn btn-rojo" id="btnConoce" name="btnConoce">
              <a href="../index.php" class="texto-idioma">
                ES
              </a>
            </button>
            <button class="btn btn-rojo " id="btnConoce" name="btnConoce">
              <a href="index_en.php" class="texto-idioma ">
                EN
              </a>
          </div>
          <div class="d-inline ms-4">


            <a href="" class="btn btn-rojo">
              <i class="fa-solid fa-file-arrow-down"></i>
              Download my resume

            </a>

          </div>

        </div>
      </div>
    </nav>
  </header>
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
        <p class="mt-5">¡Escanea el código y contactame!</p>
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
  <footer class="container">
    <div class="row mt-4 pb-1">
      <div class="col-12 col-sm-3 text-sm-start">
        <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

      </div>
      <div class="col-12 col-sm-3  pt-2 p-sm-0">
        Sponsor: <a href="https://depcsuite.com" target="_blank">DePC</a></div>
      <div class="col-12 col-sm-3   pt-2 p-sm-0">
        <a href="mailto:juanimckenna@gmail.com" target="_blank">juanimckenna@gmail.com</a>
      </div>
    </div>
  </footer>

  <div class="whatsapp col-12 col-sm-3">
    <a href="https://wa.me/5491150571913?text=hola!%20Quisiera%20contactar" target="_blank" title="whatapps">
      <i class="fa-brands fa-whatsapp"></i>
    </a>

  </div>

</body>

</html>