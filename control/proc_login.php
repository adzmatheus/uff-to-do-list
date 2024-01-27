<?php
session_start();
include('../model/conexao.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../index.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
 
$query = "SELECT usuario_id, usuario_nome, usuario_email FROM usuario_todo where usuario_nome = '{$usuario}' and usuario_senha = md5('{$senha}') ";

$query2 = "SELECT usuario_id, usuario_nome FROM usuario_todo where usuario_nome = '{$usuario}' and usuario_senha = md5('{$senha}') and usuario_confirm = 1 ";

$result = mysqli_query($mysqli, $query);
$result2 = mysqli_query($mysqli, $query2);

$user_info = $result->fetch_array();
 
$row = mysqli_num_rows($result);
$row2 = mysqli_num_rows($result2);

if($row2 == 1) {
	$_SESSION['usuario'] = $usuario;
	$_SESSION['usuario_id'] = $user_info["usuario_id"];
	header('Location: ../view/todo.php');
	exit();
} else {
    if($row == 1){
        $_SESSION['usuario'] = $usuario;
	    $_SESSION['usuario_id'] = $user_info["usuario_id"];
	    $_SESSION['email'] = $user_info["usuario_email"];
	    header('Location: ../view/aguarda_confirm.php');
	    exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
	    header('Location: ../index.php');
	    exit();}
}
?>