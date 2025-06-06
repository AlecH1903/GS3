<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/maproject.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V </text> </svg>"> 
  <title>Programa de Assinatura</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }
    .hero {
      position: relative;
      width: 100%;
      height: 60vh;
      background-image: url('https://digitalassets.tesla.com/co1n/image/upload/f_auto,q_auto/prod/static_assets/common/19a6da28040a3bbf8796f977d054bcdcxx');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 0 2px 4px rgba(0,0,0,0.6);
    }
    .hero h1 {
      font-size: 3rem;
      margin: 0;
    }
    .content {
      max-width: 800px;
      margin: 40px auto;
      padding: 0 20px;
    }
    .content h2 {
      margin-top: 0;
    }
    .btn-subscribe {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background-color: #0070f3;
      color: white;
      text-decoration: none;
      font-size: 1.1rem;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    .btn-subscribe:hover {
      background-color: #005bb5;
    }
  </style>
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

  <!-- Seção de imagem/banner -->
  <section class="hero">
    <h1 style="font-family: 'roboto'">Programa Meio Ambiente</h1>
  </section>

  <!-- Seção de conteúdo -->
  <section class="content">
    <h2>Programa Meio Ambiente</h2>
    <p>
      Nós da Verda Volt, sempre nos preocupamos com o meio-ambiente, e com isso, não poderíamos deixar de <br>
      investirmos na preservação e expansão de áreas verdes.
    </p>

    <h2>Como funciona</h2>
    <p>
      Os contribuinte do projeto meio ambiente, assinando nosso projeto, receberão seguro e manutenção gratuíta, em troca, com a <br>
      verba adquirida, iremos investir em áreas verdes e projetos para o meio-ambiente.
    </p>

    <!-- Botão de assinatura -->
    <a href="" class="btn-subscribe">
      Assine Agora
    </a>
  </section>

</body>
</html>
<script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script> 
<script src="js/lenis.js"></script>