
<?php
include_once("code/loginC.php");






?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200'
   height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Model 3</title>
  <link rel="stylesheet" href="m3/m3.css" />
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
     <li><a href="verdavolt.php">Carros</a></li>
     <li><a href="verdavolt.php">Variedades</a></li> 
    
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
    <section class="section hero" id="hero">
      <div class="section-contentm3" >
        <h1 style="margin-top: 7em;">Model 3</h1>
        <p>Desempenho e segurança de última geração</p>
        <div class="buttons">
          <a href="model3.php" class="btn">Encomendar Agora</a>
          <a href="#" class="btn btn-secondary">Ver Inventário</a>
        </div>
      </div>
    </section>

     <section class="section" id="home2"> <!--  -->
      <div class="section-content" >

      <h2 style=" margin-top: 4em;">Feito para Longas Distâncias </h2>
      <p>
        Percorra até 580 km (estimativa EPA) com uma única carga,
        com estilo exterior atualizado e otimizado <br> para máxima aerodinâmica.</p>
      </div>
    </section>


    <div id="carros" class="carousel-container">
    
    <div class="carousel-track" id="carouselTrack1">
      
      <div class="carousel-slide1">

      <video id="interior" autoplay loop muted playsinline >

      <source src="m3/interiorM3.webm" type="video/webm" />

        </video>
        
        </div>
      </div>
      
     </div> 
  </div>


  <section class="section_card" id="">
      <div class="section-content1">
        <h2>Interior Totalmente Novo</h2>
        <p>
          Acomode-se em um interior totalmente novo, com um estilo envolvente que o envolve. <br>
          Personalize a iluminação ambiente para deixá-la com a sua cara.</p>
      </div>
    </section>


  <div class="carousel-slide1">
      <video autoplay loop muted playsinline >
  <source src="m3/dentrom3.webm" type="video/webm" />
</video>
        
      </div>
      

    </div>
   
  </div>
</div>


    <section class="section" id="interior">
      <div class="section-content2" >
        <h2 style="margin-top: 3em;">Uma Cabine Mais Silenciosa</h2>
        <p>Desfrute de uma cabine silenciosa, graças ao vidro acústico de 360 ​​graus. Contemple o céu sob um teto todo de vidro 
         <br> que permite a entrada de luz e protege você dos raios UV nocivos.
        </p>
      </div>
    </section>


    <section class="section" id="acessor">
  <div class="section-content5">
    <h2>Acesso Remoto</h2>
    <p>Controle tudo a partir de um único aplicativo Verda.</p>

    <div class="galeria">
      <div class="galeria-item">
        <img src="m3/remote1m3.avif" alt="Imagem 1">
        <h3>Controles</h3>
        <p>Acesse e gerencie seu veículo remotamente.</p>
      </div>
      <div class="galeria-item">
        <img src="m3/remote2m3.avif" alt="Imagem 2">
        <h3>Pré-condicionamento da cabine</h3>
        <p>Pré-aqueça ou resfrie sua cabine de <br> qualquer lugar.</p>
      </div>
      <div class="galeria-item">
        <img src="m3/remote3m3.avif" alt="Imagem 3">
        <h3>Carregamento</h3>
        <p>Planeje sua rota com pontos de recarga.</p>
      </div>
    </div>
  </div>
</section >




<section class="section" id="carga" >
  <div class="section-contentcarga">

        <h2>Carregamento conveniente</h2>
        <p>Rápido, acessível, fácil — em qualquer lugar com eletricidade</p>
        <button class="nav-button prev">&#10094;</button>
    <div id="carros" class="carousel-container">
    
    

      <div class="carousel-track" id="carouselTrack">
     
          <div class="carousel-slide">
            <img src="m3/cargam3.avif" alt="">
            
          </div>

          <div class="carousel-slide">
            <img src="m3/carga3m3.avif" alt="">
          
          </div>

          <div class="carousel-slide">
            <img src="m3/carga2.avif" alt="">
          
          </div>
      
      </div>
    </div>

  </div>

  <button class="nav-button next">&#10095;</button>

  </section>

    <section class="section" id="performance">
      <div class="section-content3">
        <h1>Model 3</h1>
        <p>Desempenho e segurança de última geração</p>
        <div class="buttons">
          <a href="model3.php" class="btn">Encomendar Agora</a>
          <a href="#" class="btn btn-secondary">Ver mais</a>
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
  <script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script> 
    
    <script src="js/pause.js"></script>
    <script src="js/carrossel.js"></script>
    <script src="js/lenis.js"></script>
  
  

</body>
</html>