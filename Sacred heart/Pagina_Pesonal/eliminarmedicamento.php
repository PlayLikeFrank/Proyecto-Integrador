<?php 
	include("conexion1.php");
	$conn=conectar();
	$id = $_GET['Codigo'];
	$eliminar = "DELETE FROM medicamento WHERE ID_MED='$id'";
	$elimina= mysqli_query($conn, $eliminar);
	echo "<script>window.location = 'farmacia.php' </script>";
	$conn->close();
 ?>