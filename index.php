<?php
include 'nav.php';

$bdd = new PDO('mysql:host=localhost; dbname=Cinema; charset=utf8', 'root', 'Prince@#2006');
$film = $bdd->query("SELECT * FROM film");
$films = $film->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>

<div class="film-container">
    <?php foreach ($films as $sous_film) { ?>
        <div class="card" style="width: 18rem;">
            <img src="images/<?php echo $sous_film['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $sous_film['titre']; ?></h5>
                <p class="card-text"><?php echo $sous_film['synopsis']; ?></p>
                <a href="Film/film.php?id=<?php echo $sous_film['id']; ?>" class="btn btn-primary" role="button">En savoir plus</a>
            </div>
        </div>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
