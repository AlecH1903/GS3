
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>
  <link rel="stylesheet" href="cadastro.css">
</head>
<body>
  <div class="form-container">
    <a href="verdavolt.html" class="back-button">← Voltar</a>
    <form action="login.php" method="POST" class="form-box">
      <h2>Login</h2>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit" class="btn-cadastro" name="btn">Entrar</button>
    </form>
 
  
      <div class="login-link">
        <?php 
        if(isset($erros)){
          foreach ($erros as $erro) {
      echo $erro . "<br>";
    }
        }
        ?>
      <a href="cadastro.php"><span>Não possui uma conta?</span></a>
    </div>
  </div>
</body>
</html>
