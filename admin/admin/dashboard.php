<?php
session_start();

// Vérification que l'utilisateur est connecté et est un admin
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['role'] !== 'admin') {
    header('Location: /login.php');  // Redirige vers la page de connexion si non admin
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord admin</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
<div class="dashboard-container">
    <h1>Bienvenue sur le tableau de bord admin</h1>
    <p>Vous êtes connecté en tant qu'admin.</p>

    <a href="add_movie.php">Ajouter un film</a><br>
    <a href="manage_movies.php">Gérer les films</a><br>

    <!-- Ajoutez plus de liens pour l'admin ici -->

    <a href="logout.php">Déconnexion</a>
</div>
</body>
</html>
