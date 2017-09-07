<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>Modifier une randonnée</title>-->
<!--    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">-->
<!--    <script-->
<!--        src="http://code.jquery.com/jquery-3.2.1.js"-->
<!--        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="-->
<!--        crossorigin="anonymous">-->
<!---->
<!--    </script>-->
<!--</head>-->
<!--<body class="img-background">-->
<!--<section>-->
<!---->
<!---->
<!---->
<!--    <h1>Modifier</h1>-->
<!--    <div class="liens">-->
<!--        <a href="read.php" id="retour">Liste des données</a>-->
<!--    </div>-->
<!--    <form action="update.php" method="post">-->
<!--        <div>-->
<!--            <label for="name">Name</label>-->
<!--            <input class="entree_donnee" type="text" name="name" value="">-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="difficulty">Difficulté</label>-->
<!--            <select name="difficulty">-->
<!--                <option value="tres facile">Très facile</option>-->
<!--                <option value="facile">Facile</option>-->
<!--                <option value="moyen">Moyen</option>-->
<!--                <option value="difficile">Difficile</option>-->
<!--                <option value="tres difficile">Très difficile</option>-->
<!--            </select>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="distance">Distance</label>-->
<!--            <input class="entree_donnee" type="text" name="distance" value="">-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="duration">Durée</label>-->
<!--            <input class="entree_donnee" type="time" name="duration" value="">-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="height_difference">Dénivelé</label>-->
<!--            <input class="entree_donnee" type="text" name="height_difference" value="">-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="idee">Idée</label>-->
<!--            <input class="entree_donnee" type="text" name="idee" value="">-->
<!--        </div>-->
<!--        <button type="submit" name="button">// Valider</button>-->
<!--    </form>-->
<!--</section>-->
<!--<script>-->
<!--    $(window).resize(function() {-->
<!--        $('body, .img-background, h1, .liens, input,label, select, button').css('z-index', 'auto'); //auto reflow-->
<!--    });-->
<!--</script>-->
<!--</body>-->
<!---->
<!--</html>-->

<?php
include('connect.php');
$id = $_POST['id'];

// select les champs dans la table hiking
$reponse = $pdo->prepare('SELECT * FROM hiking WHERE id = :id');
// bindParam dit que :id = $id
$reponse->bindParam(':id', $id, PDO::PARAM_INT);
// exec $reponse
$reponse->execute();
// récupère les champs de la table récupéré
$rando= $reponse->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modifier une randonnée</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<h1>Modifier</h1>
<div class="liens">
<a href="read.php" id="retour">Liste des randonnées</a>
    </div>

<form action="script_update.php" method="post">
    <div>
        <label for="name">Name</label>
        <!-- injecte le name récupéré par rando en value -->
        <input type="text" name="name" value="<?=$rando->name?>">
    </div>

    <div>
        <label for="difficulty">Difficulté</label>
        <select name="difficulty">
            <option value="tres facile">Très facile</option>
            <option value="facile">Facile</option>
            <option value="moyen">Moyen</option>
            <option value="difficile">Difficile</option>
            <option value="tres difficile">Très difficile</option>
        </select>
    </div>

    <div>
        <label for="distance">Distance</label>
        <input type="text" name="distance" value="<?=$rando->distance?>">
    </div>
    <div>
        <label for="duration">Durée</label>
        <input type="duration" name="duration" value="<?=$rando->duration?>">
    </div>
    <div>
        <label for="height_difference">Dénivelé</label>
        <input type="text" name="height_difference" value="<?=$rando->height_difference?>">
    </div>
    <div>
        <label for="idee">Idee</label>
        <input type="text" name="idee" value="<?=$rando->idee?>">
    </div>
    <input type="hidden" type="number" name="id" value="<?= $rando->id?>">
    <button type="submit" name="button">Valider</button>


</form>
</body>
</html>