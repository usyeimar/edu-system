<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="form-inline position-relative d-inline-block my-2">
                <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
            </form>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://png.pngtree.com/png-clipart/20190520/original/pngtree-vector-users-icon-png-image_4144740.jpg" class="img-fluid rounded-circle avatar mr-2" alt="user-img"/>
                        <?php
                        echo $UserglobalSession;
                       
                        // echo ucwords($_SESSION['usuario']['nombre'])."". ucwords($_SESSION['usuario']['apellido']);
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Perfil.php"><i class="fas fa-user-cog"></i> Mi perfil</a>
                        <a class="dropdown-item" href="#">Suscripciones</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Commands/CerrarSession.php"><i style="color: red" class="fas fa-power-off"></i> Salir</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Fin Navbar -->