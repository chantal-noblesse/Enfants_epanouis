// <?php
// session_start();
// if(!$SESSION['mot_de_passe']);
// header('Location: connexion_admin.php');
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_page</title>
</head>

<body>
    
    <header>
        <div class="menu">
            <div class="header-img-container">
                <div class="background">
                    <div class="Title-container">
                        <h1>ESPACE ADMIN DE LA PAGE ENFANTS_EPANOUIS</h1>
                    </div>
                    <nav>
                        <ul>
                            <li id="utilisateurs"><a href="utilisateurs.php">AFFICHER LES UTILISATEURS</a></li>
                            <li id="articles"><a href="">LES ARTICLES</a>
                             <ul class="sous_menu">
                                <li id="afficher"><a href="affiche_articles.php">AFFICHER LES ARTICLES</a></li>
                                <li id="ajouter"><a href="ajout_articles.php">AJOUTER DES ARTICLES</a></li>
                             </ul>
                            </li>
                            
                            <li id="services"><a href="#">LES VIDEOS</a>
                                <ul class="sous_menu">
                                    <li id="afficher"><a href="#">AFFICHER LES VIDEOS</a></li>
                                    <li id="ajouter"><a href="#">AJOUTER DES VIDEOS</a></li>
                                </ul>
                            </li>
                            <li id="utilisateurs"><a href="#">LES PROGRAMMES</a>
                            <ul class="sous_menu">
                                <li id="afficher"><a href="#">AFFICHER LES PROGRAMMES</a></li>
                                <li id="ajouter"><a href="#">MISE A JOUR DES PROGRAMMES</a></li>
                            </ul>
                            </li>
                            <li class="deconnexion"><a href="deconnexion.php">DECONNECTION</a></li>
                        </ul>
                    </nav>
                   
                </div>
            </div>
        </div>
    </header>
</body>

</html>