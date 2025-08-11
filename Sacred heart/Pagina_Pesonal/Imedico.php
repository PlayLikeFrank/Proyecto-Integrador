<?php
include('conexion1.php');
$con = conectar();
session_start();
if (
  !isset($_SESSION["USER"]) || !($_SESSION["USER"] == "admin" || $_SESSION["USER"] == "administracion" || $_SESSION["USER"] == "medico")
) {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
      </script>";
  exit;
}
$S_I = "SELECT ID_Medico FROM medico ORDER BY ID_Medico DESC LIMIT 1";
$R = mysqli_query($con, $S_I);
$ROW = mysqli_fetch_assoc($R);
$ultimo_id = $ROW['ID_Medico'] + 1;


if (isset($_POST['Nombre_Comp'], $_POST['Cedula_Prof'], $_POST['Tipo_Asociado'], $_POST['Honorarios_Med'])) {

  $ID_Medico = $ultimo_id;
  $Nombre_Comp = $_POST['Nombre_Comp'];
  $Cedula_Prof = $_POST['Cedula_Prof'];
  $Tipo_Asociado = $_POST['Tipo_Asociado'];
  $Honorarios_Med = $_POST['Honorarios_Med'];

  $insert = "INSERT INTO medico(ID_Medico, Nombre_Comp, Cedula_Prof, Tipo_Asociado, Honorarios_Med) VALUES('$ID_Medico', '$Nombre_Comp', '$Cedula_Prof','$Tipo_Asociado', '$Honorarios_Med')";

  $query = mysqli_query($con, $insert);

  if ($query && isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Admin") {
    header('location:medico.php?Admin=Admin');
    exit();

  } else if ($query && isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Administracion") {
    header('location:medico.php?Admin=Administracion');
    exit();

  } else {
    header('location:medico.php');
  }

}
?>

<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insertar Medicos</title>
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
            <h2 class=" let">Insertar Medicos</h2>
          </div>
          <div class="card-body bg-light">
            <form method="POST" action="">

              <div class="mb-3">

                <div class="mb-3">
                  <label class="form-label let" for="Nombre_Comp">Nombre Completo:</label>
                  <input placeholder="Nombre Completo" class="form-control" type="text" name="Nombre_Comp"
                    id="Nombre_Comp" required>
                </div>

                <div class="mb-3">
                  <label class="form-label let" for="Cedula_Prof">Cédula profesional:</label>
                  <input placeholder="Cédula profesional" class="form-control" type="text" name="Cedula_Prof"
                    id="Cedula_Prof" required>
                </div>

                <div class="mb-3">
                  <label class="form-label let" for="Tipo_Asociado">Tipo de asociado:</label>
                  <input placeholder="Tipo de asociado" class="form-control" type="text" name="Tipo_Asociado"
                    id="Tipo_Asociado" required>
                </div>

                <div class="mb-3">
                  <label for="Honorarios_Med" class="form-label let">Honorarios:</label>
                  <input type="text" class="form-control form-control-sm" name="Honorarios_Med" id="Honorarios_Med"
                    placeholder="Honorarios Medicos" required>
                </div>

                <div class="d-flex justify-content-between">
                  <input type="submit" class="btn btn-secondary" name="envio" value="Enviar">
                  <?php
                  if (isset($_SESSION["USER"]) && $_SESSION["USER"] == "admin") {
                    echo "<a href='menuad.php' class='btn btn-dark'>Regresar</a>";
                  } else if (isset($_SESSION["USER"]) && $_SESSION["USER"] == "administracion") {
                    echo '<a href="administracion.php" class="btn btn-dark">Regresar</a>';
                  } else {
                    echo '<a class="btn btn-dark" href="medico.php">Regresar</a>';
                  }
                  ?>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>