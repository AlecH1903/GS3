<?php
include_once("code/loginC.php");






?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
     <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200'
   height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Model 3</title>
  <link rel="stylesheet" href="m3/model3.css" />
  <link rel="stylesheet" href="css/carrossel.css">
</head>


   
  



<body scrolling="no"  >
   <nav class="nav-elegante">
 <div class="nav-container">
   <a href="verdavolt.php" class="nav-logo">VerdaV</a>
   <ul class="nav-links">  
     <li><a href="#sobrenos">Sobre Nós</a></li>
     <li><a href="#carros">Carros</a></li>
     <li><a href="#variedades">Variedades</a></li> 
    
      <li class="dropdown">
        <?php 
        if(isset($_SESSION['nome'])){ ?>
           <a><?php echo $_SESSION['nome'];?></a>
        <ul class="submenu">
        <li><a href="perfil.php">Perfil<span ></span></a></li>
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

  <div class="main-layout">
    <div class="background-section">
    <section class="section" id="carga">
   <div class="section-contentcarga">

        
    <div id="carros" class="carousel-container">
    
    

      <div class="carousel-track" id="carouselTrack">
     <button class="nav-button prev">&#10094;</button>
          <div class="carousel-slide">
            <img src="m3/vendam3.jpg" alt="">
            
          </div>

          <div class="carousel-slide">
            <img src="m3/m3lado.png" alt="">
          
          </div>

          <div class="carousel-slide">
            <img src="m3/m3tras.png" alt="">
          
          </div>

          <div class="carousel-slide">
            <img src="m3/roda.png" alt="">
          
          </div>
          
          <div class="carousel-slide">
            <img src="m3/m3dentro.png" alt="">
          
          </div>
       
      </div><button class="nav-button next">&#10095;</button>
    </div>
         
  </div>

 

  </section>
    </div>
    <section class="info-section" scrolling="yes">
    
    <div class="div-content">
    <h2>Model 3</h2>

    <div class="container-lado">
  <div class="item">  <h3> 363mi </h3> <p> <br>
    Alcance (EPA est.)
    </p></div>
  <div class="item"><h3>125mph </h3><p><br>
  Velocidade máxima</p>
    </div>
  <div class="item"><h3>4.9sec </h3><p> <br>
    0-60 mph</p></div>
</div>

    
    
    
  
  </div>

    </section>
    
     <script src="js/carrossel.js"></script>
    
</body>
</html>
