<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Login ToDo</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    
</head>
 
<body>
    <section >
        <div >
            <div >
                <div >
                    <h3 class="title has-text-grey">Login ToDo</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    
                      <p>ERRO: Usuário ou senha inválidos.</p>
                      
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <a href="view/adicionar_usuario.php">Criar Conta</a>
                        <form action="control/proc_login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>
 
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                        Obs: Esse sistema conta com verificação em duas vias (email) <br>
    API: todomatheus.000webhostapp.com/api.php/x <br> 
    (x = 0 para todas as tarefas / x = id para tarefas de um user) <br>
    A API retorna o formato Json: ["Id","Tarefa","User","Data(y-m-d)","Freq"]
                </div>
            </div>
        </div>
    </section>

</body>
 
</html>