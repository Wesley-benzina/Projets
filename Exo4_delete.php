<html>
<head>
    <meta charset="utf-8" />
    <title>TP N°1 delete</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<?php

try {
    $link = new PDO('mysql:host=localhost;dbname=b3',
        'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
}
//var_dump($nom, $prenom, $email);
$sql = " DELETE FROM `users` WHERE `users`.`id` = 53 ";

$stmt = $link->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();

?>
