<?php
    session_start();

    if(isset($_SESSION['SESS_ID'])){
        header("location: ../default.html");
    }
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/custom.css">

        <link rel="icon" href="../images/logo.ico">

        <title>CSCD São Clãudio - Consulta Jogadores</title>
    </head>
    <body>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <a class="navbar-brand text-white" href="./">
                <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                São Cláudio
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./#clube">Clube</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#escaloes">Escalões</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#seniores">Séniores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#presidencia">Presidência</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#contactos">Contactos</a>
                    </li>
                </ul>
                <div class="ml-auto">
                    <?php if(!isset($_SESSION['SESS_ID'])) {  ?>
                            Click here to <a class="text-white" href="login.php"> Login </a>
                    <?php } else ?>
                            Click here to <a class="text-white" href="logout.php"> Logout </a>
                </div>
            </div>
        </nav>

	
        <!--Login-->
        <section>
            <div class="container">
                <div class="row">
                    <form class="col-lg-4 col-md-6 col-sm-12 customform" action="../php/consulta.php" method="get">

                        <h2 class="mb-3">Ordenar</h2>
                        <p style="text-align: center;">Por favor, seleccione apenas um. Por default, escalão.</p>
                        <select name="ordenar" >
                            <option value='nenhum' "selected"></option>
                            <option value='nome'>Nome</option>
                            <option value='idade'>Idade</option>
                            <option value='posicao'>Posição</option>
                            <option value='escalao'>Escalão</option>
                        </select>

                        <button type="submit" class="btn btn-primary">Consultar jogador(es)</button>
                    </form>
                </div>
            </div>
        </section>

<?php
    include('dbconnect.php');
    
    //colocar a ordenação por defeito com o campo "Escalao"
    if(!isset($_GET['ordenar'])){ $ordenar="escalao"; }
    else{ $ordenar=$_GET['ordenar']; }

    // criar a consulta à base de dados
    $sql = "SELECT * FROM jogadores ORDER BY $ordernar";

    // criar a variável $consulta que guarda os resultados obtidos, ordenados por nome de forma ascendente
    $consulta = mysqli_query($dbConnect,$sql);

    $num_registos=mysqli_num_rows($consulta);
    
    // verificar se existem resultados e mostrá-los
    if ($num_registos!=0) {
        echo "Nº total de registos encontrados: ".$num_registos."<br>";
        echo '<br>';
        // construção da tabela de visualização de dados
        echo '<table width="650px">';
        echo '<tr>
        <th align=\"center\">   Email</th>
		<th align=\"center\">Username</th>

                <th align=\"center\">Nome</th>
                
                <th align=\"center\">Idade</th>
                <th align=\"center\">Posicao</th>
                <th align=\"center\">Escalao</th>
                </tr>' ;
        
        // percorrer o array e mostrar dados
        while ($mostrar = mysqli_fetch_array($consulta)) {
        
            $email = $mostrar["email"];
			$user = $mostrar["username"];

            $nome = $mostrar["nome"];
            $idade = $mostrar["idade"];
            $posicao = $mostrar["posicao"];
            $escalao = $mostrar["escalao"];

            echo "<tr>
            	<td align=\"center\">$email</td>
                <td align=\"center\">$user</td>

                <td align=\"center\">$nome</td>
                <td align=\"center\">$idade</td>
                <td align=\"center\">$posicao</td>
                <td align=\"center\">$escalao</td>
            </tr>";

        }
        echo "</table>";
    }
    // caso não haja registos, informa o utilizador
    else { echo ("A base de dados não contém registos"); }

    // libertar variável da memória 
    mysqli_free_result($consulta);
    echo '<br>';
    echo '<br>';

?>

 <!--Footer-->
        <?php require('../inc/footer.php')?>

        <script src="../assets/js/bootstrap.js"></script>
            </body>
</html>

