<?php

include_once("code/conexao.php");

include("code/loginC.php");
include("code/buscar.php");
if (!isset($_SESSION['cpf'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200'
   height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V</text></svg>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Garagem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/inv.css">

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
    
    <main class="container">
         <div class="garage-title">
        <h2>Meu Inventário</h2>
        </div>
       
        <div class="garage-title">
            <div class="stats">
            <div class="stat-card">
                <i class="fas fa-car"></i>
                <div class="stat-info">
                    <h3><?= count($compras) ?></h3>
                    <p>Carros na Garagem</p>
                </div>
            </div>
            </div>
            <div class="filters">
                <button class="filter-btn active">Todos</button>
                <button class="filter-btn">Esportivos</button>
                <button class="filter-btn">SUV</button>
                <button class="filter-btn">Clássicos</button>
                <button class="filter-btn">Elétricos</button>
            </div>
        </div>
        
        <div class="inventory-grid">
            <?php if (count($compras) > 0): ?>
                <?php foreach ($compras as $compra): ?>
                    <?php 
                    $modelKey = $compra['modelo'];
                    $carroInfo = isset($carrosInfo[$modelKey]) ? $carrosInfo[$modelKey] : [
                        'nome' => $compra['modelo'],
                        'imagem' => 'default-car.jpg',
                        'descricao' => 'Carro personalizado',
                        'potencia' => 'N/A',
                        'vel_max' => 'N/A',
                        'combustivel' => 'N/A',
                        'transmissao' => 'N/A',
                        'ano' => 'N/A'
                    ];
                    ?>
                    <div class="car-card">
                        <div class="car-image">
                            <img src="<?= $carroInfo['imagem'] ?>" alt="<?= $carroInfo['nome'] ?>">
                            <div class="car-badge">Novo</div>
                        </div>
                        <div class="car-content">
                            <div class="car-header">
                                <h3 class="car-model"><?= $carroInfo['nome'] ?></h3>
                                <span class="car-year"><?= $carroInfo['ano'] ?></span>
                            </div>
                            <p><?= $carroInfo['descricao'] ?></p>
                            
                            <div class="car-specs">
                                <div class="spec">
                                    <i class="fas fa-horse-head"></i>
                                    <span><?= $carroInfo['potencia'] ?></span>
                                </div>
                                <div class="spec">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span><?= $carroInfo['vel_max'] ?></span>
                                </div>
                                <div class="spec">
                                    <i class="fas fa-gas-pump"></i>
                                    <span><?= $carroInfo['combustivel'] ?></span>
                                </div>
                                <div class="spec">
                                    <i class="fas fa-cogs"></i>
                                    <span><?= $carroInfo['transmissao'] ?></span>
                                </div>
                            </div>
                            
                        
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="no-cars">
                    <i class="fas fa-car-crash"></i>
                    <h3>Sua garagem está vazia</h3>
                    <p>Comece a construir sua coleção de carros agora mesmo!</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <script>
      
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
        
    </script>
</body>
</html>
