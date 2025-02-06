<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="identification.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/le1.css">
    <title>Identification</title>
</head>
<body>
    <?php include 'nav.php'?>
    <h3>Identification</h3>

    <div class="connexion">
        <form action="traiter_identification.php" method = "POST" class="form">
            <label for="nom" id="nom" >Nom :</label>
            <input type="text" required class="form-label" for="nom" id="nom" name = "nom" ><br>
            <label for="prenoms" class ="form-label" for = "prenoms" >Prenom :</label>
            <input type="text" required id = "prenoms"  name ="prenoms"><br>
            <label for="email" class="form-label" for = "email">Email :</label>
            <input type="email" required id ="email" name="email"><br>
            <label for="password" class="form-label" for ="password" >Mot de passe :</label>
            <input type="password" required id= "password" name="password"><br>
            <label for="password" class="form-label" for="password_" >Confirmer mot de passe :</label>
            <input type="password" required id="password_" name="password_"><br>
            <button type="button" class="btn btn-outline-primary">Soumettre</button>
        </form>
    </div>

</body>
</html>