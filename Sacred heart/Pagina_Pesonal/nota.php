<?php
session_start();
if (!isset($_SESSION["USER"]) || $_SESSION["USER"] != "administracion") {
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
  <title>Notas Expedidas</title>
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
    <h2 class="header">Notas Expedidas</h2>
  </div>

  <div class="container table-container">
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Paciente</th>
            <th scope="col">ID Medico</th>
            <th scope="col">Ingreso</th>
            <th scope="col">Egreso</th>
            <th scope="col">Gastos Sanatorio</th>
            <th scope="col">Gastos Farmacia</th>
            <th scope="col">Gastos Laboratoio</th>
            <th scope="col">Cuarto</th>
            <th scope="col">ID Servicios Adicionales</th>
            <th scope="col">ID Personal Cargo</th>
            <th scope="col">Archivo</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("conexion1.php");
          $conn = conectar();

          $fechad = date("d");
          $fecham = date("m");
          $year = date("Y");

          echo "Fecha inicial: $fechad-$fecham-$year<br>";
          $fechad -= 5;

          if ($fechad <= 0) {
            $fecham--;


            if ($fecham < 1) {
              $fecham = 12;
              $year--;
            }
            $ultimoDiaMesAnterior = cal_days_in_month(CAL_GREGORIAN, $fecham, $year);

            $fechad += $ultimoDiaMesAnterior;
          }
          $fecham = str_pad($fecham, 2, '0', STR_PAD_LEFT);

          echo "Fecha resultante: $fechad-$fecham-$year";

          $s7 = "SELECT * FROM nota_principal WHERE F_Egreso >='$year-$fecham-$fechad'";
          $res7 = mysqli_query($conn, $s7);
          while ($rowf = mysqli_fetch_assoc($res7)) {

            ?>
            <tr>
              <td><?php echo $rowf['ID_Nota'] ?></td>
              <td><?php echo $rowf['ID_PacienteN'] ?></td>
              <td><?php echo $rowf['ID_MedicoN'] ?></td>
              <td><?php echo $rowf['F_Ingreso'] ?></td>
              <td><?php echo $rowf['F_Egreso'] ?></td>
              <td><?php echo $rowf['ID_G_SanatorioN'] ?></td>
              <td><?php echo $rowf['ID_G_FarmaciaN'] ?></td>
              <td><?php echo $rowf['ID_G_LabN'] ?></td>
              <td><?php echo $rowf['Cuarto'] ?></td>
              <td><?php echo $rowf['ID_ServAdN'] ?></td>
              <td><?php echo $rowf['ID_P_CargoN'] ?></td>
              <!-- <td scope="row"><a href="generar_pdf_ind.php?ID_Nota=<?php echo $rowf['ID_Nota']; ?>" target="_blank"
                  class="btn btn-primary">Generar PDF </a> -->

              <td scope="row"><a href="generar_pdf_ind.php?ID_Nota=<?php echo $rowf['ID_Nota']; ?>
              &ID_Paciente=<?php echo $rowf['ID_PacienteN']; ?>" target="_blank" class="btn btn-primary">Generar
                  PDF</a></td>


            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="text-center mt-4">
      <!-- <a href="log.php" class="btn btn-dark mx-2">Salir</a> -->
      <a href="generar_pdf.php" target="_blank" class="btn btn-primary">Recibo General PDF</a>
      <a href="administracion.php" class="btn btn-dark mx-2">Regresar</a>
      <a href="busqueda.php" class="btn btn-dark">Buscador</a>
    </div>
  </div>
  </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>