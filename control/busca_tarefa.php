<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<?php
include("../model/conexao.php");

$user_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$consulta = "SELECT * FROM tarefas_todo WHERE usuario_id = '$user_id' ORDER BY data_tarefa ASC ";

$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<html>
    
    
    		<table class="table table-striped">
			<tr>
				<td><strong>Data</strong></td>
				<td><strong>Tarefa</strong></td>
				<td><strong>Freq.</strong></td>
				<td>...</td>
				<td>...</td>
			</tr>
			
		<?php while($dado = $con->fetch_array()){ ?>
			<tr>
				<td><?php  echo date('d/m/Y', strtotime( $dado["data_tarefa"]));  ?></td>
				<td><?php  echo $dado["tarefa"];  ?></td>
				<td><?php  echo $dado["estado_tarefa"];  ?></td>
				<td> <a href="../control/proc_tarefa_feita.php?id=<?php echo $dado["id"];?>&freq=<?php echo $dado["estado_tarefa"];?>">Feito</a> </td>
				<td> <a href="../control/proc_apagar_tarefa.php?id=<?php echo $dado["id"];?>">Apagar</a> </td>
			</tr>
		<?php } ?>

		</table>
    
    

</html>

