<?php
  include('./modelos/modelo.php');

  function traer_productos(){
    $producto = get_productos_db();
    return($producto);
  }

 ?>
