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



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = " . $id;
    $stmt = $link->prepare($sql);
    $stmt->execute();

    
}
?>