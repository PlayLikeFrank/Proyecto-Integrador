<?php

include "conexion1.php";
$con=conectar();
session_start();

$ID_Paciente=$_POST['ID_Paciente'];
$Nombre_Comp=$_POST['Nombre_Comp'];
$CURP=$_POST['CURP'];
$Edad=$_POST['Edad'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];

$update="UPDATE paciente SET ID_Paciente='$ID_Paciente', CURP='$CURP', Nombre_Comp='$Nombre_Comp', Edad='$Edad', Telefono='$Telefono', Direccion='$Direccion' WHERE ID_Paciente='$ID_Paciente'";

if(mysqli_query($con, $update)){
	echo "Registro actualizado";
}

else{
	echo "error: No se ejecuto $update.mysqli_error($con)";
}
if (isset($_SESSION['USER'])) {
	header("Location: paciente.php");
}      




?>