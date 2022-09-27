<?php
session_start();
echo $_POST['titre'];


     
    if(!empty($_POST['titre']))
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
     
    $titre= $_POST['titre'];
    $sql = 'INSERT INTO `nos_programmes`(`titre`) VALUES (:titre)';

   

    $req = $db->prepare($sql);
    $req->bindvalue(':titre',$titre);
    $exec = $req->execute(array(":titre"=>$titre));

    if(!$exec){
      echo "un probleme est survenu, l'ajout n'a pas été faite!";
    }
    else{
      echo "
      <script type=\"text/javascript\"> alert('Articles bien poster')</script>";
      header("Location:affiche_programme.php");
    }
}
else {
    echo "veuillez complèter tous les champs...";
        
    }
    
?>