<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Page protégée par mot de passe</title>
</head>
<body>

	<?php 

	// NOTE : pour que les réponses soient affichées sous le formulaire, on peut remplacer le premier if, comme ceci : if (!isset($_POST['mot_de_passe']) OR ($_POST['mot_de_passe'] != 'azerty') OR ($_POST['mot_de_passe'] == 'azerty')) On pourra également enlever les boutons de retour en arrière qui ne sont plus utiles.
	

		if (!isset($_POST['mot_de_passe']))

		{

	?>
	
		<div class="container">
			<p><br>Veuillez entrer le bon mot de passe pour accéder aux codes d'accès du serveur de la NASA :</p>

			<form action="form.php" method="post">
				<fieldset>
					<legend>Serveur central de la NASA</legend>
					<p><label>Entrez le bon mot de passe : <input type="password" name="mot_de_passe"></label></p>
					<p><input type="submit" name="Envoyer" class='btn btn-primary'></p>
				</fieldset>
			</form>
		</div>

	<?php 

		}

	?>

	<?php

		if (isset($_POST['mot_de_passe']) AND ($_POST['mot_de_passe'] != 'azerty'))
		{

	?>

		<div class="container">
			<br><div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove"></span>  Mot de passe incorrect !</div>

			<p><a href="form.php"><input type="button" value="Ressayer ?" class="btn btn-danger"></a></p>
		</div>

	<?php

		}

		else if (isset($_POST['mot_de_passe']) AND ($_POST['mot_de_passe'] == 'azerty'))
		{

	?>

		<div class="container">

			<br><div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span>  Mot de passe correct !</div>

			<h1>Voici les codes de la NASA :</h1>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p><br>

			<p><a href="form.php"><input type="button" value="Retour à la page précédente" class="btn btn-success"></a></p>

		</div>
		
	<?php

		}

	?>



	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

</body>
</html>
