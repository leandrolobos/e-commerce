<?php include("./controladores/enviar_mensaje.php");?>

<section class="contacto-section" id="contacto">
    <div class="container">
      <div class="row mx-auto text-center">
        <div class="col-lg-8 mx-auto">
            <h3 class="mb-4">contacto</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-12 mx-auto">
        <form method="post">
          <div class="row mb-3">
            <div class="col">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="name">
            </div>
            <div class="col">
              <input type="text" name="apellido" class="form-control" placeholder="Apellido" id="lastname">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="tel" name="telefono" class="form-control" placeholder="Teléfono" id="phone">
            </div>
            <div class="col">
              <input type="email" name="email" class="form-control" placeholder="Email" id="email">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <textarea type="text" name="mensaje" class="form-control" placeholder="Mensaje" id="message"></textarea>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
            </div>
            <div class="col">
              <button type="submit" name="enviar" class="btn btn-enviar">Enviar</button>
            </div>
          </div>
        </form>
      </div>
      </div>

    </div>
  <footer class="footer small text-center"><div class="container">Leandro Lobos - Potrero Digital 2021</div></footer>
</section>
