<?php
include 'nav.php';
$id = $_GET['id'];
try {
    $db = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'Prince@#2006');
    $query = $db->prepare('SELECT * FROM film WHERE id = :id');
    $query->execute(array(
        'id' => $id
    ));
    $film = $query->fetch();
    $film_titre = $film['titre'];

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $film_titre ?></title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>ok</h1>



</body>
</html>
