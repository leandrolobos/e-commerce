<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $data = $_POST;

  if ($data['password'] != $data['password2']) {
    echo "Las contraseñas no coinciden";
    header("refresh:2; url=registro.php");
  } else {
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
  }

  unset($data['password2']);
  $data['habilitado'] = true;

  $enlace = mysqli_connect("127.0.0.1", "root", "", "template");

  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  $sql = "INSERT INTO usuarios (dni, nombre, apellido, email, telefono, calle, num_calle, cod_postal, password, habilitado)
  VALUES ('".$data["dni"]."','".$data["nombre"]."','".$data["apellido"]."','".$data["email"]."','".$data["telefono"]."','".$data["calle"]."','".$data["num_calle"]."','".$data["cod_postal"]."','".$data["password"]."','".$data["habilitado"]."')";

  if (mysqli_query($enlace, $sql)) {
    echo "Usuario registrado correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
  }

?>
