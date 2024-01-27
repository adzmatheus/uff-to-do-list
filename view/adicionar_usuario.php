<?php

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


<html>
    
	<head>
		<title>Cadastreiro</title>
		<h2>Formulario de cadastro ToDo</h2>
	</head>

	<body>
	    
	    <form method="POST" action="../control/proc_add_usuario.php">
	        
          <div class="form-group">
            <label for="cadastroNome">Nome de Usuario</label>
            <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Usuário">
            <small id="emailHelp" class="form-text text-muted">Seu nome agora é nosso</small>
          </div>
         
          <div class="form-group">
            <label for="Password">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Senha">
          </div>
          
          <div class="form-group">
            <label for="cadastroEmail">Email</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">Digite seu email</small>
          </div> 
          
          <?php
          //  	include("busca_cep.html");
           ?> 

          <button type="submit" class="btn btn-primary">Submit</button>
          
        </form> 

	</body>

</html>


