<?php
  include('conexion.php');
  $data = $_POST;

  if (isset($data['registrar'])) {

    if (strlen($data['dni']) >= 1 &&
    strlen($data['nombre']) >= 1 &&
    strlen($data['apellido']) >= 1 &&
    strlen($data['telefono']) >= 1 &&
    strlen($data['calle']) >= 1 &&
    strlen($data['num_calle']) >= 1 &&
    strlen($data['cod_postal']) >= 1 &&
    strlen($data['password']) >= 1 &&
    strlen($data['password2']) >= 1) {

      if ($data['password'] != $data['password2']) {
        ?>
        <script type="text/javascript">
          alert("¡Las contraseñas no coinciden!");
          setTimeout(function() { window.location.href = "./registro.php"; }, 1);
        </script>
        <?php
      } else {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        unset($data['password2']);
        $data['habilitado'] = true;

        $sql = "INSERT INTO usuarios (dni, nombre, apellido, email, telefono, calle, num_calle, cod_postal, password, habilitado)
        VALUES ('".$data["dni"]."','".$data["nombre"]."','".$data["apellido"]."','".$data["email"]."','".$data["telefono"]."','".$data["calle"]."','".$data["num_calle"]."','".$data["cod_postal"]."','".$data["password"]."','".$data["habilitado"]."')";

        if (mysqli_query($conn, $sql)) {
          echo "¡Usuario registrado correctamente!";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }

    } else {
      	?>
        <script type="text/javascript">
          alert("Por favor, complete los campos.");
          setTimeout(function() { window.location.href = "./registro.php"; }, 1);
        </script>
        <?php
      }
  }
?>
