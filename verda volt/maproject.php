<?php 
include("code/conexao.php");
include_once("code/loginC.php");
include("code/assinar.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/maproject.css">
  <link rel="stylesheet" href="css/footer.css">
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
     <li><a href="verdavolt.php">Carros</a></li>
     <li><a href="verdavolt.php">Variedades</a></li> 
    
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

  <section class="hero">
    <h1 style="font-family: 'roboto'">Programa Meio Ambiente</h1>
  </section>

  <section class="content">
  <h2>Programa Meio Ambiente</h2>
  <p>
    Na <strong>Verda Volt</strong>, acreditamos que cada escolha pode transformar o futuro. O <strong>Programa Meio Ambiente</strong> 
    nasceu do nosso compromisso com um mundo mais verde, mais limpo e mais consciente.
  </p>

  <p>
    Ao assinar o programa, você não está apenas adquirindo benefícios exclusivos — está se unindo a uma causa que investe diretamente 
    na <strong>preservação de florestas, reflorestamento urbano</strong> e <strong>educação ambiental</strong>. 
    Parte de cada assinatura é destinada a projetos reais, auditados, que impactam positivamente nosso planeta.
  </p>

  <h2>Benefícios para você</h2>
  <ul>
    <li><strong>Manutenção gratuita</strong> do seu veículo elétrico Verda Volt.</li>
    <li><strong>Seguro completo</strong> incluso durante o período de assinatura.</li>
    <li><strong>10% de desconto</strong> aplicado automaticamente ao valor base dos nossos modelos.</li>
    <li>Prioridade em lançamentos e acesso antecipado a novas tecnologias.</li>
  </ul>

  <h2>Impacto coletivo</h2>
  <p>
    Cada assinante torna possível a criação de novos espaços verdes em áreas urbanas degradadas, a recuperação de 
    ecossistemas nativos e a promoção de eventos educacionais sobre sustentabilidade em escolas públicas.
  </p>

  <p>
    Com apenas 5.000 ao ano, você ajuda o meio ambiente e pode sempre usufruir o máximo possível do seu verda. 
    Cancele quando quiser!
  </p>

  <p style="font-style: italic; color: #0070f3;">
    Quanto mais pessoas assinarem, maior será o alcance do impacto positivo que podemos gerar juntos.
  </p>
<form action="maproject.php" method="POST">
    <button type="submit" name="btnma" class="btn-subscribe">
        <?php echo (isset($_SESSION['assinante']) ? 'Assinatura Ativa' : 'Assine Agora'); ?>
    </button>
</form>
  </section>

 <footer class="footer">
  <div class="footer-container">
    <div class="footer-links">
      <a href="verdavolt.html">Verda Volt © 2025</a>
      <a href="sobrenos.php">Um pouco sobre nós</a>
      <a href="verdavolt.php#carros">Carros</a>
      <a href="verdavolt.php#variedades">Variedades</a>
    </div>
  </div>
</footer>

</body>
</html>
<script src="https://unpkg.com/lenis@1.3.3/dist/lenis.min.js"></script> 
<script src="js/lenis.js"></script>