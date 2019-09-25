<html>
<head>
    <meta charset="utf-8" />
    <title>TP N°1 Liste</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<H1>Liste des users</H1><br /><br />
<a href="http://localhost/Projets/Exo4.php"> Créer un users </a>
<?php

try {
    $link = new PDO('mysql:host=localhost;dbname=b3',
        'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
}
//var_dump($nom, $prenom, $email);
$sql = "SELECT nom FROM users";

$stmt = $link->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
print_r($result);

die();

?>


</body>
</html>