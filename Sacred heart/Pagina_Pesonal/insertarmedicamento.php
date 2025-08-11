<?php
include('conexion1.php');
$con = conectar();
session_start();
if (!isset($_SESSION["USER"]) || !($_SESSION["USER"] == "farmacia" || $_SESSION["USER"] == "admin")) {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
	    </script>";
  exit;
}
$S_I = "SELECT ID_MED FROM medicamento ORDER BY ID_MED DESC LIMIT 1";
$R = mysqli_query($con, $S_I);
$ROW = mysqli_fetch_assoc($R);
$ultimo_id = $ROW['ID_MED'] + 1;

if (isset($_POST['Descripcion_MED'], $_POST['PrecioMED'], $_POST['Cantidad'])) {

  $ID_MED = $ultimo_id;
  $Descripcion_MED = $_POST['Descripcion_MED'];
  $PrecioMED = $_REQUEST['PrecioMED'];
  $Cantidad = $_POST['Cantidad'];
  $ID_P_CargoMED = "1";

  $insert = "INSERT INTO medicamento(ID_MED, Descripcion_MED, PrecioMED, Cantidad, ID_P_CargoMED) VALUES('$ID_MED', '$Descripcion_MED', '$PrecioMED','$Cantidad', '$ID_P_CargoMED')";

  $query = mysqli_query($con, $insert);

  if ($query && isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Admin") {
    header('location:farmacia.php?Admin=Admin');
    exit();

  } else {
    header('location:farmacia.php');
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insertar medicamentos</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <link rel="stylesheet" type="text/css" href="css/admin.css">

  <style>
    .let {
      font-family: 'Nanum Myeongjo';
    }

    +.btn-secondary {
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

<body style="background-repeat: no-repeat; background-size: cover;">

  <div class="container my-4">
    <div class="row">

      <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
        <div class="card shadow-sm">
          <div class="card-header text-center bg-secondary text-white let">
            <h2>Insertar medicamentos</h2>
          </div>
          <div class="card-body bg-light">

            <form method="POST" action="">

              <div class="mb-3">

                <div class="mb-3">
                  <label class="form-label let" for="Descripcion_MED">Nombre del medicamento</label>
                  <input placeholder="Descripcion medicamento" class="form-control" type="text" name="Descripcion_MED"
                    id="Descripcion_MED" required>
                </div>

                <div class="mb-3">
                  <label class="form-label let" for="PrecioMED">Precio:</label>
                  <input placeholder="Precio del medicamento" class="form-control" type="text" name="PrecioMED"
                    id="PrecioMED" required>
                </div>

                <div class="mb-3">
                  <label class="form-label let" for="Cantidad">Cantidad:</label>
                  <input placeholder="Cantidad" class="form-control" type="text" name="Cantidad" id="Cantidad" required>
                </div>

                <div class="d-flex justify-content-between">
                  <input type="submit" class="btn btn-secondary" name="envio" value="Enviar">

                  <?php
                  if ($_SESSION["USER"] && $_SESSION["USER"] == "admin") {
                    echo "<a href='menuad.php' class='btn btn-dark'>Regresar</a>";
                  } else {
                    echo '<a href="farmacia.php" class="btn btn-dark">Regresar</a>';
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