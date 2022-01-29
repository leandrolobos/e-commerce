<?php
  include('conexion.php');
  $data = $_POST;

  $sql = "SELECT * FROM usuarios WHERE dni = '".$data["dni"]."'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($usuario = mysqli_fetch_assoc($result)) {
      echo "DNI: " . $usuario["dni"]. ". Nombre: " . $usuario["nombre"]. " " . $usuario["apellido"]. "<br>";
      $hash = $usuario['password'];

      if (password_verify($data['password'], $hash)) {
        echo "La contraseña es válida";
        session_start();
        $_SESSION['user'] = $usuario['dni'];
        header("Location: ../index.php");
        die();
      } else {
          ?>
          <script type="text/javascript">
            alert("¡La contraseña no es válida!");
            setTimeout(function() { window.location.href = "../login.php"; }, 1);
          </script>
          <?php
      }
    }
  } else {
      ?>
      <script type="text/javascript">
        alert("Su usuario no se encuentra registrado o no ha ingresado los campos correctamente.");
        setTimeout(function() { window.location.href = "../login.php"; }, 1);
      </script>
      <?php
    }
?>
