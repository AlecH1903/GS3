<?php
include("code/formC.php");
include_once("code/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V </text> </svg>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="css/cadastro1.css">
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

  <div class="form-container">
    <a href="verdavolt.php" class="back-button">← Voltar</a>
    <form action="cadastro.php" method="POST" class="form-box">
      <h2>Cadastro</h2>

      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>

      <label for="cpf">CPF</label>
      <input type="text" id="cpf" name="cpf" required maxlength="14" oninput="formatarCPF(this)">

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="idade">Idade</label>
      <input type="date" id="idade" name="idade" min="18" required>

      <label for="telefone">Número de Telefone</label>
      <input type="tel" id="telefone" name="telefone" required oninput="formatarnumero(this)">

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

    
function formatarCPF(campo) {
  let cpf = campo.value.replace(/\D/g, ''); // Remove tudo que não for número

  if (cpf.length > 11) cpf = cpf.slice(0, 11); // Limita a 11 dígitos

  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
  cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

  campo.value = cpf;
}

function formatarnumero(campo) {
  let numero = campo.value.replace(/\D/g, ''); // Remove tudo que não for número

  if (numero.length > 11) numero = numero.slice(0, 11); // Limita a 11 dígitos

  numero = numero.replace(/(\d{0})(\d)/, '$1($2');
  numero = numero.replace(/(\d{2})(\d)/, '$1) $2');
  numero = numero.replace(/(\d{4})(\d{2,4})$/, '$1-$2');

  campo.value = numero;
}
</script>

  </script>

</body>
</html>