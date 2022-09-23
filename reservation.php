<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservation.css">
    <title>réservation</title>
</head>
<body>
<div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="POST">
                <h1>Résevation</h1>
                <p>Parce que vos poupons sont important pour nous,un accueil exceptionnel vous est réservé.
Soyez  rassurer</p>
                
                <input type="text" placeholder="Votre nom" name="nom_utilisateur"  >
                <input type="email" placeholder="Entrer e_mail valide" name="mail" >
                <textarea name="textarea" id="" cols="30" rows="10"placeholder="Entrez votre message"></textarea>
                <div class="checkbox">
                <input type="checkbox">
                <div>J'accepte les <a href="#">conditions de nos services</a></div>
                </div>
                <button type="submit" name='submit'>SOUMETTRE</button> 
                
            </form>
        </div>

</body>
</html>