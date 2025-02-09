<?php
include 'nav.php';

try {
    $bdd = new PDO('mysql:host=localhost;dbname=Cinema;charset=utf8', 'root', 'Prince@#2006');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $titre = $_POST['titre'];
        $synopsis = $_POST['synopsis'];
        $categorie = $_POST['categorie'];
        $duree = $_POST['duree'];
        $date_sortie = $_POST['date_sortie'];

        $image = basename($_FILES['image']['name']);
        $destination = "../images/" . $image;

        // Vérifier les types d'image et la taille
        if (in_array(pathinfo($image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']) && $_FILES['image']['size'] <= 5 * 1024 * 1024) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                $stmt = $bdd->prepare("INSERT INTO Film (titre, synopsis, categorie, duree, date_sortie, image) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$titre, $synopsis, $categorie, $duree, $date_sortie, $image]);
                ?>
                <div class="alert alert-success" role="alert">
                    Film ajouté avec succès !
                </div>
                <?php
            } else {
                echo "Erreur lors de l'enregistrement de l'image.";
            }
        } else {
            echo "Erreur : Format ou taille de l'image invalide.";
        }
    } else {
        echo "Erreur : Aucun fichier téléchargé ou erreur d'upload.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
