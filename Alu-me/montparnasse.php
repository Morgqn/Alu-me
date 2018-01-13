<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylearticle.css" />
        <title>Société ALU-ME</title>
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
	
	<div>
		<div id="forminscription">
			<img src="img/tour_montparnasse_paris.jpg" class="image_article" width="300" height="300" alt="Image1"/>
			<h1>Tour Montparnasse à Paris</h1>
			<p id="corps_article">
				Effectuée en 2009, la mise aux normes environementales de la <strong>TOUR MONTPARNASSE</strong> par la société ALU-ME a nécessité près d'un an de travail, une quarantaine de tonnes de verre et une vingtaine de personnes mobilisées 6 jours sur 7, 24 heures par jour.</br>
				Aujourd'hui, la <strong>TOUR MONTPARNASSE</strong> jouit d'une vitrerie de qualité supérieure et la société ALU-ME est fière d'avoir livré cette commande qui est à ce jour la plus importante de l'histoire de l'entreprise.
			</p>
			<p id="com">
				<?php
					$billet = 2;
					include("commentaires.php");
				?>
			</p>
		</div>
	</div>

	<?php include("footer.php"); ?>
    </body>

</html>