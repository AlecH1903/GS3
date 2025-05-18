<?php
include("formC.php");
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>
  <link rel="stylesheet" href="cadastro1.css">
</head>
<body>

<header>
   
    <nav class="nav-elegante">
  <div class="nav-container">
    <a href="verdavolt.html" class="nav-logo">VerdaV</a>
    <ul class="nav-links">
      <!-- seus links aqui -->
    </ul>
    <button class="toggle-theme" onclick="toggleTheme()">Claro/Escuro</button>
  </div>
</nav>


</header>

  <div class="form-container">
    <a href="verdavolt.html" class="back-button">← Voltar</a>
    <form action="cadastro.php" method="POST" class="form-box">
      <h2>Cadastro</h2>

      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>

      <label for="cpf">CPF</label>
      <input type="text" id="cpf" name="cpf" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="idade">Idade</label>
      <input type="date" id="idade" name="idade" min="0" required>

      <label for="telefone">Número de Telefone</label>
      <input type="tel" id="telefone" name="telefone" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit" class="btn-cadastro" name="btn">Cadastrar</button>
    </form>
 
  
      <div class="login-link">
        <?php 
        if(isset($erros)){
          foreach ($erros as $erro) {
      echo $erro . "<br>";
    }
        }
        ?>
      <a href="login.php"><span>Já possui uma conta?</span></a>
    </div>
  </div>

<script>
    function toggleTheme() {
      const html = document.documentElement;
      const currentTheme = html.getAttribute('data-theme');
      html.setAttribute('data-theme', currentTheme === 'dark' ? 'light' : 'dark');
    }

    function togglePassword() {
      const senhaInput = document.getElementById('senha');
      const toggleIcon = document.querySelector('.toggle-password i');
      if (senhaInput.type === 'password') {
        senhaInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
      } else {
        senhaInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
      }
    }
  </script>

</body>
</html>