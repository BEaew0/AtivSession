<?php

header('Content-Type: text/html; charset=utf-8');

if(isset($_REQUEST['valor']) and ($_REQUEST['valor']=='enviar')){
    session_start();
    $_SESSION['nome_usuario']= $_POST['nome'];
    $_SESSION['Email_usuario']= $_POST['Email'];

    echo "<a href='outrasessao.php'>Ir para outra sessão</a>";
    
}

else{

?>

    <form action="ativsessao.php?valor=enviar" method="post">
        <label for="nome">Nome de Usuário</label>
        <input type="text" name="nome" maxlength="40"><br>

        <label for="Email">Email</label>
        <input type="text" name="Email" maxlength="10"><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>
<?php
}
?>

