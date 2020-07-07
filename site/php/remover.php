<?php
	include('dbconnect.php');

	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	

	if(empty($nome) || empty($email) || empty($username) || empty($password)) {
		echo"Todos os campos devem ser preenchidos";
	}
	if(strlen($nome)>200 || strlen($email)>200 || strlen($username)>200 || strlen($password)>200) {
		echo"Nenhum campo pode ter mais que 200 caracters";
	}
	
 	$remover="DELETE FROM login WHERE email='$email' AND username='$username' AND nome='$nome' ";
 	$fazremover=(mysqli_query($dbConnect,$remover))  or die(msql_error());	
	echo "Remoção concluida! Pagina principal: <a href='../index.php'>login</a>";
	
?>






	


