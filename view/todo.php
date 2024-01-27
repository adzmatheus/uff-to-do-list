<?php
session_start();
include('../control/verifica_login.php');
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
  
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  
<link src="css/bootstrap-datepicker.css" rel="stylesheet">

<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
  
  

<html>
	<head>
		<title>Tarefeiro</title>
		<h2>Lista de tarefas ToDo</h2>
        <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
        <!-- <h2>Olá, <?php // echo $_SESSION['usuario_id'];?></h2> -->
	</head>
	<body>

        <a href="../control/logout.php">Sair</a>

		<form method="POST" action="../control/proc_add_tarefa.php">
			<label>Tarefa: </label>
			<input type="text" name="tarefa" placeholder="Digite sua tarefa">
			<input name="data" type="date">
			
		<!--<div class="input-group date" data-provide="datepicker">
			<label>Data:  </label>
			<input type="text" name="data" placeholder="Data">
			<span class="glyphicon glyphicon-th"></span>
			</div>
			<script type="text/javascript">
        	        $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    language: "pt-BR",
                    startDate: '+0d',
                    });
        	</script> 
    		
    		outro jeito
    		
    			<div class="input-group date" data-provide="datepicker">
                 <input type="text" class="form-control">
                 <div class="input-group-addon">
                 <span class="glyphicon glyphicon-th"></span>
                 </div>
                </div>
            	<script type="text/javascript">
        	        $('.datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    language: "pt-BR",
                    startDate: '+0d',
                    });
        	    </script> -->
        	    
        	<label>Frequencia:  </label>
        	<input type="radio" name="frequencia" value="1" checked> Única
        	<input type="radio" name="frequencia" value="2"> Diária
            <input type="radio" name="frequencia" value="3"> Semanal
            <input type="radio" name="frequencia" value="4"> Mensal
            <input type="radio" name="frequencia" value="5"> Anual
        	    
        	<br><br>    
			<input type="submit" value="Salvar">
			
		</form>
		
		<!--<button type="button" onclick="getData()">Atualizar ToDo</button>-->
		
		<script type="text/javascript">
            page = "../control/busca_tarefa.php?id=<?php echo $_SESSION['usuario_id']; ?>"
            
            $(document).ready(function() {
                function getData() {
                    $.ajax({
                        url:page,
                        beforeSend: function() {
                        //$("#conteudo").empty();
                        $("#conteudo").append("Carregando...");}                    
                    }).done(function(data) {
                        $("#conteudo").empty();      
                        $("#conteudo").append(data);
                    });
                }
                getData();
                setInterval(getData, 10000);
            });
        </script>
		
		<div id="conteudo"><h4>Sua lista de tarefas</h4></div>
		

	</body>

</html>
