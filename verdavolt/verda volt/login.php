<?php

include("loginC.php");
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="login.css" />
  <!-- <link rel="stylesheet" href="css/navlogin.css" /> -->
</head>

<body>
  
<header>
   
    <nav class="nav-elegante">
  <div class="nav-container">
    <a href="verdavolt.html" class="nav-logo">VerdaV</a>
    <ul class="nav-links">
      
    </ul>
   <!-- seus links aqui --> <button class="toggle-theme" onclick="toggleTheme()">Claro/Escuro</button>
  </div>
</nav>


</header>



  <div class="login-wrapper">
    <form action="login.php" method="POST" class="login-form">
      <h2>Entrar</h2>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>

      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required />
      </div>

      <button type="submit" class="btn-entrar" name="btns">Entrar</button>

      <div class="login-footer">
        <span>Não possui uma conta?</span>
        <a href="cadastro.php">Cadastre-se</a>
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

