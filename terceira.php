<?php

header('Content-Type: text/html; charset=utf-8');

session_start();

echo'Nome: '. $_SESSION['nome_usuario']."<br>";

echo'Email: '.$_SESSION['Email_usuario']."<br>";


echo'Senha: '.$_SESSION['Senha_usuario']."<br>";
echo'Senha: '.$_SESSION['Conf_senha']."<br>";



?>