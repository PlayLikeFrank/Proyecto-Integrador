<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acerca de</title>
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
    <h1 class="let2">Acerca de</h1>
  </div>

  <ul class="nav-links">
  <li><a href="SacredH.php"><i class="fas fa-home"></i> Inicio</a></li>
  <li><a href="Ayudapagina.php"><i class="fas fa-question-circle"></i> Ayuda</a></li>
  </ul>
</nav>

<div class="container my-5">
  <div class="row justify-content-center g-4">

    
    <div class="col-lg-6 col-md-12">
      <div class="icon-box p-4 shadow rounded-4 h-100 text-center" style="background-color: #fff;">
        <i class="fas fa-book-open fa-3x mb-3" style="color: #F7C0D8;"></i>
        <h4 class="mb-3">Nuestra Historia</h4>
        <p>
          Desde nuestra fundación en 1998, Sacred Heart ha crecido de una pequeña clínica comunitaria a un hospital integral con tecnología de punta...
        </p>
      </div>
    </div>


    <div class="col-lg-6 col-md-12">
      <div class="icon-box p-4 shadow rounded-4 h-100 text-center" style="background-color: #fff;">
        <img src="img/do.png" class="rounded-circle mb-3" width="200" alt="Director del Hospital">
        <p><strong>Moises Ruiz</strong><br>Director General</p>
      </div>
    </div>

  </div>
</div>

<div class="container my-5">
  <div class="row justify-content-center g-4">
    <!-- Misión -->
    <div class="col-lg-4 col-md-6">
      <div class="icon-box text-center p-4 shadow rounded-4 h-100" style="background-color: #fff;">
        <i class="fas fa-bullseye fa-3x mb-3" style="color: #F7C0D8;"></i>
        <h4 class="mb-3">Misión</h4>
        <p>
          Dedicado a la excelencia en el cuidado de la salud, el Hospital Sacred Heart se compromete a servir a nuestra comunidad con compasión, respeto y un compromiso inquebrantable con el bienestar del paciente.
        </p>
      </div>
    </div>

    <!-- Visión -->
    <div class="col-lg-4 col-md-6">
      <div class="icon-box text-center p-4 shadow rounded-4 h-100" style="background-color: #fff;">
        <i class="fas fa-eye fa-3x mb-3" style="color: #F7C0D8;"></i>
        <h4 class="mb-3">Visión</h4>
        <p>
          Ser el hospital de elección, distinguido por nuestra atención centrada en el paciente, nuestra dedicación a la innovación y nuestra profunda conexión con los valores que nos guían.
        </p>
      </div>
    </div>

    <!-- Valores -->
    <div class="col-lg-8">
      <div class="icon-box p-4 shadow rounded-4 h-100" style="background-color: #fff;">
        <div class="text-center mb-3">
          <i class="fas fa-hands-helping fa-3x" style="color: #F7C0D8;"></i>
          <h4 class="mt-2">Valores</h4>
        </div>
        <ul class="list-unstyled ps-3">
          <li><strong>Dignidad Humana:</strong> Afirmar la dignidad y el valor de cada persona, independientemente de su condición.</li>
          <li><strong>Calidad:</strong> Esforzarse por la perfección en cada servicio que brindamos y en cada decisión que tomamos.</li>
          <li><strong>Empatía:</strong> Ponerse en el lugar del otro, entendiendo y respondiendo a las necesidades emocionales de nuestros pacientes y sus familias.</li>
          <li><strong>Comunidad:</strong> Trabajar en asociación con nuestra comunidad para promover la salud y el bienestar colectivo.</li>
          <li><strong>Integridad y Confianza:</strong> Construir relaciones basadas en la honestidad, la transparencia y la confianza mutua.</li>
        </ul>
      </div>
    </div>

  </div>
</div>


</div>
<div class="box">
  <div class="contenedor">
    <div class="item">
      <span class="cantidad" id="cont1">0</span>
      <span class="datos">Años de experiencia</span>
    </div>
    <div class="item">
      <span class="cantidad" id="cont2">0</span>
      <span class="datos">Pacientes felices</span>
    </div>
    <div class="item">
      <span class="cantidad" id="cont3">0</span>
      <span class="datos">Familias atendidas</span>
    </div>
  </div>
</div>

<script>
  // Control para que no se ejecute más de una vez
  let iniciado = false;

  function iniciarContadores() {
    if (iniciado) return;
    iniciado = true;

    let cont1 = document.getElementById('cont1'),
        cont2 = document.getElementById('cont2'),
        cont3 = document.getElementById('cont3');

    let cant1 = 0, cant2 = 0, cant3 = 0;

    let tiempo1 = setInterval(() => {
      cont1.textContent = ++cant1;
      if (cant1 === 10) {
        clearInterval(tiempo1);
      }
    }, 70);

    let incremento2 = 100;
    let tiempo2 = setInterval(() => {
      cant2 += incremento2;
      if (cant2 >= 2000) {
        cant2 = 2000;
        clearInterval(tiempo2);
      }
      cont2.textContent = cant2;
    }, 80);

    let incremento3 = 500;
    let tiempo3 = setInterval(() => {
      cant3 += incremento3;
      if (cant3 >= 10000) {
        cant3 = 10000;
        clearInterval(tiempo3);
      }
      cont3.textContent = cant3;
    }, 80);
  }

  // Observar cuando la caja entra a pantalla
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        iniciarContadores();
      }
    });
  }, {
    threshold: 0.5 // cuando el 50% sea visible
  });

  observer.observe(document.querySelector('.box'));
</script>


<footer>
  2025 Sacred Heart.
</footer>

</body>
</html>