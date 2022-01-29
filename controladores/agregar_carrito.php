<?php
  include('conexion.php');
  $data = $_POST;

  $id_producto = $data['id'];
  $id_usuario = $data['id_usuario'];
  $precio = $data['precio'];
  $imagen = $data['imagen'];
  $nombre = $data['nombre'];

  $sql = "INSERT INTO carritos (id_usuario, id_producto, precio, imagen, nombre)
  VALUES ('$id_usuario', '$id_producto', '$precio', '$imagen', '$nombre')";

  if ($conn->query($sql) === TRUE) {
    echo "Nuevo producto agregado al carrito";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  return;

 ?>
