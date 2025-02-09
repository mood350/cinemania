<?php
session_start();
$host = 'localhost';  // Adresse du serveur de base de données
$dbname = 'cinema';  // Nom de votre base de données
$username = 'root';  // Utilisateur de la base de données
$password = 'Prince@#2006';  // Mot de passe de l'utilisateur
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
include 'db.php';  // Inclure la connexion à la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Préparer la requête SQL pour vérifier les informations de l'administrateur
    $query = "SELECT * FROM Administrateur WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Vérifier si l'admin existe
    if ($stmt->rowCount() > 0) {
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier le mot de passe avec celui stocké dans la base de données
        if (password_verify($mot_de_passe, $admin['mot_de_passe'])) {
            // L'admin est authentifié, créer une session
            $_SESSION['logged_in'] = true;
            $_SESSION['role'] = 'admin';  // Rôle admin
            $_SESSION['admin_id'] = $admin['id'];  // ID de l'admin
            header('Location: /admin/dashboard.php');  // Redirige vers le tableau de bord admin
            exit();
        } else {
            $error_message = "Mot de passe incorrect!";
        }
    } else {
        $error_message = "Aucun administrateur trouvé avec cet email!";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
<div class="login-container">
    <h2>Connexion à l'administration</h2>

    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>
</div>
</body>
</html>
