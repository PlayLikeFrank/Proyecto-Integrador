<?php
session_start();
if (!isset($_SESSION["USER"]) || $_SESSION["USER"] != "invitado") {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
    </script>";
  exit;
}

include "conexion1.php";
$con = conectar();
$select = isset($_POST['opciones']) ? $_POST['opciones'] : '';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Escalado para móviles -->
  <link rel="icon" type="image/png" href="img/IGSF.PNG">
  <title>Table de Paciente</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" href="css/hos22.css">

  <style>
    .header {
      background-color: #FFB6C1;
      color: #000000;
      padding: 1rem;
      border-radius: 5px;
      margin-bottom: 1rem;
      font-family: 'Nanum Myeongjo';
    }

    .table-container {
      background-color: #FFFFFF;
      padding: 1.5rem;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table th {
      background-color: #F5F5DC;
      color: #000000;
    }

    .table td {
      background-color: #ffffff;
      color: #000000;
    }

    .btn-secondary {
      background-color: #e77e80;
      border-color: #e77e80;
      color: #000000;
    }

    .btn-secondary:hover {
      background-color: #e77e80;
      border-color: #e77e80;
    }

    .btn-dark {
      background-color: #D3D3D3;
      border-color: #D3D3D3;
      color: #000000;
    }

    .btn-dark:hover {
      background-color: #D3D3D3;
      border-color: #D3D3D3;
    }

    .btn-info {
      background-color: #cca9dd;
      border-color: #cca9dd;
      color: #000000;
    }

    .btn-info:hover {
      background-color: #cca9dd;
      border-color: #cca9dd;
    }

    .let {
      font-family: 'Nanum Myeongjo';
    }
  </style>

</head>

<body>
  <div class="container text-center">
    <h2 class="header">Tabla de Pacientes</h2>
  </div>

  <div class="container table-container">

    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="let" scope="col">ID</th>
            <th class="let" scope="col">CURP</th>
            <th class="let" scope="col">Nombre</th>
            <th class="let" scope="col">Edad</th>
            <th class="let" scope="col">Teléfono</th>
            <th class="let" scope="col">Dirección</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $s8 = "SELECT * FROM paciente";
          $res8 = mysqli_query($con, $s8);
          while ($row8 = mysqli_fetch_assoc($res8)) {
            ?>
            <tr>
              <td scope="row"><?php echo $row8['ID_Paciente'] ?></td>
              <td scope="row"><?php echo $row8['CURP'] ?></td>
              <td scope="row"><?php echo $row8['Nombre_Comp'] ?></td>
              <td scope="row"><?php echo $row8['Edad'] ?></td>
              <td scope="row"><?php echo $row8['Telefono'] ?></td>
              <td scope="row"><?php echo $row8['Direccion'] ?></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>

      <div class="text-center mt-3">
        <?php
        echo "<a href='invitado.php' class='btn btn-dark'>Regresar</a>";
        ?>

      </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script> -->
      <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>