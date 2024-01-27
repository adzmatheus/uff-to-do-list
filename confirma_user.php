<?php

function UrlAtual(){
 $dominio= $_SERVER['HTTP_HOST'];
 $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
 return $url;
 }
 
//usar API para endereço

include("../public_html/model/conexao.php");

$endereco = UrlAtual();

$path = explode('/', $endereco);
  
//print_r($path);

$user_id = $path[4] ;

include("../public_html/model/conexao.php");

$confirma = "UPDATE usuario_todo SET usuario_confirm = '1' WHERE usuario_id = $user_id";

$conf = $mysqli->query($confirma) or die($mysqli->error);

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Confirmado ToDo</title>
</head>
 
<body>

Email de cadastro confirmado<br>

<a href="../index.php">Login</a>

</body>
 
</html>