<?php
session_start();
if (!isset($_SESSION["USER"]) || $_SESSION["USER"] != "invitado") {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
	    </script>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Escalado para móviles -->
  <link rel="icon" type="image/png" href="img/IGSF.PNG">
  <title>Mostrar Personal</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <style>
    body {
      background: #fcefee;
      min-height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .header-container {
      background-color: #FFB6C1;
      /* Fondo rosa */
      padding: 1rem;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Sombra */
      width: 100%;
      max-width: 1200px;
      text-align: center;
    }

    .header {
      color: #000000;
      font-size: 1.8rem;
      font-weight: bold;
      word-wrap: break-word;
      /* Asegura que el texto no se desborde */
    }

    .table-container {
      background-color: #FFFFFF;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 1200px;
      margin-top: 1rem;
    }

    .table th {
      background-color: #F5F5DC;
      color: #000000;
    }

    .table td {
      background-color: #FFFFFF;
      color: #000000;
    }

    .btn-secondary {
      background-color: #e77e80;
      border-color: #e77e80;
      color: #000000;
    }

    .btn-secondary:hover {
      background-color: #ff9295;
      border-color: #ff9295;
    }

    .btn-dark {
      background-color: #D3D3D3;
      border-color: #D3D3D3;
      color: #000000;
    }

    .btn-dark:hover {
      background-color: #e0e0e0;
      border-color: #e0e0e0;
    }

    .let {
      font-family: 'Nanum Myeongjo';
    }
  </style>
</head>

<body>

  <div class="header-container">
    <h2 class="header">Tabla de Personal</h2>
  </div>

  <div class="container table-container">
    <div class="table-responsive"> <!-- Hace la tabla responsiva -->
      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th class="let" scope="col">ID</th>
            <th class="let" scope="col">Nombre</th>
            <th class="let" scope="col">Contraseña</th>
            <th class="let" scope="col">Área</th>
            <th class="let" scope="col">Puesto</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "conexion1.php";
          $con = conectar();
          $s9 = "SELECT * FROM personal";
          $res9 = mysqli_query($con, $s9);
          while ($row9 = mysqli_fetch_assoc($res9)) {
            ?>
            <tr>
              <td scope="row"><?php echo $row9['ID_P_Cargo']; ?></td>
              <td scope="row"><?php echo $row9['Nombre_Comp']; ?></td>
              <td scope="row"><?php echo $row9['password']; ?></td>
              <td scope="row"><?php echo $row9['Area']; ?></td>
              <td scope="row"><?php echo $row9['Puesto']; ?></td>
              <?php
          }
          ?>
          </tr>
        </tbody>
      </table>
    </div>

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