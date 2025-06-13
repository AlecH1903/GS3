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
  <title>Recuperar Senha</title>
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
    
    <form action="codemail.php" method="POST" class="login-form">
      <a name="backbtn" href="login.php" class="back-button">← Voltar</a>
      <h2>Recuperar Senha</h2>

      <div class="form-group">
        <label for="email">Código</label>
        <input type="text" id="code" name="code" placeholder="Insira o código" maxlength="6"  oninput="formatarCODE(this)" />
      </div>

      <button type="submit" class="btn-entrar" name="btncode">Enviar</button>

      <div class="login-footer">
        <span>Não possui uma conta?</span>
        <a href="cadastro.php">Cadastre-se</a> <br>
        <span>Não recebeu o código?</span>
        <button type="submit" Style="background-color: transparent; color: white; border: none" name="reenviar"> <a > Reenviar </a> </button>
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

    function formatarCODE(campo) {
  let code = campo.value.replace(/\D/g, ''); 

  if (code.length > 6) code = code.slice(0, 6);
campo.value = code;
}
  </script>

</body>
</html>

