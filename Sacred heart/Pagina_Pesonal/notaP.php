<?php
include("conexion1.php");
$conn = conectar();
session_start();
if (!isset($_SESSION["USER"]) || $_SESSION["USER"] != "administracion") {
  echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
        </script>";
  exit;
}
$S_I = "SELECT ID_Nota FROM nota_principal ORDER BY ID_Nota DESC LIMIT 1";
$R = mysqli_query($conn, $S_I);
$ROW = mysqli_fetch_assoc($R);
$ultimo_id = $ROW['ID_Nota'] + 1;



if (isset($_POST['ID_Paciente'])) {
  $a1 = $ultimo_id;
  $a2 = $_REQUEST['ID_Paciente'];
  $a3 = $_REQUEST['ID_Medico'];
  $a4 = $_REQUEST['F_Ingreso'];
  $a5 = $_REQUEST['F_Egreso'];
  $a6 = $_REQUEST['ID_G_Sanatorio'];
  $a7 = $_REQUEST['ID_G_Farmacia'];
  $a8 = $_REQUEST['ID_G_LAB'];
  $a9 = $_POST['Cuarto'];
  if (isset($_REQUEST['ID_ServAd']) && $_REQUEST['ID_ServAd'] == "0") {
    $Sad = 26;
  } else {
    $Sad = $_REQUEST['ID_ServAd'];
  }
  $a10 = $Sad;
  $a11 = 5;

  $insert = "INSERT INTO nota_principal(ID_Nota, ID_PacienteN, ID_MedicoN, F_Ingreso, F_Egreso, ID_G_SanatorioN, ID_G_FarmaciaN, ID_G_LabN, Cuarto, ID_ServAdN, ID_P_CargoN) 
                VALUES('$a1', '$a2' ,'$a3' ,'$a4' ,'$a5' ,'$a6' ,'$a7' ,'$a8' ,'$a9' ,'$a10' ,'$a11')";

  $query = mysqli_query($conn, $insert);
  if ($query) {
    header('location: nota.php');
    exit();
  } else {

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
            <h2 class=" let">Nota</h2>
          </div>

          <div class="card-body bg-light">
            <form method="POST" action="">

              <div class="mb-3">
                <label for="ID_Paciente" class="form-label let">Paciente: </label>
                <?php
                $P = "SELECT ID_Paciente,Nombre_Comp FROM paciente ORDER BY Nombre_Comp";
                $RP = $conn->query($P);
                echo '<select class="form-select" name="ID_Paciente" required>';
                echo '<option></option>';
                while ($rw = $RP->fetch_array()) {
                  echo '<option value= ' . $rw["ID_Paciente"] . '>' . $rw["Nombre_Comp"] . '</option>';
                }
                $RP->free_result();
                ?>
                </select>
              </div>


              <div class="mb-3">
                <label for="ID_Medico" class="form-label let">Medico a cargo: </label>
                <?php
                $M = "SELECT ID_Medico,Nombre_Comp FROM medico ORDER BY Nombre_Comp";
                $RM = $conn->query($M);
                echo '<select class="form-select" name="ID_Medico" required>';
                echo '<option></option>';
                while ($rwm = $RM->fetch_array()) {
                  echo '<option value=' . $rwm["ID_Medico"] . '>' . $rwm["Nombre_Comp"] . '</option>';
                }
                $RM->free_result();
                ?>
                </select>
              </div>

              <div class="mb-3">
                <label for="F_Ingreso" class="form-label let">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="F_Ingreso" name="F_Ingreso" required>
              </div>

              <div class="mb-3">
                <label for="F_Egreso" class="form-label let">Fecha de Egreso:</label>
                <input type="date" class="form-control" id="F_Egreso" name="F_Egreso" required>
              </div>

              <div class="mb-3">
                <label for="ID_G_Sanatorio" class="form-label let">Gastos de sanatorio </label>
                <?php
                $GS = "SELECT ID_G_Sanatorio,Descripcion_San FROM gastos_sanatorio ORDER BY Descripcion_San";
                $RGS = $conn->query($GS);
                echo '<select class="form-select" name="ID_G_Sanatorio" required>';
                echo '<option></option>';
                while ($rwGS = $RGS->fetch_array()) {
                  echo '<option value= ' . $rwGS["ID_G_Sanatorio"] . '>' . $rwGS["Descripcion_San"] . '</option>';
                }
                $RGS->free_result();
                ?>
                </select>
              </div>

              <div class="mb-3">
                <label for="ID_G_Farmacia" class="form-label let">Gastos de Farmacia</label>
                <?php
                $GF = "SELECT ID_G_Farmacia,Descripcion_Farm FROM gastos_farmacia ORDER BY Descripcion_Farm";
                $RGF = $conn->query($GF);
                echo '<select class="form-select" name="ID_G_Farmacia" required>';
                echo '<option></option>';
                while ($rwGF = $RGF->fetch_array()) {
                  echo '<option value=' . $rwGF["ID_G_Farmacia"] . '>' . $rwGF["Descripcion_Farm"] . '</option>';
                }
                $RGF->free_result();
                ?>
                </select>
              </div>


              <div class="mb-3">
                <label for="ID_G_LAB" class="form-label let">Gastos de Laboratorio</label>
                <?php
                $GL = "SELECT ID_G_LAB,Descripcion_Lab FROM gastos_lab ORDER BY Descripcion_Lab";
                $RGL = $conn->query($GL);
                echo '<select class="form-select" name="ID_G_LAB" required>';
                echo '<option></option>';
                while ($rwGL = $RGL->fetch_array()) {
                  echo '<option value=' . $rwGL["ID_G_LAB"] . '>' . $rwGL["Descripcion_Lab"] . '</option>';
                }
                $RGL->free_result();
                ?>
                </select>
              </div>

              <div class="mb-3">
                <label for="Cuarto" class="form-label let">Cuatro que uso el paciente:</label>
                <input type="number" min="1" max="8" class="form-control" name="Cuarto">
              </div>

              <div class="mb-3">
                <label for="ID_ServAd" class="form-label let">Servicios Adicionales</label>
                <?php
                $SA = "SELECT ID_ServAd,Descripcion_ServAd FROM servicios_ad ORDER BY Descripcion_ServAd";
                $RSA = $conn->query($SA);
                echo '<select class="form-select" name="ID_ServAd" required>';
                echo '<option></option>';
                //echo '<option value = "0">Ninguno</option>';
                while ($rwSA = $RSA->fetch_array()) {
                  echo '<option value=' . $rwSA["ID_ServAd"] . '>' . $rwSA["Descripcion_ServAd"] . '</option>';
                }
                $RSA->free_result();
                ?>
                </select>
              </div>

              <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-secondary" name="envio" value="Insertar datos en la tabla">
                <a href="administracion.php" class="btn btn-dark">Regresar</a>
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