<?php

include('connect.php');

$name= $_POST['name'];
$difficulty= $_POST['difficulty'];
$distance= $_POST['distance'];
$duration=$_POST['duration'];
$height_difference=$_POST['height_difference'];
$idee=$_POST['idee'];
$id=$_POST['id'];

$req = $pdo->prepare(' UPDATE `hiking`
                             SET name = :name,
                                        `difficulty` = :difficulty,
                                         `distance` = :distance,
                                          `duration` = :duration,
                                           `height_difference` = :height_difference,
                                            `idee` = :idee
                                      WHERE `id` = :id');

$req->bindValue('name', $name, PDO::PARAM_STR);
$req->bindValue('difficulty', $difficulty, PDO::PARAM_STR);
$req->bindValue('distance',$distance,PDO::PARAM_INT);
$req->bindvalue('duration',$duration,PDO::PARAM_STR);
$req->bindvalue('height_difference',$height_difference,PDO::PARAM_INT);
$req->bindvalue('idee',$idee,PDO::PARAM_STR);
$req->bindvalue('id',$id,PDO::PARAM_INT);

$req->execute();

header("location: read.php");
?>



