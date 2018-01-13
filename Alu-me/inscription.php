<?php
 if(isset($_POST['submit']))  //C-A-D "si jamais je clique sur le bouton submit" 
 {
 	//Définition des valeurs username
 	$username = htmlspecialchars(trim($_POST['username']));

 	//Définition des valeurs password
 	$password = htmlspecialchars(trim($_POST['password']));

 	//Définition des valeurs repeat
 	$repeat = htmlspecialchars(trim($_POST['repeat']));

 	//Définition des valeurs email
 	$email = htmlspecialchars(trim($_POST['email']));

 	if ($username&&$password&&$repeat&&$email) //si tous les champs sont remplis
 	{
 		if (strlen($username)>=4) //le username doit être supérieur ou égal à 4 caractères
 		{
 			
 			if (strlen($password)>=5) //le password doit être supérieur ou égal à 5 caractères
 			{
 				
 				if ($password==$repeat)  //si le password est identique à la répétition
 				{

 					if (ctype_alnum($password)&&ctype_alnum($username)) // si le passeword et le pseudo sont en alphanumérique
 					{

 						$password = sha1($password); //cryptage du mot de passe en sha1
 						$email = sha1($email); //cryptage de l'email en sha1
 					
 						//connexion à la base de donnée
 						try 
 						{
 							$bdd = new PDO('mysql:host=localhost;dbname=alu-me;charset=utf8', 'root', 'toto'); //sous MAMP, le mot de passe est 'root', sous WAMP il est vide
 						} 
 							catch (Exception $e)
 						{
 							die('Erreur : ' . $e->getMessage()); //message d'erreur si on ne peut pas se connecter à la base de donnée
 						}

 						$req = $bdd->prepare("INSERT INTO users VALUES('','$username','$password','$email',CURDATE())"); //requête SQL

 						$req->execute(array(
    						'username' => $username,
    						'password' => $password,
    						'email' => $email,
    						));

 						die('Inscription terminée, vous pouvez vous connecter <a href="connexion.php">connecter</a>');

 					}else echo "<script type='text/javascript'>alert(\"Le mot de passe ou le pseudo utilisent des caractères interdits\")</script>";

 				}else echo "<script type='text/javascript'>alert(\"Le mot de passe n'a pas pu être vérifié\")</script>";

 			}else echo "<script type='text/javascript'>alert(\"Le mot de passe est trop court\")</script>";

 		}else echo "<script type='text/javascript'>alert(\"Le nom d'utilisateur est trop court\")</script>";

 	}else echo "<script type='text/javascript'>alert(\"Veuillez vérifier vos informations\")</script>"; //on envoi un message d'erreur (alert en JS)
 }

?>



<!-- Création du formulaire -->

<h1 id="form_title">Inscription</h1>
<div id="container_flex">
	<div class="form_msg2">
		<form method="post" action="admin.php">
			
			<p>Votre nom d'utilisateur (au moins 4 caractères)</p>
			<input type="text" name="username" placeholder="Entrez un pseudo">
			
			<p>Votre mot de passe (au moins 5 caractères)</p>
			<input type="password" name="password" placeholder="Entrez un mot de passe">
			
			<p>Vérifiez votre mot de passe</p>
			<input type="password" name="repeat" placeholder="Confirmez le mot de passe">

			<p>Votre adresse email</p>
			<input type="email" name="email" placeholder="Entrez votre adresse mail">

			<p><input type="submit" name="submit" value="valider"></p>

		</form>
		<a href="connexion.php">J'ai deja un compte, se connecter</a>
	</div>
	<div class="form_msg2">
		<strong>Veuillez n'utiliser que des caractères alphanumériques pour votre nom d'utilisateur et votre mot de passe.
		Tous les champs doivent être remplis pour valider votre inscription</strong>
	</div>
</div>