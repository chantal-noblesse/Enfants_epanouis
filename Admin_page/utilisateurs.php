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
$getUsers=$db->query('SELECT * FROM utilisateurs');
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="utilisateurs.css">
    <title>utilisateurs</title>
</head>
<body>
    <div class="back-fleche-container">
        <a href="index.php"><img src="icons/md-arrow-round-back.svg" alt="" class="logo"></a>
    </div>
    
    <table>
        <caption>Informations des utilisateurs</caption>
        <thead>
        <tr>
            <th>id</td>
            <th>Nom_utilisateur</td>
            <th>mail</td>
            <th>date_inscription</td>
        </tr>
        </thead>
        <?php
    while($utilisateur = $getUsers ->fetch()){

    
    ?>
        <tbody>
            <td><?php echo $utilisateur['id'] ?></td>
            <td><?php echo $utilisateur['nom_utilisateur'] ?></td>
            <td><?php echo $utilisateur['mail'] ?></td>
            <td><?php echo $utilisateur['date_inscription'] ?></td>
        </tbody>
        <?php
        }
        ?>
        
    </table>
</body>
</html>