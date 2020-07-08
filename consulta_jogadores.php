<?php
    session_start();

    if(isset($_SESSION['SESS_ID'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/css/custom.css">

        <link rel="icon" href="./images/logo.ico">

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
            </div>
        </nav>

	
        <!--Login-->
        <section>
            <div class="container">
                <div class="row">
                    <form class="col-lg-4 col-md-6 col-sm-12 customform" action="./php/consulta.php" method="get">

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

        <!--Footer-->
        <?php require('./inc/footer.php')?>

        <script src="./assets/js/bootstrap.js"></script>
    </body>
</html>