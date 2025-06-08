<?php
include_once("code/loginC.php");
include_once("code/conexao.php"); // conexão já deve fornecer $conexao

if (!isset($_SESSION['cpf'])) {
    echo "Usuário não autenticado.";
    exit;
}

$cpf = $_SESSION['cpf'];

$email_esc = mysqli_real_escape_string($conexao, $cpf);

$sqlCpf = "SELECT cpf FROM usuarios WHERE cpf = ?";
$stmtCpf = mysqli_prepare($conexao, $sqlCpf);
mysqli_stmt_bind_param($stmtCpf, "s", $email_esc);
mysqli_stmt_execute($stmtCpf);
$resultCpf = mysqli_stmt_get_result($stmtCpf);

if (mysqli_num_rows($resultCpf) === 0) {
    echo "Usuário não encontrado.";
    exit;
}
if(isset($_POST['modelo'])){

$cpf = $_SESSION['cpf']; 

$modelo    = $_POST['modelo'] ?? '';
$cor       = $_POST['cor'] ?? '';
$rodas     = $_POST['rodas'] ?? '';
$interior  = $_POST['interior'] ?? '';
$preco     = floatval($_POST['preco_total'] ?? 0.0);

$sqlInsert = "INSERT INTO compras (id_usuario, modelo, cor, rodas, interior, preco, data_compra)
              VALUES (?, ?, ?, ?, ?, ?, NOW())";

$stmtInsert = mysqli_prepare($conexao, $sqlInsert);
mysqli_stmt_bind_param($stmtInsert, "sssssd", $cpf, $modelo, $cor, $rodas, $interior, $preco);

if (mysqli_stmt_execute($stmtInsert)) {
    // Compra inserida com sucesso, agora incrementa o contador
    $sqlUpdateCompras = "UPDATE usuarios SET compras = compras + 1 WHERE cpf = ?";
    $stmtUpdate = mysqli_prepare($conexao, $sqlUpdateCompras);
    mysqli_stmt_bind_param($stmtUpdate, "s", $cpf);
    mysqli_stmt_execute($stmtUpdate);
    exit;
} else {
    echo "Erro ao registrar compra: " . mysqli_error($conexao);
}mysqli_stmt_close($stmtCpf);
mysqli_stmt_close($stmtInsert);
mysqli_close($conexao);
}


?>
