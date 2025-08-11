<?php

include "conexion1.php";
$con=conectar();

$ID_G_Sanatorio=$_POST['ID_G_Sanatorio'];
$Descripcion_San=$_POST['Descripcion_San'];
$Gastos_S=$_POST['Gastos_S'];

$update="UPDATE gastos_sanatorio SET ID_G_Sanatorio='$ID_G_Sanatorio', Descripcion_San='$Descripcion_San', Gastos_S='$Gastos_S' WHERE ID_G_Sanatorio='$ID_G_Sanatorio'";

if(mysqli_query($con, $update)){
	echo "Registro actualizado";
}

else{
	echo "error: No se ejecuto $update.mysqli_error($con)";
}

header("Location: gastossan.php");



?>