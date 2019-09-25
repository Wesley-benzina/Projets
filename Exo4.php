<?php
$dsn = 'mysql: host=127.0.0.1;dbname=B3';
$user ='root';
$password='';

$bdd= new PDO($dsn,$user,$password);

$sql = "INSERT INTO Users (ID, Nom, Prénom ,Email)
VALUES (null, :Nom, :Prénom, :Email)";

$stmt = $link->prepare($sql);
$stmt->execute(array(
    "Nom" => 'test',
    "Prénom" => 'test2',
    "Email" => 'test2',
));
echo "passer";
?>

<html>
<head></head>
<body>
<form action="" method="POST">
    Nom: <input type="text" name ="a" /><br />
    Prénom: <input type="text" name ="b" /><br />
    Email: <input type="text" name ="c" /><br />
    <input type="submit" value ="ok" name="send" />


</form>

</body>
</html>