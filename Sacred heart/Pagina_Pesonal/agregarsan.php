<?php
 include('conexion1.php');
     $con=conectar();

 if (isset($_POST['ID_G_Sanatorio'], $_POST['Descripcion_San'], $_POST['Gastos_S']))
 {

  $ID_G_Sanatorio=$_POST['ID_G_Sanatorio'];
$Descripcion_San=$_POST['Descripcion_San'];
$Gastos_S=$_POST['Gastos_S'];



  $insert= "INSERT INTO gastos_sanatorio(ID_G_Sanatorio, Descripcion_San, Gastos_S) VALUES(' $ID_G_Sanatorio','$Descripcion_San', '$Gastos_S')";


  $query=mysqli_query($con, $insert);

  if($query)
  {
   header('location:gastossan.php');
   exit();

 }else{

 }

}
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
  <link rel="stylesheet" type="text/css" href="css/Admin.css">
</head>
<body>

  <div class="container">
   <form method="POST" action="">

    <div class="container" >
      <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Insertar Gasto de Sanatorio</h2>
    </div>

    <div style="background-color: #EBEDEF;">

      <div  class="container" style="background-color: #EBEDEF;">

        <label class="form-label" for="ID_G_Sanatorio">ID Gasto:</label>
        <input  placeholder="ID_G_Sanatorio" class="form-control" type="text" name="ID_G_Sanatorio" id="ID_G_Sanatorio" required><br><br>
        
        <label class="form-label" for="Descripcion_San">Descripcion:</label>
     <input type="text" placeholder="Descripcion_San"  name="Descripcion_San" id="Descripcion_San" required><br><br>

                    <label class="form-label" for="Gastos_S">Gastos de Farmacia:</label>
                    <input type="text" placeholder="Gastos_S"  name="Gastos_S" id="Gastos_S" required><br><br>

                    

        <center><input type="submit" class="btn btn-secondary" name="envio" value="Enviar"></center>

      </div>
    </div>
  </form>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>