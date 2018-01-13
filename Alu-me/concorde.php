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
			<img src="img/hyatt.jpg" class="image_article" width="300" height="300" alt="Image1"/>
			<h1>Hotel Concorde à Paris</h1>
			<p id="corps_article">
				L'hôtel <strong>CATALOGNE PARIS GARE MONTPARNASSE</strong>, anciennement <strong>CONCORDE MONTPARNASSE</strong> est un hôtel 4* de la capitale qui a fait appel a la société ALU-ME pour le remplacement de ses vitres. La commande passée en février 2013 a été livrée fin mai de la même année. </br>
				Laissant passer plus de lumière, étant plus solide et leur production étant faite dans des conditions plus
				respectueuses de l'environnement, les vitres <strong>SUPER-TEINT v4</strong> ont été choisies pour orner ce bâtiment du 14eme arrondissement de Paris.</br>
				Cette vitre haut de gamme vous assurera un entretien aisé et une isolation au bruit améliorée.
			</p>
			<p id="com">
				<?php
					$billet = 3;
					include("commentaires.php");
				?>
			</p>
		</div>
	</div>

	<?php include("footer.php"); ?>
    </body>

</html>