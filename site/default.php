<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/css/custom.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="icon" href="./images/logo.ico">

        <title>CSCD São Cláudio</title>
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

                    <?php if(!isset($_SESSION['SESS_USER'])) {?>
                            <a class="text-white" href="logout.php"> Logout </a>
                    <?php } ?>
                </div>
            </div>
        </nav>

        <!--Banner-->
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <img src="./images/logo.png" height="150" width="150">
                <h1 class="display-4">Centro Social, Cultural Desportivo São Claúdio</h1>
            </div>
        </div>

        <!--Clube-->
        <section class="p-5" id="clube">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>O Clube</h2>
                        <p style="text-align: justify;">Centro Social Cutural e Desportivo São Cláudio foi fundado a 28 de Agosto de 1984, é um clube de aldeia mas com ambições grandes e sonhos de chegar um dia a patamares profissionais.A modalidade do clube é futebol 11 e futebol 7, tem 7 escalões, não tirando mérito aos outros escalões mas este ultimo ano o seu principal escalão foi os seniores. O seu campo novo com piso sintético foi inaugurado no dia 10 de Novembro de 2018 pelo o presidente da câmara de Vila Nova De Famalicão , DR.Paulo Cunha. O Centro Social Cutural e Desportivo São Cláudio tem as portas abertas para todos os atletas que queiram representar o clube. </p>
                    </div>
                </div>
            </div>
        </section>

        <!--Escalões-->
        <section class="p-5 bg-light" id="escaloes">
            <div class="container">
                <div class="row">
                    <div class="w-100 text-center mb-5">
                        <h2>Escalões</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia traquinas">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Traquinas</a></h5>
                                <p class="card-text">Classificação:-º</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia benjamins">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Benjamins</a></h5>
                                <p class="card-text">Classificação:-º</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia infantis">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Infantis</a></h5>
                                <p class="card-text">Classificação:7º</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia iniciados">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Iniciados</a></h5>
                                <p class="card-text">Classificação:9º</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia juvenis">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Juvenis</a></h5>
                                <p class="card-text">Classificação:12º</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia juniores">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Juniores</a></h5>
                                <p class="card-text">Classificação:11º</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Séniores-->
        <section class="p-5" id="seniores">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>Séniores</h2>
                        <p style="text-align: justify;"> 10 anos depois da última presença na Af braga, os seniores voltaram a competir no futebol federado,tem como treinadores Abel Silva e Fernado Araújo,contando ainda com cláudio Frutuoso como diretor de equipa. Centro Social Cutural e Desportivo São Cláudio têm com projeto subida a 3 anos , sendo que o ano 0(terminado recentemente pela pandemia que vivemos, Covid19) não correu da melhor maneira aos homens de São Cláudio,ocupando este momento a última posição na tabela classificativa. Equipa constituida pelos <a href="consulta_jogadores.php">jogadores</a>: </p>
                    </div>
                </div>
                <div class="row">
                    <figure class="figure m-auto">
                        <img src="./images/seniores.jpg" class="figure-img img-fluid rounded" alt="Fotografia seniores" style="max-height:450px!important">
                    </figure>
                </div>
            </div>
        </section>

        <!--Presidência-->
        <section class="bg-light p-5" id="presidencia">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>Presidência</h2>
                        <p style="text-align: justify;">A presidência do clube no ultimo triénio, teve uma troca de presidente na qual José Carlos Pereira Abreu foi nomeado internamnete para presidente. Atual presidência é concluir as obras de reabilitação do complexo desportivo com a implementação do relvado sintético, inaugurado no dia 10 de Novembro de 2018 pelo o presidente da câmara de Vila Nova De Famalicão , DR.Paulo Cunha. </p>
                    </div>
                </div>
            </div>
        </section>

        <!--Fotografias-->
        <section class="p-5" id="fotografias">
            <div class="container">
                <div class="row">
                    <div class="w-100 text-center mb-5">
                        <h2>Fotografias</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <figure class="figure">
                            <img src="./images/campo.jpg" class="figure-img img-fluid rounded" alt="...">
                        </figure>
                    </div>
                    <div class="col-md-3">
                        <figure class="figure">
                            <img src="./images/inaugurado.jpg" class="figure-img img-fluid rounded" alt="...">
                        </figure>
                    </div>
                    <div class="col-md-3">
                        <figure class="figure">
                            <img src="./images/bandeira.jpg" class="figure-img img-fluid rounded" alt="...">
                        </figure>
                    </div>
                    <div class="col-md-3">
                        <figure class="figure">
                            <img src="./images/campo2.jpg" class="figure-img img-fluid rounded" alt="...">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <!--Contactos-->
        <section class="bg-danger text-white text-center p-4" id="contactos">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Morada</h5>
                        <p>Rua de São Cláudio, 2472 <br/>4760-052 - São Tiago de Antas <br/>Vila Nova de Famalicão<br/></p>
                    </div>
                    <div class="col-md-4">
                        <h5>Contactos</h5>
                        <p>E-mail:<a class="text-white" href="mailto:cscd.saoclaudio@hotmail.com"> <span>cscd.saoclaudio@hotmail.com</span></a></p>
                        <p>Telemóvel: <a class="text-white" href="tel:+351919490229"> <span>919 490 229</span></a></p>
                    </div>
                    <div class="col-md-4" id="social">
                        <h5>Redes Sociais</h5>
                        <a class="text-white" href="https://pt-pt.facebook.com/sclaudioantas"><span class="fa fa-facebook"></span></a>
                        <a class="text-white" href="https://www.instagram.com/saoclaudio/"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </section>

        <!--Footer-->
        <?php require('./inc/footer.php')?>

        <script src="./assets/js/bootstrap.js"></script>
    </body>
</html>

