<?php

include "conexion1.php";
$con=conectar();
session_start();
$ID_G_Farmacia=$_POST['ID_G_Farmacia'];
$Descripcion_Farm=$_POST['Descripcion_Farm'];
$Gastos_L=$_POST['Gastos_F'];

$update="UPDATE gastos_farmacia SET ID_G_Farmacia='$ID_G_Farmacia', Descripcion_Farm='$Descripcion_Farm', Gastos_F='$Gastos_F' WHERE ID_G_Farmacia='$ID_G_Farmacia'";

if(mysqli_query($con, $update)){
	echo "Registro actualizado";
}

else{
	echo "error: No se ejecuto $update.mysqli_error($con)";
}

header("Location: gastosfar.php");



?>