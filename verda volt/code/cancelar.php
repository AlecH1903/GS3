<?php
$id_usuario = $_SESSION['cpf'];

if(isset($_POST['cancelar_assinatura'])){

    
    if(!$_POST['senha']){
        $erros[] = "Insira sua senha";
    }else{
$senha = $_POST['senha'];}

$sql = mysqli_query($conexao,"SELECT senha FROM usuarios WHERE cpf = '$id_usuario'");
$result = mysqli_fetch_assoc($sql);

if($result && password_verify($senha,$result['senha']));{

$sql_check = "SELECT assinante FROM usuarios WHERE cpf = '$id_usuario'";
$result_check = mysqli_query($conexao, $sql_check);

if ($result_check && mysqli_num_rows($result_check) > 0) {
    $row = mysqli_fetch_assoc($result_check);
    
    if ($row['assinante'] == 1) {
      
        $sql_update = "UPDATE usuarios SET assinante = 0 WHERE cpf = '$id_usuario'";
        mysqli_query($conexao, $sql_update);
        
 $sql_assinatura = "UPDATE assinaturas 
                             SET ativa = 0, 
                                 data_expiracao = NOW() 
                             WHERE id_usuario = '$id_usuario' AND ativa = '1';";
            mysqli_query($conexao, $sql_assinatura);

        unset($_SESSION['assinante']);
        $_SESSION['mensagem'] = "Assinatura cancelada com sucesso!";
    } else {
        $_SESSION['mensagem'] = "Você não possui uma assinatura ativa.";
    }
header("Location: perfil.php");}else{ $erros[] = "Senha incorreta";
} 

 }

 }
?>