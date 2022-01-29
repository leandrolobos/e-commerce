<?php
  include('./modelos/funciones.php');

  function traer_carrito(){
    $carrito = get_carrito_db();
    return($carrito);
  }

 ?>
