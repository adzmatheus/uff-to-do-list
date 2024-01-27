<?php
$servidor = "localhost";
$usuario = "DATABASE_USER";
$senha = "DATABASE_PASSWORD";
$dbname = "DATABASE_NAME";

//Criando a conexao
$mysqli = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Caso algo tenha dado errado
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>
