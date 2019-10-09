<html>
<head>
    <meta charset="utf-8" />
    <title>TP N°1 delete</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<?php
include "Exo4.php";

session_start();

try {
    $link = new PDO('mysql:host=localhost;dbname=b3',
        'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
}
//var_dump($nom, $prenom, $email);

if (isset($_SESSION['id']))
{
    $id = $_SESSION['id'];

$sql = " DELETE FROM `users` WHERE id =  ". $id;

$stmt = $link->prepare($sql);
$stmt->execute();}

else{
    echo "Vous n'avez choisis de supprimer aucun visiteur !";
}

header('Location: Exo4.php');
?>
