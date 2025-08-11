

<?php 
include "conexion1.php";
$con=conectar();
$codigo=$_REQUEST['codigo'];
$consulta = "SELECT * FROM gastos_farmacia WHERE ID_G_Farmacia='$codigo'";
$resultado = mysqli_query($con, $consulta);
$fila=$resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acualizar Gastos de Farmacia</title>
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" type="text/css" href="css/hos22.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>

  <div class="container" >
    <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Actualizar Gastos de Farmacia</h2>
  </div>
  
  <form method="POST" action="guardarfar.php">

    <div class="container" style="background-color: #EBEDEF;">

      <label class="form-label" for="ID_G_Farmacia">ID Gasto:</label>
      <input  type="text" name="ID_G_Farmacia" id="ID_G_Farmacia" readonly value="<?php echo $fila['ID_G_Farmacia']; ?>"><br><br>

      <label class="form-label" for="Descripcion_Farm">Descripcion:</label>
      <input type="text" name="Descripcion_Farm" id="Descripcion_Farm" value="<?php echo $fila['Descripcion_Farm']; ?>"><br><br>

      <label class="form-label" for="Gastos_F">Gasto:</label>
      <input type="text" name="Gastos_F" id="Gastos_F" value="<?php echo $fila['Gastos_F']; ?>" ><br><br>

      <input class="btn btn-success" type="submit" name="envio" value="Enviar">

    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  </html>

  