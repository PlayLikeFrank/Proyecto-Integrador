<?php 
  include("conexion1.php");
  $con=conectar();
  $id = $_REQUEST['Codigo'];
  $eliminar = "DELETE FROM gastos_sanatorio WHERE ID_G_Sanatorio='$id'";
  $elimina= mysqli_query($con, $eliminar);
  echo "<script>window.location = 'gastossan.php' </script>";
  $conn->close();
 ?>