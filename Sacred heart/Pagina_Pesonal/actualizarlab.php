<?php 

include "conexion1.php";
$con=conectar();
$codigo=$_REQUEST['codigo'];

$consulta = "SELECT * FROM gastos_lab WHERE ID_G_LAB='$codigo'";

$resultado = mysqli_query($con, $consulta);

$fila=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Gastos de Laboratorio</title> 
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" type="text/css" href="css/hos22.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>

<div class="container" >
      <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Actualizar Gastos de Laboratorio</h2>
    </div>
  
  <form method="POST" action="guardarlab.php" class="container">

    <div style="background-color: #EBEDEF;">

      <label class="form-label" for="ID_G_LAB">ID Gasto:</label>
      <input  type="text" name="ID_G_LAB" id="ID_G_LAB" readonly value="<?php echo $fila['ID_G_LAB']; ?>"><br><br>

      <label class="form-label" for="Descripcion_Lab">Descripcion:</label>
     <input type="text" name="Descripcion_Lab" id="Descripcion_Lab" value="<?php echo $fila['Descripcion_Lab']; ?>"><br><br>

                    <label class="form-label" for="Gastos_L">Gasto:</label>
                    <input type="text" name="Gastos_L" id="Gastos_L" value="<?php echo $fila['Gastos_L']; ?>" ><br><br>

      <input class="btn btn-success" type="submit" name="envio" value="Enviar">

    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  </html>