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

if($user_id == 0){
    $consulta = "SELECT * FROM tarefas_todo";
}else{
    $consulta = "SELECT * FROM tarefas_todo WHERE usuario_id = '$user_id' ";
}


$con = $mysqli->query($consulta) or die($mysqli->error);

 
  while($dado = $con->fetch_row()){
    echo json_encode($dado, JSON_PRETTY_PRINT);
 }
