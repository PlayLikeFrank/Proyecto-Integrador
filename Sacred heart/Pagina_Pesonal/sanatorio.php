


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sanatorio</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
	<link rel="stylesheet" type="text/css" href="css/hos22.css">

</head>
</head>
<body>
	
		<div class="container">
  <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Bienvenido a Sanatorio</h2>
    </div>

    <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID_G_Sanatorio</th>
      <th scope="col">Descripcion_San</th>
      <th scope="col">Gastos_S</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     include "conexion1.php";
    $conn = conectar();
  $s3="SELECT * FROM gastos_sanatorio";
      $res3=mysqli_query($conn,$s3);
      while ($row3 = mysqli_fetch_assoc($res3)) {
     ?>
    <tr>
      <td scope="row"><?php echo $row3['ID_G_Sanatorio']?></td>
      <td scope="row"><?php echo $row3['Descripcion_San'] ?></td>
      <td scope="row"><?php echo $row3['Gastos_S'] ?></td>
      <!-- <td scope="row"><a class="btn btn-success" href="actualizar.php?codigo=<?php echo $row3['ID_G_Sanatorio']; ?>">Modificar</a>
      <a class="btn btn-danger" href="eliminar.php?Codigo=<?php echo $row3['ID_G_Sanatorio']; ?>">Eliminar</a></td> -->
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


