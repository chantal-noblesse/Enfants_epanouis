<?php
session_start();

        // $username = $_POST['username']; 
        // $email = $_POST['email']; 
        // $password = $_POST['a_password'];
        // $repeatpassword = $_POST['repeatpassword'];
        
    if(!empty($_POST['nom_utilisateur']) && !empty($_POST['mail']) && !empty( $_POST['mot_de_passe']) && !empty($_POST['confirmer_mot_de_passe']))
    {
     
    


    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'root';

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=enfants_epanouis;port=3306', $db_username, $db_password);
        // définition du mode d'erreur de PDO sur exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion réussie";
    }
    catch(PDOException $e){
      echo "Erreur: " . $e->getMessage();
    }
     
    $nom_utilisateur= $_POST['nom_utilisateur'];
    $mail=$_POST['mail'];
    $mot_de_passe=$_POST['mot_de_passe'];
    $confirmer_mot_de_passe=$_POST['confirmer_mot_de_passe'];


    $sql = "INSERT INTO `utilisateurs`(`nom_utilisateur`, `mail`, `mot_de_passe`, `confirmer_mot_de_passe`) VALUES (:nom_utilisateur,:mail, :mot_de_passe, :confirmer_mot_de_passe)";

    $req = $db->prepare($sql);
    $exec = $req->execute(array(":nom_utilisateur"=>$nom_utilisateur,":mail"=>$mail,":mot_de_passe"=>$mot_de_passe,":confirmer_mot_de_passe"=>$confirmer_mot_de_passe));





    $inserer_utilisateurs= $db->prepare('INSERT INTO utilisateurs ( mail, mot_de_passe, confirmer_mot_de_passe) VALUES ("pao", "djre", "lkl", "lkl")');
    $inserer_utilisateurs= $db->prepare('INSERT INTO utilisateurs(nom_utilisateur, mail, mot_de_passe , confirmer_mot_de_passe)VALUES(:nom_utilisateur, :mail, :mot_de_passe, :confirmer_mot_de_passe)');
    $inserer_utilisateurs->bindvalue(':nom_utilisateur',$nom_utilisateur);
    $inserer_utilisateurs->bindvalue(':mail',$mail);
    $inserer_utilisateurs->bindvalue(':mot_de_passe',$mot_de_passe);
    $inserer_utilisateurs->bindvalue(':confirmer_mot_de_passe',$confirmer_mot_de_passe);

    $result = $inserer_utilisateurs->execute();
    if(!$result){
      echo "un probleme est survenu, l'inscription n'a pas été faite!";
    }
    else{
      echo "
      <script type=\"text/javascript\"> alert('vous êtes bien inscrit')</script>";
      header("Location:index.php");
    }
}
else {
    echo "veuillez complèter tous les champs...";
        
    }
    // if(!($_POST['mot_de_passe']==$_POST['confirmer_mot_de_passe'])) 
    //   {
    //     echo "Les deux mots de passes doivent être identiques";
    //   } 

    
    

  
?>