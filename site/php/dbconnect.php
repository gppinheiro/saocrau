<?php
    $dbConnect = mysqli_connect('localhost', 'root', '', 'site');
    
    if(!$dbConnect){
        echo "<br>Erro: Nao foi possivel ligar à base de dados.";
		exit;
    }

    mysqli_set_charset($dbConnect,"utf8");
?>