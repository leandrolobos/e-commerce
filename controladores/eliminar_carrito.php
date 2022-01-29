<?php
  include('conexion.php');

  $sql = "DELETE FROM carritos";

  if ($conn->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
      alert("¡Carrito eliminado!");
      setTimeout(function() { window.location.href = "../index.php"; }, 1);
    </script>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  return;

 ?>
