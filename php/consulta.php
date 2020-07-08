<?php
    include('dbconnect.php');
    
    //colocar a ordenação por defeito com o campo "Escalao"
    if(!isset($_GET['ordenar'])){ $ordenar="escalao"; }
    else{ $ordenar=$_GET['ordenar']; }

    // criar a consulta à base de dados
    $sql = "SELECT * FROM jogadores ORDER BY $ordenar";

    // criar a variável $consulta que guarda os resultados obtidos, ordenados por nome de forma ascendente
    $consulta = mysqli_query($dbConnect,$sql);

    $num_registos=mysqli_num_rows($consulta);
    
    // verificar se existem resultados e mostrá-los
    if ($num_registos!=0) {
        echo "Nº total de registos encontrados: ".$num_registos."<br>";
        // construção da tabela de visualização de dados
        echo '<table width="650px">';
        echo '<tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Posicao</th>
                <th>Escalao</th>
                </tr>' ;
        
        // percorrer o array e mostrar dados
        while ($mostrar = mysqli_fetch_array($consulta)) {
        
            $nome = $mostrar["nome"];
            $idade = $mostrar["idade"];
            $posicao = $mostrar["posicao"];
            $escalao = $mostrar["escalao"];

            echo "<tr>
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
?>