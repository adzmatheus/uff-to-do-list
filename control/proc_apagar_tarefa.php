<?php

include("../model/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

/*if(!empty($id)){
	
	$result_tarefa = "DELETE FROM tarefas WHERE id='$id'";

	$resultado_tarefa = mysqli_query($mysqli, $result_tarefa);
	
	if(mysqli_affected_rows($mysqli)){
		$_SESSION['msg'] = "<p style='color:green;'>Tarefa apagada com sucesso</p>";
		header("Location: todo.php");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>A tarefa não foi apagada com sucesso</p>";
		header("Location: todo.php");
	}	
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar uma tarefa</p>";
	header("Location: todo.php");
}*/

if(!empty($id)){
	$result_tarefa = "DELETE FROM tarefas_todo WHERE id='$id'";
	$resultado_tarefa = mysqli_query($mysqli, $result_tarefa);
	header("Location: ../view/todo.php");
}

?>