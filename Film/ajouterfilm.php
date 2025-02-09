<?php include '../db.php';
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/le1.css">
    <link rel="stylesheet" href="film.css">
    <title>Ajouter un film</title>
</head>
<body>
<h2>Ajouterfilm</h2>
    <div class="film">
        <form method="POST" action="traiter_ajout_film.php" class="form" enctype="multipart/form-data">
            <label for="titre" id="titre">Nom du film</label>
            <input type="text" name="titre" class="form-label" id="titre" placeholder="Titre du film" required><br>
            <label for="synopsis" id="synopsis">Description</label>
            <input type="text" name="synopsis" id="synopsis" class="form-label"  placeholder="Description" required><br>
            <label for="categorie" id="categorie">Categorie</label>
            <input type="text" name="categorie" id="categorie" class="form-label" placeholder="Catégorie" required><br>
            <label for="duree" id="duree">Durée</label>
            <input type="time" name="duree"  id = "duree" placeholder="Durée du film" required><br>
            <label for="date_sortie" id="date_sortie">Date de sortie</label>
            <input type="date" name="date_sortie" id="date_sortie" required><br>
            <label for="image">Image du film :</label>
            <input type="file" name="image" id="image"  required><br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Ajouter un film</button>
            </div>
        </form>
    </div>
</body>
</html>