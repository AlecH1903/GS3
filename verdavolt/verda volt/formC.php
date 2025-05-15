<?php



if(isset($_POST['btn'])){
include_once('conexao.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$ntelefone = $_POST["telefone"];
$senha = $_POST["senha"];

//verifica se a senha possui menos de 6 números
if (strlen($senha) < 6) {
    $erros[] = "A senha deve ter pelo menos 6 caracteres.";
}$resultado = mysqli_query($conexao, "SELECT cpf FROM usuarios WHERE email = '$email'");

if (mysqli_num_rows($resultado) > 0) {
    $erros[] = "Este e-mail já está cadastrado.";
}

$resultado = mysqli_query($conexao, "SELECT cpf FROM usuarios where cpf = '$cpf'");
if (mysqli_num_rows($resultado) > 0) {
    $erros[] = "Este cpf já está cadastrado.";
}

if (empty($erros)) {

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$data_mysql = date("Y-m-d", strtotime(str_replace("/", "-", $idade)));
// Resultado: 2025-05-14

$sql = mysqli_query($conexao, "INSERT INTO usuarios (nome, cpf, email, data_nascimento, telefone, senha) 
VALUES('$nome', '$cpf', '$email',' $data_mysql', '$ntelefone', '$senha_hash')");

} 
}


?>