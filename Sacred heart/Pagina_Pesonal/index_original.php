<?php

include("conexion1.php");
	$conn=conectar();


		if (isset($_POST['pass'],$_POST['user'])) {
			$user=$_REQUEST['user'];
			$password=$_REQUEST['pass'];
			
			
			$selectquery="SELECT Area FROM personal WHERE usuario='".$user."' AND password ='".$password."'";

			
			$query=mysqli_query($conn, $selectquery);
			$totalnums1=mysqli_num_rows($query);
			$array=mysqli_fetch_array($query);
			
		if($totalnums1 <=0){
			echo "<script>alert('Ingrese su usuario y/o contraseña de nuevo');window.location.href='log.php';
</script>";
			 }else{ 
			 	if(implode(" ",$array)=="admin admin"){
			 		header('Location: menuad.php');

			 	}else 
			 		if(implode(" ",$array)=="bodega bodega"){
			 		header('Location: bodega.php');

			 	}else 
			 		if(implode(" ",$array)=="medico medico"){
			 		header('Location: medico.php');

			 	}else
			 		if(implode(" ",$array)=="farmacia farmacia"){
			 			header('Location: farmacia.php');
			 }else
			 	if(implode(" ",$array)=="administracion administracion"){
			 			header('Location: administracion.php');
			  }else
			 	if(implode(" ",$array)=="paciente paciente"){
			 			header('Location: paciente.php');

			 }else{
			 		echo "<script>alert('Ingrese su usuario y/o contraseña de nuevo');
			 		window.location.href='log.php';
</script>";
			 }
		}
	}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Sacred Heart </title>
	<link rel="website icon" type="png" href="img/ho2.png">
</head>
<body>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<form method="POST" action="log.php">

	<div id="captura4">
  <img src="img\HO2.PNG" width="150" height="150" >
</div>
<div id="captura4">
Sacred heart 
  </div>



      
      <label class="fw-normal" for="user">Usuario:</label>
			<input type="text" name="user" id="user" placeholder="Usuario" required><br><br>


     	<label class="fw-normal" for="pass">Contraseña:</label>
			<input type="password" name="pass" id="pass" placeholder="Contraseña" required ><br><br>

			<input type="submit"  class="btn btn-outline-primary"  name="envio" value="Enviar">


</form>




<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
