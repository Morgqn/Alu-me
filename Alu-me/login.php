<?php

if(isset($_POST['submit']))  //C-A-D "si jamais je clique sur le bouton submit"
	{
		$username = htmlspecialchars(trim($_POST['username']));
		$password = htmlspecialchars(trim($_POST['password']));

		if (empty($username)) 
		{
			echo "Veuillez saisir votre pseudo<br/>";
		}


		elseif(empty($password)) 
		{
			echo "Veuillez saisir votre mot de passe";
		}

		else
		{

			$password = sha1($password); //cryptage du mot de passe en sha1

			try 
 			{
 				$bdd = new PDO('mysql:host=localhost;dbname=alu-me;charset=utf8', 'root', 'toto'); 
 				//Connexion à la BBD
 				//sous MAMP, le mot de passe est 'root', sous WAMP il est vide
	 		} 
 				catch (Exception $e)
 			{
				die('Erreur : ' . $e->getMessage()); //message d'erreur si on ne peut pas se connecter à la base de donnée
 			}

 			$req = $bdd->prepare("SELECT id FROM users WHERE username='$username' AND password='$password'");
 			
 			$req->execute(array(
    			'username' => $username,
    			'password' => $password));

 			$resultat = $req->fetch();

 			if (!$resultat)
			{
			    echo "Mauvais identifiant ou mot de passe ";
			}
			else
			{
			    $_SESSION["username"]=$username;
			    $_SESSION['id'] = $resultat['id'];
			    header("Refresh:0");
			}
		}
	}


?>
<?php

if(isset($_POST['submit2']))  //C-A-D "si jamais je clique sur le bouton submit2"
	{
		// Suppression des variables de session et de la session
		$_SESSION = array();
		session_destroy();
		echo "<script>window.location.reload()</script>";
	}


?>




<h1 id="form_title">Connexion</h1>
<div id="container_flex">
	<div class="form_msg">
		<form method="post" action="connexion.php">
			
			<p>Votre nom d'utilisateur :</p>
			<input type="text" name="username" placeholder="Entrez votre pseudo">

			<p>Votre mot de passe :</p>
			<input type="password" name="password" placeholder="Entrez votre mot de passe"><br/><br/>

			<input type="submit" name="submit" value="se connecter">


		</form>
	</div>

	<?php if (!empty($_SESSION['username'])): ?>
		<div class="form_msg">
			<?php echo 'Vous vous êtes correctement connecté ! </br> Bienvenue ', $_SESSION['username']; ?>
		</div>
	<?php endif;?>
</div>