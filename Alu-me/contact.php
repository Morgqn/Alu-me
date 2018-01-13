<?php
	session_start();
	include_once "traitement_formulaire.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleadmin.css" />
        <link rel="icon" type="image/png" href="img/icon.png" />
        <title>ALU-ME</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	
	<?php include("header.php"); ?>

	<div id="navigation-container"> <!-- Conteneur du menu - Expansion laterale -->
		<div class="menu"><?php include("menu.php"); ?></div><!-- Appel du menu -->
	</div>

	<div id="border_bottom_menu"> <!-- Ligne de décoration - Expansion laterale -->
		<p></p> <!-- Ligne de décoration - Sous le menu -->
	</div>

	<div id="main">
		<div id="forminscription">
			<h1 id="form_title">Contactez-nous</h1>
			<form id="contact" method="post" action="">
				<fieldset>
					<legend>Vos coordonnées</legend>
					<p>
						<label for="nom">Nom :</label>
						<input type="text" id="nom" name="nom" placeholder="Votre Nom" tabindex="1" />
					</p>
					<p>
						<label for="email">Email :</label>
						<input type="text" id="email" name="email" placeholder="Votre adresse mail" tabindex="2" />
					</p>
				</fieldset>
	 
				<fieldset>
					<legend>Votre message :</legend>
					<p>
						<label for="objet">Objet :</label>
						<input type="text" id="objet" name="objet" placeholder="Le titre de votre email" tabindex="3" />
					</p>
					<p><label for="message">Message :</label></p>
					<p><textarea id="message" name="message" tabindex="4" cols="138" rows="12" placeholder="Veuillez écrire votre message ici"></textarea></p>
				</fieldset>
		 		<div style="text-align:center;">
		 			<input type="submit" name="envoi" value="Envoyer votre Message" />
		 		</div>
			</form>
		</div>
	</div>

	<?php include("footer.php"); ?>
    </body>

</html>