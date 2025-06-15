<?php 
session_start();
require 'vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once("code/conexao.php");

if(isset($_POST['btnr'])){
$email = $_POST['email'];
$_SESSION['email'] = $email;
$sql = mysqli_query($conexao, "SELECT nome, email FROM usuarios WHERE email = '$email'");

$usuario = mysqli_fetch_assoc($sql);
if(mysqli_num_rows($sql) == 1){
   $codigo =  random_int(100000, 999999);
  $mail = new PHPMailer(true); // 'true' ativa o modo de exceção
  $_SESSION['codigo_email'] = $codigo;

try {
    // Configuração do servidor SMTP
    $mail->isSMTP();                                      // Usar SMTP
    $mail->Host       = 'smtp.gmail.com';                 // Servidor SMTP do Gmail
    $mail->SMTPAuth   = true;                             // Habilitar autenticação
    $mail->Username   = 'voltverda@gmail.com';            // usar email do  Gmail
    $mail->Password   = 'xfnn fast kscs vgxv';            // Senha de app do Gmail (NÃO é a senha normal)
    $mail->SMTPSecure = 'tls';                           
    $mail->Port       = 587;                              // Porta SMTP do Gmail


    $mail->setFrom('voltverda@gmail.com', 'VerdaV');    // Quem envia
    $mail->addAddress(''. $email . '');        // Quem recebe

    // Conteúdo do e-mail
    $mail->isHTML(true);                                  // Enviar em HTML
    $mail->Subject = 'Redefinir Senha';
    $mail->Body    = '<b>Olá!</b> ' . $usuario['nome'] .' Você solicitou validação do e-mail pessoal da sua conta de acesso VerdaVolt <br>

Um novo código de validação do e-mail pessoal (PIN de segurança) foi criado. <br> 

Esse código de validação é importante para verificar a existência do seu e-mail, dessa forma, por exemplo, ficará mais fácil redefinir a sua senha de acesso, caso você a perca. <br> 

Se você não solicitou esta alteração, recomendamos que altere sua senha. Em caso de maiores esclarecimentos, acesse <br> 

<br> Se foi você mesmo quem solicitou a criação do código de validação do e-mail, digite-o na tela "Digite o código de validação enviado para o email informado. <br>
 <h1 style="align-text: center;">' . $_SESSION['codigo_email'] . '</h1>';

    // Envia o e-mail
    $mail->send();
    header("Location: codemail.php");
}catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}

}else{
     $erros[] = "O email não existe";
}
}
if(!isset($_SESSION['tentativa'])){
     $_SESSION['tentativa'] = 1;
}
if(isset($_POST['btncode'])){

     if (isset($_SESSION['bloqueado_ate']) && time() < $_SESSION['bloqueado_ate']) {
    $tempo_restante = $_SESSION['bloqueado_ate'] - time();
    $msg = "Você errou muitas vezes. Tente novamente em " . ceil($tempo_restante / 60) . " minutos.";
}

     if($_SESSION['tentativa'] >= 1){
          $_SESSION['tentativa'] = $_SESSION['tentativa'];
     }

     $code = $_POST['code'];
      if($code == $_SESSION['codigo_email']){
           unset($_SESSION['tentativa'], $_SESSION['bloqueado_ate'], $_SESSION['codigo_email']);
          header("Location: redefinirSenha.php");
      } else{
          $erros[] = "Código inválido";  $_SESSION['tentativa']++;
         
      }if($_SESSION['tentativa'] > 3){
          $_SESSION['bloqueado_ate'] = time() + 600; // bloqueia por 10 minutos
            session_write_close(); //até onde vi, era pra garantir q salva, ver mais já já!
            $erros[] = $msg;
      }
     
      }

      if(isset($_POST['reenviar'])){
    
        

        $codigo =  random_int(100000, 999999);
  $mail = new PHPMailer(true); // 'true' ativa o modo de exceção
  $_SESSION['codigo_email'] = $codigo;
$email = $_SESSION['email'];

try {
    // Configuração do servidor SMTP
    $mail->isSMTP();                                      // Usar SMTP
    $mail->Host       = 'smtp.gmail.com';                 // Servidor SMTP do Gmail
    $mail->SMTPAuth   = true;                             // Habilitar autenticação
    $mail->Username   = 'voltverda@gmail.com';            // usar email do  Gmail
    $mail->Password   = 'xfnn fast kscs vgxv';            // Senha de app do Gmail (NÃO é a senha normal)
    $mail->SMTPSecure = 'tls';                           
    $mail->Port       = 587;                              // Porta SMTP do Gmail


    $mail->setFrom('voltverda@gmail.com', 'VerdaV');    // Quem envia
    $mail->addAddress(''. $email . '');        // Quem recebe

    // Conteúdo do e-mail
    $mail->isHTML(true);                                  // Enviar em HTML
    $mail->Subject = 'Redefinir Senha';
    $mail->Body    = '<b>Olá!</b> ' . $usuario['nome'] .' Você solicitou validação do e-mail pessoal da sua conta de acesso VerdaVolt <br>

Um novo código de validação do e-mail pessoal (PIN de segurança) foi criado. <br> 

Esse código de validação é importante para verificar a existência do seu e-mail, dessa forma, por exemplo, ficará mais fácil redefinir a sua senha de acesso, caso você a perca. <br> 

Se você não solicitou esta alteração, recomendamos que altere sua senha. Em caso de maiores esclarecimentos, acesse <br> 

<br> Se foi você mesmo quem solicitou a criação do código de validação do e-mail, digite-o na tela "Digite o código de validação enviado para o email informado. <br>
 <h1 style="align-text: center;">' . $_SESSION['codigo_email'] . '</h1>';

    // Envia o e-mail
    $mail->send();
}catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}}
 





if (isset($_POST['btnSalvar'])) {
    $novaSenha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];

    if ($novaSenha !== $confirmarSenha) {
        $erros[] = "As senhas não correspondem.";
    }

    if (strlen($novaSenha) < 6) {
        $erros[] = "A nova senha deve ter pelo menos 6 caracteres.";
    }

    if (empty($erros)) {
 
        $email = $_SESSION['email'];

        $resultado = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");

        if (!$resultado) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }

        $usuario = mysqli_fetch_assoc($resultado);

        if ($usuario) {
            if (password_verify($novaSenha, $usuario['senha'])) {
                $erros[] = "A nova senha deve ser diferente da antiga.";
            } else {

                $senha_hash = password_hash($novaSenha, PASSWORD_DEFAULT);
                $sql = mysqli_query($conexao, "UPDATE usuarios SET senha = '$senha_hash' WHERE email = '$email'");

                if (!$sql) {
                    die("Erro ao atualizar a senha: " . mysqli_error($conexao));
                }

                session_unset();           
                session_destroy();
                header("Location: login.php");
                exit;
            }
        } else {
            $erros[] = "Usuário não encontrado.";
        }
    }
   
}



?>
