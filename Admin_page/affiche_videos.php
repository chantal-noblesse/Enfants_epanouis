<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="videos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
</head>
<body>
<div class="back-fleche-container">
        <a href="index.php"><img src="icons/md-arrow-round-back.svg" alt="" class="logo"></a>
    </div>
<table>
        <caption>Informations des vidéos</caption>
        <thead>
        <tr>
            <th>id</td>
            <th>titre</td>
            <th>contenu</td>
            <th>date_publication</td>
            <th>date_modification</td>
        </tr>
        </thead>
        <?php
    while($articles = $getArticles ->fetch()){

    
    ?>
        <tbody>
            <td><?php echo $articles['id'] ?></td>
            <td><?php echo $articles['titre'] ?></td>
            <td><?php echo $articles['contenu'] ?></td>
            <td><?php echo $articles['date_publication'] ?></td>
            <td><?php echo $articles['date_modification'] ?></td>
        </tbody>
        <?php
        }
        ?>
        
    </table>
</body>
</html>