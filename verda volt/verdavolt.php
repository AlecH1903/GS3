
<?php
include_once("code/loginC.php");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V </text> </svg>">
    <title>VerdaVolt</title>
    <link rel="stylesheet" href="css/nav1.css">
    <link rel="stylesheet" href="css/telao.css">
    <link rel="stylesheet" href="css/miniatura.css">
    <link rel="stylesheet" href="css/verda.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/carrossel.css">
    <link rel="stylesheet" href="css/sectionmenu.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body bgcolor="black">
   <header>
   
   <nav class="nav-elegante">
 <div class="nav-container">
   <a href="verdavolt.php" class="nav-logo">VerdaV</a>
   <ul class="nav-links">  
     <li><a href="sobrenos.php">Sobre Nós</a></li>
     <li><a href="#carros">Carros</a></li>
     <li><a href="#variedades">Variedades</a></li> 
    
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



<div id="sobrenos" class="container">
    <div class="texto">
      <h2>VERDA VOLT: SEMPRE UM PASSO À FRENTE DO PLANETA</h2>
    <p> 
      
<br>
Pioneiros na Revolução Elétrica desde 1965 <br>

<br> A Gênese: Quando Sustentabilidade Era uma Palavra Rara
Em 1965 – uma década antes do primeiro alerta científico sobre mudanças climáticas – Inspirado pela degradação de florestas na Amazônia, nosso manifesto é um desafio ao status quo: <br>
<br>
"Carros não podem ser cápsulas de veneno. Se existem alternativas limpas, por que insistir na fumaça?" <br>
<br> Nossos primeiros protótipos (movidos a baterias recarregáveis por energia solar) eram vistos como "curiosidades exóticas", mas já carregavam nosso DNA: combater poluição antes que ela virasse crise. <br>
<br>
Nossa Missão: <br>
"Erradicar as emissões de GEE do transporte terrestre através de inovação radical e acessível – porque prevenir sempre foi mais inteligente que remediar."
      
    </pre></p>
    </div>
    <div class="imagem">
      <img src="main/caminhão.png" alt="">
      <img src="main/caminhão2.png" alt="">
    </div>
  </div>

    <!-- Telão -->
    <div class="telao-container">
    <img id="imagem-telao" src="IMAGENS/tesla_model_y.png" alt="Imagem principal do telão">
</div>

<div class="miniaturas-galeria">
    <img class="miniatura" src="IMAGENS/tesla_model_y.png" alt="Miniatura 1">
    <img class="miniatura" src="IMAGENS/watts_w125.png" alt="Miniatura 2">
    <img class="miniatura" src="IMAGENS/arrow_one.png" alt="Miniatura 3">
    <img class="miniatura" src="IMAGENS/tesla_semi.png" alt="Miniatura 4">
</div>

   
 <div id="carros" class="carousel-container">
    <button class="nav-button prev">&#10094;</button>
    <div class="carousel-track" id="carouselTrack">
      <div class="carousel-slide">
        <img src="models/models.avif" alt="Model S">
        <div class="slide-content">
          <h1>Model S</h1>
          <p>Acelere de 0 a 100 km/h em 2.1s com autonomia de 650 km.</p>
           <a class="exbtn" href="mshome.php">Saiba mais</a>
        </div>
      </div>
      <div class="carousel-slide">
        <img src="models/Modelx.avif" alt="Model X">
        <div class="slide-content">
          <h1>Model X</h1>
          <p>O SUV com o maior desempenho já fabricado. Até 580 km de autonomia.</p>
           <a class="exbtn" href="mxhome.php">Descubra</a>
        </div>
      </div>
      <div class="carousel-slide">
        <img src="models/modelY.avif" alt="Model Y">
        <div class="slide-content">
          <h1>Model Y</h1>
          <p>Espaçoso, eficiente e pronto para qualquer jornada.</p>
           <a class="exbtn" href="myhome.php">Explore</a>
        </div>
      </div>

       <div class="carousel-slide">
        <img src="models/model3.avif" alt="Model 3">
        <div class="slide-content">
          <h1>Model 3</h1>
          <p>Desempenho acessível com design elegante e moderno.</p>
           <a class="exbtn" href="m3home.php">Explore</a>
        </div>
      </div>

    </div>
    <button class="nav-button next">&#10095;</button>
  </div>


    <div id="variedades" class="heroes-wrapper">
   
    <div class="hero-card">
      <div class="hero-text">
        <h2>Projeto Meio Ambiente</h2>
        <a href="maproject.php" class="learn-more">Veja mais</a>
      </div>
      <div class="hero-image">
        <img src="main/homecars.avif" alt="">
      </div>
    </div>

    <div class="hero-card">
      <div class="hero-text">
        <h2>Garagem Virtual</h2>
        <a href="inventario.php" class="learn-more">Veja mais</a>
      </div>
      <div class="hero-image">
        <img src="main/comparehome.avif" alt="">
      </div>
    </div>
  </div>


  
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

    <script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script> 
    <script src="js/carrossel.js"></script>
    <script src="js/telao.js"></script>
    <script src="js/lenis.js"></script>
   
</body>
</html>