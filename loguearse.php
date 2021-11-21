<?php
  include('./modelos/modelo.php');

  $sql = "SELECT * FROM usuarios WHERE dni = '".$data["dni"]."'";

  $result = mysqli_query($enlace, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($usuario = mysqli_fetch_assoc($result)) {
      echo "DNI: " . $usuario["dni"]. " . Nombre: " . $usuario["nombre"]. " " . $usuario["apellido"]. "<br>";
      $hash = $usuario['password'];

      if (password_verify($data['password'], $hash)) {
        echo "La contraseña es válida";
        session_start();
        $_SESSION['user'] = $usuario['dni'];
        header("refresh:1;url=http://localhost/template");
      } else {
        session_destroy();
        echo "La contraseña no es válida";
      }
    }
  } else {
    echo "Su usuario no se encuentra registrado";
  }
?>
