<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <script
            src="http://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">

    </script>
</head>
<body class="img-background">
<section>



	<h1>Ajouter</h1>
    <div class="liens">
        <a href="read.php" id="retour">Liste des données</a>
    </div>
	<form action="script_insert.php" method="post">
		<div>
			<label for="name">Name</label>
			<input class="entree_donnee" type="text" name="name" value="">
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
			<input class="entree_donnee" type="text" name="distance" value="">
		</div>

		<div>
			<label for="duration">Durée</label>
			<input class="entree_donnee" type="time" name="duration" value="">
		</div>

		<div>
			<label for="height_difference">Dénivelé</label>
			<input class="entree_donnee" type="text" name="height_difference" value="">
		</div>

        <div>
            <label for="idee">Idée</label>
            <input class="entree_donnee" type="text" name="idee" value="">
        </div>
		<button type="submit" name="button">// Valider</button>
	</form>
</section>
<script>
    $(window).resize(function() {
        $('body, .img-background, h1, .liens, input,label, select, button').css('z-index', 'auto'); //auto reflow
    });
</script>
	</body>

	</html>
