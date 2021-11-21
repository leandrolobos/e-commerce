<?php
  include('./modelos/modelo.php');

  function traer_productos(){
    $productos = [
      ['id' => 1, 'nombre' => 'Quilmes', 'precio' => 70, 'imagen' => './img/img-1.png'],
      ['id' => 2, 'nombre' => 'Andes Origen', 'precio' => 85, 'imagen' => './img/img-2.png'],
      ['id' => 3, 'nombre' => 'Stella Artois', 'precio' => 90, 'imagen' => './img/img-3.png'],
      ['id' => 4, 'nombre' => 'Red Bull', 'precio' => 115, 'imagen' => './img/img-4.png'],
      ['id' => 5, 'nombre' => 'Estancia', 'precio' => 130, 'imagen' => './img/img-5.png'],
      ['id' => 6, 'nombre' => 'Patagonia', 'precio' => 160, 'imagen' => './img/img-6.png'],
      ['id' => 7, 'nombre' => 'Coca Cola', 'precio' => 185, 'imagen' => './img/img-7.png'],
      ['id' => 8, 'nombre' => 'Branca + Coca', 'precio' => 590, 'imagen' => './img/img-8.png']
    ];
    return($productos);
  }

 ?>
