<?php

include "conexion1.php";
$con=conectar();
session_start();
$ID_MED=$_POST['ID_MED'];
$Descripcion_MED=$_POST['Descripcion_MED'];
$PrecioMED=$_POST['PrecioMED'];
$Cantidad=$_POST['Cantidad'];
$ID_P_CargoMED=$_POST['ID_P_CargoMED'];


$update="update medicamento SET Descripcion_MED='$Descripcion_MED', PrecioMED='$PrecioMED', Cantidad='$Cantidad', ID_P_CargoMED='$ID_P_CargoMED' where ID_MED='$ID_MED'";


if(mysqli_query($con, $update)){
	echo "Registro actualizado";
}

else{
	echo "error: No se ejecuto $update.mysqli_error($conn)";
}

if (isset($_SESSION['USER'])) {
	header("Location: farmacia.php");
}else {           
	header("Location: farmacia.php");
}
?>
