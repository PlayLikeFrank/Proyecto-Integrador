<?php 
  include("conexion1.php");
  $con=conectar();
  $id = $_REQUEST['Codigo'];
  $eliminar = "DELETE FROM medico WHERE ID_Medico='$id'";
  $elimina= mysqli_query($con, $eliminar);
  echo "<script>window.location = 'medico.php' </script>";
  $conn->close();
 ?>