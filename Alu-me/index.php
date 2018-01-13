<?php
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style2.css" />
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
			
			<section id="main_container">
			
			
				<div id="container">
			
					<div id="slide_show">
						<?php include("slideshow.php"); ?>
					</div>
			
					<div id="article_container">
			
						<article id="a1">
							<p>
								La société ALU-MÉ, dont le siège social est à Paris, est une grande entreprise 
								spécialisée dans la menuiserie aluminium (portes, fenêtres, loggias, etc.). 
								Elle travaille sur commande (appelé PROJET) de gros clients, pour équiper entièrement 
								un immeuble par exemple.
							</p>
						</article>
				
						<article id="a2">
							<p>
								Consultez nos articles sur les principaux projets de la société ! Cliquez sur les images pour accéder directement aux articles. Alternativement, vous pouvez acceder à l'ensemble des projets via l'index des <a href="articles.php">articles</a>.
								<br>Vous pouvez aussi nous contacter depuis notre formulaire de prise de <a href="contact.php">contact ! </a> Nous tacherons de vous répondre dans les délais les plus courts.
							</p>
						</article>
				
						<article id="a3"><a href="CB21.php"><img src="img/tour-cb21.jpg" width="202" height="180" alt="Image1"/></a></article>
				
						<article id="a4">
							<p>
								<br>
								<a href="admin.php">Inscrivez-vous</a> sur le site pour pouvoir commenter les différents articles ! Si vous êtes déjà inscrit, n'hésitez pas à vous <a href="connexion.php">connecter ! <br>
								</a>Un compte vous sera toutefois nécessaire pour accéder à la section des commentaires.
							</p>
						</article>
				
						<article id="a5"><a href="montparnasse.php"><img src="img/tour_montparnasse_paris.jpg" width="258" height="180" alt="Image2"/></a></article>
				
						<article id="a6"><a href="concorde.php"><img src="img/hyatt.jpg" width="278" height="180" alt="Image3"/></a></article>
				
						<article id="a7"x>
							<p>
								<br>
								Une question ? Vous souhaitez prendre rendez-vous ? Contactez-nous via notre <a href="contact.php">page</a> dédiée.
								Les informations sur les horaires d'ouverture et les jours ouverts sont consultables <a href="info.php">ici</a>.
								<br>Alu-me vous souhaite une bonne visite sur son site !

							</p>
						</article>
			
					</div>
			
				</div>
			
				<aside id="column">

					<div>
						<?php include("cartouche_boutique.php"); ?>
						<p id="societetitre"></p>
						<p id="societeadresse">
							02 Avenue du Général Leclerc <br> 75014 Paris <br> 01.10.10.10.10 <br> alu-me@gmail.com
						</p>
					</div>
					<div>
						<?php include("cartouche_calendrier.php"); ?>
						<div id="calendrier"> <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=4pp9nutaahfpmpb57ghtrparfo%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=Europe%2FParis" style="border-width:0" width="250" height="300" frameborder="0" scrolling="no"></iframe> </div>
						<p id="ouverture">  				
							Lundi au Vendredi : 
							<br> 9h - 12h30 
							<br> 14h - 17h
						</p>
					</div>
					<div>
						<?php include("cartouche_partenaires.php"); ?>
					</div>

				</aside>
			
			</section>

			<script>
            	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" //Inclusion de JQuerry
        	</script>

    <?php include("footer.php"); ?>

    </body>

</html>