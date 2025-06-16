<?php


include_once("code/conexao.php");
 $cpf = $_SESSION['cpf'];
 $sqlUser = "SELECT * FROM usuarios WHERE cpf='$cpf'";
$resultUser = mysqli_query($conexao, $sqlUser);
$user = mysqli_fetch_assoc($resultUser);

if (!isset($_SESSION['email'])) {
    header("Location: verdavolt.php");
    exit();}
$erros = [];
$sucesso = false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['atualizar'])) {
        include_once("code/conexao.php");
        $senha_atual = $_POST['senha_atual'];
        $novo_nome = $_POST['nome'];
        $novo_email = $_POST['email'];
        $novo_telefone = $_POST['telefone'];
        $idade = $_POST['data'];
        $date = date('Y') - date('Y', strtotime($idade));
        
        if ($date < 18 ) {
            $_SESSION['mensagemerro'] = "você precisa ser maior de idade";
            header("location: perfil.php");end();
        }
        $nova_data_nascimento = $idade;
        $nova_senha = $_POST['nova_senha'];
        if(isset($_POST['foto'])){
        $foto = $_POST['foto'];
        }
        $resultado = mysqli_query($conexao, "SELECT senha FROM usuarios WHERE email = '".$_SESSION['email']."'");
        $usuario = mysqli_fetch_assoc($resultado);
var_dump($nova_data_nascimento);
        if ($usuario && password_verify($senha_atual, $usuario['senha'])) {
            
            
           
            $campos = [];
            if (!empty($novo_nome) && $novo_nome != $_SESSION['nome']) {
                $campos[] = "nome = '".mysqli_real_escape_string($conexao, $novo_nome)."'";
                $_SESSION['nome'] = $novo_nome;
            }
            
            if (!empty($novo_email) && $novo_email != $_SESSION['email']) {
               
                $verifica_email = mysqli_query($conexao, "SELECT cpf FROM usuarios WHERE email = '".mysqli_real_escape_string($conexao, $novo_email)."' AND email != '".$_SESSION['email']."'");
                if (mysqli_num_rows($verifica_email) === 0) {
                    $campos[] = "email = '".mysqli_real_escape_string($conexao, $novo_email)."'";
                    $_SESSION['email'] = $novo_email;
                } else {
                    $_SESSION['mensagemerro'] = "Este e-mail já está em uso por outro usuário.";
                }
            }
            
            if (!empty($novo_telefone) && $novo_telefone != $_SESSION['telefone']) {
                $campos[] = "telefone = '".mysqli_real_escape_string($conexao, $novo_telefone)."'";
                $_SESSION['telefone'] = $novo_telefone;
            }
            
            if (!empty($nova_data_nascimento)) {
                $data_mysql = date("Y-m-d", strtotime(str_replace("/", "-", $nova_data_nascimento)));
                $campos[] = "data_nascimento = '".$data_mysql."'";
                $_SESSION['data'] = $nova_data_nascimento;
            }
            
            if (!empty($nova_senha)) {
                if (strlen($nova_senha) >= 6) {
                    $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
                    $campos[] = "senha = '".$senha_hash."'";
                } else {
                    $_SESSION['mensagemerro'] = "A nova senha deve ter pelo menos 6 caracteres.";
                }
            }
            if(isset($foto)){
             $campos[] = $foto;
             if(!isset($foto)){
                $sql = "INSERT INTO usuarios foto_perfil WHERE cpf = '".$_SESSION['cpf']."'";
                mysqli_query($conexao,$sql);
             }}
            
            if (empty($erros) && !empty($campos)) {
                $sql = "UPDATE usuarios SET ".implode(", ", $campos)." WHERE cpf = '".$_SESSION['cpf']."'";
                if (mysqli_query($conexao, $sql)) {
                    $sucesso = true;
                } else {
                    $_SESSION['mensagemerro'] = "Erro ao atualizar os dados. Por favor, tente novamente.";
                }
            }
        } else {
            $_SESSION['mensagemerro'] = "Senha atual incorreta. Por favor, tente novamente.";
        }
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
    $imagem = file_get_contents($_FILES['foto']['tmp_name']);
    $imagem = mysqli_real_escape_string($conexao, $imagem);
$cpf = $_SESSION['cpf'];

    $sqlFoto = "UPDATE usuarios SET foto_perfil='$imagem' WHERE cpf='$cpf'";

    if (mysqli_query($conexao, $sqlFoto)) {
      $sucesso = true;
    } else {
      $_SESSION['mensagemerro'] = "Erro ao atualizar foto.";
    }
  }
 $cpf = $_SESSION['cpf'];
 $sqlUser = "SELECT * FROM usuarios WHERE cpf='$cpf'";
$resultUser = mysqli_query($conexao, $sqlUser);
$user = mysqli_fetch_assoc($resultUser);


}
}
$fotoSrc = "default.jpg";
if (!empty($user['foto_perfil'])) {
  $fotoSrc = "data:image/jpeg;base64," . base64_encode($user['foto_perfil']);
}
?>