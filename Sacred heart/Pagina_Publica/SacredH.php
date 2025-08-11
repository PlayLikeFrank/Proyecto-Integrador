<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sacred Heart</title>
 <link rel="icon" type="image/png" href="img/sf.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fffdfd;
      color: #333;
    }

    *{margin:0;padding:0;}
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
      background-color: #f1e4e4;
    }
    .logo {
  max-height: 70px;
  height: auto;
  width: auto;
  object-fit: contain;
  display: block;
  margin-right: 10px;
}

.nav-left {
  display: flex;
  align-items: center;
}

    .let {
      font-family: 'Nanum Myeongjo';
      font-size: 1.5rem;
      font-weight: bold;
      color: #000;
    }

    .let2{
       font-family: 'Bodoni MT ';
       font-size: 1.8rem;
      font-weight: bold;
      color: #000;
    }

    .image-gallery {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin: 3rem auto;
      max-width: 900px;
    }

    .img-container {
      flex: 1;
      position: relative;
      transition: flex 0.5s ease;
    }

    .img-container img {
      width: 300px;
      height: 250px;
      object-fit: cover;
      transition: transform 0.5s ease;
      opacity: 0.9;
    }

    .img-container:hover {
      flex: 2;
    
    }

    .img-container:hover img {
      transform: scale(1.05);
      opacity: 1;
       width: 230px;
    }

    .img-text {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      text-align: center;
      padding: 10px;
      font-size: 1rem;
      opacity: 0;
      transform: translateY(100%);
      transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .img-container:hover .img-text {
      opacity: 1;
      transform: translateY(0);
    }

    .intro {
      max-width: 800px;
      margin: 2rem auto;
      text-align: center;
      font-size: 1.1rem;
      line-height: 1.8;
    }

    .services-section {
      background-color: #f9f9f9;
      padding: 4rem 1rem;
    }

    .services-section h2 {
      font-family: 'Georgia', serif;
      text-align: center;
      margin-bottom: 2rem;
    }

    .services-section .icon-box {
      background: #fff;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .services-section .icon-box:hover {
      transform: translateY(-8px);
    }

    footer {
      background-color: #f7c0d8;
      padding: 1rem;
      text-align: center;
      font-family: 'Georgia', serif;
    }
  </style>
</head>
<body>

 <nav class="menu">
  <div class="nav-left">
    <h1 class="let2">Sacred Heart</h1>
  </div>
 <ul class="nav-links">
  <li><a href="SacredH.php"><i class="fas fa-home"></i> Inicio</a></li>
  <li><a href="Acercade.php"><i class="fas fa-info-circle"></i> Acerca de</a></li>
  <li><a href="servicios.php"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
  <li><a href="Contacto.php"><i class="fas fa-envelope"></i> Contacto</a></li>
  <li><a href="Ayudapagina.php"><i class="fas fa-question-circle"></i> Ayuda</a></li>
  <li><a href="#"><i class="fas fa-user-friends"></i> Asociados</a></li>
</ul>
</nav>


  <section class="image-gallery">
   
    <div class="img-container">
      <img src="img/1r.png" alt="Equipo">
      <div class="img-text">Equipo de trabajo</div>
    </div>
    <div class="img-container">
      <img src="img/3r.png" alt="Salud Prioridad">
      <div class="img-text">Tu salud, nuestra prioridad</div>
    </div>
     <div class="img-container">
      <img src="img/sf.png" alt="Logo">
      <div class="img-text">Logo de Sacred Heart</div>
    </div>
    <div class="img-container">
      <img src="img/2r.png" alt="Conocenos">
      <div class="img-text">Conócenos</div>
    </div>
     <div class="img-container">
      <img src="img/5r.jpg" alt="Conocenos">
      <div class="img-text">Visitanos</div>
    </div>
  </section>

  <div class="intro" class=let>
    "En <strong>Sacred Heart</strong>, su bienestar es nuestra prioridad. Con un equipo de profesionales dedicados y tecnología de vanguardia, ofrecemos atención médica integral y personalizada. Confíe en nosotros para cuidar lo más importante: su salud y la de su familia."
  </div>

  <section class="services-section">
    <div class="container">
      <h2 >Nuestros Servicios</h2>
      <div class="row text-center">
        <div class="col-md-4 mb-4">
          <div class="icon-box">
            <i class="fas fa-user-md fa-3x mb-3" style="color: #F7C0D8;"></i>
            <h4>Consultas Médicas</h4>
            <p>Atención personalizada con médicos especialistas.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box">
            <i class="fas fa-ambulance fa-3x mb-3" style="color: #F7C0D8;"></i>
            <h4>Emergencias 24/7</h4>
            <p>Estamos disponibles en cualquier momento para usted.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box">
            <i class="fas fa-heartbeat fa-3x mb-3" style="color: #F7C0D8;"></i>
            <h4>Chequeos Generales</h4>
            <p>Programas de prevención y cuidado integral.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    2025 Sacred Heart. 
    <marquee behavior="alternate" direction="left" bgcolor=" #F7C0D8">Created by XFHS DevGroup </marquee>
  </footer>

</body>
</html>