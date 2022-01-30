<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <?php include('./head.php') ?>
      <?php include('./controladores/traer_carrito.php') ?>
      <?php $carrito = traer_carrito(); ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include("./controladores/sesion.php");?>
        <!-- Carrito-->
        <section class="carrito-section" id="carrito">
            <div class="container">
                <div class="row mx-auto text-center">
                  <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i>carrito de compras</h3>
                </div>
                <div class="row">
                  <div class="container">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 text-left">producto</th>
                          <th class="col-1 text-center">cantidad</th>
                          <th class="col-2 text-center">precio</th>
                          <th class="col-2 text-center">subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($carrito as $item){ ?>
                        <tr>
                          <td class="align-middle"><img src="<?php echo $item['imagen']; ?>" /></td>
                          <td class="align-middle text-left"><?php echo $item['nombre']; ?></td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control cantidad" placeholder="1" value="1">
                          </td>
                          <td class="align-middle text-center">$<span class="precio"><?php echo $item['precio']; ?></span></td>
                          <td class="align-middle text-center">$<span class="subtotal"><?php echo $item['precio']; ?></span></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                    <h5>Total de la compra: $<span id="total"></span></h5>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <a class="btn btn-comprar m-1" href="./controladores/eliminar_carrito.php">Vaciar carrito</a>
                  <a class="btn btn-comprar m-1" href="http://wa.me/5492617001619" target="_blank">Iniciar compra</a>
                </div>
            </div>
        </section>
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
