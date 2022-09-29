<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <script>
            //teste de verificaçã dos campos
            function valida(){
                msg="";
                if(document.frm_login.cpf.value == ""){
                    msg += "Preencha o Cpf para realizar o Login!\n";
                }
                if(document.frm_login.senha.value == ""){
                    msg += "Preencha a senha para realizar o Login!";
                }
                if(!msg == ""){
                    alert(msg);
                    return false;
                }else{
                    return true;//envento onsubmit
                }
            }
        </script>
    </head>
    <body>
        <h1>Login</h1>
        <a href="login01.php">Login</a> <br>
        <br><br>
        <form  name="frm_login" method="POST" action="login02.php" onsubmit="return valida()">
            Cpf: <input type="cpf" name="cpf" maxlength="60"><br>
            SENHA: <input type="password" name="senha" maxlength="225">
            <input type="submit" value="ENTRAR">
        </form>
    </body>
</html>