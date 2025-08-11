<?php 
  include("conexion1.php");
  $con=conectar();
  $id = $_REQUEST['Codigo'];
  $eliminar = "DELETE FROM gastos_lab WHERE ID_G_LAB='$id'";
  $elimina= mysqli_query($con, $eliminar);
  echo "<script>window.location = 'gastoslab.php' </script>";
  $conn->close();
 ?>