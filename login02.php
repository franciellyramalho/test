<?php
    require("conectaBd.php");
    echo("Conseguiu conectar! ;) ");     
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Resposta ao LOGIN</title>
        </head>
    <body>
        <h1>Login do Sistema</h1> 
                <?php                
                    $email=$_POST['email']; //vem do login 1 (name)
                    $senha=$_POST['senha']; //vem do login 1 (name) 
                   
                    //procura dados BD

                    $sql="SELECT email,senha from usuario where email='$email' "; 
                    $dataset=mysqli_query($conn,$sql);
                    if (!$dataset){
                        die("Não foi possivel fazer a pesquisa!");
                    }
                    //echo("SQL: ".$sql); //teste do sql      
                    $qtde =mysqli_num_rows($dataset); //verificar se ha registros
                    if($qtde == 0){
                        echo("Combinação de login/senha não foi encontrada!<br>");
                    }
                    $linhaBD=mysqli_fetch_assoc($dataset); //"encontrar" a senha 
                    $senhaBD=$linhaBD['senha'];//defini-la como senha do BD

                    if($senha == $senhaBD){
                        echo("Login correto :) <br>");
                       if(!session_start()){die("Impossível prosseguir...Erro ao iniciar a sessão :(");} 
                        echo("Acesse o menu principal <a href='menu.php'>Menu</a>");
                        $_SESSION['id'] = session_id();//utilizar a sessao para identificar o usuario []
                        $_SESSION['email']= $email; //inserindo valor na sessao
                    }else{
                        echo"Retorne para o <a href='login01.php'>Login</a> e tente novamente ";
                        $_SESSION=array();//zerando sessao = vetor vazio
                   }
                    
                    //session
                    $_SESSION['id'] = session_id();

                   //login           
                   //criando comando preparado 
                   $stmt = mysqli_prepare($conn,$sql);
                   if (!$stmt){
                        die("Impossivel preparar a consulta ao BD");
                    }
                    //vinculo com paramtro de entrada
                    $bind = mysqli_stmt_bind_param($stmt,"s",$email);
                    if (!$bind){
                        die("Impossivel vincular dados à consulta");
                    }
                    //executando o comando preparado
                    $exec = mysqli_stmt_execute($stmt);
                    if (!$exec){
                        die("Impossivel executar consulta");
                    }
                    //obter resultados da execucao do comando
                    $result = mysqli_stmt_bind_result($stmt,$nomeUsuario,$senha);
                    if (!$result){
                        die("Não foi possivel recuperar dados da consulta");
                    }
                    //relacionando o comando preparado com dados de retorno
                    $fetch = mysqli_stmt_fetch($stmt);
                    if (!$fetch){
                        die("Não conseguiu associar dados de retorno");
                    }
                    if ($fetch == null){
                        die("Essa combinação de login/senha não foi encontrada");
                    }
                   mysqli_stmt_close($stmt);
                 
                ?>
                
    </body>
</html>