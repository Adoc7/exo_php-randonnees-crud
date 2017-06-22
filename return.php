<?php
include("connect.php");

  $reponse = $pdo->query('SELECT * FROM hiking');
  $reponse1 = $reponse->fetchAll();
  // var_dump($reponse1);
  foreach ($reponse1 as $value) {
      echo '
      <p>Nom : '.$value->name.'</p>
      <p>Difficulté : '.$value->difficulty.'</p>
      <p>Distance : '.$value->distance.'</p>
      <p>Durée : '.$value->duration.'</p>
      <p>Ville : '.$value->height_difference'.</p>';
  }
?>
