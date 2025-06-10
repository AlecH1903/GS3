<?php
if(isset($_POST['btnma'])) {
    if (!isset($_SESSION['cpf'])) {
    header("Location: login.php");
    exit();
}

 if(isset($_SESSION['cpf'])) {
        include_once("code/conexao.php"); 
        $id_usuario = $_SESSION['cpf'];

   
$sql = "SELECT assinante FROM usuarios WHERE cpf = '$id_usuario' ";
 $resultadosql = mysqli_query($conexao,$sql);

if($resultadosql){

     $row = mysqli_fetch_assoc($resultadosql);

     if($row['assinatura'] == 0){
    $sql_usuario = "UPDATE usuarios SET assinante = 1 WHERE cpf = '$id_usuario'";
        mysqli_query($conexao, $sql_usuario);
        
        $sql_assinatura = "INSERT INTO assinaturas (id_usuario, ativa) 
                           VALUES ('$id_usuario', true)";
        mysqli_query($conexao, $sql_assinatura);
        
        $_SESSION['assinante'] = true;
        header("Location: maproject.php");
}
else{
        header("Location: maproject.php"); 
    } }
    exit();
}}
?> 