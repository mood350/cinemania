<?php
$host = 'localhost';  // Adresse du serveur de base de données
$dbname = 'cinema';  // Nom de votre base de données
$username = 'root';  // Utilisateur de la base de données
$password = 'Prince@#2006';  // Mot de passe de l'utilisateur

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
