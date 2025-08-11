<?php

include "conexion1.php";
$con=conectar();

$ID_G_LAB=$_POST['ID_G_LAB'];
$Descripcion_Lab=$_POST['Descripcion_Lab'];
$Gastos_L=$_POST['Gastos_L'];

$update="UPDATE gastos_lab SET ID_G_LAB='$ID_G_LAB', Descripcion_Lab='$Descripcion_Lab', Gastos_L='$Gastos_L' WHERE ID_G_LAB='$ID_G_LAB'";

if(mysqli_query($con, $update)){
	echo "Registro actualizado";
}

else{
	echo "error: No se ejecuto $update.mysqli_error($con)";
}

header("Location: gastoslab.php");



?>