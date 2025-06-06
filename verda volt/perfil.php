<?php

include("code/loginC.php");
include("code/conexao.php");
include("code/perfilcode.php");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V </text> </svg>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil do Usuário</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/perfil.css">
</head>
<body>

<header>
 <nav class="nav-elegante">
  <div class="nav-container">
    <a href="verdavolt.php" class="nav-logo">VerdaV</a>
    <ul class="nav-links"></ul>
  </div>
</nav>
</header>

<div class="user-wrapper">
  <div class="container">
    <h1>Perfil do Usuário</h1>
    
    <?php if ($sucesso): ?>
      <div class="alert alert-success">
        Dados atualizados com sucesso!
      </div>
    <?php endif; ?>
    
    <?php if (!empty($erros)): ?>
      <div class="alert alert-error">
        <?php foreach ($erros as $erro): ?>
          <p><?php echo ($erro); ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="user-info">
      <form action="perfil.php" method="POST" class="perfil-form">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" value="<?php echo ($_SESSION['nome']); ?>" required>
        </div>
        
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" value="<?php echo ($_SESSION['email']); ?>" required>
        </div>
        
        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" id="cpf" name="cpf" value="<?php echo ($_SESSION['cpf']); ?>" readonly>
        </div>

        <div class="form-group">
          <label for="data">Data de Nascimento:</label>
          <input type="text" id="data" name="data" value="<?php echo ($_SESSION['data']); ?>">
        </div>

        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="text" id="telefone" name="telefone" value="<?php echo ($_SESSION['telefone']); ?>">
        </div>

        <div class="form-group">
          <label for="nova_senha">Nova Senha (opcional):</label>
          <input type="password" id="nova_senha" name="nova_senha" placeholder="Deixe em branco para não alterar">
        </div>

        <div class="form-group">
          <label for="senha_atual">Confirme sua senha atual para alterar os dados:</label>
          <input type="password" id="senha_atual" name="senha_atual" required>
        </div>

        <button type="submit" name="atualizar" class="btn-att">Atualizar Dados</button>
        
        <div class="user-footer">
          <a href="code/logout.php">Sair da conta</a>
        </div>

        <div class="error-msg">
        <?php 
          if(isset($erros)){
            foreach ($erros as $erro) {
              echo $erro . "<br>";
            }
          }
        ?>
      </div>

      </form>
    </div>
  </div>
</div>

</body>
</html>