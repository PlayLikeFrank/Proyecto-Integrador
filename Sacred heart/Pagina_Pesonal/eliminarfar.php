<?php 
  include("conexion1.php");
  $con=conectar();
  $id = $_REQUEST['Codigo'];
  $eliminar = "DELETE FROM gastos_farmacia WHERE ID_G_Farmacia='$id'";
  $elimina= mysqli_query($con, $eliminar);
  echo "<script>window.location = 'gastosfar.php' </script>";
  $conn->close();
 ?>