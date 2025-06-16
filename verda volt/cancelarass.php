<?php
include("code/loginC.php");
include("code/conexao.php");
include("code/cancelar.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect width='200' height='200' fill='black'/><text x='50%' y='50%' font-family='Roboto' font-size='100' fill='white' text-anchor='middle' dominant-baseline='middle'>V </text> </svg>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cancelar Assinatura</title>
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
    
  <form action="cancelarass.php" method="post" class="login-form">
      <a name="backbtn" href="perfil.php" class="back-button">← Voltar</a>
      <h2>Deseja Cancelar sua Assinatura?</h2>

      
      <div style="  display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;" class="button-container">
  <button style="  width: 100%;
  padding: 12px;
  background-color: var(--btn-bg);
  color: var(--btn-color);
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 1em;
  transition: background-color 0.3s ease;" type="button" class="edit-button" onclick="showEditForm()">Sim</button>
           <a  style=" text-align: center;  width: 100%;
  padding: 12px;
  background-color: var(--btn-bg);
  color: var(--btn-color);
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 1em;
  transition: background-color 0.3s ease;text-decoration: none;" type="button" style=" color: white" href="perfil.php"  class="cancel-button"> Não </a> 
</div>
<div id="editForm" style="display:none;" class="form-group">
       <br> <label for="senha">Confirme sua Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Confirme sua senha" />
     
      <button style="margin-top: 6px" type="submit" class="btn-entrar" name="cancelar_assinatura">Cancelar</button>
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
    
    function showEditForm() {
      document.getElementById('editForm').style.display = 'block';
    }

    function hideEditForm() {
      document.getElementById('editForm').style.display = 'none';
    }
  </script>

</body>
</html>

