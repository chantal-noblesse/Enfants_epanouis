<?php
session_start();
echo $_POST['titre'];
echo $_POST['contenu'];

     
    if(!empty($_POST['titre']) && !empty($_POST['contenu']))
    {
     
    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'root';

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=enfants_epanouis;port=3307', $db_username, $db_password);
        // définition du mode d'erreur de PDO sur exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion réussie";
    }
    catch(PDOException $e){
      echo "Erreur: " . $e->getMessage();
    }
     
    $titre= $_POST['titre'];
    $contenu=$_POST['contenu'];
    $sql = 'INSERT INTO `articles`(`titre`, `contenu`) VALUES (:titre,:contenu)';

   

    $req = $db->prepare($sql);
    $req->bindvalue(':titre',$titre);
    $req->bindvalue(':contenu',$contenu);
    $exec = $req->execute(array(":titre"=>$titre,":contenu"=>$contenu));

    if(!$exec){
      echo "un probleme est survenu, l'ajout n'a pas été faite!";
    }
    else{
      echo "
      <script type=\"text/javascript\"> alert('Articles bien poster')</script>";
      header("Location:affiche_articles.php");
    }
}
else {
    echo "veuillez complèter tous les champs...";
        
    }
    
?>