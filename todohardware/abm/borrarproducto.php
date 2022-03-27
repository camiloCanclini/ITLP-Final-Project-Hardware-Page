<?php

include("../procesos/conexion.php");

$enlace= conexionBD();

if(isset($_GET['id'])) {
  $codigo = $_GET['id'];
  $query = "DELETE FROM stock WHERE codigo = $codigo";
  $result = mysqli_query($enlace, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: abmmain.php');
}

?>
