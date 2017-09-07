<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Randonnées</title>


    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>

<h1>Liste des randonnées</h1>


<div class="liens">
    <a href="index.php" id="retour">Retour au formulaire</a><br>
</div>

        <table>
            <!-- Afficher la liste des randonnées -->
            <?php
            include("connect.php");
            $reponse = $pdo->query('SELECT * FROM hiking');
            $reponse1 = $reponse->fetchAll();
            // var_dump($reponse1);
            foreach ($reponse1 as $value) {
                ?>
                <div id="corps">
                    <div id="text">
                <p><b><span id="oran">/// Nom de la randonnée : </span></b><?= $value->name ?><br>
                    <b><span id="oran">/// Difficulté : </span></b><?= $value->difficulty ?><br>
                    <b><span id="oran">/// Distance : </span></b><?= $value->distance ?> kilomètres<br>
                    <b><span id="oran">/// Durée : </span></b><?= $value->duration ?> heures<br>
                    <b><span id="oran">/// Dénivelé : </span></b><?= $value->height_difference ?> mètres<br>
                    <b><span id="oran">/// Idée : </span></b><?= $value->idee ?>

                </p>
                    </div>
                </div>

<!--<div id="ens-bt-suppr-edit">-->
                <form  action="delete.php" method="post">
                    <input  type="hidden" type="number" name="id" value="<?= $value->id?>">
                    <input class="del-mod" type="submit" value="supprimer">
                </form>

                <form  action="update.php" method="post">
                    <input  type="hidden" type="number" name="id" value="<?= $value->id ?>">
                    <input class="del-mod" type="submit" value="edit">
                </form>
<!--</div>-->

                <?php
            }
            ?>

        </table>
</body>
</html>











