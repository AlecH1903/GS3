<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Model 3</title>
  <link rel="stylesheet" href="m3/m3.css" />
  <link rel="stylesheet" href="css/carrossel.css" />
</head>
<body>

<header>
   
   <nav class="nav-elegante">
 <div class="nav-container">
   <a href="verdavolt.html" class="nav-logo">VerdaV</a>
   <ul class="nav-links">  
     <li><a href="#sobrenos">Sobre Nós</a></li>
     <li><a href="#carros">Carros</a></li>
     <li><a href="#variedades">Variedades</a></li> 
    
      <li class="dropdown">
 <a href="#">Login/Cadastro <span class="seta">&#9660;</span></a>
 <ul class="submenu">
   <li><a href="login.php">Login</a></li>
   <li><a href="cadastro.php">Cadastro</a></li>
 </ul>
</li>
   </ul>
   
 </div>
</nav>

</header>

 
  <main>
    <section class="section hero" id="hero">
      <div class="section-contentm3">
        <h1>Model 3</h1>
        <p>Desempenho e segurança de última geração</p>
        <div class="buttons">
          <a href="#" class="btn">Encomendar Agora</a>
          <a href="#" class="btn btn-secondary">Ver Inventário</a>
        </div>
      </div>
    </section>

     <section class="section" id="home2"> <!--  -->
      
    </section>


    <div id="carros" class="carousel-container">
    <button class="nav-button prev">&#10094;</button>
    <div class="carousel-track" id="carouselTrack">
      
      <div class="carousel-slide">

      <video id="interior" autoplay loop muted playsinline >

      <source src="m3/interiorM3.webm" type="video/webm" />

        </video>
        
        </div>
      </div>
      
     </div> <!-- -->
    <button class="nav-button next">&#10095;</button>
  </div>


  <section class="section_card" id="">
      <div class="section-content1">
        <h2>Interior Totalmente Novo</h2>
        <p>
          Acomode-se em um interior totalmente novo, com um estilo envolvente que o envolve. <br>
          Personalize a iluminação ambiente para deixá-la com a sua cara.</p>
      </div>
    </section>


  <div class="carousel-slide">
      <video autoplay loop muted playsinline >
  <source src="m3/dentrom3.webm" type="video/webm" />
</video>
        <div class="slide-content">
        
      </div>
      </div>
      

    </div>
    <button class="nav-button next">&#10095;</button>
  </div>
</div>


    <section class="section" id="interior">
      <div class="section-content2">
        <h2>Interior Minimalista</h2>
        <p>Design limpo com tecnologia avançada</p>
      </div>
    </section>


    <section class="section" id="acessor">
      <div class="section-content">
        <h2>Acesso Remoto</h2>
        <p>Controle tudo a partir de um único aplicativo Tesla.
</p>
      </div>
    </section>


    <section class="section" id="performance">
      <div class="section-content">
        <h2>Desempenho Excepcional</h2>
        <p>Aceleração de 0 a 100 km/h em 3,1 segundos</p>
      </div>
    </section>
  </main>

  <script src="m3carrossel.js"></script>
  <script src="pause.js"></script>

</body>
</html>