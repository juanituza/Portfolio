<header>
    <nav class="navbar navbar-expand-md mb-4">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo $pg == "index_en" ? "active" : ""  ?>" aria-current="page" href="index_en.php">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo $pg == "about_me" ? "active" : ""  ?>" href="about_me.php">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo $pg == "proyect" ? "active" : ""  ?>" href="proyect.php">Proyect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 <?php echo $pg == "contact" ? "active" : ""  ?>" href="contact.php">Contact</a>
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