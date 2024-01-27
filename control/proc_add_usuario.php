<?php
session_start();
include("../model/conexao.php");

$user = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$result = "INSERT INTO usuario_todo (usuario_id, usuario_nome, usuario_senha, usuario_email) VALUES (null, '$user', md5('$pass'), '$email')";
$resultado = mysqli_query($mysqli, $result);

if(mysqli_insert_id($mysqli)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
	header("Location: ../index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuario não cadastrado</p>";
	header("Location: ../index.php");
}
?>