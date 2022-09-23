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

if(isset($_POST['submit']))
{
    
  if(!empty($_POST['nom_utilisateur']) AND !empty($_POST['mot_de_passe'])){
    $nom_utilisateur= $_POST['nom_utilisateur'];
    $mot_de_passe=$_POST['mot_de_passe'];
    $getUsers=$db->prepare('SELECT * FROM utilisateurs WHERE nom_utilisateur=? AND mot_de_passe=?');
    $getUsers->execute(array($nom_utilisateur, $mot_de_passe));
    $bd_utilisateurs=$getUsers->fetch();
    if($getUsers->rowCount()>0){
        $_SESSION['nom_utilisateur']=$nom_utilisateur;
        $_SESSION['mot_de_passe']=$mot_de_passe;
        $_SESSION['id']=$bd_utilisateurs['id'];
        header('Location:index.php');
    }else{
      echo "
      <script type=\"text/javascript\"> alert('Vous ne vous êtes pas connecter; Inscrivez-vous!')</script>";;
    }
  }else{
    echo "veuillez remplir tous les champs";
  }
   
}                 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>connexion</title>
</head>
<body>
            <div class="back-fleche-container">
                <a href="index.php"><img src="Assets/icons/md-arrow-round-back.svg" alt="" class="logo"></a>
            </div>
<div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur" >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" >

                <button type="submit" name='submit'>SE CONNECTER</button>   
            </form>
        </div>
   
</body>
</html>