<?php
 include('conexion1.php');
     $con=conectar();

       $S_I = "SELECT ID_G_LAB FROM gastos_lab ORDER BY ID_G_LAB DESC LIMIT 1";
    $R=mysqli_query($con,$S_I);
    $ROW = mysqli_fetch_assoc($R);
    $ultimo_id = $ROW['ID_G_LAB']+1;


 if (isset($_POST['ID_G_LAB'], $_POST['Descripcion_Lab'], $_POST['Gastos_L']))
 {

  $ID_G_LAB=$_POST['ID_G_LAB'];
$Descripcion_Lab=$_POST['Descripcion_Lab'];
$Gastos_L=$_POST['Gastos_L'];



  $insert= "INSERT INTO gastos_lab(ID_G_LAB, Descripcion_Lab, Gastos_L) VALUES(' $ID_G_LAB','$Descripcion_Lab', '$Gastos_L')";


  $query=mysqli_query($con, $insert);

  if($query)
  {
   header('location:gastoslab.php');
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
      <h2  class="text-center" style="background-color: #EBEDEF; color:black;">Insertar Gasto de Laboratorio</h2>
    </div>

    <div style="background-color: #EBEDEF;">

      <div  class="container" style="background-color: #EBEDEF;">

        <label class="form-label" for="ID_G_LAB">ID Gasto:</label>
        <input  placeholder="ID_G_LAB" class="form-control" type="text" name="ID_G_LAB" id="ID_G_LAB" value="<?php echo $ultimo_id; ?>"required><br><br>
        
        <label class="form-label" for="Descripcion_Lab">Descripcion:</label>
     <input type="text" placeholder="Descripcion_Lab"  name="Descripcion_Lab" id="Descripcion_Lab" required><br><br>

                    <label class="form-label" for="Gastos_L">Gastos de Lab:</label>
                    <input type="text" placeholder="Gastos_L"  name="Gastos_L" id="Gastos_L" required><br><br>
        <center><input type="submit" class="btn btn-secondary" name="envio" value="Enviar"></center>

      </div>
    </div>
  </form>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>