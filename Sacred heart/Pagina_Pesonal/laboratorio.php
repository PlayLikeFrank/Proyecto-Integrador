


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laboratorio</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
	<link rel="stylesheet" type="text/css" href="css/hos22.css">

</head>
</head>
<body>
	
		<div class="container">
  <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Bienvenido a Laboratorio</h2>
    </div>

    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID_G_LAB</th>
      <th scope="col">Descripcion_Lab</th>
      <th scope="col">Gastos_L</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include "conexion1.php";
    $conn = conectar();
    $s2="SELECT * FROM gastos_lab";
      $res2=mysqli_query($conn,$s2);
      while ($row2 = mysqli_fetch_assoc($res2)) {
     ?>
    <tr>
      <td scope="row"><?php echo $row2['ID_G_LAB']?></td>
      <td scope="row"><?php echo $row2['Descripcion_Lab'] ?></td>
      <td scope="row"><?php echo $row2['Gastos_L'] ?></td>
      <!-- <td scope="row"><a class="btn btn-success" href="actualizar.php?codigo=<?php //echo $row2['ID_G_LAB']; ?>">Modificar</a>
      <a class="btn btn-danger" href="eliminar.php?Codigo=<?php //echo $row2['ID_G_LAB']; ?>">Eliminar</a></td> -->
    </tr>
    <?php
          }
        ?>
  </tbody>
</table>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


