<?php
session_start();
include("../model/conexao.php");

$tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_STRING);

$frequencia = filter_input(INPUT_POST, 'frequencia', FILTER_SANITIZE_NUMBER_INT);

$data_task = $_POST['data'];
//$data_task = str_replace('-','/',$data_task);

//$data_task = date('Y-m-d', strtotime($data_task));

//echo $tarefa, $frequencia, $data_task;


    if($tarefa==""){
        $_SESSION['msg'] = "<p style='color:red;'>Tarefa não cadastrada</p>";
        header("Location: ../view/todo.php");
    }else{
        $id_dono = $_SESSION['usuario_id'];
        
        $result = "INSERT INTO tarefas_todo (id, tarefa, usuario_id, data_tarefa, estado_tarefa) VALUES (null, '$tarefa', '$id_dono','$data_task','$frequencia')";
        $resultado = mysqli_query($mysqli, $result);
        
        if(mysqli_insert_id($mysqli)){
        	$_SESSION['msg'] = "<p style='color:green;'>Tarefa cadastrada com sucesso</p>";
        	header("Location: ../view/todo.php");
        }else{
        	$_SESSION['msg'] = "<p style='color:red;'>Tarefa não cadastrada</p>";
        	header("Location: ../view/todo.php");
        }
    }
?>