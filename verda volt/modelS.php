<?php
include_once("code/loginC.php");

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
            <img src="ms/carroms.jpg" alt="">
            
          </div>

          <div class="carousel-slide">
            <img src="ms/mslado.jpg" alt="">
          
          </div>

          <div class="carousel-slide">
            <img src="ms/trasms.jpg" alt="">
          
          </div>

          <div class="carousel-slide">
            <img src="ms/rodams.jpg" alt="">
          
          </div>
          
          <div  class="carousel-slide">
            <img src="ms/dentroms.jpg" alt="">
          
          </div>

          
       
      </div><button class="nav-button next">&#10095;</button>
    </div>
         
  </div>

 

  </section>
    </div>
    <section class="info-section" scrolling="yes" style="background-color: black; height:100vh">
    
    <div class="div-content">
    

    

    
    <div class="container" style="background-color:#eee;">
    <h2>Model S</h2>
    <div class="section">
    <div class="container-lado" style="display: flex;
  gap: 1.8em; 
  color: #000;">
  <div class="item" style=" gap: 2em; 
  margin-left: 1em;">  <h3> 410mi </h3> <p> 
    Alcance (EPA est.)
    </p></div>
  <div class="item" style=" gap: 2em; 
  margin-left: 1em;"><h3>130mph </h3><p>
  Velocidade máxima</p>
    </div>
  <div class="item" style=" gap: 2em; 
  margin-left: 1em;"><h3>3.1sec </h3><p>
    0-60 mph</p></div>
</div>
      <h3>Modelo</h3> <br>
      <div class="button-group" id="modelButtons"></div>
    </div>

    <div class="section">
      <h3>Cor Externa</h3> <br>
      <div class="options" id="colorOptions"></div>
    </div>

    <div class="section">
      <h3>Rodas</h3> <br>
      <div class="button-group" id="wheelsButtons"></div>
    </div>

    <div class="section"> 
      <h3>Interior</h3> <br>
      <div class="options" id="interiorOptions"></div>
    </div>

    <div id="totalPrice">$64,000</div>
    <button id="buyButton">Comprar</button>
  </div>

 
    
  
  </div>

    </section>
    
     <style>

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
      background-color: #fff;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
      border-radius: 16px;
    }

    h2 {
      text-align: center;
      font-size: 2.5em;
      margin-bottom: 30px;
      color: #111;
    }

    .section {
      margin-bottom: 40px;
    }

    .options {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      box-shadow: black;
    }

    .option-button {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 3px solid transparent;
      background-color: #ccc;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
    }

    .option-button:hover,
    .option-button.selected {
      border-color: #000;
      box-shadow: 0 0 0 5px rgba(0,0,0,0.1);
    }

    .button-group {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .wheel-button {
      padding: 15px 30px;
      background-color: #eee;
      border: 2px solid transparent;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .wheel-button.selected,
    .wheel-button:hover {
      background-color: #000;
      color: white;
      border-color: #000;
    }

    #totalPrice {
      text-align: center;
      font-size: 2em;
      margin-top: 30px;
      color: #222;
      font-weight: bold;
    }

    #buyButton {
      display: block;
      margin: 40px auto 0;
      padding: 15px 40px;
      background-color: #000;
      color: white;
      font-size: 1.2em;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #buyButton:hover {
      background-color: #333;
    }
  </style>

     <script src="js/carrossel.js"></script>
     <script > 
     
     const logado = <?= json_encode($logado); ?>;

     const basePrices = {
      rwd: 64000,
      long_range: 72000,
      performance: 84000
    };

    const colorOptions = [
      { id: 'pearl_white', name: 'Pearl White', price: 0, color: '#fff' },
      { id: 'deep_blue', name: 'Deep Blue', price: 1000, color: '#0f2d52' },
      { id: 'solid_black', name: 'Solid Black', price: 1500, color: '#000',  image: 'my/black.avif' },
      { id: 'ultra_red', name: 'Ultra Red', price: 2000, color: '#a00000' },
      { id: 'stealth_grey', name: 'Stealth Grey', price: 2000, color: '#555' }
    ];

    const interiorOptions = [
      { id: 'black', name: 'All Black', price: 0, color: '#000' },
      { id: 'white', name: 'Black & White', price: 1500, color: '#fff', image: 'ms/dentrowhite.jpg' }
    ];
    

    const wheelOptions = [
      { id: '18', name: '18" Aero', price: 0 },
      { id: '19', name: '19" Sport', price: 3000 },
      { id: '20', name: '20" Überturbine', price: 4000, restrictedTo: 'performance' }
    ];

    let selectedModel = 'rwd';
    let selectedColor = 'pearl_white';
    let selectedInterior = 'black';
    let selectedWheel = '18';

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

    createButtons([
      { id: 'rwd', name: 'RWD' },
      { id: 'long_range', name: 'Long Range' },
      { id: 'performance', name: 'Performance' }
    ], 'modelButtons', (id) => selectedModel = id);

    createButtons(colorOptions, 'colorOptions', (id) => selectedColor = id, true);
    createButtons(wheelOptions, 'wheelsButtons', (id) => selectedWheel = id);
    createButtons(interiorOptions, 'interiorOptions', (id) => selectedInterior = id, true);

    updateSelection('modelButtons', selectedModel);
    updateSelection('colorOptions', selectedColor);
    updateSelection('interiorOptions', selectedInterior);
    updateSelection('wheelsButtons', selectedWheel);

    updatePrice();

   document.getElementById('buyButton').addEventListener('click', () => {
  if (!logado) {
    window.location.href = 'login.php';
    return;
  }

  alert('Compra realizada com sucesso!');
});</script>
</body>
</html>
