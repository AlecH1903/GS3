
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
  <title> Model S</title>
  <link rel="stylesheet" href="ms.css" />
  
  <link rel="stylesheet" href="css/carrossel.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body >

<header>
   
   <nav class="nav-elegante">
 <div class="nav-container">
   <a href="verdavolt.php" class="nav-logo">VerdaV</a>
   <ul class="nav-links">  
     <li><a href="sobrenos.php">Sobre Nós</a></li>
     <li><a href="verdavolt.php#carros">Carros</a></li>
     <li><a href="#variedades">Variedades</a></li> 
    
      <li class="dropdown">
        <?php 
        if(isset($_SESSION['nome'])){ ?>
           <a><?php echo $_SESSION['nome'];?></a>
        <ul class="submenu">
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
      <div class="section-contentm3">
        <h1>Model S</h1>
        <p>Desempenho e segurança de última geração</p>
        <div class="buttons">
          <a href="modelS.php" class="btn">Encomendar Agora</a>
          <a href="#" class="btn btn-secondary">Ver Inventário</a>
        </div>
      </div>
    </section>

     <section class="section" id="home2"> <!--  -->
      <div class="section-content">

      <h2>Interior Do Futuro </h2>
      
      </div>
    </section>

<br><br>
    <div id="carros" class="carousel-container">
    <button class="nav-button prev">&#10094;</button>
    <div class="carousel-track" id="carouselTrack">
      
      <div class="carousel-slide">

      <video id="interior" autoplay loop muted playsinline >

      <source src="mx/mx1.webm" type="video/webm" />

        </video>
        
        </div>
        <div class="carousel-slide">

      <video id="interior" autoplay loop muted playsinline >

      <source src="mx/mx2.mp4 " type="video/webm" />

        </video>
        
        </div>
         <div class="carousel-slide">

      <video id="interior" autoplay loop muted playsinline >

      <source src="mx/mx3.webm" type="video/webm" />

        </video>
        
        </div>
         <div class="carousel-slide">

      <video id="interior" autoplay loop muted playsinline >

      <source src="mx/mx4.webm" type="video/webm" />

        </video>
        
        </div>
         <div class="carousel-slide1">

      <video id="interior" autoplay loop muted playsinline >

      <source src="mx/mx5.webm" type="video/webm" />

        </video>
        
        </div>
      </div> 
   
       
     <button class="nav-button next">&#10095;</button>
  </div>

  <div style="display: flex;
  flex-wrap: wrap; 
  align-items: flex-start;
  justify-content: space-between;
  gap: 30px;
  max-width: 1000px;
  margin: 50px auto;
  padding: 20px;
  background-color: rgb(0, 0, 0);
  border-radius: 8px;">


    <div style=" flex: 1 1 100%; 
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <h4 style="margin-top: 2em;text-align:left; margin-left:35em;font-family:'roboto'">Mantenha-se Conectado</h4> <br>
    <h5 style="text-align: left;margin-left:42.2em;font-family:'roboto'"> 
      Conecte-se instantaneamente com Bluetooth para vários dispositivos ou 
      carregue<br> dispositivos rapidamente com carregamento sem fio e USB-C de 36 watts.
  </h5>
    </div>
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <img style="  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 8px;
  margin-top: 2em;
  margin-top: -10em;
  margin-left: -7em" src="mx/mxconnect.avif" alt="">
    
    </div>
       <!-- card 2 -->
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <h4 style="margin-top: 2em;text-align:left;font-family:'roboto';margin-left: -5em">Som Sublime</h4> <br>
    <h5 style="text-align: left;font-family:'roboto';margin-left: -6em"> 
     Um sistema de áudio com 22 alto-falantes e 960 watts de potência, com Redução Ativa de <br>
      Ruído da Estrada, oferece a melhor experiência auditiva onde quer que você esteja.
  </h5>
    </div>
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <video autoplay loop muted playsinline style="  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 8px;
  margin-top: -8em;
  margin-left: 35em;" src="ms/msound.webm" alt=""> </video>
    
    </div>
    <div style=" flex: 1 1 100%; 
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <h4 style="margin-top: 2em;text-align:left; margin-left:35em;font-family:'roboto'">Espaço para Tudo
</h4> <br>
    <h5 style="text-align: left;margin-left:42.2em;font-family:'roboto'"> 
      Com porta-malas dianteiro e traseiro e bancos rebatíveis, <br>
       você pode acomodar sua bicicleta sem tirar a roda — e sua bagagem também.</h5>
    </div>
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <img style="  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 8px;
  margin-top: 2em;
  margin-top: -10em;
  margin-left: -7em" src="ms/msroom.avif" alt="">
    
    </div>
  </div>



    <section class="section" style=" background-image: url('ms/msmid.avif');" >
      <div class="section-content2">
        <div class="container-lado"style=" display: flex; align-itens:center;
  gap: 2em; margin-top:72em">
  <div class="item" style="color: white;" >  <h2 style="font-size:x-large;"> 1,020 hp </h2> <p> 
    Peak Power
    </p></div>
  <div class="item"  style="color: white;"><h3 style="font-size:x-large;">9.23s </h3><p><br>
  155mph 1/4 Mile</p>
    </div>
  <div class="item"  style="color: white;"><h3 style="font-size:x-large;">1.99s </h3><p> <br>
    0-60 mph</p></div>
      </div>
      </div>
    </section>


<section class="section" id="carga" style="background-image: url('ms/msaero.avif')">
  <div class="section-contentcarga">

  </section>




  <div style="display: flex;
  flex-wrap: wrap; 
  align-items: flex-start;
  justify-content: space-between;
  gap: 30px;
  max-width: 1000px;
  margin: 50px auto;
  padding: 20px;
  background-color: rgb(0, 0, 0);
  border-radius: 8px;">


   
       <!-- cards!!! -->
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <h4 style="margin-top: 2em;text-align:left;font-family:'roboto';margin-left: -5em">Desempenho Implacável</h4> <br>
    <h5 style="text-align: left;font-family:'roboto';margin-left: -6em"> 
     Rodas e pneus de alto desempenho escalonados mantêm o veículo firme <br>
      e ajudam a transferir a máxima potência para a estrada.
  </h5>
    </div>
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <img src="ms/msroda.avif" style="  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 8px;
  margin-top: -8em;
  margin-left: 35em;"  alt=""> 
    
    </div>
    <div style=" flex: 1 1 100%; 
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <h4 style="margin-top: 2em;text-align:left; margin-left:35em;font-family:'roboto'">Aerodinâmica Otimizada

</h4> <br>
    <h5 style="text-align: left;margin-left:42.2em;font-family:'roboto'"> 
     A atenção aos detalhes em todas as superfícies externas faz do <br>
      Model S o carro de produção mais aerodinâmico do planeta.</h5>
    </div>
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <img src="ms/mstras.avif" style="  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 8px;
  margin-top: 2em;
  margin-top: -10em;
  margin-left: -7em"  alt="">
    
    </div>
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;"> <br>
      <h4 style="margin-top: 2em;text-align:left;font-family:'roboto';margin-left: -5em">Estilo Refinado</h4> <br>
    <h5 style="text-align: left;font-family:'roboto';margin-left: -6em"> 
    Uma silhueta icônica encontra proporções renovadas e elegantes.
  </h5>
    </div>
    <div style=" flex: 1 1 100%; /* ocupa 100% em telas pequenas */
  max-width: 100%;
  font-family: 'Roboto', sans-serif;
  color: #fff;">
      <img src="ms/mslado.avif" style="  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 8px;
  margin-top: -8em;
  margin-left: 35em;" alt=""> 
    
    </div>
  </div>

       <!-- LAYOUT DO CARRO 7/3 -->

 <div class="main-layout" style="display: flex;
  height: 100vh;
  width: 100vw;">

 

  <div class="background-section" style="flex: 7;
  background-color: white;
  background-size: cover;
  background-position: center;
  display:block;
  background-image: url('mx/mxfalcon.avif')"> 
    <section class="section" id="acessor">
      <div class="section-contentcarga">
         <div id="carros" class="carousel-container">
      <div class="carousel-track" id="carouselTrack">
        <div class="carousel-slide">
           <video autoplay loop muted playsinline style="width:166vh" src="ms/msvision.mp4" alt="Imagem 3">
           </video>
          </div>
        
        <h3>Carregamento</h3>
        <p>Planeje sua rota com pontos de recarga.</p>
      </div>
    </div>
  </div>
       </div>
       <section class="info-section" style="flex: 4;
  background-color: #f5f5f5;
  padding: 5rem 2rem;
  height: 100vh;
  overflow-y:hidden;
  overflow-x:hidden;
  display: block;" >
    
    <div class="div-content" style="border-radius: 8px;
  margin-bottom: 46em;
  ">
    <h4 style="color:black">Range</h4>
 <h2 style="color:black;  margin-top: 0em;  "> Vá A Qualquer Lugar</h2>
 <p style="color: black;"><br>
 Com amplo espaço para armazenamento e capacidade de reboque de 2.267 kg,
  o Model X foi projetado para máxima utilidade. As portas dianteiras abrem e 
  fecham automaticamente, as portas traseiras Falcon Wing facilitam o carregamento e
   um engate para reboque é padrão,para que você possa levar seus equipamentos para onde quer que vá.</p>
    <div class="container-lado">
  <div>   <div class="buttons">
          <a href="modelx.php" class="btn" style="margin-top: 38em;">Encomendar Agora</a> </div> </div>
  
</div>

  </div>

    </section>
    </div>
</section>


    <section class="section" style=" background-image: url('ms/msend.avif');">
      <div class="section-content3">
        <h1>Model S</h1>
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
      <a href="verdavolt.html">Verda Volt © 2025</a>
      <a href="#sobrenos">Um pouco sobre nós</a>
      <a href="#carros">Carros</a>
      <a href="#variedades">Variedades</a>
    </div>
  </div>
  
</footer>
  <script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script> 
    
    <script src="js/pause.js"></script>
    <script src="js/carrossel.js"></script>
    <script src="js/lenis.js"></script>
  
  

</body>
</html>