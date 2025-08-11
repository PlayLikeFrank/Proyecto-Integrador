<?php 
    include "conexion1.php";
    $con = conectar();
    $select = isset($_POST['opciones']) ? $_POST['opciones'] : '';
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gastos de laboratorio</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="icon" type="image/png" href="img/ft.PNG">
    <link rel="stylesheet" type="text/css" href="css/hos22.css">  <style>
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
    <h2 class="header">Gastos en sanatorio </h2>
  </div>
  
  <div class="container table-container">
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
                            <thead>
                              <tr>
                                <th class="let" scope="col">ID Gastos</th>
                                <th class="let" scope="col">Descripcion</th>
                                <th class="let" scope="col">Gastos</th>
                                <th class="let" scope="col">Accion</th>
                              </tr>
                            </thead>

                        <tbody>
                            <?php 
                                $s8="SELECT * FROM gastos_sanatorio";
                                $res8=mysqli_query($con,$s8);
                                while ($row8= mysqli_fetch_assoc($res8)) {
                            ?>
                            <tr>
                            <td scope="row"><?php echo $row8['ID_G_Sanatorio']?></td>
                            <td scope="row"><?php echo $row8['Descripcion_San'] ?></td>
                            <td scope="row"><?php echo $row8['Gastos_S'] ?></td>
                          
                             <td scope="row"><a class="btn btn-secondary"href="actualizarsan.php?codigo=<?php echo $row8['ID_G_Sanatorio']; ?>">Modificar</a>
                            <a  class="btn btn-dark" href="eliminarsan.php?Codigo=<?php echo $row8['ID_G_Sanatorio']; ?>">Eliminar</a></td> 
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
              
                </table>
                    <a href="m.php" class="btn btn-dark">Regresar</a>
                    <a  class="btn btn-secondary"href="agregarsan.php">Agregar</a></td>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>