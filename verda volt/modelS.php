<?php
include_once("code/loginC.php");
include_once("compra.php");
$logado = isset($_SESSION['email']);



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
     <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200'
   height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Model S</title>
  <!-- <link rel="stylesheet" href="m3/model3.css" /> -->
  <link rel="stylesheet" href="css/carrossel.css">
</head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #000;
      color: #fff;
      overflow-x: hidden;
    }

   .nav-elegante {
    background-color: #000;
    padding: 15px 40px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    position: sticky;
    top: 0;
    z-index: 100;
      border-bottom: 1px solid white; 
  }

  .nav-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .nav-logo {
    color: #fff;
    font-weight: 300;
    font-size: 1.5em;
    text-decoration: none;
    letter-spacing: 2px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }

  .nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
    margin: 0;
    padding: 0;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }

  .nav-links li a {
    color: #fff;
    font-weight: 300;
    font-size: 1em;
    text-decoration: none;
    padding: 8px 0;
    position: relative;
    transition: color 0.3s ease;
  }

  .nav-links li a::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #fff;
    transition: width 0.3s ease;
  }

  .nav-links li a:hover,
  .nav-links li a:focus {
    color: #bbb;
  }

  .nav-links li a:hover::after,
  .nav-links li a:focus::after {
    width: 100%;
  }

  @media (max-width: 768px) {
    .nav-links {
      gap: 15px;
      font-size: 0.9em;
    }
  }
  
.dropdown {
  position: relative;
}


.dropbtn {
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 6px;
  color: #fff;
  font-weight: 300;
  font-size: 1em;
  text-decoration: none;
  padding: 8px 0;
  position: relative;
  transition: color 0.3s ease;
}


.seta {
  font-size: 0.6em;
  line-height: 1;
  transition: transform 0.3s ease;
  display: inline-block;
}


.submenu {
  position: absolute;
  top: 100%;
  left: 0;
  background: #000;
  border: 1px solid #444;
  border-radius: 6px;
  list-style: none;
  padding: 8px 0;
  margin: 8px 0 0 0;
  min-width: 140px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.5);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease;
  z-index: 10;
}


.submenu li a {
  display: block;
  padding: 8px 20px;
  color: #fff;
  font-weight: 300;
  font-size: 0.95em;
  text-decoration: none;
  white-space: nowrap;
  transition: background-color 0.3s ease;
}

.submenu li a:hover {
  background-color: #222;
}


.dropdown:hover .submenu,
.dropdown:focus-within .submenu {
  opacity: 1;
  visibility: visible;
}


.dropdown:hover .seta,
.dropdown:focus-within .seta {
  transform: rotate(180deg);
}


.dropbtn::after {
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #fff;
  transition: width 0.3s ease;
}

.dropbtn:hover::after,
.dropbtn:focus::after {
  width: 100%;
}

    .main-layout {
      padding-top: 70px;
    }

    .carousel-container {
      position: relative;
      max-width: 1000px;
      margin: 0 auto;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }

    .carousel-track {
      display: flex;
      transition: transform 0.5s ease;
      height: 500px;
    }

    .carousel-slide {
      min-width: 100%;
      position: relative;
    }

    .carousel-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .nav-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-size: 24px;
      cursor: pointer;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .nav-button:hover {
      background: rgba(0, 0, 0, 0.8);
      transform: translateY(-50%) scale(1.1);
    }

    .prev {
      left: 20px;
    }

    .next {
      right: 20px;
    }

    .info-section {
      padding: 60px 20px;
      background: linear-gradient(to bottom, #111, #000);
    }

    .div-content {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
    }

    .container {
      background: #222;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .container h2 {
      text-align: center;
      font-size: 32px;
      margin-bottom: 30px;
      color: #fff;
    }

    .section {
      margin-bottom: 30px;
      padding-bottom: 20px;
      border-bottom: 1px solid #333;
    }

    .section h3 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #ddd;
    }

    .container-lado {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .item {
      text-align: center;
      flex: 1;
      padding: 15px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 10px;
      margin: 0 5px;
    }

    .item h3 {
      font-size: 24px;
      color: #4dabf7;
      margin-bottom: 5px;
    }

    .item p {
      font-size: 14px;
      color: #aaa;
    }

    .options {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }

    .option-button {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 3px solid transparent;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
    }

    .option-button::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(255,255,255,0.2), transparent);
    }

    .option-button:hover,
    .option-button.selected {
      border-color: #4dabf7;
      transform: scale(1.1);
    }

    .button-group {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }

    .wheel-button {
      padding: 12px 20px;
      background: rgba(255, 255, 255, 0.1);
      border: 2px solid transparent;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
      color: #ddd;
      font-weight: 500;
    }

    .wheel-button.selected,
    .wheel-button:hover {
      background: #4dabf7;
      color: white;
      border-color: #4dabf7;
    }

    #totalPrice {
      text-align: center;
      font-size: 36px;
      margin: 30px 0;
      color: #fff;
      font-weight: bold;
      text-shadow: 0 0 10px rgba(77, 171, 247, 0.5);
    }

    #buyButton {
      display: block;
      width: 100%;
      padding: 18px;
      background: linear-gradient(to right,rgb(0, 0, 0),rgb(34, 33, 33));
      color: white;
      font-size: 18px;
      font-weight: bold;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(253, 253, 253, 0.4);
    }

    #buyButton:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(248, 248, 248, 0.6);
    }

    .car-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .car-title {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
      background: linear-gradient(to right, #fff, #4dabf7);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .car-subtitle {
      font-size: 24px;
      color: #aaa;
      margin-bottom: 30px;
    }

    .car-features {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      margin-bottom: 40px;
    }

    .feature {
      background: rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    .feature i {
      font-size: 36px;
      color: #4dabf7;
      margin-bottom: 15px;
    }

    .feature h4 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #fff;
    }

    .feature p {
      color: #aaa;
    }

    .color-preview {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 20px;
    }

    .preview-item {
      text-align: center;
    }

    .preview-color {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-bottom: 10px;
      border: 2px solid rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
    }

    .preview-item.active .preview-color {
      border-color: #4dabf7;
      transform: scale(1.1);
      box-shadow: 0 0 15px rgba(77, 171, 247, 0.7);
    }

    .preview-item span {
      display: block;
      font-size: 14px;
      color: #aaa;
    }

    @media (max-width: 900px) {
      .div-content {
        grid-template-columns: 1fr;
      }
      
      .carousel-track {
        height: 400px;
      }
    }

    @media (max-width: 600px) {
      .carousel-track {
        height: 300px;
      }
      
      .container-lado {
        flex-direction: column;
        gap: 15px;
      }
      
      .nav-links {
        display: none;
      }
    }
  </style>
</head>
<body>
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

 <div class="main-layout">
    <div class="background-section">
      <section class="section" id="carga">
        <div class="section-contentcarga">
          <div id="carros" class="carousel-container">
            <button class="nav-button prev">&#10094;</button>
            <div class="carousel-track" id="carouselTrack">
              <div class="carousel-slide">
                <img id="slide-frontal" src="ms/carroms.jpg" alt="Model S Frontal">
              </div>
              <div class="carousel-slide">
                <img id="slide-lateral" src="ms/mslado.jpg" alt="Model S Lateral">
              </div>
              <div class="carousel-slide">
                <img id="slide-traseira" src="ms/trasms.jpg" alt="Model S Traseira">
              </div>
              <div class="carousel-slide">
                <img id="slide-rodas" src="ms/rodams.jpg" alt="Rodas">
              </div>
              <div class="carousel-slide">
                <img id="slide-interior" src="ms/dentroms.jpg" alt="Interior">
              </div>
            </div>
            <button class="nav-button next">&#10095;</button>
          </div>
        </div>
      </section>
    </div>
    
    <section class="info-section">
      <div class="div-content">
        <div class="car-info">
          <h1 class="car-title">Model S</h1>
          <p class="car-subtitle">O futuro da condução elétrica</p>
          
          <div class="car-features">
            <div class="feature">
              <i class="fas fa-bolt"></i>
              <h4>Potência Instantânea</h4>
              <p>Aceleração de 0 a 100 km/h em 2.5 segundos</p>
            </div>
            <div class="feature">
              <i class="fas fa-road"></i>
              <h4>Alcance Extendido</h4>
              <p>Até 650 km com uma única carga</p>
            </div>
            <div class="feature">
              <i class="fas fa-car"></i>
              <h4>Design Aerodinâmico</h4>
              <p>Coeficiente de arrasto mais baixo do mundo</p>
            </div>
            <div class="feature">
              <i class="fas fa-microchip"></i>
              <h4>Tecnologia Avançada</h4>
              <p>Piloto automático completo</p>
            </div>
          </div>
          
          <div class="color-preview">
            <div class="preview-item active">
              <div class="preview-color" style="background-color: #fff;"></div>
              <span>Branco</span>
            </div>
            <div class="preview-item">
              <div class="preview-color" style="background-color: #000;"></div>
              <span>Preto</span>
            </div>
            <div class="preview-item">
              <div class="preview-color" style="background-color: #0f2d52;"></div>
              <span>Azul</span>
            </div>
            <div class="preview-item">
              <div class="preview-color" style="background-color: #a00000;"></div>
              <span>Vermelho</span>
            </div>
            <div class="preview-item">
              <div class="preview-color" style="background-color: #555;"></div>
              <span>Cinza</span>
            </div>
          </div>
        </div>
        
        <div class="container">
          <h2>Model S</h2>
          <div class="section">
            <div class="container-lado">
              <div class="item">  
                <h3 id="alcanceValue">410mi</h3> 
                <p>Alcance</p>
              </div>
              <div class="item">
                <h3 id="velocidadeValue">130mph</h3>
                <p>Velocidade </p>
              </div>
              <div class="item">
                <h3 id="aceleracaoValue">3.1sec</h3>
                <p>0-100 km/h</p>
              </div>
            </div>
            <h3>Modelo</h3>
            <div class="button-group" id="modelButtons"></div>
          </div>

          <div class="section">
            <h3>Cor Externa</h3>
            <div class="options" id="colorOptions"></div>
          </div>

          <div class="section">
            <h3>Rodas</h3>
            <div class="button-group" id="wheelsButtons"></div>
          </div>

          <div class="section"> 
            <h3>Interior</h3>
            <div class="options" id="interiorOptions"></div>
          </div>

          <div id="totalPrice">R$ 64.000</div>
          <button id="buyButton">Comprar Agora</button>
        </div>
      </div>
    </section>
  </div>
   
     <script src="js/carrossel.js"></script>
     <script > 
     
     const logado = <?= json_encode($logado); ?>;

     const basePrices = {
      rwd: 64000,
      long_range: 72000,
      performance: 84000
    };
     const modelSpecs = {
                rwd: {
                    alcance: '410mi',
                    velocidade: '130mph',
                    aceleracao: '3.1sec'
                },
                long_range: {
                    alcance: '430mi',
                    velocidade: '135mph',
                    aceleracao: '3.0sec'
                },
                performance: {
                    alcance: '405mi',
                    velocidade: '149mph',
                    aceleracao: '2.5sec'
                }
            };

    const colorOptions = [
      { id: 'pearl_white', name: 'Pearl White', price: 0, color: '#fff' },
      { id: 'solid_black', name: 'Solid Black', price: 1500, color: '#000',  image: 'my/black.avif' },
      { id: 'deep_blue', name: 'Deep Blue', price: 1000, color: '#0f2d52' },
      { id: 'ultra_red', name: 'Ultra Red', price: 2000, color: '#a00000' },
      { id: 'stealth_grey', name: 'Stealth Grey', price: 2000, color: '#555' }
    ];

    const interiorOptions = [
      { id: 'black', name: 'All Black', price: 0, color: '#000' },
      { id: 'white', name: 'Black & White', price: 1500, color: '#fff', image: 'ms/dentrowhite.jpg' }
    ];
     // Mapeamento de imagens para cores
    const exteriorImages = {
      pearl_white: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSW,$WS91,$IBE00&view=FRONT34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSW,$WS91,$IBE00&view=SIDE&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSW,$WS91,$IBE00&view=REAR34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSW,$WS91,$IBE00&view=RIMCLOSEUP&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&'
      },
      solid_black: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PBSB,$WS91,$IBE00&view=FRONT34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PBSB,$WS91,$IBE00&view=SIDE&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PBSB,$WS91,$IBE00&view=REAR34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PBSB,$WS91,$IBE00&view=RIMCLOSEUP&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&'
      },
      deep_blue: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSB,$WS91,$IBE00&view=FRONT34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSB,$WS91,$IBE00&view=SIDE&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSB,$WS91,$IBE00&view=REAR34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PPSB,$WS91,$IBE00&view=RIMCLOSEUP&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&'
      },
      ultra_red: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PR01,$WS91,$IBE00&view=FRONT34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PR01,$WS91,$IBE00&view=SIDE&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PR01,$WS91,$IBE00&view=REAR34&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS20,$PR01,$WS91,$IBE00&view=RIMCLOSEUP&model=ms&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&'
      },
      stealth_grey: {
       frontal: 'ms/carroms.jpg',
        lateral: 'ms/mslado.jpg',
        traseira: 'ms/trasms.jpg',
        rodas: 'ms/rodams.jpg'
      }
    };

    const interiorImages = {
      black: 'ms/dentroms.jpg',
      white: 'ms/dentrowhite.jpg'
    };

    
    // Função para atualizar as imagens do carrossel
    function updateCarImages() {
      const exterior = exteriorImages[selectedColor];
      
      document.getElementById('slide-frontal').src = exterior.frontal;
      document.getElementById('slide-lateral').src = exterior.lateral;
      document.getElementById('slide-traseira').src = exterior.traseira;
      document.getElementById('slide-rodas').src = exterior.rodas;
      document.getElementById('slide-interior').src = interiorImages[selectedInterior];
    }

    // Carrossel functions
    function moveToSlide(index) {
      const track = document.querySelector('.carousel-track');
      track.style.transform = `translateX(-${index * 100}%)`;
      currentSlide = index;
    }

    function nextSlide() {
      const slides = document.querySelectorAll('.carousel-slide');
      if (currentSlide < slides.length - 1) {
        moveToSlide(currentSlide + 1);
      } else {
        moveToSlide(0);
      }
    }

    function prevSlide() {
      const slides = document.querySelectorAll('.carousel-slide');
      if (currentSlide > 0) {
        moveToSlide(currentSlide - 1);
      } else {
        moveToSlide(slides.length - 1);
      }
    }


    const wheelOptions = [
      { id: '18', name: '18" Aero', price: 0 },
      { id: '19', name: '19" Sport', price: 3000 },
      { id: '20', name: '20" Überturbine', price: 4000, restrictedTo: 'performance' }
    ];

    let selectedModel = 'rwd';
    let selectedColor = 'pearl_white';
    let selectedInterior = 'black';
    let selectedWheel = '18';

function updateSpecs() {
                document.getElementById('alcanceValue').textContent = modelSpecs[selectedModel].alcance;
                document.getElementById('velocidadeValue').textContent = modelSpecs[selectedModel].velocidade;
                document.getElementById('aceleracaoValue').textContent = modelSpecs[selectedModel].aceleracao;
            }
    function updateSelection(groupId, selectedId) {
      const group = document.getElementById(groupId);
      Array.from(group.children).forEach(btn => {
        btn.classList.remove('selected');
        if (btn.dataset.id === selectedId) btn.classList.add('selected');
      });
    }

    function updatePrice() {
      let total = basePrices[selectedModel];
      total += colorOptions.find(o => o.id === selectedColor).price;
      total += interiorOptions.find(o => o.id === selectedInterior).price;
      const wheel = wheelOptions.find(o => o.id === selectedWheel);
      if (wheel.id === '20' && selectedModel !== 'performance') {
        alert('As rodas Überturbine estão disponíveis apenas para o modelo Performance.');
        selectedWheel = '18';
        updateSelection('wheelsButtons', '18');
        return updatePrice();
      }
      total += wheel.price;
      updateSpecs();
      document.getElementById('totalPrice').textContent = `$${total.toLocaleString()}`;


    }


    function createButtons(options, groupId, callback, colorBased = false) {
      const container = document.getElementById(groupId);
      options.forEach(opt => {
        const btn = document.createElement('div');
        btn.className = colorBased ? 'option-button' : 'wheel-button';
        btn.style.backgroundColor = colorBased ? opt.color : '';
        btn.textContent = colorBased ? '' : opt.name;
        btn.title = opt.name;
        btn.dataset.id = opt.id;
        btn.addEventListener('click', () => {
          callback(opt.id);
          updateSelection(groupId, opt.id);
          updatePrice();
        });
        container.appendChild(btn);
      });
    }

    function updateCarImages() {
  const exterior = exteriorImages[selectedColor];
  
  // Atualiza os slides do carrossel
  document.querySelector('.carousel-slide:nth-child(1) img').src = exterior.frontal;
  document.querySelector('.carousel-slide:nth-child(2) img').src = exterior.lateral;
  document.querySelector('.carousel-slide:nth-child(3) img').src = exterior.traseira;
  document.querySelector('.carousel-slide:nth-child(4) img').src = exterior.rodas;
  document.querySelector('.carousel-slide:nth-child(5) img').src = interiorImages[selectedInterior];
}

// Modificação nas funções de callback para cores e interior
createButtons([
  { id: 'rwd', name: 'RWD' },
  { id: 'long_range', name: 'Long Range' },
  { id: 'performance', name: 'Performance' }
], 'modelButtons', (id) => {
  selectedModel = id;
  // Verifica compatibilidade das rodas
  if (selectedWheel === '20' && id !== 'performance') {
    alert('As rodas Überturbine estão disponíveis apenas para o modelo Performance.');
    selectedWheel = '18';
    updateSelection('wheelsButtons', '18');
  }
  updatePrice();
});

createButtons(colorOptions, 'colorOptions', (id) => {
  selectedColor = id;
  updateCarImages(); // Atualiza imagens ao selecionar cor
}, true);

createButtons(wheelOptions, 'wheelsButtons', (id) => {
  selectedWheel = id;
  updatePrice();
});

createButtons(interiorOptions, 'interiorOptions', (id) => {
  selectedInterior = id;
  updateCarImages(); // Atualiza imagens ao selecionar interior
}, true);

updateCarImages();
   document.getElementById('buyButton').addEventListener('click', () => {
  if (!logado) {
    window.location.href = 'login.php';
    return;
  }

  // Calcula novamente o total
  let total = basePrices[selectedModel];
  total += colorOptions.find(o => o.id === selectedColor).price;
  total += interiorOptions.find(o => o.id === selectedInterior).price;
  const wheel = wheelOptions.find(o => o.id === selectedWheel);
  total += wheel.price;

  // Cria os dados para enviar
  const dados = new URLSearchParams();
  dados.append("modelo", selectedModel + "s");
  dados.append("cor", selectedColor);
  dados.append("interior", selectedInterior);
  dados.append("rodas", selectedWheel);
  dados.append("preco_total", total.toFixed(2));

  fetch("compra.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: dados.toString()
  })
  .then(response => response.text())
  .then(data => {
    alert("Compra realizda com sucesso!"); // Pode ser mensagem de sucesso do PHP
  })
  .catch(error => {
    console.error("Erro ao enviar os dados:", error);
  });
});


</script>
</body>
</html>
