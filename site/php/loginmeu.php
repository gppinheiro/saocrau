<?php	
	session_start();
	// Ligar e escolher a BD
    include('./dbconnect.php');
	
	$user = $_POST['email'];
	$pass = $_POST['password'];
	//Consulta a BD para verificar se existe o par Username e Password
	$qry="select * from login where email='$user' AND password='$pass'";
	$resultado=mysqli_query($dbConnect, $qry) or die(mysql_error());	
	if($resultado) {
			if(mysqli_num_rows($resultado) == 1) {
			//Login foi efetuado com sucesso
			//Regeneracao da sessao para prevenir ataques
			session_regenerate_id();
			$dados = mysqli_fetch_assoc($resultado);
			//grava os dados da sessao
			$_SESSION['SESS_User'] = $dados['username'];
			session_write_close();
			//Redireciona o utilizador para outra pagina
			echo "<script type='text/javascript'> window.location.href='../default.php';</script>"; 
			exit();
		}else { 
			//Login falhou 
			echo "<script type='text/javascript'> alert('Username ou Password incorretos!'); window.location.href='login.php'</script>";
			exit();
		}
	}else {
		die("A consulta a BD falhou");		
	}
?>
		
