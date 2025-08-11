<?php
include "conexion1.php";
$con = conectar();
$codigo = $_REQUEST['codigo'];
session_start();
if (!isset($_SESSION["USER"]) || !($_SESSION["USER"] == "administracion" || $_SESSION["USER"] == "admin"  || $_SESSION["USER"] == "paciente")) {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
	    </script>";
  exit;
}

$consulta = "SELECT * FROM paciente WHERE ID_Paciente='$codigo'";

$resultado = mysqli_query($con, $consulta);

$fila = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Paciente</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" type="text/css" href="css/hos22.css">

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #F0F8FF;
    }

    .header {
      background-color: #FFB6C1;
      color: #000000;
      padding: 1.5rem;
      border-radius: 8px;
      margin-bottom: 2rem;
      font-family: 'Nanum Myeongjo';
    }

    .container {
      max-width: 100%;
      padding-left: 15px;
      padding-right: 15px;
    }

    .form-container {
      background-color: #FFFFFF;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: bold;
      color: #333333;
    }

    .form-control {
      border-radius: 5px;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .table th {
      background-color: #F5F5DC;
      color: #000000;
    }

    .btn-secondary {
      background-color: #e77e80;
      border-color: #e77e80;
      color: #000000;
      border-radius: 5px;
    }

    .btn-secondary:hover {
      background-color: #e77e80;
      border-color: #e77e80;
    }

    .btn-dark {
      background-color: #D3D3D3;
      border-color: #D3D3D3;
      color: #000000;
      border-radius: 5px;
    }

    .btn-dark:hover {
      background-color: #D3D3D3;
      border-color: #D3D3D3;
    }

    .btn-info {
      background-color: #cca9dd;
      border-color: #cca9dd;
      color: #000000;
      border-radius: 5px;
    }

    .btn-info:hover {
      background-color: #cca9dd;
      border-color: #cca9dd;
    }

    .let {
      font-family: 'Nanum Myeongjo';
    }

    @media (max-width: 768px) {
      .form-container {
        padding: 1rem;
      }

      .header {
        font-size: 1.5rem;
      }
    }

    @media (max-width: 480px) {

      .btn-info,
      .btn-dark {
        width: 100%;
        margin-bottom: 10px;
      }

      .form-container {
        padding: 0.5rem;
      }
    }
  </style>
</head>

<body>


  <div class="container mt-5">

    <div class="header text-center">
      <h2 class="let">Actualizar Paciente</h2>
    </div>

    <form method="POST" action="guardarpa.php" class="form-container">

      <!-- <label class="form-label" for="ID_Paciente">ID Paciente:</label> -->
      <input style="visibility: hidden" name="ID_Paciente" id="ID_Paciente" readonly
        value="<?php echo $fila['ID_Paciente']; ?>">

      <div class="mb-3">
        <label class="form-label let" for="Nombre_Comp">Nombre Completo:</label>
        <input class="form-control" type="text" name="Nombre_Comp" id="Nombre_Comp"
          value="<?php echo $fila['Nombre_Comp']; ?>" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label let" for="CURP">CURP:</label>
        <input class="form-control" type="text" name="CURP" id="CURP" value="<?php echo $fila['CURP']; ?>" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label let" for="Edad">Edad:</label>
        <input class="form-control" type="text" name="Edad" id="Edad" value="<?php echo $fila['Edad']; ?>" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label let" for="Telefono">Telefono:</label>
        <input class="form-control" type="text" name="Telefono" id="Telefono" value="<?php echo $fila['Telefono']; ?>"
          readonly>
      </div>

      <div class="mb-3">
        <label class="form-label let" for="Direccion">Direccion:</label>
        <input class="form-control" type="text" name="Direccion" id="Direccion"
          value="<?php echo $fila['Direccion']; ?>" readonly>
      </div>

      <div class="d-flex flex-column flex-md-row justify-content-between">
        <button type="submit" name="envio" class="btn btn-secondary btn-sm">Enviar</button><br>
        <a href="paciente.php" class="btn btn-dark">Regresar</a></center>
      </div>
    </form>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+AmEkaIYUrGstlXbdI706tWSbBfAd"
    crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>