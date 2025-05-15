<?php
include_once("loginC.php");



if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>VerdaVolt</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/telao.css">
    <link rel="stylesheet" href="css/miniatura.css">
</head>
<body>
    <header>
    <nav class="navbar">
        <div class="logo">
            <img src="imagens/logo/logo.png" alt="Logo" />
        </div>
        <ul>
            <li><a href="#">Produtos <span class="seta">&#9660;</span></a></li>
            <li><a href="#">Sobre Nós <span class="seta">&#9660;</span></a></li>
            <li><a href="#">Suporte <span class="seta">&#9660;</span></a></li>
            <li><a href="logout.php">Sair<span class="seta">&#9660;</span></a></li>
            
  
        </ul>
    </nav>
</header>

    <h1>Bem vindo! <?php echo $_SESSION['nome'];?></h1>

    <!-- Telão -->
    <div class="telao-container">
    <img id="imagem-telao" src="IMAGENS/tesla_model_y.png" alt="Imagem principal do telão">
</div>

<div class="miniaturas-galeria">
    <img class="miniatura" src="IMAGENS/tesla_model_y.png" alt="Miniatura 1">
    <img class="miniatura" src="IMAGENS/watts_w125.png" alt="Miniatura 2">
    <img class="miniatura" src="IMAGENS/arrow_one.png" alt="Miniatura 3">
    <img class="miniatura" src="IMAGENS/tesla_semi.png" alt="Miniatura 4">
</div>

    <!-- Conteúdo principal aqui -->

    <script src="javascript/telao.js"></script>
</body>
</html>