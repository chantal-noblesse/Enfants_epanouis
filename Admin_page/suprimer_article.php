<?php
session_start();
// connexion à la base de données
$db_username = 'root';
$db_password = 'root';
$getId =$_GET['id'];

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
if(isset($_GET['id']) AND !empty(['id'])){
    $getId =$_GET['id'];
    // 
    // $getArticles = $db->prepare('SELECT * FROM articles WHERE id = ?');
    var_dump();
    // $pastId = $getArticles->execute(array($getId));
        // if($getArticles->rowCount() >0){
         
            $req = $db->prepare("DELETE FROM articles WHERE id = :user_id");
            $req->bindParam(':user_id', $getId, PDO::PARAM_INT);
            $req->execute();
            echo 'Données supprimées';
      
      
        //     $supprim = $db->prepare('DELETE FROM articles WHERE id = :user_id');
        // $supprim->bindParam(':user_id', $getId);
        // $suprim->execute();
        //    echo $getId;
        header('location: affiche_articles.php');
        // echo 'hello!';
        // }else{
        //     echo "goodbye";
        // }
   
}

    
    
?>