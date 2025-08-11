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


<br>
<div class="container text-center">
    <h2 class="header">Buscar en registros</h2>
</div>
<div class="container table-container">
    <div class="table-responsive">
<form action="" method="GET">
<div class="col-md-4">
        <label for="Del-dia" class="form-label let"><b>Del Dia</b></label>
        <input type="date" class="form-control" name="from_date" value="<?php if (isset($_GET['from_date'])) {
            echo $_GET['from_date'];
        } ?>" class="form-control">
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label><b> Hasta el Dia</b></label>
            <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                echo $_GET['to_date'];
            } ?>" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label><b></b></label> <br>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
    </div>
    <br>
</form>


        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr class="bg-dark">
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
                    <th scope="col">ID Personal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexion1.php");
                $conn = conectar();
                if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                    $from_date = $_GET['from_date'];
                    $to_date = $_GET['to_date'];

                    $query = "SELECT * FROM nota_principal WHERE F_Egreso BETWEEN '$from_date' AND '$to_date' ";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $rowf) {
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
                                <td scope="row"><a href="generar_pdf_ind.php?ID_Nota=<?php echo $rowf['ID_Nota']; ?>
                                    &ID_Paciente=<?php echo $rowf['ID_PacienteN']; ?>" target="_blank"
                                        class="btn btn-primary">Generar
                                        PDF</a></td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td scope="row"><?php echo "No se encontraron resultados"; ?></td>
                            </tr>
                            <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="nota.php" class="btn btn-dark mx-2">Regresar</a>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</html>