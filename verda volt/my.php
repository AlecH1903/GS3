<?php
include_once("code/loginC.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Model Y | VerdaV</title>
  <link rel="stylesheet" href="my.css" />
  <link rel="stylesheet" href="css/carrossel.css">
  <link rel="stylesheet" href="css/footer.css">
  
</head>
<body>

<header>
 <nav class="nav-elegante">
 <div class="nav-container">
   <a href="verdavolt.php" class="nav-logo">VerdaV</a>
   <ul class="nav-links">  
     <li><a href="sobrenos.php">Sobre Nós</a></li>
     <li><a href="verdavolt.php#carros">Carros</a></li>
     <li><a href="verdavolt.php#variedades">Variedades</a></li> 
    
      <li class="dropdown">
        <?php 
        if(isset($_SESSION['nome'])){ ?>
           <a><?php echo $_SESSION['nome'];?></a>
        <ul class="submenu">
      <li><a href="perfil.php">Perfil<span ></span></a></li>
      <li><a href="inventario.php">Garagem<span ></span></a></li>
     <li><a href="code/logout.php">Sair<span ></span></a></li>
       <?php } else{ ?>
        <a href="#">Login/Cadastro <span class="seta">&#9660;</span></a>
 <ul class="submenu">
   <li><a href="login.php">Login</a></li>
   <li><a href="cadastro.php">Cadastro</a></li>
 </ul>
</li>
      <?php } ?>
       
 
   </ul>
   
 </div>
</nav>
</header>

<main>
  
  <section class="section hero" id="model-y" style="background-image: url('myhome.avif');">
    <div class="section-content">
      <h1>Model Y</h1>
      <p>A partir de R$ 56.000</p>
      <div class="buttons">
        <a href="modely.php" class="btn">Encomendar Agora</a>
        <a href="#" class="btn btn-secondary">Demonstração</a>
      </div>
      <div class="specs-bar">
        <div class="spec-item">
          <span class="spec-value">533 km</span>
          <span class="spec-label">Alcance (EPA est.)</span>
        </div>
        <div class="spec-item">
          <span class="spec-value">217 km/h</span>
          <span class="spec-label">Velocidade máxima</span>
        </div>
        <div class="spec-item">
          <span class="spec-value">3,7 s</span>
          <span class="spec-label">0-100 km/h*</span>
        </div>
        <div class="spec-item">
          <a href="#especificacoes" class="spec-link">Ver todas as especificações</a>
        </div>
      </div>
    </div>
  </section>

  
  <div class="carousel-container fullscreen">
    <div class="carousel-track" id="exterior-carousel">
      <div class="carousel-slide">
        <img src="my/modely-exterior-1.avif" alt="Model Y Exterior">
        <div class="slide-caption">
          <h3>Design Aerodinâmico</h3>
          <p>Linhas limpas para máxima eficiência energética</p>
        </div>
      </div>
      <div class="carousel-slide">
        <img src="my/modely-exterior-2.avif" alt="Model Y Perfil">
        <div class="slide-caption">
          <h3>Porta Malas Amplo</h3>
          <p>2.158 litros de capacidade total</p>
        </div>
      </div>
    </div>
    <button class="nav-button prev">&#10094;</button>
    <button class="nav-button next">&#10095;</button>
  </div>

  
  <section class="section interior-section" id="interior">
    <div class="split-container">
      <div class="split-content">
        <h2>Interior Minimalista</h2>
        <p>Um espaço pensado para o condutor, com tela central de 15 polegadas e sistema de áudio premium</p>
      </div>
      <div class="split-media">
        <video autoplay loop muted playsinline>
          <source src="my/modely-interior.webm" type="video/webm">
        </video>
      </div>
    </div>
  </section>

 
  <section class="section performance-section" style="background-image: url('my/modely-performance.avif');">
    <div class="floating-specs">
      <div class="spec-card">
        <span class="spec-value">3,7 s</span>
        <span class="spec-label">0-100 km/h</span>
        <p>Model Y Performance</p>
      </div>
    </div>
  </section>

 
  <section class="section gallery-section" id="galeria">
    <h2>Galeria Model Y</h2>
    <div class="tesla-gallery">
      <div class="gallery-item">
        <img src="my/gallery-seats.avif" alt="Assentos">
        <h3>Assentos Premium</h3>
      </div>
      <div class="gallery-item">
        <img src="my/gallery-wheel.avif" alt="Volante">
        <h3>Controle Intuitivo</h3>
      </div>
      <div class="gallery-item">
        <img src="my/gallery-screen.avif" alt="Tela">
        <h3>Tela Central</h3>
      </div>
    </div>
  </section>

  
  <section class="section specs-section" id="especificacoes">
    <div class="specs-container">
      <h2>Especificações Técnicas</h2>
      <div class="specs-grid">
        <div class="specs-column">
          <h3>Alcance</h3>
          <p><strong>533 km</strong> (EPA est.)</p>
          <h3>Velocidade máxima</h3>
          <p><strong>217 km/h</strong></p>
        </div>
        <div class="specs-column">
          <h3>Aceleração 0-100 km/h</h3>
          <p><strong>3,7 s</strong> (Performance)</p>
          <p><strong>5,0 s</strong> (Long Range)</p>
        </div>
        <div class="specs-column">
          <h3>Potência</h3>
          <p><strong>456 cv</strong> (Performance)</p>
          <h3>Carga</h3>
          <p><strong>2.158 L</strong> capacidade total</p>
        </div>
      </div>
    </div>
  </section>

  
  <section class="section final-cta">
    <div class="cta-content">
      <h2>Experimente o Model Y</h2>
      <div class="buttons">
        <a href="modely.php" class="btn">Encomendar Agora</a>
        <a href="#" class="btn btn-secondary">Agendar Test Drive</a>
      </div>
    </div>
  </section>
</main>

<footer class="footer">
  <div class="footer-container">
    <div class="footer-links">
      <a href="verdavolt.php">Verda Volt © 2025</a>
      <a href="sobrenos.php">Um pouco sobre nós</a>
      <a href="verdavolt.php#carros">Carros</a>
      <a href="verdavolt.php#variedades">Variedades</a>
      <a href="maproject.php">Projeto Meio Ambiente</a>
    </div>
  </div>
</footer>

<script src="js/carrossel.js"></script>
<script>
  
  const track = document.getElementById('carouselTrack');
    const slides = document.querySelectorAll('.carousel-slide');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let index = 0;

    function showSlide(i) {
      const slideWidth = slides[0].clientWidth;
      track.style.transform = `translateX(-${slideWidth * i}px)`;
    }

    nextBtn.addEventListener('click', () => {
      index = (index + 1) % slides.length;
      showSlide(index);
    });

    prevBtn.addEventListener('click', () => {
      index = (index - 1 + slides.length) % slides.length;
      showSlide(index);
    });

    setInterval(() => {
      index = (index + 1) % slides.length;
      showSlide(index);
    }, 8000);
</script>

</body>
</html>