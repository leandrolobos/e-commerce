<?php
include('conexion.php');

if (isset($_POST['enviar'])) {
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['mensaje']) >= 1) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['mensaje']);
    $fechareg = date("d/m/y");
    $consulta = "INSERT INTO mensajes (nombre, apellido, telefono, email, mensaje, fecha_reg) VALUES ('$nombre','$apellido','$telefono','$email','$mensaje','$fechareg')";
    $resultado = mysqli_query($conn,$consulta);
    if ($resultado) {
    	?>
      <script type="text/javascript">
        alert("¡Mensaje enviado correctamente!");
      </script>
         <?php
    } else {
    	?>
      <script type="text/javascript">
        alert("¡Ups! Ha ocurrido un error");
      </script>
         <?php
    }
  }   else {
    	?>
      <script type="text/javascript">
        alert("Por favor, complete los campos");
      </script>
         <?php
  }
}
?>
