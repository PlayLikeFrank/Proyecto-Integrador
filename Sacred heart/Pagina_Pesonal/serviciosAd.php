<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Servicios Adicionales</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
	<link rel="stylesheet" type="text/css" href="css/hos22.css">
  <div class="container">
    <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Servicios adicionales</h2>
  </div>

</head>
</head>
<body>


  <div class="container">
    <table class="table">
      <thead>
        

        <tr>
          <th scope="col">ID Servicio Adicional</th>
          <th scope="col">Descripcion Servicio Adicional</th>
          <th scope="col">Precio Servicio Adicional</th>
          <th scope="col">Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include "conexion1.php";
        $conn = conectar();
        $s10="SELECT * FROM servicios_ad";
        $res10=mysqli_query($conn,$s10);
        while ($row10= mysqli_fetch_assoc($res10)) {
        ?>
        <tr>
          <td scope="row"><?php echo $row10['ID_ServAd']?></td>
          <td scope="row"><?php echo $row10['Descripcion_ServAd'] ?></td>
          <td scope="row"><?php echo $row10['Precio_Serv'] ?></td>
         
      <td scope="row"><a class="btn btn-secondary" href="actuaSV.php?codigo=<?php echo $row10['ID_ServAd']; ?>">Modificar</a>
            
      <?php
    }
    ?>
  </tbody>
</table>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


