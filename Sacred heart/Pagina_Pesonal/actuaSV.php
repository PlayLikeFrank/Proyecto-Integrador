<?php 

include "conexion1.php";
$con=conectar();
$codigo=$_REQUEST['codigo'];

$consulta = "SELECT * FROM servicios_ad WHERE ID_ServAd='$codigo'";

$resultado = mysqli_query($con, $consulta);

$fila=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" type="text/css" href="css/hos22.css">
</head>
<body>

<div class="container" >
      <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Actualizar precios</h2>
    </div>
  
  <form method="POST" action="guardarSV.php">

    <div style="background-color: #EBEDEF;">

      <label class="form-label" for="ID_ServAd">ID Servicio Adicional:</label>
      <input  type="text" name="ID_ServAd" id="ID_ServAd" readonly value="<?php echo $fila['ID_ServAd']; ?>"><br><br>

      <label class="form-label" for="Descripcion_ServAd"><DATA>Nombre del servicio</DATA>:</label>
      <input type="text" name="Descripcion_ServAd" id="Descripcion_ServAd" readonly value="<?php echo $fila['Descripcion_ServAd']; ?>"><br><br>

      <label class="form-label" for="Precio_Serv">Precio del servicio:</label>
      <input type="text" name="Precio_Serv" id="Precio_Serv"  value="<?php echo $fila['Precio_Serv']; ?>"><br><br>

      <label class="form-label" for="Gastos_Serv">Gastos servicio:</label>
      <input type="text" name="Gastos_Serv" id="Gastos_Serv" readonly value="<?php echo $fila['Gastos_Serv']; ?>"><br><br>

      <input class="btn btn-success" type="submit" name="envio" value="Enviar">

    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  
