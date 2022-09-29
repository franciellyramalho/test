<?php 
    //toda page após login, precisa, este arquivo NAO É ALTERADO
    if (!session_start()){
        die("Impossivel prosseguir!! <br> Retorne para <a href='login01.php'>Login</a> e realize novamente o LOGIN");
    }
    //"id" pois foi o primeiro campo array obbtido no login02 { $_SESSION['id'] = session_id(); }
    if(!isset($_SESSION['id'])){ 
        die("Não foi possível continuar <br> Retorne para <a href='login01.php'>Login</a> e tente novamente");
    }                   
?>