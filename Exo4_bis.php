<html>
<head>
    <meta charset="utf-8" />
    <title>TP N°1 Liste</title>
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
$sql = "SELECT nom FROM users";

$stmt = $link->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();

?>

<html>
<head>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Liste des users</h1>
            <table border="2" width="100%">
                <tr>
                    <th>Nom</th>
                    <th width="50%">Action</th>
                </tr>
                <?php foreach ($result as $user) { ?>
                    <tr>
                        <td><?php echo $user['nom']; ?></td>
                        <td>
                            <a href="Exo4_delete.php">Supprimer un user</a>
                            ou
                            <a href="Exo4_edit.php">Editer un user</a>

                        </td>
                    </tr>
                <?php } ?>
            </table>
            <a href="Exo4.php">Ajouter un user</a>
        </div>
    </div>
</div>
</body>
</html>