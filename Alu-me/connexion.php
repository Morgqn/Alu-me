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
	
	<div>
		<div id="forminscription">
			<?php include("login.php"); ?>
		</div>
	</div>

	<?php include("footer.php"); ?>
    </body>

</html>