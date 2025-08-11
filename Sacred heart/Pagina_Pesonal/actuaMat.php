<?php
include "conexion1.php";
$con = conectar();
session_start();
if (!isset($_SESSION["USER"]) || !($_SESSION["USER"] == "bodega" || $_SESSION["USER"] == "admin")) {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
	    </script>";
  exit;
}
$codigo = $_REQUEST['codigo'];

$consulta = "SELECT * FROM material WHERE ID_MAT='$codigo'";
$resultado = mysqli_query($con, $consulta);
$fila = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar Material</title>
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
      <h2 class="let">Actualizar Material</h2>
    </div>

    <form method="POST" action="guardarMat.php" class="form-container">
      <input style="visibility: hidden" type="text" name="ID_MAT" id="ID_MAT" class="form-control"
        value="<?php echo $fila['ID_MAT']; ?>" readonly>

      <div class="mb-3">
        <label for="Descripcion_MAT" class="form-label let">Descripción:</label>
        <input type="text" name="Descripcion_MAT" id="Descripcion_MAT" class="form-control"
          value="<?php echo $fila['Descripcion_MAT']; ?>" readonly>
      </div>

      <div class="mb-3">
        <label for="PrecioMAT" class="form-label let">Precio:</label>
        <input type="text" name="PrecioMAT" id="PrecioMAT" class="form-control"
          value="<?php echo $fila['PrecioMAT']; ?>" readonly>
      </div>

      <div class="mb-3">
        <label for="Cantidad" class="form-label let">Cantidad:</label>
        <input type="text" name="Cantidad" id="Cantidad" class="form-control" value="<?php echo $fila['Cantidad']; ?>"
          readonly>
      </div>

      <div class="d-flex flex-column flex-md-row justify-content-between">
        <button type="submit" name="envio" class="btn btn-secondary btn-sm">Enviar</button><br>
        <a href="bodega.php" class="btn btn-dark btn-sm">Regresar</a>
      </div>

      <input style="visibility: hidden" type="text" name="ID_P_CargoMAT" id="ID_P_CargoMAT" class="form-control"
        value="<?php echo $fila['ID_P_CargoMAT']; ?>" readonly>

    </form>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+AmEkaIYUrGstlXbdI706tWSbBfAd"
    crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>