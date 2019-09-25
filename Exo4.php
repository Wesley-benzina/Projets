<html>
<head>
    <meta charset="utf-8" />
    <title>TP N°1 Création</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="Exo4.css" />
</head>
<body>
<H1>Créer un utilisateur</H1><br /><br />

<form action="" method="POST">
    <label> Nom:</label> <input type="text" name ="nom" /><br /></div>
    <label> Prénom:</label> <input type="text" name ="prenom" /><br />
    <label> Email:</label>  <input type="text" name ="email" /><br />
    <input type="submit" value ="Créer" name="send" />
    <br />
    <a href="http://localhost/Projets/Exo4_bis.php"> Liste des users </a>
</form>


<?php

try {
    $link = new PDO('mysql:host=localhost;dbname=b3',
        'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
}
session_start ();
	if ( isset ( $_SESSION [ ' data ' ])) {
		$_SESSION [ ' data ' ] = [];
	}
	if (check ( $_POST )) {
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];


//var_dump($nom, $prenom, $email);
$sql = "INSERT INTO users ( nom, prenom, email)
VALUES ( '$nom', '$prenom', '$email')";

$stmt = $link->prepare($sql);
$stmt->execute();

	}

die();

?>
</body>
</html>
<?php
function check($post) {
    if (isset($post['send'])) {
        if (!empty($post['nom']) && !empty($post['prenom']) && !empty($post['email'])) {
            return true;
        }
        return false;
    }
    return false;
}
?>