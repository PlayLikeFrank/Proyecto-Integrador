<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" type="image/png" href="img/sf.png">
  <link rel="icon" type="image/png" href="img/sf.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> <style>
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

    .stats-box {
  background: linear-gradient(to right,#f7c0d8,#f7c0d8);
  box-shadow: 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 12px;
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
      background-color: #F7C0D8;
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
       font-family: 'Georgia', serif;
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
      background-color: #F7C0D8;
      padding: 1rem;
      text-align: center;
      font-family: 'Georgia', serif;
    }

    .box {
    background-color: #E8A09A;
    padding: 2rem;
    border-radius: 20px;
    width: 70%;
    margin: 3rem auto;
    display: flex;
    justify-content: center;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
  }

  .contenedor {
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .item {
    background-color: #E8A09A;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Georgia', serif;
    font-weight: bold;
    
    transition: transform 0.3s ease;
  }

  .item:hover {
    transform: scale(1.05);
  }

  .cantidad {
    font-size: 2rem;
    color: #ffffff;
  }

  .datos {
    font-size: 1rem;
    text-align: center;
    margin-top: 0.5rem;
    color: #F8D3D3;
  }
  </style>
</head>
<body>
    
  

 <nav class="menu">

  <div class="nav-left">
    <h1 class="let2">Contactanos</h1>
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

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      
      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h5 class="card-title fw-bold"><i class="fas fa-map-marker-alt me-2 text-danger"></i>Ubicación</h5>
          <p class="card-text">Guanajuato</p>
        </div>
      </div>

      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h5 class="card-title fw-bold"><i class="fas fa-city me-2 text-success"></i>Ciudad</h5>
          <p class="card-text">Santa Cruz de Juventino Rosas</p>
        </div>
      </div>

      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h5 class="card-title fw-bold"><i class="fas fa-road me-2 text-primary"></i>Dirección</h5>
          <p class="card-text">#108 Corregidora, Juventino Rosas, Guanajuato </p>
        </div>
      </div>

      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h5 class="card-title fw-bold"><i class="fas fa-envelope-open-text me-2 text-secondary"></i>Código postal</h5>
          <p class="card-text">38240</p>
        </div>
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h5 class="card-title fw-bold"><i class="fas fa-phone me-2 text-warning"></i>Teléfono de atención</h5>
          <p class="card-text">412 157 2181</p>
        </div>
      </div>
    </div>

 
<div class="col-md-6">
  <h3 class="text-center mb-3">¿Cómo llegar?</h3>
  <iframe class="w-100 rounded shadow" height="450"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.632172158581!2d-100.9965843236455!3d20.643844500885564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c98b2ef3bc9a3%3A0xa2500ac21ea543af!2sCorregidora%20108%2C%20Centro%2C%2038240%20Juventino%20Rosas%2C%20Gto.!5e0!3m2!1ses!2smx!4v1749603664223!5m2!1ses!2smx"
    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


  <div class="row mt-5">
    <div class="col-12">
   <h3 class="text-center mb-3">Turnos</h3>
      <div class="table-responsive">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th style="background-color: #F7C0D8;">Matutino</th>
              <th style="background-color: #F7C0D8;">Vespertino</th>
              <th style="background-color: #F7C0D8;">Nocturno</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>7:00 am – 2:00 pm</td>
              <td>2:00 pm – 10:00 pm</td>
              <td>9:00 pm – 8:00 am</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



</body>
</html>