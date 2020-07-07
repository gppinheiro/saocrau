<?php
	include('dbconnect.php');

	//if(isset($_post['submit'])) {

	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];

	$query="SELECT * FROM login WHERE email='$email' Or username='$username'";
	

	$jaquery=mysqli_query($dbConnect, $query);
	

	if(empty($nome) || empty($email) || empty($username) || empty($_Post["password"])) {
		echo"Todos os campos devem ser preenchidos";
	}
	if(strlen($nome)>200 || strlen($email)>200 || strlen($username)>200 || strlen($password)>200) {
		echo"Nenhum campo pode ter mais que 200 caracters";
	}
	if(mysqli_num_rows($jaquery)!==0){
	echo "Esse eamil ja esta a ser ultilizado<br>";
	
 	} else {
 	$insere="INSERT login (email, password, nome, username)
		VALUES ('$email','$password','$nome','$username')";
		
	
 	$fazinsere=(mysqli_query($dbConnect,$insere))  or die(msql_error());
		

				
	echo"O seu resgisto foi concluido com sucesso pode agora fazer <a href='../login.php'>login</a>";
}
//}
?>






	


