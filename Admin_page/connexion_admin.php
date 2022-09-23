<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mot_de_passe'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mot_de_passe']);
        
        if($pseudo_saisi = $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mot_de_passe'] = $mdp_saisi;
            header('Location: index.php');
        }else{
            echo "Votre mot de passe ou pseudo est incorrect";
        }
    }else{
        echo "Veuillez remplir tous les champs....";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion_admin</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="pseudo" id="" placeholder="pseudo">
        <input type="password" name="mot_de_passe" id="" placeholder="Mot de passe">
        <input type="submit" name="valider">
    </form>
</body>
</html>