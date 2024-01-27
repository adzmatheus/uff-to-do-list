<?php

include("../model/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$frequencia = filter_input(INPUT_GET, 'freq', FILTER_SANITIZE_NUMBER_INT);

if($frequencia == 1){
    if(!empty($id)){
    	$result_tarefa = "DELETE FROM tarefas_todo WHERE id='$id'";
    	$resultado_tarefa = mysqli_query($mysqli, $result_tarefa);
    	header("Location: ../view/todo.php");
    }
}
if($frequencia == 2){
    $result = "UPDATE tarefas_todo 
           SET data_tarefa = ADDDATE(data_tarefa, INTERVAL 1 DAY)
           WHERE id = $id;";
    $resultado = mysqli_query($mysqli, $result);
    header("Location: ../view/todo.php"); 
}
if($frequencia == 3){
    $result = "UPDATE tarefas_todo 
           SET data_tarefa = ADDDATE(data_tarefa, INTERVAL 7 DAY)
           WHERE id = $id;";
    $resultado = mysqli_query($mysqli, $result);
    header("Location: ../view/todo.php");
}
if($frequencia == 4){
    $result = "UPDATE tarefas_todo 
           SET data_tarefa = ADDDATE(data_tarefa, INTERVAL 1 MONTH)
           WHERE id = $id;";
    $resultado = mysqli_query($mysqli, $result);
    header("Location: ../view/todo.php");
}
if($frequencia == 5){
    $result = "UPDATE tarefas_todo 
           SET data_tarefa = ADDDATE(data_tarefa, INTERVAL 1 YEAR)
           WHERE id = $id;";
    $resultado = mysqli_query($mysqli, $result);
    header("Location: ../view/todo.php");
}

?>