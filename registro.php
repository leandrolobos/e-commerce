<!DOCTYPE html>
<html lang="en">
    <head>
      <?php include('./head.php') ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php session_start(); var_dump($_SESSION);
        if (isset ($_SESSION['user']) != "") {
          include('./navbar_logueado.php');
        } else {
          include('./navbar_no_logueado.php');
        }
        ?>
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-12">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4">registro</h1>
                    <form method="post" action="./registrarse.php">
                      <div class="container">
                        <div class="row">
                          <div class="col-6 col-md-3">
                            <input type="text" name="dni" class="form-control mb-4" placeholder="DNI">
                            <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre">
                            <input type="text" name="apellido" class="form-control mb-4" placeholder="Apellido">
                          </div>
                          <div class="col-6 col-md-3">
                            <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
                            <input type="text" name="telefono" class="form-control mb-4" placeholder="Teléfono">
                          </div>
                          <div class="col-6 col-md-3">
                            <input type="text" name="calle" class="form-control mb-4" placeholder="Calle">
                            <input type="text" name="num_calle" class="form-control mb-4" placeholder="Número">
                            <input type="text" name="cod_postal" class="form-control mb-4" placeholder="Código postal">
                          </div>
                          <div class="col-6 col-md-3">
                            <input type="password" name="password" class="form-control mb-4" placeholder="Contraseña">
                            <input type="password" name="password2" class="form-control mb-4" placeholder="Confirmar contraseña">
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-login btn-block">Registrar</button>
                      <h6 class="mt-3">¿Ya tenés cuenta? <a href="./login.php">Logueate</a> </h6>
                    </form>
                </div>
              </div>
            </div>
        </header>
        <?php include('./footer.php') ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
