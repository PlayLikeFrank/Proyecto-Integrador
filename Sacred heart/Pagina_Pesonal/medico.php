<?php
session_start();
if (
  !isset($_SESSION["USER"]) || !($_SESSION["USER"] == "admin" || $_SESSION["USER"] == "administracion" || $_SESSION["USER"] == "medico")
) {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
      </script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="img/IGSF.PNG">
  <title>Medicos</title>
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
    <h2 class="header">Medicos</h2>
  </div>

  <div class="container table-container">

    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="let" scope="col">ID</th>
            <th class="let" scope="col">Nombre</th>
            <th class="let" scope="col">Cédula Profesional</th>
            <th class="let" scope="col">Tipo de Asociado</th>
            <th class="let" scope="col">Honorarios</th>
            <th class="let" scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "conexion1.php";
          $conn = conectar();
          $s6 = "SELECT * FROM medico";
          $res6 = mysqli_query($conn, $s6);
          while ($row6 = mysqli_fetch_assoc($res6)) {
            $Ad = "Administracion";
            ?>
            <tr>
              <td scope="row"><?php echo $row6['ID_Medico'] ?></td>
              <td scope="row"><?php echo $row6['Nombre_Comp'] ?></td>
              <td scope="row"><?php echo $row6['Cedula_Prof'] ?></td>
              <td scope="row"><?php echo $row6['Tipo_Asociado'] ?></td>
              <td scope="row">$<?php echo $row6['Honorarios_Med'] ?></td>
              <td scope="row">
                <a class="btn btn-secondary btn-sm"
                  href="actuaMedico.php?codigo=<?php echo $row6['ID_Medico']; ?>">Actualizar</a>
                <a class="btn btn-dark btn-sm"
                  href="eliminarMedico.php?Codigo=<?php echo $row6['ID_Medico']; ?>">Eliminar</a>
              </td>
              <!-- <button type="button" class="btn btn-dark btn-sm" disabled>Eliminar</button> -->

            </tr>
            <?php
          }
          ?>

        </tbody>
      </table>
    </div>

    <div class="text-center mt-3">
      <?php if (isset($_SESSION["USER"]) && $_SESSION["USER"] == "admin") {
        echo "<a href='menuad.php' class='btn btn-dark'>Regresar</a>";
      } else if (isset($_SESSION["USER"]) && $_SESSION["USER"] == "administracion") {
        echo '<a href="administracion.php" class="btn btn-dark">Regresar</a>';
      } else {
        echo '<a class="btn btn-info" href="Imedico.php">Insertar</a> &emsp;';
        echo '<a href="logout.php" class="btn btn-dark">Salir</a>';
      } ?>
    </div>
  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>