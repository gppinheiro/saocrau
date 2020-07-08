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
        S<span lang="pt">�O</span> C<span lang="pt">L�UDIO</span>
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
                <a class="nav-link" href="./#escaloes">Esca<span lang="pt">l�es</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./#seniores">S<span lang="pt">eni</span>ores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./#presidencia">Presid<span lang="pt">�ncia</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./#contactos">Contactos</a>
            </li>
        </ul>
        <div class="ml-auto">
            <?php if(isset($_SESSION['SESS_ID'])) { ?>
                    Click here to <a class="text-white" href="register.php"> Criar Conta </a>    
            <?php } else ?>
                    <a class="text-white" href="login.php"> Login </a>
        </div>
    </div>
</nav>

        <!--Banner-->
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <img src="./images/logo.png" height="150" width="150">
                <h1 class="display-4">Centro Social, Cultural Desportivo S�<span lang="pt">O</span> Cl<span lang="pt">�ud</span>io</h1>
            </div>
        </div>

        <!--Clube-->
        <section class="p-5" id="clube">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>O Clube</h2>
                        <p style="text-align: justify;">Centro Social Cutural e Desportivo S<span lang="pt">�o</span> Cl<span lang="pt">�udio</span> 
						foi fundado a 28 de Agosto de 1984</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Escal�es-->
        <section class="p-5 bg-light" id="escaloes">
            <div class="container">
                <div class="row">
                    <div class="w-100 text-center mb-5">
                        <h2>Escal<span lang="pt">�es</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia traquinas">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Traquinas</a></h5>
                                <p class="card-text">Classifica<span lang="pt">��o</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia benjamins">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Benjamins</a></h5>
                                <p class="card-text">Classifica<span lang="pt">��o</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia infantis">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Infantis</a></h5>
                                <p class="card-text">Classifica��es:7Âº</p>
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
                                <p class="card-text">Classifica��es:></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia juvenis">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Juvenis</a></h5>
                                <p class="card-text">Classificaca��es:></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./images/campo.jpg" class="card-img-top" alt="Fotografia juniores">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark" href="consulta_jogadores.php">Juniores</a></h5>
                                <p class="card-text">ClassificaÃ§Ã£o:11Âº</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--SÃ©niores-->
        <section class="p-5" id="seniores">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>SÃ©niores</h2>
                        <p style="text-align: justify;"> 10 anos depois da Ãºltima presenÃ§a na Af braga, os seniores voltaram a competir no futebol federado,tem como treinadores Abel Silva e Fernado AraÃºjo,contando ainda com clÃ¡udio Frutuoso como diretor de equipa. Centro Social Cutural e Desportivo SÃ£o ClÃ¡udio tÃªm com projeto subida a 3 anos , sendo que o ano 0(terminado recentemente pela pandemia que vivemos, Covid19) nÃ£o correu da melhor maneira aos homens de SÃ£o ClÃ¡udio,ocupando este momento a Ãºltima posiÃ§Ã£o na tabela classificativa. Equipa constituida pelos <a href="consulta_jogadores.php">jogadores</a>: </p>
                    </div>
                </div>
                <div class="row">
                    <figure class="figure m-auto">
                        <img src="./images/seniores.jpg" class="figure-img img-fluid rounded" alt="Fotografia seniores" style="max-height:450px!important">
                    </figure>
                </div>
            </div>
        </section>

        <!--PresidÃªncia-->
        <section class="bg-light p-5" id="presidencia">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>PresidÃªncia</h2>
                        <p style="text-align: justify;">A presidÃªncia do clube no ultimo triÃ©nio, teve uma troca de presidente na qual JosÃ© Carlos Pereira Abreu foi nomeado internamnete para presidente. Atual presidÃªncia Ã© concluir as obras de reabilitaÃ§Ã£o do complexo desportivo com a implementaÃ§Ã£o do relvado sintÃ©tico, inaugurado no dia 10 de Novembro de 2018 pelo o presidente da cÃ¢mara de Vila Nova De FamalicÃ£o , DR.Paulo Cunha. </p>
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
                        <p>Rua de SÃ£o ClÃ¡udio, 2472 <br/>4760-052 - SÃ£o Tiago de Antas <br/>Vila Nova de FamalicÃ£o<br/></p>
                    </div>
                    <div class="col-md-4">
                        <h5>Contactos</h5>
                        <p>E-mail:<a class="text-white" href="mailto:cscd.saoclaudio@hotmail.com"> <span>cscd.saoclaudio@hotmail.com</span></a></p>
                        <p>TelemÃ³vel: <a class="text-white" href="tel:+351919490229"> <span>919 490 229</span></a></p>
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
