<?php

include "conexion1.php";
$con=conectar();

$ID_Medico=$_POST['ID_Medico'];
$Nombre_Comp=$_POST['Nombre_Comp'];
$Cedula_Prof=$_POST['Cedula_Prof'];
$Tipo_Asociado=$_POST['Tipo_Asociado'];
$Honorarios_Med=$_POST['Honorarios_Med'];


$update="UPDATE medico SET Nombre_Comp='$Nombre_Comp', Cedula_Prof='$Cedula_Prof', Tipo_Asociado='$Tipo_Asociado', Honorarios_Med='$Honorarios_Med' WHERE ID_Medico='$ID_Medico'";

if(mysqli_query($con, $update)){
	echo "Registro actualizado";
}

else{
	echo "error: No se ejecuto $update.mysqli_error($con)";
}

if (isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Admin") {
	header("Location: medico.php?Admin=Admin");
}else if (isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Administracion") {
	header("Location: medico.php?Admin=Administracion");
}else {           
	header("Location: medico.php");
}


?>

