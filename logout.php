<?php
    require("sess_start.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Sair do sistema</title>
    </head>
    <body>
        <div class="doc">
                <?php
                    $_SESSION = array();
                    session_destroy();
                    echo "<script> alert('Sessão encerrada!'); window.location.replace('index.php'); </script>";       
                ?>        
        </div>    
    </body>
</html>
