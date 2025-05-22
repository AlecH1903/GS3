<?php
session_start();

if(isset($_POST["btns"])){
 
include_once("code/conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $email = mysqli_real_escape_string($conexao, $email);

     $resultado = mysqli_query($conexao, "SELECT email, nome, senha FROM usuarios WHERE email = '$email'");
     $usuario = mysqli_fetch_assoc($resultado);

    if($usuario && password_verify($senha,$usuario['senha'])){
       

        $_SESSION['nome'] = $usuario['nome'];
        header("Location: inipage.php");
        exit();

    }else{
        $erros[] = "email ou senha incorretos";
        
    }


}



?>