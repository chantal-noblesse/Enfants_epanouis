<?php
session_start();
// connexion à la base de données
$db_username = 'root';
$db_password = 'root';

try
{
    $db = new PDO('mysql:host=localhost;dbname=enfants_epanouis;port=3307', $db_username, $db_password);
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
    <link rel="stylesheet" href="affiche_articles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articles</title>
</head>
<body>
    <div class="back-fleche-container">
        <a href="index.php"><img src="icons/md-arrow-round-back.svg" alt="" class="logo"></a>
    </div>
<table>
        <caption>Informations des articles</caption>
        <thead>
        <tr>
            <th>id</td>
            <th>titre</td>
            <th>contenu</td>
            <th>date_publication</td>
            <th>date_modification</td>
        </tr>
        </thead>
        <?php
    while($articles = $getArticles ->fetch()){

    
    ?>
        <tbody>
            <td><?php echo $articles['id'] ?></td>
            <td><?php echo $articles['titre'] ?></td>
            <td><?php echo $articles['contenu'] ?></td>
            <td><?php echo $articles['date_publication'] ?></td>
            <td><?php echo $articles['date_modification'] ?></td>
        </tbody>
        <?php
        }
        ?>
        
    </table> 
</body>
</html>