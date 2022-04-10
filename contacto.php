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
    <header>
      <nav class="navbar navbar-expand-md mb-4">
        <div class="container">
           <button
           class="navbar-toggler"
           type="button"
           data-bs-toggle="collapse"
           data-bs-target="#navbarCollapse"
           aria-controls="navbarCollapse"
           aria-expanded="false"
           aria-label="Toggle navigation">

             
             <i class="fa-solid fa-bars"></i>
            </button>
        
          
        
        
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item ">
                <a class="nav-link px-4 py-1 " aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link px-4 py-1 " href="sobre-mi.php">Sobre mí</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link px-4 py-1 active" href="contacto.php">Contacto</a>
              </li>
            </ul>
            <div class="d-inline">
            

                <a href="" class="btn btn-rojo" >
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
          <h1>Contacto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-12">
          <p>
            Te invito a que te contactes enviándome un mensaje o bien por
            whatsapp
          </p>
        </div>
        <div class="col-sm-6 col-12">
            <form action="" method="post">
                <div class="mb-3">
                    <input class="form-control shadow " type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" required >
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
    <footer class="container">
        <div class="row mt-4 pb-1">
            <div class="col-12 col-sm-3 text-sm-start">
              <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            
            </div>
            <div class="col-12 col-sm-3  pt-2 p-sm-0"> 
              Sponsor:  <a href="https://depcsuite.com" target="_blank">DePC</a></div>
            <div class="col-12 col-sm-3   pt-2 p-sm-0">
              <a href="mailto:juanituza85@gmail.com" target="_blank">juanituza85@gmail.com</a>
            </div>
          </div> 
        </footer>
        
         <div class="whatsapp col-12 col-sm-3">
          <a href="https://wa.me/5491150571913?text=hola!%20Quisiera%20contactar" target="_blank" title="whatapps">
            <i class="fa-brands fa-whatsapp"></i>
          </a>

        </div>
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
