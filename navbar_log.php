<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo.png" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#productos">productos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">contacto</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./controladores/cerrar_sesion.php">cerrar sesión</a></li>
                <span id='logueado'><li class="nav-item"><a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-basket"></i></a></li></span>

            </ul>
        </div>
    </div>
    <input type="hidden" id="user_dni" name="user_dni" value="<?php echo $_SESSION['user'];?>">
</nav>
