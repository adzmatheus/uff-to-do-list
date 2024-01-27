<?php   

session_start();

/* 
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer-master/PHPMailerAutoload.php"; 
 
// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = "mail.meusitemodelo.com"; 
 
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 21; 
 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'francisco@meusitemodelo.com'; 
$mail->Password = 'senha-do-email'; 
 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "francisco@meusitemodelo.com"; 
 
// Seu nome 
$mail->FromName = "Francisco"; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress('maria@gmail.com', 'Maria'); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) aceita caracteres especiais
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "Assunto da mensagem"; 
 
// Corpo do email 
$mail->Body = 'Aqui entra o conteudo texto do email'; 
 
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 
*/

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "ToDo Matheus";

$to = $_SESSION['email'];

$subject = "Verificando o cadastro ToDo";

$id_link = (string) $_SESSION['usuario_id'];
$message = "Confirme seu email https://todomatheus.000webhostapp.com/confirma_user.php/".$id_link;   
//$message = "Confirme seu email clicando no link https://todomatheus.000webhostapp.com/confirma_user.php/2";

$headers = "De:". $from;

mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";
 
?>

 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Confirma ToDo</title>
</head>
 
<body>

<br>
<a href="https://todomatheus.000webhostapp.com">Login</a>

</body>
 
</html>