<?php 
	include("conexion1.php");
	session_start();
	$conn=conectar();
	$id = $_GET['Codigo'];
	$eliminar = "DELETE FROM personal WHERE ID_P_Cargo='$id'";
	$elimina= mysqli_query($conn, $eliminar);
	echo "<script>window.location = 'mp.php' </script>";
	$conn->close();
 ?>