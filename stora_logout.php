<?php
//Start session
session_start();

//Desalocar as variaveis guardadas na sessão
unset($_SESSION['SESS_EMAIL']);
unset($_SESSION['SESS_NOME']);
unset($_SESSION['SESS_ESCALAO']);
unset($_SESSION['SESS_USER']);
unset($_SESSION['SESS_POSICAO']);
unset($_SESSION['SESS_IDADE']);
header("location:default.html");

?>