<?php
	include('dbconnect.php');

	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	if(empty($nome) || empty($email) || empty($username) || empty($password)) {
		echo"Todos os campos devem ser preenchidos";
	}
	elseif(strlen($nome)>200 || strlen($email)>200 || strlen($username)>200 || strlen($password)>200) {
		echo"Nenhum campo pode ter mais que 200 caracters";
	}
	else {
 		$alterar="UPDATE login SET email='$email',password='$password',username='$username' WHERE nome='$nome'";
		$fazalterar=(mysqli_query($dbConnect,$alterar))  or die(msql_error());		
		echo"Os seus dados foram alterados com sucesso pode agora fazer <a href='../login.php'>login</a>";
	}
?>
