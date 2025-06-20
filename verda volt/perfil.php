<?php

include("code/loginC.php");
include("code/conexao.php");
include("code/perfilcode.php");
include("code/cancelar.php");
$ultimos_dois = substr($user['cpf'], -2);

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
 <div class="nav-container" >
   <a href="verdavolt.php" class="nav-logo">VerdaV</a>
   <ul class="nav-links" style="margin-left: 55em;">  
      
    
      <li class="dropdown">
        <?php 
        if(isset($_SESSION['nome'])){ ?>
           <a><?php echo $_SESSION['nome'];?></a>
        <ul class="submenu">
      <li><a href="inventario.php">Garagem<span ></span></a></li>
     <li><a href="code/logout.php">Sair<span ></span></a></li>
       <?php } ?>
 </ul>
        </li>
       
 
   </ul>
   
 </div>
</nav>
</header>

<div class="user-wrapper">
  <div class="container">
   
    
    <?php if (!empty($erros)): ?>
      <div class="alert alert-error">
        <?php foreach ($erros as $erro): ?>
          <p><?php echo ($erro); ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f4f4f4;
    }
    .profile-container {
      max-width: 400px;
      margin: 60px 400px;
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      text-align: center;
    }
    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #333;
    }
    .edit-photo {
      margin-top: 10px;
    }
    .edit-photo input[type=file] {
      display: none;
    }
    .edit-photo label {
      cursor: pointer;
      color: #007bff;
    }
    .user-info {
      margin-top: 20px;
      text-align: left;
    }
    .user-info p {
      margin: 12px 0;
      font-size: 16px;
    }
    .user-info span.label {
      font-weight: bold;
      color: #555;
    }
    .mask {
      letter-spacing: 2px;
    }
    .toggle-cpf {
      cursor: pointer;
      color: #007bff;
      font-size: 0.9em;
      margin-left: 10px;
    }
    .edit-button, .save-button, .cancel-button {
      margin: 20px 10px 0;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    .edit-button { background-color:rgb(0, 0, 0); color: white; }
    .save-button { background-color:rgb(0, 0, 0); color: white; }
    .cancel-button { background-color:rgb(0, 0, 0); color: white; }
    .edit-form {
      display: none;
      text-align: left;
      margin-top: 20px;
    }
    .edit-form input {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
  </style>
</head>
<body> <h1 style="margin-left: 13.5em;">Perfil do Usuário</h1>
<?php if(isset($_SESSION['assinante'])){?> 
<h2 style=" top:22em; margin-left: 17em;
      font-weight: bold;
      margin-bottom: 20px;
      background: linear-gradient(to left, #fff,rgba(111, 111, 243, 0.45));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;">Membro Verda</h2>
      
      <?php } ?>
  <form action="perfil.php" method="POST" enctype="multipart/form-data" class="profile-container"> 
  <img src="<?= $fotoSrc ?>" alt="Foto de Perfil" class="profile-img" id="profilePic">

  <div class="edit-photo">
    <label for="photoUpload">Alterar Foto</label>
   <button name="foto"> <input type="file" id="photoUpload" name="foto" accept="image/*"> </button> </input>
  </div>

  <div class="user-info" id="userInfo">
    <p><span class="label">Nome:</span> <?= htmlspecialchars($user['nome']) ?></p>
    <p><span class="label">Email:</span> <?= htmlspecialchars($user['email']) ?></p>
    <p>
      <span class="label">CPF:</span> <span id="cpf" class="mask">***.***.***-<?php echo $ultimos_dois ?></span>
      <span class="toggle-cpf" onclick="toggleCPF()">Ver</span>
    </p>
    <p><span class="label">Data de Nascimento:</span> <?= htmlspecialchars(($_SESSION['data'])) ?></p>
    <p><span class="label">Telefone:</span> <?= htmlspecialchars($user['telefone']) ?></p>
  </div>

  <div style="  display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;" class="button-container">
  <button type="button" class="edit-button" onclick="showEditForm()">Alterar Dados</button>
  <?php if(isset($_SESSION['assinante'])): ?>
        
           <a type="button" style="text-decoration: none; color: white" href="cancelarass.php"  class="cancel-button"> Cancelar Assinatura </a> 
    <?php endif; ?>
</div>

<?php
if (isset($_SESSION['mensagem'])) {
    echo '<div class="alert alert-success">' . $_SESSION['mensagem'] . '</div>';
    unset($_SESSION['mensagem']);
}
?>
<?php
if (isset($_SESSION['mensagemerro'])) {
    echo '<div class="alert error-msg ">' . $_SESSION['mensagemerro'] . '</div>';
    unset($_SESSION['mensagemerro']);
}
?>

  <div class="edit-form" id="editForm" style="display:none;">
    <input type="text" id="nome" name="nome" placeholder="Nome" value="<?= htmlspecialchars($user['nome']) ?>" required>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    <input type="text" id="cpf" name="cpf" value="<?= htmlspecialchars($user['cpf']) ?>" readonly>
    <input type="text" maxlength="10"  id="data" name="data" value="<?= htmlspecialchars(($_SESSION['data']))?>" oninput="formatardata(this)" required >
    <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($user['telefone']) ?>">
    <label for="nova_senha">Nova Senha (opcional):</label>
    <input type="password" id="nova_senha" name="nova_senha" placeholder="Deixe em branco para não alterar">
    <label for="senha_atual">Confirme sua senha atual para alterar os dados:</label>
    <input type="password" id="senha_atual" name="senha_atual" required>
    <button type="submit" name="atualizar" class="save-button">Salvar</button>
    <button type="button" class="cancel-button" onclick="hideEditForm()">Cancelar</button>
  </div>
</form>

  <script>

function formatardata(campo) {
  let data = campo.value.replace(/\D/g, ''); // Remove tudo que não for número

  if (data.length > 10) data = data.slice(0, 10); // Limita a 10 dígitos

  data = data.replace(/(\d{2})(\d)/, '$1/$2');
  data = data.replace(/(\d{2})(\d)/, '$1/$2');
  

  campo.value = data;
}


    let cpfMasked = true;
    function toggleCPF() {
      const cpfEl = document.getElementById('cpf');
      if (cpfMasked) {
        cpfEl.textContent = '<?= htmlspecialchars($user['cpf']) ?>'.replace(/(\d{3})(\d)/, '$1.$2').replace(/(\d{3})(\d)/, '$1.$2').replace(/(\d{3})(\d)/, '$1.$2').replace(/(\d{3})(\d{1,2})$/, '$1-$2');
      } else {
        cpfEl.textContent = '***.***.***-<?= htmlspecialchars($ultimos_dois) ?>';
      }
      cpfMasked = !cpfMasked;
    }

    function showEditForm() {
      document.getElementById('editForm').style.display = 'block';
    }

    function hideEditForm() {
      document.getElementById('editForm').style.display = 'none';
    }
    //preview da img!
    document.getElementById('photoUpload').addEventListener('change', function(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById('profilePic').src = e.target.result;
    }
    reader.readAsDataURL(file);
  }
});
;
  </script>
</body>
</html>
