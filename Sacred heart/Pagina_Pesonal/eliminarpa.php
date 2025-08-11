<?php 
  include("conexion1.php");
  $con=conectar();
  $id = $_REQUEST['Codigo'];
  $eliminar = "DELETE FROM paciente WHERE ID_Paciente='$id'";
  $elimina= mysqli_query($con, $eliminar);
  echo "<script>window.location = 'paciente.php' </script>";
  $conn->close();
 ?>