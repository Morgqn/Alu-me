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
			<img src="img/tour-cb21.jpg" class="image_article" width="300" height="300" alt="Image1"/>
			<h1>Tour CB21 à la défense</h1>
			<p id="corps_article">
				Lors du 2eme semestre 2015, l'entreprise ALU-ME a été solicitée pour le remplacement de la vitrerie de la moitié
				supérieure de la <strong>Tour CB21</strong>. Les vitres, livrées en 10 semaines, sont un modèle fréquement utilisé chez les grandes entreprises françaises. La société sera chargée lors du printemps 2016 du changement des vitres de la moitié inférieure du bâtiment.
			</p>
			<p id="com">
				<?php
					$billet = 1;
					include("commentaires.php");
				?>
			</p>
		</div>
	</div>

	<?php include("footer.php"); ?>
    </body>

</html>