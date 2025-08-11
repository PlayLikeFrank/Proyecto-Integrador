<?php

include "conexion1.php";
$con = conectar();

$ID_MAT = $_POST['ID_MAT'];
$Descripcion_MAT = $_POST['Descripcion_MAT'];
$PrecioMAT = $_POST['PrecioMAT'];
$Cantidad = $_POST['Cantidad'];
$ID_P_CargoMAT = $_POST['ID_P_CargoMAT'];
session_start();

$update = "UPDATE material SET Descripcion_MAT='$Descripcion_MAT',
 PrecioMAT='$PrecioMAT',
  Cantidad='$Cantidad',
   ID_P_CargoMAT='$ID_P_CargoMAT'
    WHERE ID_MAT='$ID_MAT'";


if (mysqli_query($con, $update)) {
	echo "Registro actualizado";
} else {
	echo "error: No se ejecuto $update.mysqli_error($con)";
}


if (isset($_SESSION['USER'])) {
	header("Location: bodega.php");
} else {
	header("Location: bodega.php");
}

?>