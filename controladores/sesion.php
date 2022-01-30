<?php @session_start();
if (isset ($_SESSION['user']) != "") {
  include('./navbar_log.php');
} else {
  include('./navbar_no_log.php');
}
?>
