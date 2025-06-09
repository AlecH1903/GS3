<?php
if(isset($_POST['btnma'])) {
 if(isset($_SESSION['cpf'])) {
        $id_usuario = $_SESSION['cpf'];

    include_once("conexao.php");
$sql = "SELECT ativa FROM assinaturas WHERE id_usuario = '$id_usuario' ";
mysqli_query($conexao,$sql);

if($sql == 1){
    header("Location: maproject.php");
}else{
   
        
        $sql_usuario = "UPDATE usuarios SET assinante = 1 WHERE cpf = '$id_usuario'";
        mysqli_query($conexao, $sql_usuario);
        
        $sql_assinatura = "INSERT INTO assinaturas (id_usuario, ativa) 
                           VALUES ('$id_usuario', true)";
        mysqli_query($conexao, $sql_assinatura);
        
        $_SESSION['assinante'] = true;
        header("Location: maproject.php");
    } }
    exit();
}
?>