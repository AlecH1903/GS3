<?php

include("code/recuperarSenha.php");
include("code/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V </text> </svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Redefinir Senha</title>
  <link rel="stylesheet" href="css/login.css" />
  <!-- <link rel="stylesheet" href="css/navlogin.css" /> -->
</head>

<body>
  
<header>
   
    <nav class="nav-elegante">
  <div class="nav-container">
    <a href="verdavolt.php" class="nav-logo">VerdaV</a>
    <ul class="nav-links">
      
    </ul>
    <button class="toggle-theme" onclick="toggleTheme()">Claro/Escuro</button>
  </div>
</nav>


</header>



  <div class="login-wrapper">
    
    <form action="redefinirSenha.php" method="POST" class="login-form">
      <a name="backbtn" href="login.php" class="back-button">← Voltar</a>
      <h2>Redefinir Senha</h2>

      <div class="form-group">
        <label for="email">Nova Senha</label>
        <input type="password" id="senha" name="senha" required />
      </div>

      <div class="form-group">
        <label for="senha">Confirmar Senha</label>
        <input type="password" id="senha" name="confirmarSenha" required />
      </div>

      <button type="submit" class="btn-entrar" name="btnSalvar">Salvar</button>

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

