<?php 
	include("conexion1.php");
    session_start();
    $conn=conectar();
    $codigo=$_POST['ID_P_Cargo'];
    $desc=$_POST['Nombre_Comp'];
    $asesor=$_POST['usuario'];
    $area=$_POST['password'];
    $finicio=$_REQUEST['Area'];
    $ftermino=$_POST['Puesto'];

    $update = "UPDATE personal SET Nombre_Comp='$desc', usuario='$asesor', password='$area', Area='$finicio', Puesto='$ftermino' WHERE ID_P_Cargo='$codigo'";
    if(mysqli_query($conn, $update)){
        echo "Registro actualizado";
    }
    
    else{
        echo "error: No se ejecuto $update.mysqli_error($con)";
    }
    if ($_SESSION["USER"] && $_SESSION["USER"] == "admin") {
        header("Location: mp.php");
    }else {           
        header("Location: mp.php");
    }
 ?>