<?php
session_start();

if(isset($_POST["btns"])){
 
include_once("code/conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $email = mysqli_real_escape_string($conexao, $email);

     $resultado = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
     $usuario = mysqli_fetch_assoc($resultado);

    if($usuario && password_verify($senha,$usuario['senha'])){
       

        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['cpf'] = $usuario['cpf'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['telefone'] = $usuario['telefone'];
        $_SESSION['data'] = date("d-m-Y", strtotime(str_replace("/", "-", $usuario['data_nascimento'])));
        $_SESSION['senha'] = $usuario['senha'];
        $sql = "SELECT ativa FROM assinaturas WHERE id_usuario = '$_SESSION[cpf]' ";
mysqli_query($conexao,$sql);

if($sql == true){
    $_SESSION['assinante'] = true;
}
        header("Location: inipage.php");
        exit();

    }else{
        $erros[] = "email ou senha incorretos";
        
    }


}



?>