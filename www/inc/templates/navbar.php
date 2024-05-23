<link rel="stylesheet" href="style.css">

<nav class="navbar fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="/index.php"><img src="./public/images/logo.jpg" alt="Logo" ></a> 
        </div>
        <a class="navbar-brand" href="/index.php"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/kdrama.php">Kdrama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/kpop.php">Kpop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Reaction.php">Reaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Photos.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/contact.php">Contact</a>
                </li>
                
                <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/inscription.php">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/connexion.php">se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/connexion.php?action=deconnexion">se déconnecter</a>
          </li>
                            
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
