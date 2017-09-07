
<?php
include("connect.php");
$id = $_POST["id"];
$req = $pdo->prepare('DELETE FROM hiking WHERE id= ?');
$req->execute(array($_POST['id']));
header("location: read.php");
?>









