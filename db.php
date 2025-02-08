<?php
try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost; dbname=Cinema; charset=utf8', 'root', 'Prince@#2006');

    // Activer le mode d'erreur pour afficher les exceptions
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Connexion réussie à la base de données !';
} catch (Exception $e) {
    // En cas d'erreur, afficher un message
    die('Erreur : ' . $e->getMessage());
}
?>