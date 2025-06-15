<?php
include_once("code/loginC.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Model Y</title>
  <link rel="stylesheet" href="my/my.css" />
  <link rel="stylesheet" href="my/mycarrossel.css">
  <link rel="stylesheet" href="css/carrossel.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
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

<main style="background-color: white;">
  <section class="section hero" id="hero">
    <div class="section-contentm3">
      <h1>Model Y</h1>
      <p>A partir de 90 mil</p>
      <div class="buttons">
        <a href="modely.php" class="btn">Encomendar Agora</a>
        <a href="#" class="btn btn-secondary">Ver Inventário</a>
      </div>
    </div>
  </section>

  <section class="section" id="home2">
    <div class="section-content5" style="text-align: center;">
      <div class="container-lado" style="color: black; text-align: center;">
        <div class="item"><h2>357 mi</h2><h3>Alcance (estimativa EPA)²</h3></div>
        <div class="item"><h2>182mi</h2><h3>Carga em 15 min³</h3></div>
        <div class="item"><h2>FSD</h2><h3>Compatível com Full Self-Driving <br>(Supervisionado)</h3></div>
      </div>

      <div class="carousel-container1" style="margin: 20px auto; border-radius:1em; max-width: 1200px;">
        <div class="carousel-track">
          <div class="carousel-slide">
            <img src="my/mysection1.avif" alt="" style="border-radius: 0; border:0cap">
          </div>
        </div>
      </div>
    </div>
  </section>
       
  <div class="text-section">
    <h1 style="color: black;">Redesenhado de Ponta a Ponta</h1>
    <h3 style="color: gray;">Do para-choque dianteiro até a lanterna traseira, o exterior foi completamente redesenhado para oferecer a máxima eficiência, permitindo que você aproveite ao máximo a autonomia a cada carga. Com suspensão, rodas e pneus atualizados, sua viagem será mais suave e silenciosa.</h3>
  </div>

    <div class="section-contentcarga">
      
      
      <div class="carousel-container">
        <button class="nav-button prev">&#10094;</button>
        <div class="carousel-track" id="carouselTrack">
          <div class="carousel-slide">
            <img src="my/mycarrossel1.avif" alt="">
          </div>
          <div class="carousel-slide">
            <img src="my/mycarrossel2.avif" alt="">
          </div>
          <div class="carousel-slide">
            <img src="my/mycarrossel3.avif" alt="">
          </div>
        </div> <button class="nav-button next">&#10095;</button>
      </div>

    </div>

    <div class="section-contentcarga">
    <div id="carros" class="carousel-container" style="    height: 100vh;
    top: 145em;
    inset-inline-start: 0px;
    position: absolute;
    width:159%;
    z-index: 3;
    margin-left: 9em;
    margin-right: -9em;
">
    
    <div class="carousel-track" id="carouselTrack">
      
      <div class="carousel-slide">

      <video id="interior" autoplay loop muted playsinline >

      <source src="my/mydentro1.webm" type="video/webm" />

        </video>
        
        </div>
      </div>
      
         </div> 
       </div>

    </div>

  <section class="section">
    <div class="section-content1">
      <h2>Interior Totalmente Novo</h2>
      <p>Acomode-se em um interior totalmente novo, com um estilo envolvente que o envolve. <br> Personalize a iluminação ambiente para deixá-la com a sua cara.</p>
    </div>
  </section>

  

  
   <section class="feature-section" style="margin-top: 12em;">
        <div class="section-header">
            <h2 style="color:black">All-New Model Y</h2>
            <p>Desenvolvido para eficiência e desempenho, com design elegante e tecnologia avançada</p>
        </div>
        
        <div class="features-grid">

            <div class="feature-card">
                <div class="card-image"style="background-image:  url('autofalante.svg'); padding-top:23em; margin-bottom:-7em;
   max-width:700px"></div>
                <div class="card-content">
                     <h3 style="color: black;">Ambiente Sonoro Imersivo</h3>
                    <p>As chamadas chegam com clareza. Os dados são baixados rapidamente. Portas e porta-malas destravam quando você se aproxima.</p>
                
                </div>
            </div>
            
            <div class="feature-card">
                <div class="card-image" style="background-image:  url('banco.svg');margin-left:5em; padding-top:18em; margin-bottom:-1.9em;
   max-width:300px"></div>
                <div class="card-content">
                    <h3 style="color: black">Conforto em qualquer assento</h3>
                    <p>As telas sensíveis ao toque dianteiras e traseiras colocam todas as configurações de climatização e entretenimento ao seu alcance.</p>
                    
                </div>
            </div>
            
            <div class="feature-card">
                <div class="card-image" style="background-image:  url('wifi.svg');margin-left:6em; padding-top:39em; margin-bottom:-23em; margin-right:-43em;
    width:800; height:280 "></div>
                <div class="card-content">
                    <h3 style="color: black;">Ainda mais conectado</h3>
                    <p>As chamadas chegam com clareza. Os dados são baixados rapidamente. Portas e porta-malas destravam quando você se aproxima.</p>
                </div>
            </div>
        </div>
    </section>
 

  <section class="section" id="acessor">
    <div class="section-content5">
       <div class="section-contentcarga">
      
      
      <div class="carousel-container">
        <button class="nav-button prev">&#10094;</button>
        <div class="carousel-track" id="carouselTrack">
          <div class="carousel-slide">
            <img src="my/mycarrossel2,1.avif" alt="">
          </div>
          <div class="carousel-slide">
            <img src="my/mycarrossel2,2.avif" alt="">
          </div>
          <div class="carousel-slide">
            <img src="my/mycarrossel2,3.avif" alt="">
          </div>
           <div class="carousel-slide">
            <img src="my/mycarrossel2,4.avif" alt="">
          </div>
        </div> <button class="nav-button next">&#10095;</button>
      </div>

    </div>

    

  </section>

  <section class="section" id="carga">
    <div class="section-contentcarga">
      
      
      <div class="carousel-container">
          <div class="carousel-slide">
            <img src="my/mytela.avif" alt="">
          </div>
      </div>
            
      <h1 style="margin-top:1em;margin-right: 8.5em;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        O Futuro Das Viagens É Autônomo</h1>
        
        <div class="features-grid">

            <div class="feature-card">
                
                <div class="card-content" style="margin-top:em;margin-bottom:-2em">
                     <h3 style="color: black;">Direção totalmente autônoma <h5 style="color: black; padding-top:-3em">(supervisionada)</h5></h3>
                    <p>Um conjunto de recursos avançados de assistência ao motorista, projetado para fornecer orientação mais ativa e direção assistida sob sua supervisão ativa.</p>
                
                </div>
            </div>
            
            <div class="feature-card">
                
                <div class="card-content " style=" padding-top:-7em; margin-bottom:-1.9em;">
                    <h3 style="color: black">Conforto em qualquer assento</h3>
                    <p>As telas sensíveis ao toque dianteiras e traseiras colocam todas as configurações de climatização e entretenimento ao seu alcance.</p>
                    
                </div>
            </div>
            
            <div class="feature-card">
                
                <div class="card-content"style=" padding-top:-7em; ;
    width:800; height:280 ">
                    <h3 style="color: black;">Ainda mais conectado</h3>
                    <p>As chamadas chegam com clareza. Os dados são baixados rapidamente. Portas e porta-malas destravam quando você se aproxima.</p>
                </div>
            </div>
        </div>

    </div>
  </section>

  <section class="section" id="acessor">
    <div class="section-content5">
       <div class="section-contentcarga">
      
      
      <div class="carousel-container">
       
        <div class="carousel-track" id="carouselTrack">
          <div class="carousel-slide" style="margin-left: -7em;margin-right: -22em;padding-left:-28em">
            <img src="my/mycarga1.avif" alt="">
            
          </div>
        </div>
        <br>
        <h1 style="color: black;text-align:left">Chega de Postos de Gasolina</h1>
        <h3 style="color: gray;text-align:left">Ampla autonomia para todos os tipos de condução. Da condução diária às viagens de carro em família, o carregamento é rápido, conveniente e acessível em qualquer lugar com eletricidade.</h3>
      </div>
       </div>
    </div>
     <div class="section-contentcarga">
    <div id="carros" class="carousel-container" >
    
    <div class="carousel-track" id="carouselTrack">
      
      <div class="carousel-slide">

      <video id="interior" autoplay loop muted playsinline >

      <source src="my/carga1.webm" type="video/webm" />

        </video>
        
        </div>
      </div>
      
         </div> 
       </div>

    </div>

  </section>

  <section class="section" id="performance" style=" background-image: url('my/myend.avif');">
    <div class="section-content3">
      <h1>Model Y</h1>
      <p>Desempenho e segurança de última geração</p>
      <div class="buttons">
        <a href="modely.php" class="btn">Encomendar Agora</a>
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
<script src="js/mycarrossel.js"></script>
<script src="js/lenis.js"></script>

</body>
</html>