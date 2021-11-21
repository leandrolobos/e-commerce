<?php
  include('./modelos/modelo.php');

  if ($data['password'] != $data['password2']) {
    echo "Las contraseñas no coinciden";
    header("refresh:2; url=registro.php");
  } else {
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
  }

  unset($data['password2']);
  $data['habilitado'] = true;

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
