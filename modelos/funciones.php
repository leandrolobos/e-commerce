<?php
function get_productos_db(){
  include('./controladores/conexion.php');

  $sql = "SELECT * FROM productos";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $producto[] = $row;
    }
  } else {
    echo "0 results";
  }

  return $producto;

  mysqli_close($conn);

}

function get_carrito_db(){
  include('./controladores/conexion.php');

  $sql = "SELECT * FROM carritos";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $carrito[] = $row;
    }
  } else {
    $carrito = 0;
  }

  return $carrito;

  mysqli_close($conn);

}
?>
