<html>
<head>
    <meta charset="utf-8" />
    <title>TP N°1 delete</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<form action="" method="POST">
    <label> Nom:</label> <input type="text" name ="nom" /><br /></div>
    <label> Prénom:</label> <input type="text" name ="prenom" /><br />
    <label> Email:</label>  <input type="text" name ="email" /><br />
    <input type="submit" value ="Modifier" name="send" />
    <br />
    <a href="Exo4_bis.php">Afficher les users </a>
</form>
<?php

try {
    $link = new PDO('mysql:host=localhost;dbname=b3',
        'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
}



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];

    $sql = "UPDATE users SET `nom`='$nom',`prenom`='$prenom',`email`='$email' WHERE id = '$id'";
    $stmt = $link->prepare($sql);
    $stmt->execute();



}