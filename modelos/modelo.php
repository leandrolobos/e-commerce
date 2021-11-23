<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$enlace = mysqli_connect("localhost", "root", "", "template");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$data = $_POST;

function get_productos_db(){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "template";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

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

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "template";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM carritos";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $carrito[] = $row;
    }
  } else {
    echo "0 results";
  }

  return $carrito;

  mysqli_close($conn);

}
?>
