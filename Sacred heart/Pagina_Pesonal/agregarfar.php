<?php
 include('conexion1.php');
     $con=conectar();


    $S_I = "SELECT ID_G_Farmacia FROM gastos_farmacia ORDER BY ID_G_Farmacia DESC LIMIT 1";
    $R=mysqli_query($con,$S_I);
    $ROW = mysqli_fetch_assoc($R);
    $ultimo_id = $ROW['ID_G_Farmacia']+1;

 if (isset($_POST['ID_G_Farmacia'], $_POST['Descripcion_Farm'], $_POST['Gastos_F']))
 {

  $ID_G_Farmacia=$_POST['ID_G_Farmacia'];
$Descripcion_Farm=$_POST['Descripcion_Farm'];
$Gastos_F=$_POST['Gastos_F'];



  $insert= "INSERT INTO gastos_farmacia(ID_G_Farmacia, Descripcion_Farm, Gastos_F) VALUES(' $ID_G_Farmacia','$Descripcion_Farm', '$Gastos_F')";


  $query=mysqli_query($con, $insert);

  if($query)
  {
   header('location:gastosfar.php');
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
      <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Insertar Gasto de Farmacia</h2>
    </div>

    <div style="background-color: #EBEDEF;">

      <div  class="container" style="background-color: #EBEDEF;">

        <label class="form-label" for="ID_G_Farmacia">ID Gasto:</label>
        <input  placeholder="ID_G_Farmacia" class="form-control" type="text" name="ID_G_Farmacia" id="ID_G_Farmacia" value="<?php echo $ultimo_id; ?>" required><br><br>
        
        <label class="form-label" for="Descripcion_Farm">Descripcion:</label>
     <input type="text" placeholder="Descripcion_Farm"  name="Descripcion_Farm" id="Descripcion_Farm" required><br><br>

                    <label class="form-label" for="Gastos_F">Gastos de Farmacia:</label>
                    <input type="text" placeholder="Gastos_F"  name="Gastos_F" id="Gastos_F" required><br><br>

                    

        <center><input type="submit" class="btn btn-secondary" name="envio" value="Enviar"></center>

      </div>
    </div>
  </form>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>