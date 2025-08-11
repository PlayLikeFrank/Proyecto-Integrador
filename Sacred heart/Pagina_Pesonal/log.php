<?php

include("conexion1.php");
$conn = conectar();
session_start();

if (isset($_POST['pass'], $_POST['user'])) {
  $user = $_REQUEST['user'];
  $password = $_REQUEST['pass'];

  $selectquery = "SELECT Area FROM personal WHERE usuario='" . $user . "' AND password ='" . $password . "'";

  $query = mysqli_query($conn, $selectquery);
  $totalnums1 = mysqli_num_rows($query);
  $array = mysqli_fetch_array($query);

  if ($totalnums1 <= 0) {
    echo "<script>alert('Ingrese su usuario y/o contraseña de nuevo');window.location.href='log.php';
	</script>";
  } else {
    if (implode(" ", $array) == "admin admin") {
      $_SESSION["USER"] = "admin";
      header('Location: menuad.php');
    } else
      if (implode(" ", $array) == "bodega bodega") {
        $_SESSION["USER"] = "bodega";
        header('Location: bodega.php');
      } else
        if (implode(" ", $array) == "medico medico") {
          $_SESSION["USER"] = "medico";
          header('Location: medico.php');
        } else
          if (implode(" ", $array) == "farmacia farmacia") {
            $_SESSION["USER"] = "farmacia";
            header('Location: farmacia.php');
          } else
            if (implode(" ", $array) == "administracion administracion") {
              $_SESSION["USER"] = "administracion";
              header('Location: administracion.php');
            } else
              if (implode(" ", $array) == "invitado invitado") {
                $_SESSION["USER"] = "invitado";
                header('Location: invitado.php');
              } else
                if (implode(" ", $array) == "paciente paciente") {
                  $_SESSION["USER"] = "paciente";
                  header('Location: paciente.php');
                } else {
                  echo "<script>alert('Ingrese su usuario y/o contraseña de nuevo');
			 		window.location.href='log.php';</script>";
                }
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sacred Heart</title>
  <link rel="icon" type="image/png" href="img/ft.PNG">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/intro.css">
  <style>
    .login-container {
      background-color: rgb(255, 174, 224);
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
    }

    .logo {
      width: 100px;
      height: auto;
    }

    .background-image {
      background-image: url('img/ft.PNG');
      /* Cambia imagen de fondo */
      background-size: cover;
      background-position: center;
      height: 100vh;
    }

    .let1 {
      font-family: 'Perpetua';
      font-size: 65px;
    }

    .let {
      font-family: 'Nanum Myeongjo';
    }

    .fade-in-message {
      opacity: 0;
      animation: fadeIn 2s forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>



</head>

<body class="lead text-muted fade-in-message">
  <divclass="container-fluid">
    <div class="row">
      <!-- Imagen de fondo en la mitad izquierda, oculta en pantallas pequeñas -->
      <div class="col-md-6 background-image d-none d-md-block"></div>

      <!-- Formulario en la mitad derecha o centrado en pantallas pequeñas -->
      <div class="col-md-6 d-flex align-items-center justify-content-center vh-100">
        <div class="login-container text-center">
          <!-- <img src="img/ho2.png" alt="Logo" class="logo mb-3"> -->

          <form method="POST" action="log.php">
            <div class="mb-3">
              <h2 class="let1">Sacred Heart</h2>
              <p>¡Bienvenido de nuevo!</p>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" required>
              </div>

            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
            </div>


            <button type="submit" class="btn btn btn-outline-secondary w-100" class="let">Ingresar</button>

          </form>
        </div>
      </div>
    </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"></script> -->
      <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>