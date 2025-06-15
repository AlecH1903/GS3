<?php
include_once("code/loginC.php");






?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V </text> </svg>">
    <title>VerdaVolt</title>
  <link rel="stylesheet" href="sobrenos.css">
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
    <section class="hero">
        <h1>VERDA VOLT</h1>
        <p>Verde O Seu Futuro!</p>
       
    </section>
    
    <section class="pillar-section">
        <div class="pillar-container">
          <div class="pillar-text">
            <h3 style="text-align: center;">Por Que Isso É Urgente?</h3>  
            <p >
             O IPCC alerta: temos até 2030 para cortar emissões pela metade e evitar catástrofes irreversíveis. A Verda Volt não é apenas uma alternativa — é uma ferramenta essencial para frear o colapso climático.
<br> </p> <hr> <br> <h4   style=" text-align: center;">
Escolher um Verda Volt não é só comprar um carro. |
É votar num futuro respirável. |
É defender florestas, oceanos e cidades. |
É acelerar a única revolução que importa: a da sobrevivência.  </h4>
          </div>
      
          <div class="pillar-info">
            <div class="pillar-image">
              <img style="height: 300px; width:350px" src="nuvem.jpg" alt="Air Image" />
            </div>
            <div class="pillar-content">
              <h2>Ar Mais Limpo: Redução de Poluentes e Doenças Respiratórias</h2> <hr>
              <p>
                
Enquanto carros a combustão liberam CO₂, NOx (óxidos de nitrogênio) e material particulado, nossos veículos elétricos têm emissão zero no uso. Isso significa: 
<br> ✔ Menos poluição urbana – Cidades como São Paulo e Cidade do México já registram melhorias na qualidade do ar graças à adoção de frotas elétricas.
<br> ✔ Redução de doenças – Segundo a OMS, a poluição do ar mata 7 milhões de pessoas por ano. Nossa tecnologia evita a liberação de partículas cancerígenas como o benzeno e a fuligem. 
<br> ✔ Fim do "smog" – A névoa poluente que cobre metrópoles diminui onde carros elétricos dominam as ruas.</p>
             
            </div>
          </div>
      
          </div>
        </div>
      </section>
    
      <section class="pillar-section">
        <div class="pillar-container">
          <div class="pillar-text">
            <h3>Combate ao Aquecimento Global: Menos CO₂</h3>
            <p>
               O transporte é responsável por 24% das emissões globais de CO₂. Cada Verda Volt na estrada evita a queima de 2,5 toneladas de combustível fóssil por ano. </p>
          </div>
      
          <div class="pillar-info">
            <div class="pillar-image">
              <img style="height: 300px; width:350px" src="arara.jpg" alt="eco Image" />
            </div>
            <div class="pillar-content">
              <h2>Preservação de Ecossistemas: Do Petróleo à Energia Limpa</h2> <hr>
              <p>
                A extração de petróleo destrói habitats, vaza nos oceanos e contamina solos. Nossa abordagem elimina essa dependência:
<br>✔ Sem derramamentos – Nada de vazamentos como os do pré-sal ou desastres como o da BP no Golfo do México.
<br>✔ Menos mineração predatória – Usamos baterias com lítio reciclado e investimos em tecnologias sem cobalto.
<br>✔ Proteção da biodiversidade – Nosso programa Circuito Verde já recuperou 3.000 hectares de Mata Atlântica. </p>
<br><h4>Além da poluição química, carros tradicionais geram poluição sonora (um problema subestimado que aumenta estresse e distúrbios do sono). Nossos motores silenciosos trazem:
<br>🔇 Ruído 50% menor que veículos a combustão.
<br>🌿 Benefícios para a fauna urbana – pássaros e animais sofrem menos com o barulho do tráfego.</h4>
              
            </div>
          </div>
        </div>
      </section>


    <section class="container" style=" height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 0 20px;
            background-size: cover;
            background-position: center; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('estradacima.jpg');background-attachment: fixed;">
        <h2 class="section-title">VERDA VOLT</h2>
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <p style="font-size: 1.2rem; margin-bottom: 30px;">Sua Pegada pode Ser Semente.</p>
        </div>
    </section>
    
    
   
  <footer class="footer">
  <div class="footer-container">
    <div class="footer-links">
      <a href="verdavolt.php">Verda Volt © 2025</a>
      <a href="sobrenos.php">Um pouco sobre nós</a>
      <a href="verdavolt.php#carros">Carros</a>
      <a href="verdavolt.php#variedades">Variedades</a>
    </div>
  </div>
</footer>
</body>
</html>