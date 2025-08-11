<?php
session_start();
if (!isset($_SESSION["USER"]) || !($_SESSION["USER"] == "admin" || $_SESSION["USER"] == "bodega")) {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
	    </script>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bodega</title>

  <!-- Bootstrap CSS -->
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
  <!-- Encabezado -->
  <div class="container text-center">
    <h2 class="header">Material Disponible</h2>
  </div>

  <!-- Tabla de Material -->
  <div class="container table-container">
    <!-- Contenedor de desplazamiento horizontal en pantallas pequeñas -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="let" scope="col">ID</th>
            <th class="let" scope="col">Descripción</th>
            <th class="let" scope="col">Precio</th>
            <th class="let" scope="col">Cantidad</th>
            <!-- <th scope="col">ID_P_CargoMAT</th> -->
            <th class="let" scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "conexion1.php";
          $con = conectar();
          $s4 = "SELECT * FROM material";
          $res4 = mysqli_query($con, $s4);
          while ($row4 = mysqli_fetch_assoc($res4)) {
            ?>
            <tr>
              <td><?php echo $row4['ID_MAT']; ?></td>
              <td><?php echo $row4['Descripcion_MAT']; ?></td>
              <td><?php echo $row4['PrecioMAT']; ?></td>
              <td><?php echo $row4['Cantidad']; ?></td>
              <!-- <td><?php echo $row4['ID_P_CargoMAT']; ?></td> -->
              <td>
                <a class="btn btn-secondary btn-sm"
                  href="actuaMat.php?codigo=<?php echo $row4['ID_MAT']; ?>">Actualizar</a>
                <a class="btn btn-dark btn-sm" href="eliminarMat.php?Codigo=<?php echo $row4['ID_MAT']; ?>">Eliminar</a>
                <!-- <button type="button" class="btn btn-dark btn-sm" disabled>Eliminar</button> -->
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <!-- Botones de Acción -->
    <div class="text-center mt-3">
      <?php
      if (isset($_SESSION["USER"]) && $_SESSION["USER"] == "admin") {
        // echo '<a class="btn btn-info" href="Imaterial.php?Admin=Admin">Insertar</a>&emsp;';
        echo '<a href="menuad.php" class="btn btn-dark">Regresar</a>';
      } else {
        echo '<a href="Imaterial.php" class="btn btn-info">Insertar</a>&emsp;';
        echo '<a href="logout.php" class="btn btn-dark">Salir</a>';
      }
      ?>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>