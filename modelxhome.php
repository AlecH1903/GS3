<?php
include_once("code/loginC.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Model X | VerdaV</title>
  <link rel="stylesheet" href="mx/mx.css" />
  <link rel="stylesheet" href="mx/mxcarrossel.css">
  <link rel="stylesheet" href="css/footer.css">
  <style>
    html {
      scroll-snap-type: y mandatory;
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>

<!-- Header Idêntico ao Tesla Model X -->
<header>
  <nav class="nav-elegante">
    <div class="nav-container">
      <a href="verdavolt.php" class="nav-logo">VerdaV</a>
      <ul class="nav-links">  
        <li><a href="#model-x">Model X</a></li>
        <li><a href="#falcon-wing">Portas Falcon</a></li>
        <li><a href="#interior">Interior</a></li>
        <li class="dropdown">
          <?php if(isset($_SESSION['nome'])): ?>
            <a><?php echo $_SESSION['nome']; ?></a>
            <ul class="submenu">
              <li><a href="perfil.php">Perfil</a></li>
              <li><a href="code/logout.php">Sair</a></li>
            </ul>
          <?php else: ?>
            <a href="#">Login/Cadastro <span class="seta">&#9660;</span></a>
            <ul class="submenu">
              <li><a href="login.php">Login</a></li>
              <li><a href="cadastro.php">Cadastro</a></li>
            </ul>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main>
  <!-- Seção Hero - Destaque para as portas Falcon -->
  <section class="section hero" id="model-x" style="background-image: url('mx/modelx-hero.avif');">
    <div class="section-content">
      <h1>Model X</h1>
      <p>O SUV mais avançado já criado</p>
      <div class="buttons">
        <a href="#" class="btn">Encomendar Agora</a>
        <a href="#" class="btn btn-secondary">Test Drive</a>
      </div>
      <div class="specs-bar">
        <div class="spec-item">
          <span class="spec-value">560 km</span>
          <span class="spec-label">Alcance (EPA est.)</span>
        </div>
        <div class="spec-item">
          <span class="spec-value">2,6 s</span>
          <span class="spec-label">0-100 km/h*</span>
        </div>
        <div class="spec-item">
          <span class="spec-value">7</span>
          <span class="spec-label">Lugares</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Carrossel Falcon Doors - Destaque exclusivo -->
  <div class="carousel-container fullscreen" id="falcon-wing">
    <div class="carousel-track">
      <div class="carousel-slide">
        <img src="mx/falcon-wing-1.avif" alt="Portas Falcon abertas">
        <div class="slide-caption">
          <h3>Portas Falcon Wing</h3>
          <p>Abertura vertical com sensores inteligentes</p>
        </div>
      </div>
      <div class="carousel-slide">
        <img src="mx/falcon-wing-2.avif" alt="Portas em espaço apertado">
        <div class="slide-caption">
          <h3>Precisão Espacial</h3>
          <p>Abre em espaços de apenas 30cm de cada lado</p>
        </div>
      </div>
    </div>
    <button class="nav-button prev">&#10094;</button>
    <button class="nav-button next">&#10095;</button>
  </div>

  <!-- Seção Interior Premium -->
  <section class="section interior-section" id="interior">
    <div class="split-container">
      <div class="split-content">
        <h2>Interior Executivo</h2>
        <p>Assinos premium com controle climático individual, tela traseira para passageiros e sistema de áudio de 22 alto-falantes</p>
        <ul class="features-list">
          <li>Tela central de 17" com jogos integrados</li>
          <li>Filtro HEPA de ar médico</li>
          <li>Armazenamento frontal e traseiro</li>
        </ul>
      </div>
      <div class="split-media">
        <video autoplay loop muted playsinline>
          <source src="mx/modelx-interior.webm" type="video/webm">
        </video>
      </div>
    </div>
  </section>

  <!-- Seção Performance Plaid -->
  <section class="section performance-section" style="background-image: url('mx/modelx-performance.avif');">
    <div class="floating-specs">
      <div class="spec-card">
        <span class="spec-value">1.020 cv</span>
        <span class="spec-label">Potência (Plaid)</span>
      </div>
    </div>
  </section>

  <!-- Galeria Tesla Model X -->
  <section class="section gallery-section">
    <h2>Design Iconico</h2>
    <div class="tesla-gallery">
      <div class="gallery-item">
        <img src="mx/gallery-yoke.avif" alt="Volante Yoke">
        <h3>Volante Yoke</h3>
      </div>
      <div class="gallery-item">
        <img src="mx/gallery-screen.avif" alt="Tela 17">
        <h3>Tela de 17"</h3>
      </div>
      <div class="gallery-item">
        <img src="mx/gallery-seats.avif" alt="Assentos">
        <h3>7 Lugares</h3>
      </div>
    </div>
  </section>

  <!-- Seção Final -->
  <section class="section final-cta">
    <div class="cta-content">
      <h2>Experimente o Futuro</h2>
      <div class="buttons">
        <a href="#" class="btn">Personalizar</a>
        <a href="#" class="btn btn-secondary">Ver Inventário</a>
      </div>
    </div>
  </section>
</main>

<footer class="footer">
  <div class="footer-container">
    <div class="footer-links">
      <a href="verdavolt.php">Verda Volt © 2025</a>
      <a href="#model-x">Model X</a>
      <a href="#falcon-wing">Portas Falcon</a>
      <a href="#interior">Interior</a>
    </div>
  </div>
</footer>

<script src="js/carrossel.js"></script>
</body>
</html>