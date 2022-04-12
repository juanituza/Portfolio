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

  <title>Proyectos</title>
</head>

<body id="proyectos">
  <header>
    <nav class="navbar navbar-expand-md mb-4">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link px-4 py-1" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 active" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="contacto.php">Contacto</a>
            </li>
          </ul>
          <div class="d-inline">
            <button class="btn btn-rojo" id="btnConoce" name="btnConoce">
              <a href="index.php" class="texto-idioma">
                ES
              </a>
            </button>
            <button class="btn btn-rojo " id="btnConoce" name="btnConoce">
              <a href="EN/index_en.php" class="texto-idioma ">
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
  <main class="container">
    <div class="row">
      <div class="col-12 col-sm-4 text-center mt-3 mb-4 mt-5">
        <h1>Proyectos</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-12 mt-3">
        <p>Los siguientes son algunos de los trabajos que he realizado:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
        <div class=" row card">
          <div class="col-12 p-0">
            <img src="images/abmclientes.png" alt="abm clientes" class="img-fluid">
          </div>
          <div class="col-12 p-0">
            <h2 class="p-3  d-block gradiente">ABM CLIENTES</h2>
          </div>
          <div class="col-12 p-2">
            <p class=" d-block parrafo ">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
          </div>
          <div class="class row py-5">

            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo ">Ver online</a>
            </div>
            <div class="col-6">
              <a href="" target="_blank" class="codigo text-center">Código fuente</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
        <div class=" row card">
          <div class="col-12 p-0">
            <img src="images/abmventas.png" alt="abm clientes" class="img-fluid">
          </div>
          <div class="col-12 p-0">
            <h2 class="p-3  d-block gradiente">SISTEMA DE GESTIÓN DE VENTAS</h2>
          </div>
          <div class="col-12 p-2">
            <p class=" d-block parrafo ">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
          </div>
          <div class="class row py-5">

            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo ">Ver online</a>
            </div>
            <div class="col-6">
              <a href="" target="_blank" class="codigo text-center">Código fuente</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
        <div class="row card">
          <div class="col-12 p-0">
            <img src="images/proyecto-integrador.png" alt="abm clientes" class="img-fluid">
          </div>
          <div class="col-12 p-0">
            <h2 class="p-3  d-block gradiente">PROYECTO INTEGRADOR</h2>
          </div>
          <div class="col-12 p-2">
            <p class=" d-block parrafo ">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
          </div>
          <div class="class row py-5">

            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo ">Ver online</a>
            </div>
            <div class="col-6">
              <a href="" target="_blank" class="codigo text-center">Código fuente</a>
            </div>
          </div>
        </div>

      </div>


    </div>
  </main>
  <footer class="container fnegro">
    <div class="row mt-4 pb-1">
      <div class="col-12 col-sm-3 text-sm-start">
        <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github frojo"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin linkedin"></i></a>
      </div>
      <div class="col-12 col-sm-3 pt-2 p-sm-0 ">
        Sponsor: <a href="https://depcsuite.com" target="_blank" class="fnegro">DePC</a>
      </div>
      <div class="col-12 col-sm-3 pt-2 p-sm-0">
        <a href="mailto:juanimckenna@gmail.com" target="_blank" class="fnegro">juanimckenna@gmail.com</a>
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