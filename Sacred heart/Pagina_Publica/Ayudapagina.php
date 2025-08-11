<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ayuda</title>
  <link rel="icon" type="image/png" href="img/sf.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fffdfd;
      color: #333;
    }

    .menu {
      background-color: #f7c0d8;
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
      top: 0; left: 0; right: 0;
      padding: 1rem 9%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 1000;
    }

    .menu ul {
      list-style: none;
      display: flex;
      align-items: center;
    }

    .menu ul li {
      margin: 0 15px;
    }

    .menu ul li a {
      color: #000;
      text-decoration: none;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 20px;
      transition: background 0.3s ease;
    }

    .menu ul li a:hover {
      background-color: #F7C0D8;
    }

    .let2 {
      font-family: 'Georgia', serif;
      font-size: 1.8rem;
      font-weight: bold;
      color: #000;
    }

    .intro {
      max-width: 800px;
      margin: 3rem auto;
      text-align: center;
      font-size: 1.1rem;
      line-height: 1.8;
    }

    .services-section {
      padding: 4rem 1rem;
      background-color: #f9f9f9;
    }

    .services-section h2 {
      font-family: 'Georgia', serif;
      text-align: center;
      margin-bottom: 2rem;
    }

    .card-help {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .card-help:hover {
      transform: translateY(-8px);
    }

    .card-help i {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #F7C0D8;
    }

    footer {
      background-color: #F7C0D8;
      padding: 1rem;
      text-align: center;
      font-family: 'Georgia', serif;
    }

    .btn-help {
      background-color: #F7C0D8;
      border: none;
      color: #fff;
    }

    .btn-help:hover {
      background-color: #e99dbf;
    }
  </style>
</head>
<body>

  <!-- Menú -->
  <nav class="menu">
    <div class="nav-left">
      <h1 class="let2">Ayuda</h1>
    </div>
    <ul class="nav-links">
      <li><a href="SacredH.php"><i class="fas fa-home"></i> Inicio</a></li>
      <li><a href="Ayudapagina.php"><i class="fas fa-question-circle"></i> Ayuda</a></li>
    </ul>
  </nav>

  <!-- Intro -->
  <div class="intro">
    <h4>Bienvenido al centro de soporte de Sacred Heart.</h4><br>
    <p>Por favor, selecciona el tipo de ayuda que necesitas para poder asistirte de la mejor manera posible:</p>
  </div>

  <!-- Cards -->
  <section class="services-section">
    <h2>¿Qué tipo de ayuda necesitas?</h2>
    <div class="container">
      <div class="row g-4 text-center justify-content-center">

        <!-- Soporte técnico -->
        <div class="col-md-4">
          <div class="card-help p-4 h-100">
            <i class="fas fa-tools"></i>
            <h5 class="mb-2">Soporte técnico</h5>
            <p>Problemas con la plataforma o errores técnicos.</p>
            <a href="soportetecnico.php" class="btn btn-help mt-2">Solicitar ayuda</a>
          </div>
        </div>

       
        <div class="col-md-4">
          <div class="card-help p-4 h-100">
            <i class="fas fa-info-circle"></i>
            <h5 class="mb-2">Consultas generales</h5>
            <p>Información sobre servicios, requisitos o atención.</p>
            <a href="consultasgenerales.php" class="btn btn-help mt-2">Ver más</a>
          </div>
        </div>

     
        <div class="col-md-4">
          <div class="card-help p-4 h-100">
            <i class="fas fa-envelope-open-text"></i>
            <h5 class="mb-2">Otros temas</h5>
            <p>Comentarios, sugerencias u otro tipo de consulta.</p>
            <a href="otros.php" class="btn btn-help mt-2">Ir al formulario</a>
          </div>
        </div>

      </div>
    </div>
  </section>

 
  <footer>
    2025 Sacred Heart. 
    <marquee behavior="alternate" direction="left" bgcolor="#F7C0D8">Created by XFHS DevGroup</marquee>
  </footer>

</body>
</html>
