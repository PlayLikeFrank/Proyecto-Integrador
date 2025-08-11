<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Escalado para móviles -->
  <title>Admin</title>
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

  <?php
  include('conexion1.php');
  $con = conectar();
  session_start();
  if (!isset($_SESSION["USER"]) && !($_SESSION["USER"] == "administracion" || $_SESSION["USER"] == "admin")) {
    echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
        </script>";
    exit;
  }
  $S_A = "SELECT ID_P_Cargo FROM personal ORDER BY ID_P_Cargo ASC LIMIT 1";
  $RA = mysqli_query($con, $S_A);
  $ROWA = mysqli_fetch_assoc($RA);

  $S_D = "SELECT ID_P_Cargo FROM personal ORDER BY ID_P_Cargo DESC LIMIT 1";
  $RD = mysqli_query($con, $S_D);
  $ROWD = mysqli_fetch_assoc($RD);

  if ($ROWA['ID_P_Cargo'] == 2) {
    $ultimo_id = $ROWA['ID_P_Cargo'] - 1;
  } else {
    $ultimo_id = $ROWD['ID_P_Cargo'] + 1;
  }


  if (isset($_POST['Nombre_Comp'], $_POST['usuario'], $_POST['password'], $_POST['Area'], $_POST['Puesto'])) {

    $Nombre_Comp = $_POST['Nombre_Comp'];
    $usuario = $_REQUEST['usuario'];
    $password = $_POST['password'];
    $Area = $_POST['Area'];
    $Puesto = $_POST['Puesto'];

    $insert = "INSERT INTO personal(ID_P_Cargo, Nombre_Comp, usuario,password,Area,Puesto) VALUES('$ultimo_id', '$Nombre_Comp', '$usuario','$password', '$Area', '$Puesto')";

    $query = mysqli_query($con, $insert);

    if ($query && $_SESSION["USER"] && $_SESSION["USER"] == "admin") {
      header('location:mp.php?Admin=Admin');
      exit();

    } else {
      header('location:mp.php');
    }


  }
  ?>
  <div class="container my-4">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
        <div class="card shadow-sm">
          <div class="card-header text-center bg-secondary text-white let">
            <h2 class=" let">Agregar Personal</h2>
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
                  <label class="form-label let" for="usuario">Usuario:</label>
                  <input placeholder="Usuario" class="form-control" type="text" name="usuario" id="usuario" required>
                </div>

                <div class="mb-3">
                  <label class="form-label let" for="password">Contraseña:</label>
                  <input placeholder="Contraseña" class="form-control" type="password" name="password" id="password"
                    required>
                </div>

                <div class="mb-3">
                  <label for="Area" class="form-label let">Área:
                    <select class="form-select" id="Area" name="Area">
                      <option value="farmacia" class="form-label let">Farmacia</option>
                      <option value="bodega" class="form-label let">Bodega</option>
                      <option value="laboratorio" class="form-label let">Laboratorio</option>
                      <option value="material" class="form-label let">Material</option>
                      <option value="medico" class="form-label let">Medico</option>
                      <option value="paciente" class="form-label let">Paciente</option>
                      <option value="personal" class="form-label let">Personal</option>
                      <option value="sanatorio" class="form-label let">Sanatorio</option>
                      <option value="administracion" class="form-label let">Administracion</option>
                    </select> </label>
                </div>

                <div class="mb-3">
                  <label for="Puesto" class="form-label let">Puesto:</label>
                  <input type="text" class="form-control" name="Puesto" id="Puesto" placeholder="Puesto" required>
                </div>

                <div class="d-flex justify-content-between">
                  <input type="submit" class="btn btn-secondary" name="envio" value="Enviar">

            </form>

            <?php if (isset($_SESSION["USER"]) && $_SESSION["USER"] == "admin") {
              echo "<a href='menuad.php' class='btn btn-dark'>Regresar</a>";
            } else {
              echo '<a href="administracion.php" class="btn btn-dark">Regresar</a>';
            } ?>


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