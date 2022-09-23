<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajout_articles.css">
    <title>ajout_artiles</title>
</head>
<body>
            <div class="back-fleche-container">
                <a href="index.php"><img src="icons/md-arrow-round-back.svg" alt="" class="logo"></a>
            </div>
<div id="container">
            <!-- zone de connexion -->
            
            <form action="auth_ajout_articles.php" method="POST">
                <h3>Ajout des articles</h3>
                
                <label><b>Titre:</b></label>
                <input type="text" name="titre">
                <label><b>Contenu</b></label>
                <textarea name="contenu" id="" cols="50" rows="30"></textarea>
                <br>
                <button type="submit" name='submit'>Envoyer</button> 
                
            </form>
        </div>

</body>
</html>