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
  <title>Model Y</title>
  <!-- <link rel="stylesheet" href="m3/model3.css" /> -->
   <link rel="stylesheet" href="css/models.css">
  <link rel="stylesheet" href="css/carrossel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
  <style>
   
  </style>
</head>
<body>
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
          <h1 class="car-title">Model Y</h1>
          <p class="car-subtitle">Versátil e espaçoso</p>
          
          <div class="car-features">
            <div class="feature">
              <i class="fas fa-car"></i>
             <h4>Amplo Porta-Malas</h4>
              <p>2.158 litros de capacidade</p>
            </div>
            <div class="feature">
              <i class="fas fa-road"></i>
              <h4>Controle Climático</h4>
              <p>Sistema HVAC avançado</p>
            </div>
            <div class="feature">
              <i class="fas fa-bolt"></i>
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
          <h2>Model Y</h2>
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

          <?php if(isset($_SESSION['assinante']) && $_SESSION['assinante'] == 1){ ?>
          <div id="totalPrice">R$50.400</div>
          <button id="buyButton">Comprar Agora</button>
        </div>
        <?php } else{ ?>
          <div id="totalPrice">R$56.000</div>
          <button id="buyButton">Comprar Agora</button>
        </div> <?php } ?>
      </div>
    </section>
  </div>
  </style>

     <script src="js/carrossel.js"></script>
     <script > 
     
      const logado = <?= json_encode($logado); ?>;

      <?php if(isset($_SESSION['assinante']) && $_SESSION['assinante'] == 1){ ?>
     const basePrices = {
      rwd: 56000 - 56000 * 10 / 100 ,
      long_range: 64800 - 64800 * 10 / 100,
      performance: 78000 - 78000 * 10 / 100
    };  <?php } else{ ?>

      const basePrices = {
      rwd: 56000,
      long_range: 64800,
      performance: 78000
    }; <?php } ?>

    const modelSpecs = {
      rwd: { alcance: '455km', velocidade: '190km/h', aceleracao: '6.6s' },
      long_range: { alcance: '533km', velocidade: '217km/h', aceleracao: '4.8s' },
      performance: { alcance: '488km', velocidade: '240km/h', aceleracao: '3.7s' }
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
      { id: 'white', name: 'Black & White', price: 1000, color: '#fff' }
    ];

    const exteriorImages = {
      pearl_white: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSW,$WY19P,$IPB8&view=FRONT34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSW,$WY19P,$IPW8&view=SIDE&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSW,$WY19P,$IPW8&view=REAR34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSW,$WY19P,$IPW8&view=RIMCLOSEUP&model=my&size=1920&bkba_opt=2&crop=0,0,80,0&overlay=0&  '
      },
      solid_black: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PX02,$WY19P,$IPW8&view=FRONT34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PX02,$WY19P,$IPB8&view=SIDE&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PX02,$WY19P,$IPW8&view=REAR34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PX02,$WY19P,$IPW8&view=RIMCLOSEUP&model=my&size=1920&bkba_opt=2&crop=0,0,80,0&overlay=0&'
      },
      deep_blue: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSB,$WY19P,$IPB8&view=FRONT34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSB,$WY19P,$IPB8&view=SIDE&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSB,$WY19P,$IPB8&view=REAR34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PPSB,$WY19P,$IPB8&view=RIMCLOSEUP&model=my&size=1920&bkba_opt=2&crop=0,0,80,0&overlay=0&'
      },
      ultra_red: {
        frontal: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PR01,$WY19P,$IPW8&view=FRONT34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        lateral: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PR01,$WY19P,$IPW8&view=SIDE&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        traseira: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PR01,$WY19P,$IPW8&view=REAR34&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
        rodas: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$PR01,$WY19P,$IPW8&view=RIMCLOSEUP&model=my&size=1920&bkba_opt=2&crop=0,0,80,0&overlay=0&'
      },
      stealth_grey: {
       frontal: 'my/carromy.jpg',
        lateral: 'my/ladomy.jpg',
        traseira: 'my/trasmy.jpg',
        rodas: 'my/rodamy.jpg'
      }
    };

    const interiorImages = {
      black: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$IPB8,$PX02&view=STUD_SEAT&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&',
      white: 'https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTY60,$IPW8,$PX02&view=STUD_SEAT&model=my&size=1920&bkba_opt=2&crop=0,0,0,0&overlay=0&'
    };

    function updateCarImages() {
      const exterior = exteriorImages[selectedColor];
      
      document.getElementById('slide-frontal').src = exterior.frontal;
      document.getElementById('slide-lateral').src = exterior.lateral;
      document.getElementById('slide-traseira').src = exterior.traseira;
      document.getElementById('slide-rodas').src = exterior.rodas;
      document.getElementById('slide-interior').src = interiorImages[selectedInterior];
    }

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
      { id: '19', name: '19" Sport', price: 1500 },
      { id: '20', name: '20" Überturbine', price: 2000, restrictedTo: 'performance' }
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
  
  document.querySelector('.carousel-slide:nth-child(1) img').src = exterior.frontal;
  document.querySelector('.carousel-slide:nth-child(2) img').src = exterior.lateral;
  document.querySelector('.carousel-slide:nth-child(3) img').src = exterior.traseira;
  document.querySelector('.carousel-slide:nth-child(4) img').src = exterior.rodas;
  document.querySelector('.carousel-slide:nth-child(5) img').src = interiorImages[selectedInterior];
}
   createButtons([
  { id: 'rwd', name: 'RWD' },
  { id: 'long_range', name: 'Long Range' },
  { id: 'performance', name: 'Performance' }
], 'modelButtons', (id) => {
  selectedModel = id;

  if (selectedWheel === '20' && id !== 'performance') {
    alert('As rodas Überturbine estão disponíveis apenas para o modelo Performance.');
    selectedWheel = '18';
    updateSelection('wheelsButtons', '18');
  }
  updatePrice();
});

createButtons(colorOptions, 'colorOptions', (id) => {
  selectedColor = id;
  updateCarImages(); 
}, true);

createButtons(wheelOptions, 'wheelsButtons', (id) => {
  selectedWheel = id;
  updatePrice();
});

createButtons(interiorOptions, 'interiorOptions', (id) => {
  selectedInterior = id;
  updateCarImages(); 
}, true);

updateCarImages();
   document.getElementById('buyButton').addEventListener('click', () => {
  if (!logado) {
    window.location.href = 'login.php';
    return;
  }

  let total = basePrices[selectedModel];
  total += colorOptions.find(o => o.id === selectedColor).price;
  total += interiorOptions.find(o => o.id === selectedInterior).price;
  const wheel = wheelOptions.find(o => o.id === selectedWheel);
  total += wheel.price;

  const dados = new URLSearchParams();
  dados.append("modelo", selectedModel + "Y");
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
    alert("Compra realizda com sucesso!"); 
  })
  .catch(error => {
    console.error("Erro ao enviar os dados:", error);
  });
}); </script>
</body>
</html>
