<?php
if(isset($_POST['submit_com']))  //C-A-D "si jamais je clique sur le bouton submit" 
{
	//Définition des valeurs username
	$username = (trim($_POST['username']));

	//Définition des valeurs message
	$message = htmlspecialchars(trim($_POST['message']));

	//Définition de la valeur case
	$case = isset($_POST['case']);

	if ($username&&$message&&$case)//Si toute les valeurs sont définies
	{

		if(isset($_SESSION['username']))//Si la session existe toujours
		{

			if($_SESSION['username']==$username)//Si la session et le pseudo enregistre correspondent
			{

				try 
				{
					$bdd = new PDO('mysql:host=localhost;dbname=alu-me;charset=utf8', 'root', 'toto'); //sous MAMP, le mot de passe est 'root', sous WAMP il est vide
				} 
					catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage()); //message d'erreur si on ne peut pas se connecter à la base de donnée
				}

				$req = $bdd->prepare("INSERT INTO commentaires VALUES('','$billet','$username','$message', NOW())"); //requête SQL

				$req->execute(array(
						'username' => $username,
						'id_billet' => $billet,
						'commentaire' => $message,
						));

				$resultat = $req->fetch();

				echo "<script type='text/javascript'>alert(\"Message enregistré !\")</script>";
				echo "<script>window.location.reload()</script>";
				

			}else echo "<script type='text/javascript'>alert(\"Vérifiez votre pseudo\")</script>";

		}else echo "<script type='text/javascript'>alert(\"Vous n'êtes plus connecté, reconnectez-vous\")</script>";

	}else echo "<script type='text/javascript'>alert(\"Veuillez vérifier vos informations, le message ne peut être vide et la case doit être cochée.\")</script>";
}
?>



<form method="post" action="">
			
	<p>Votre nom d'utilisateur</p>
	<input type="text" name="username">

	<p>Ecrivez votre commentaire</p>
	<textarea name="message" rows="8" cols="45"></textarea>

	<p><input type="checkbox" name="case" id="case" /> <label for="case">Je ne suis pas un robot !</label></p>

	<p><input type="submit" name="submit_com" value="valider"></p>
	
</form>