<?php
  include('./modelos/modelo.php');

  function traer_carrito(){
    $carrito = get_carrito_db();
    return($carrito);
  }

 ?>
