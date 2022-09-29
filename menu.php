<?php 
    require("sess_start.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu principal</title>
    </head>
    <body>
        <h1>Menu</h1>
        <a href="cad.php">Cadastro</a><br>//entra no bd faz coluna adm e faz sis adm
        <a href="">LINK0</a><br>
        <a href="">LINK0</a><br>
        <a href="logout.php">SAIR</a><br>
        <?php
        echo("Usuario: ".$_SESSION['email']);
        ?>
    </body>
</html>