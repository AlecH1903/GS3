<?php
include_once("code/loginC.php");



if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}


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
</head>

<header>
   
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


<body>
  <div class="main-layout">
    <div class="background-section">
      <!-- A imagem será aplicada via CSS -->
    </div>
    <div class="info-section">
      <h1>Model 3</h1>
      <p>Desempenho impressionante com autonomia de até 567 km.</p>
      <ul>
        <li>0-100 km/h em 3,3 segundos</li>
        <li>Autopilot incluído</li>
        <li>Design minimalista e futurista</li>
      </ul>
      <button class="order-button">Encomendar agora</button>
    </div>
  </div>
</body>
</html>
