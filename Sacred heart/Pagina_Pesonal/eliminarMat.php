<?php 
	include("conexion1.php");
	$conn=conectar();
	$id = $_GET['Codigo'];
	$eliminar = "DELETE FROM material WHERE ID_MAT='$id'";
	$elimina= mysqli_query($conn, $eliminar);
	echo "<script>window.location = 'bodega.php' </script>";
	$conn->close();
 ?>