<?php
include('conexion1.php');
$con = conectar();
session_start();
if (!isset($_SESSION["USER"]) || !($_SESSION["USER"] == "bodega" || $_SESSION["USER"] == "admin")) {
    echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
          </script>";
    exit;
}
$S_I = "SELECT ID_MAT FROM material ORDER BY ID_MAT DESC LIMIT 1";
$R = mysqli_query($con, $S_I);
$ROW = mysqli_fetch_assoc($R);
$ultimo_id = $ROW['ID_MAT'] + 1;

if (isset($_POST['Descripcion_MAT'], $_POST['PrecioMAT'], $_POST['Cantidad'])) {

    $ID_MAT = $ultimo_id;
    $Descripcion_MAT = $_POST['Descripcion_MAT'];
    $PrecioMAT = $_POST['PrecioMAT'];
    $Cantidad = $_POST['Cantidad'];
    $ID_P_CargoMAT = "3";

    $insert = "INSERT INTO material (ID_MAT, Descripcion_MAT, PrecioMAT, Cantidad, ID_P_CargoMAT) VALUES('$ID_MAT', '$Descripcion_MAT', '$PrecioMAT', '$Cantidad', '$ID_P_CargoMAT')";

    $query = mysqli_query($con, $insert);

    if ($query && isset($_REQUEST['Admin']) && $_REQUEST['Admin'] == "Admin") {
        header('location:bodega.php?Admin=Admin');
        exit();

    } else {
        header('location:bodega.php');
    }

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insertar Material</title>
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
                        <h2 class=" let">Insertar Material</h2>
                    </div>
                    <div class="card-body bg-light">
                        <form method="POST" action="">

                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="Descripcion_MAT" class="form-label let">Nombre</label>
                                    <input type="text" class="form-control" name="Descripcion_MAT" id="Descripcion_MAT"
                                        placeholder="Nombre del material" required>
                                </div>

                                <div class="mb-3">
                                    <label for="PrecioMAT" class="form-label let">Precio:</label>
                                    <input type="text" class="form-control" name="PrecioMAT" id="PrecioMAT"
                                        placeholder="Precio del medicamento" required>
                                </div>

                                <div class="mb-3">
                                    <label for="Cantidad" class="form-label let">Cantidad:</label>
                                    <input type="text" class="form-control" name="Cantidad" id="Cantidad"
                                        placeholder="Cantidad" required>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <input type="submit" class="btn btn-secondary" name="envio" value="Enviar">
                                    <?php
                                    if (isset($_SESSION["USER"]) && $_SESSION["USER"] == "admin") {
                                        echo "<a href='menuad.php' class='btn btn-dark'>Regresar</a>";
                                    } else {
                                        echo '<a href="bodega.php" class="btn btn-dark btn-sm">Regresar</a>';
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