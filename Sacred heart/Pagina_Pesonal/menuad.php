<?php
session_start();
if (!isset($_SESSION["USER"]) || $_SESSION["USER"] != "admin") {
    echo "<script>alert('Inicio de sesion erroneo necesita volver a loguearse...');window.location.href='logout.php';
	    </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <Link rel="stylesheet" type="text/css" href="css/m.css">
    <link rel="icon" type="image/png" href="img/ft.PNG">


    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Nanum Myeongjo', serif;
        }


        .header {
            background-color: #FFB6C1;
            color: #000;
            padding: 1.5rem;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 'Nanum Myeongjo';
        }

        .btn-insert {
            background-color: #e77e80;
            color: #000;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-insert:hover {
            background-color: #d66c6f;
        }

        .btn-view {
            background-color: #6c757d;
            color: #fff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-view:hover {
            background-color: #5a6268;
        }

        .btn-exit {
            background-color: #D3D3D3;
            color: #000;
            font-size: 1rem;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            width: 100%;
        }

        .let {
            font-family: 'Nanum Myeongjo';
        }

        .btn-exit:hover {
            background-color: #bcbcbc;
        }

        .container {
            max-width: 1200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Administrador</h1>
        </div>

        <!-- Cards Section -->
        <div class="row g-4">
            <!-- Personal -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Personal</h5>
                        <p class="card-text" class="let">Gestión de datos del personal.</p>
                        <div class="btn-group">
                            <a href="admin.php" class="btn btn-insert">Insertar</a>
                            <a href="mp.php" class="btn btn-view">Ver Datos</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paciente -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Paciente</h5>
                        <p class="card-text" class="let">Gestión de datos de pacientes.</p>
                        <div class="btn-group">
                            <a href="agregarpa.php" class="btn btn-insert">Insertar</a>
                            <a href="paciente.php" class="btn btn-view">Ver Datos</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Médico -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Médico</h5>
                        <p class="card-text" class="let">Gestión de información de médicos.</p>
                        <div class="btn-group">
                            <a href="Imedico.php" class="btn btn-insert">Insertar</a>
                            <a href="medico.php" class="btn btn-view">Ver Datos</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bodega -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Bodega</h5>
                        <p class="card-text" class="let">Gestión de materiales.</p>
                        <div class="btn-group">
                            <a href="Imaterial.php" class="btn btn-insert">Insertar</a>
                            <a href="bodega.php" class="btn btn-view">Ver Datos</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Farmacia -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Farmacia</h5>
                        <p class="card-text" class="let">Gestión de medicamentos.</p>
                        <div class="btn-group">
                            <a href="insertarmedicamento.php" class="btn btn-insert">Insertar</a>
                            <a href="farmacia.php" class="btn btn-view">Ver Datos</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Salir -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <p class="card-text" class="let">Cerrar sesión del administrador.</p>
                        <a href="logout.php" class="btn btn-exit">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12RjUv7C+eB9eqQ9olT96rG/RrPuuE4I9Urhs7ytKPz6+eNp"
        crossorigin="anonymous"></script> -->
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>