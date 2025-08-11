<?php 

include "conexion1.php";
$con=conectar();
$codigo=$_REQUEST['codigo'];

$consulta = "SELECT * FROM gastos_sanatorio WHERE ID_G_Sanatorio='$codigo'";

$resultado = mysqli_query($con, $consulta);

$fila=$resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container" >
      <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Actualizar gasyos de Sanatorio</h2>
    </div>
  
  <form method="POST" action="guardarsan.php">

    <div style="background-color: #EBEDEF;">

      <label class="form-label" for="ID_G_Sanatorio">ID Gasto:</label>
      <input  type="text" name="ID_G_Sanatorio" id="ID_G_Sanatorio" readonly value="<?php echo $fila['ID_G_Sanatorio']; ?>"><br><br>

      <label class="form-label" for="Descripcion_San">Descripcion:</label>
     <input type="text" name="Descripcion_San" id="Descripcion_San" value="<?php echo $fila['Descripcion_San']; ?>"><br><br>

                    <label class="form-label" for="Gastos_S">Gasto:</label>
                    <input type="text" name="Gastos_S" id="Gastos_S" value="<?php echo $fila['Gastos_S']; ?>" ><br><br>

      <input class="btn btn-success" type="submit" name="envio" value="Enviar">

    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
  </html>