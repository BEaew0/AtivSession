<?php
header('Content-Type: text/html; charset=utf-8');


if(isset($_REQUEST['valor']) and ($_REQUEST['valor']=='enviar')){

session_start();


    $_SESSION['Senha_usuario']= $_POST['Senha'];
    $_SESSION['Conf_senha']= $_POST['ConfSenha'];

    header('Location: terceira.php'); //para redicionamento
    
}

else{
    


?>

<form action="outrasessao.php?valor=enviar" method="post">
        <label for="Senha">Senha</label>
        <input type="text" name="Senha" maxlength="40"><br>

        <label for="ConfSenha">Confirma23r Senha</label>
        <input type="text" name="ConfSenha" maxlength="10"><br>

        <input type="submit" name="enviar" value="Enviar">

</form>
<?php
}
?>