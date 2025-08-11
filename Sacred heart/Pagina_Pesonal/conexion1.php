<?php
	function conectar(){
    $host = "localhost";
    $user ="root";
    $contraseña ="";
    $bd ="proyecto";
    $con=mysqli_connect($host,$user,$contraseña);
    mysqli_select_db($con,$bd);
    return $con;
	}
?>