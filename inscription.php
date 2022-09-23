<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>inscription</title>
</head>
<body>
            <div class="back-fleche-container">
                <a href="index.php"><img src="Assets/icons/md-arrow-round-back.svg" alt="" class="logo"></a>
            </div>
<div id="container">
            <!-- zone de connexion -->
            
            <form action="auth.php" method="POST">
                <h1>inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur"  >
                <label><b>E-mail</b></label>
                <input type="email" placeholder="Entrer e_mail" name="mail" >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" >
                <label><b>Confirmer mot de passe</b></label>
                <input type="password" placeholder="Confirmrer le mot de passe" name="confirmer_mot_de_passe" >

                <button type="submit" name='submit'>S'INSCRIRE</button> 
                
            </form>
        </div>

</body>
</html>