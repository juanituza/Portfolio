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

  <title>Index</title>
</head>

<body id="inicio">
  <header>
    <nav class="navbar navbar-expand-md mb-4">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link px-4 py-1 active" aria-current="page" href="index_en.php">Index</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="about_me.php">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="proyect.php">Proyect</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="contact.php">Contact</a>
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
              Descargar mi CV
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center div-imagen">
          <a href="about_me.php">
            <img src="../images/web-development.png" alt="cohete" class="computer" />
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
            <a href="proyectos.html" class="conocer">Conoce mis proyectos</a>
          </button>
        </div>
      </div>
    </div>
  </main>

  <footer class="container">
    <div class="row mt-4 pb-1">
      <div class="col-12 col-sm-3 text-sm-start">
        <a href="https://github.com/juanituza" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/in/juan-mckenna/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>

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