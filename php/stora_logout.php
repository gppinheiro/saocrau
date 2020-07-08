<?php
//Start session
session_start();

//Desalocar as variaveis guardadas na sessão
unset($_SESSION['SESS_EMAIL']);
unset($_SESSION['SESS_NOME']);
unset($_SESSION['SESS_Aluno']);
unset($_SESSION['SESS_User']);
unset($_SESSION['SESS_Enc']);

header("location: ../default.html");

?>