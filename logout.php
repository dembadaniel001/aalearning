<?php
if (isset($_POST['submit'])) {
  // code...
  session_start();
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit();
}
 ?>
