<?php
session_start();
// connexion à la base de données
$db_username = 'root';
$db_password = 'root';

try
{
    $db = new PDO('mysql:host=localhost;dbname=enfants_epanouis;port=3306', $db_username, $db_password);
    // définition du mode d'erreur de PDO sur exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion réussie";
    
}
catch(PDOException $e){
  echo "Erreur: " . $e->getMessage();
}
$getArticles=$db->query('SELECT * FROM articles');
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carnets.css">
    <link rel="stylesheet" href="Assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/d1e83cd76f.js" crossorigin="anonymous"></script>
    <title>carnets</title>
</head>
<body>
    
   <?php include_once "header.php"?>
    <main>
        <div class="background">
            <div class="text">Nos programmes</div>
        </div>
        <div class="background grid">
            <div class="text">Articles</div>
            <?php
    while($articles = $getArticles ->fetch()){

    
    ?>
       
          
            <div class="contenu">
                <h2> <?php echo $articles['titre'] ?></h2>
                
                <?php echo $articles['contenu'] ?>
            </div>
        <?php
        }
        ?>
        </div>
        <div class="background">
            <div class="text-container">
                <div class="text">Vidéos</div>
                <div class="titres">
                   
                </div>
            </div>
            
        </div>
        <div class="background">
            <div class="text">Contactez-nous</div>
        </div>
       
    </main>
    <button>Votre séance gratuite</button>
    <?php include_once "footer.php"?>
</body>