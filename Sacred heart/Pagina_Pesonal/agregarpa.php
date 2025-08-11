<?php
include('conexion1.php');
$con = conectar();
session_start();
if (!isset($_SESSION["USER"]) || !($_SESSION["USER"] == "administracion" || $_SESSION["USER"] == "admin" || $_SESSION["USER"] == "paciente")) {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
          </script>";
  exit;
}
$S_A = "SELECT ID_Paciente FROM paciente ORDER BY ID_Paciente ASC LIMIT 1";
$RA = mysqli_query($con, $S_A);
$ROWA = mysqli_fetch_assoc($RA);

$S_D = "SELECT ID_Paciente FROM paciente ORDER BY ID_Paciente DESC LIMIT 1";
$RD = mysqli_query($con, $S_D);
$ROWD = mysqli_fetch_assoc($RD);

if ($ROWA['ID_Paciente'] == 2) {
  $ultimo_id = $ROWA['ID_Paciente'] - 1;
} else {
  $ultimo_id = $ROWD['ID_Paciente'] + 1;
}



if (isset($_POST['CURP'], $_POST['Nombre_Comp'], $_POST['Edad'], $_POST['Telefono'], $_POST['Direccion'])) {

  $CURP = $_POST['CURP'];
  $Nombre_Comp = $_POST['Nombre_Comp'];
  $Edad = $_POST['Edad'];
  $Telefono = $_POST['Telefono'];
  $Direccion = $_POST['Direccion'];


  $insert = "INSERT INTO paciente(ID_Paciente, CURP, Nombre_Comp, Edad, Telefono, Direccion) VALUES('$ultimo_id','$CURP', '$Nombre_Comp', '$Edad','$Telefono', '$Direccion')";


  $query = mysqli_query($con, $insert);

  if ($query && isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Admin") {
    header('location:paciente.php?Admin=Admin');
    exit();

  }
  if ($query && isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Administracion") {
    header('location:paciente.php?Admin=Administracion');
    exit();

  } else {
    header('location:paciente.php');
  }

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insertar Paciente</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" type="text/css" href="css/admin.css">

  <style>
    .let {
      font-family: 'Nanum Myeongjo';
    }

    body {
      background-repeat: no-repeat;
      background-size: cover;
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
  </style>
</head>

<body>

  <div class="container my-4">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
        <div class="card shadow-sm">
          <div class="card-header text-center bg-secondary text-white let">
            <h2 class=" let">Insertar Paciente</h2>
          </div>

          <div class="card-body bg-light">
            <form method="POST" action="">

              <div class="mb-3">

                <div class="mb-3">
                  <label class="form-label let" for="Nombre_Comp">Nombre Completo:</label>
                  <input type="text" placeholder="Nombre Completo" class="form-control" name="Nombre_Comp"
                    id="Nombre_Comp" required>
                </div>

                <div class="mb-3">
                  <label class="form-label let" for="CURP">CURP:</label>
                  <input type="text" class="form-control" placeholder="Curp" name="CURP" id="CURP" required>
                </div>

                <label class="form-label let" for="Edad">Edad:</label>
                <input type="text" class="form-control" placeholder="Edad" name="Edad" id="Edad" required>
              </div>

              <div class="mb-3">
                <label class="form-label let" for="Telefono">Teléfono:</label>
                <input type="text" class="form-control" placeholder="Teléfono" name="Telefono" id="Telefono" required>
              </div>

              <div class="mb-3">
                <label class="form-label let" for="Direccion">Dirección:</label>
                <input type="text" class="form-control" placeholder="Dirección" name="Direccion" id="Direccion"
                  required>
              </div>


              <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-secondary" name="envio" value="Enviar">


                <?php if (isset($_SESSION["USER"]) && $_SESSION['USER'] == "admin") {
                  echo "<a href='menuad.php' class='btn btn-dark'>Regresar</a>";
                } else if (isset($_SESSION["USER"]) && $_SESSION['USER'] == "administracion") {
                  echo "<a href='administracion.php' class='btn btn-dark'>Regresar</a>";
                } else {
                  echo '<a href="paciente.php" class="btn btn-dark">Regresar</a>';
                }
                ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+5qOLxK/De/1p/xPNSJ5l9y1+2hA4"
    crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>