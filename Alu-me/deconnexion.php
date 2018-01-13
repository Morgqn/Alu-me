<?php
if(isset($_POST['submit3']))  //C-A-D "si jamais je clique sur le bouton submit"
	{
		// Suppression des variables de session et de la session
		$_SESSION = array();
		session_destroy();
		//rafraichissement de la page actuelle en JS
		//echo "<script>window.location.reload()</script>";
		header("Refresh:0; url=index.php");

	}
?>

<table>
	<tbody>
		<tr>
			<th>
				<?php if (!empty($_SESSION['username'])): ?>
				<!--<p>Bonjour <?php echo " ", $_SESSION['username']; ?></p>-->
				<p>
					<form method="post" action="">

					<input type="submit" name="submit3" value="se deconnecter">
					<!--<button onclick="javascript:location.reload();">Recharger la page</button>-->

					</form>
				</p>
			</th>
		</tr>
		<tr>
			<th>
				<?php else: ?>

				<!--<p>Bienvenue sur le site</p>
				<p><a href="connexion.php">Se connecter</a></p>-->
				<?php endif;?>
			</th>
		</tr>
	</tbody>
</table>