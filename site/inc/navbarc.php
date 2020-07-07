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
                <a class="nav-link" href="../#clube">Clube</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../#escaloes">Escalões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=".../#seniores">Séniores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../#presidencia">Presidência</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../#contactos">Contactos</a>
            </li>
        </ul>
        <div class="ml-auto">

            <?php if(isset($_SESSION['SESS_ID'])) { ?>
                    Click here to <a class="text-white" href="../logout.php"> Logout </a>    
            <?php } else ?>
                    <a class="text-white" href="../login.php"> Login </a>

        </div>
    </div>
</nav>