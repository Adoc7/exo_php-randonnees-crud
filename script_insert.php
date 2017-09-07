<?php

include("connect.php");

$name = $_POST['name'];
$difficulty = $_POST['difficulty'];
$distance = $_POST['distance'];
$duration = $_POST['duration'];
$height_difference = $_POST['height_difference'];
$idee = $_POST['idee'];

//var_dump($name,$difficulty,$distance,$duration,$height_difference,$idee);
// var_dump($height_difference);
/// J'appelle la table où est hiking
$req = $pdo->prepare("INSERT INTO hiking (name, difficulty,  distance, duration, height_difference, idee)
VALUES (:name, :difficulty, :distance, :duration, :height_difference, :idee)");

$req->execute(array(
    'name' => $name,
    'difficulty' => $difficulty,
    'distance' => (int)$distance,
    'duration' => (int)$duration,
    'height_difference' => (int)$height_difference,
    'idee' => $idee

  ));

header("Location: read.php");
// print_r($pdo->errorInfo());

  ?>
