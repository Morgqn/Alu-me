<?php
	session_start();
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

	<div id="forminscription">
		<h1 id="titrearticle">Infos Pratiques :</h1>
		<fieldset>
			<legend><strong>Nos coordonnées</strong></legend>
			<div id="container_flex">
				<p class="form_msg2">
					<u>Adresse</u> : 02 Avenue du Général Leclerc</br>
					</br>
					<u>Code Postal</u> :75014 Paris</br>
					</br>
					<u>Numéro de téléphone</u> : 01.10.10.10.10</br>
					</br>
					<u>Adresse email</u> : alu-me@gmail.com
				</p>
				<p class="form_msg2">
					<u>Par le métro</u> : Ligne 4 et 6, Station Denfert-Rochereau</br>
					</br>
					<u>Par le RER</u> : Ligne B, Station Denfert-Rochereau
				</p>
			</div>
		</fieldset>
		<fieldset>
			<legend><strong>Plan du site</strong></legend>
			<div id="container_flex">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.290741700788!2d2.329344215782241!3d48.83359271040646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671b9d5cb2dcd%3A0xeab9162290e3218b!2s2+Avenue+du+G%C3%A9n%C3%A9ral+Leclerc%2C+75014+Paris!5e0!3m2!1sfr!2sfr!4v1492700427968" width="850" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</p>
			</div>
		</fieldset>
		<div id="container_flex2">
			<fieldset class="horaire_calendrier">
				<legend><strong>Horaires</strong></legend>
				<p id="horaire">
					<u>Lundi au Vendredi</u> : <br>
					<br> 9h - 12h30 <br>
					<br> 14h - 17h <br>
					<br>Fermé durant les jours fériés et les week-ends.
				</p>
				</fieldset>
			<fieldset class="horaire_calendrier">
				<legend><strong>Calendrier</strong></legend>
				<p id="calendrier">
					<div id="calendrier"> <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=307&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=fulgoni.morgan%40gmail.com&amp;color=%23875509&amp;ctz=Europe%2FParis" style="border-width:0" width="481" height="307" frameborder="0" scrolling="no"></iframe></div>
				</p>
			</fieldset>
		</div>
		
	</div>

	<?php include("footer.php"); ?>
    </body>

</html>