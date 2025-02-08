<?php include 'nav.php';
include "db.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification</title>
</head>
<body>
    <h3>Enregistrement</h3>

    <div class="connexion">
        <form action="traiter_identification.php" method = "POST" class="form">
            <label for="nom" id="nom" >Nom :</label>
            <input type="text" required class="form-label" for="nom" id="nom" name = "nom" ><br>
            <label for="prenoms" class ="form-label" for = "prenoms" >Prénoms :</label>
            <input type="text" required id = "prenoms"  name ="prenoms"><br>
            <label for="email" class="form-label" for = "email">Votre Email :</label>
            <input type="email" required id ="email" name="email" placeholder="Email"><br>
            <label for="password" class="form-label" for ="password" >Mot de passe :</label>
            <input type="password" required id= "password" name="password"><br>
            <label for="password" class="form-label" for="password_" >Confirmer le mot de passe :</label>
            <input type="password" required id="password_" name="password_"><br>
            <button type="button" class="btn btn-outline-primary">Soumettre</button>
            <p>Se connecter en tant qu'<a href="">admin</a></p>
        </form>
    </div>


</body>
</html>