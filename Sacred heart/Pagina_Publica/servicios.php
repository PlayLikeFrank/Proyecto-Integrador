<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Servicios</title>
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

<nav class="menu">

  <div class="nav-left">
    <h1 class="let2">Servicios</h1>
  </div>
  <ul class="nav-links">
  <li><a href="SacredH.php"><i class="fas fa-home"></i> Inicio</a></li>
   <li><a href="Ayudapagina.php"><i class="fas fa-question-circle"></i> Ayuda</a></li>
  </ul>

 <a href="https://www.facebook.com/SacredHeartHospital" target="_blank" style="text-decoration: none; color: #3b5998; margin: 0 12px;">
    <i class="fab fa-facebook fa-sm"></i>
  </a> 
  <a href="https://www.instagram.com" target="_blank" style="text-decoration: none; color: #C13584; margin: 0 12px;">
    <i class="fab fa-instagram fa-sm"></i> 
  </a>
</nav>
<section class="services-section">
  <div class="container">
    <h2>Especialidades Médicas</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/rayosx.jpeg" class="card-img-top" alt="Rayos X" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Rayos X</h5>
            <p class="card-text">Diagnóstico por imagen.</p>
            <p class="text-muted">Lun-Vie: 9:00am - 5:00pm</p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/traumatologia.jpg" class="card-img-top" alt="Traumatología" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Traumatología</h5>
            <p class="card-text">Lesiones óseas y musculares.</p>
            <p class="text-muted">Lun-Vie: 10:00am - 6:00pm</p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/urgencias.jpg" class="card-img-top" alt="Urgencias" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Urgencias</h5>
            <p class="card-text">Atención inmediata.</p>
            <p class="text-muted">Disponible 24/7</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/pediatria.png" class="card-img-top" alt="Pediatría" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Pediatría</h5>
            <p class="card-text">Especialistas en niños.</p>
            <p class="text-muted">Lun-Sáb: 9:00am - 3:00pm</p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/g.jfif" class="card-img-top" alt="Médico General" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Médico General</h5>
            <p class="card-text">Atención integral.</p>
            <p class="text-muted">Lun-Vie: 8:00am - 8:00pm</p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/ginecologia.jpg" class="card-img-top" alt="Ginecología" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Ginecología</h5>
            <p class="card-text">Salud femenina.</p>
            <p class="text-muted">Lun-Vie: 2:00pm - 7:00pm</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/farmacia.jpg" class="card-img-top" alt="Farmacia" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Farmacia</h5>
            <p class="card-text">Medicamentos disponibles.</p>
            <p class="text-muted">Lun-Dom: 8:00am - 9:00pm</p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/anestesiologia.jpg" class="card-img-top" alt="Anestesiología" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Anestesiología</h5>
            <p class="card-text">Procedimientos quirúrgicos.</p>
            <p class="text-muted">Según programación quirúrgica</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/radiologo.jpg" class="card-img-top" alt="Radiólogo" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Radiólogo</h5>
            <p class="card-text">Tomografías especializadas.</p>
            <p class="text-muted">Lun-Vie: 10:00am - 4:00pm</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/psicologo.jpg" class="card-img-top" alt="Psicología" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Psicología</h5>
            <p class="card-text">Atención emocional.</p>
            <p class="text-muted">Sáb-Dom: 10:00am - 2:00pm</p>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="img/nutriologia.jpg" class="card-img-top" alt="Nutriología" style="height:150px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">Nutriología</h5>
            <p class="card-text">Planes alimenticios.</p>
            <p class="text-muted">Lun-Vie: 11:00am - 6:00pm</p>
          </div>
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
