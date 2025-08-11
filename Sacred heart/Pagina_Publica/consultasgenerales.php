<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Consultas Generales</title>
  <link rel="icon" type="image/png" href="img/sf.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    html, body {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fffdfd;
      color: #333;
    }

    .menu {
      background-color: #f7c0d8;
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
      padding: 1rem 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .menu ul {
      list-style: none;
      display: flex;
      align-items: center;
      padding-left: 0;
    }

    .menu ul li {
      margin: 0 10px;
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
      background-color: #f7aacc;
    }

    .let2 {
      font-family: 'Georgia', serif;
      font-size: 1.8rem;
      font-weight: bold;
      color: #000;
    }

    .main-container {
      min-height: calc(100vh - 120px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1rem;
    }

    .form-container {
      width: 100%;
      max-width: 700px;
      background-color: #fff;
      border-radius: 15px;
      padding: 2rem;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }

    .form-container h4 {
      font-family: 'Georgia', serif;
      text-align: center;
      margin-bottom: 1.5rem;
      color: #000;
    }

    .btn-help {
      background-color: #F7C0D8;
      border: none;
      color: #fff;
    }

    .btn-help:hover {
      background-color: #e99dbf;
    }

    footer {
      background-color: #F7C0D8;
      padding: 1rem;
      text-align: center;
      font-family: 'Georgia', serif;
    }

    @media (max-width: 576px) {
      .let2 {
        font-size: 1.5rem;
      }
      footer marquee {
        display: none;
      }
    }
  </style>
</head>
<body>

  <nav class="menu">
    <h1 class="let2 mb-2 mb-md-0">Consultas Generales</h1>
    <ul class="nav-links">
      <li><a href="Ayudapagina.php"><i class="fas fa-home me-1"></i> Atrás</a></li>
    </ul>
  </nav>

  <div class="main-container">
    <div class="form-container">
      <h4>Consulta sobre Servicios, Requisitos o Atención</h4>
      <form>
        <div class="mb-3">
          <label class="form-label">Nombre completo</label>
          <input type="text" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Escriba su consulta</label>
          <textarea class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" required>
          <label class="form-check-label">Confirmo que mi consulta no es de soporte técnico.</label>
        </div>

        <div class="d-grid">
          <button id="btnEnviar" type="button" class="btn btn-help">Enviar consulta</button>
        </div>
      </form>
    </div>
  </div>

  <footer>
    2025 Sacred Heart.
    <marquee behavior="alternate" direction="left" bgcolor="#F7C0D8">Created by XFHS DevGroup</marquee>
  </footer>

 <script>
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('btnEnviar');

    btn.addEventListener('click', function () {
      btn.innerHTML = '<i class="fas fa-check-circle me-2"></i> Enviado';
      btn.disabled = true; 
      alert('Tu solicitud será atendida en breve');
    });
  });
</script>

</body>
</html>
