
<?php

include "conexion1.php";
$con=conectar();

$ID_ServAd=$_POST['ID_ServAd'];
$Descripcion_ServAd=$_POST['Descripcion_ServAd'];
$Precio_Serv=$_POST['Precio_Serv'];
$Gastos_Serv=$_POST['Gastos_Serv'];

$update="UPDATE servicios_ad SET Descripcion_ServAd='$Descripcion_ServAd', Precio_Serv='$Precio_Serv' WHERE ID_ServAd='$ID_ServAd'";

if(mysqli_query($con, $update)){
	echo "Registro actualizado";
}

else{
	echo "error: No se ejecuto $update.mysqli_error($con)";
}

header("Location: serviciosAd.php");



?>