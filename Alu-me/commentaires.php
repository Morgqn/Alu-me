<?php
    // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=alu-me','root', 'toto');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
?>
 
<h2>Commentaires</h2>
 
<?php
    // Récupération des commentaires
    $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
 
    $req->execute(array($billet));
 
    while ($donnees = $req->fetch())
    {
?>
<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire']; ?></p>
<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
<?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>
 
<h2>Ecrire un commentaire</h2>
<?php if (!empty($_SESSION['username'])): ?>
    <p><?php include ("form_com.php") ?></p>
<?php else: ?>
    <p>Vous devez être <a href="connexion.php">connecté</a> pour pouvoir commenter</p>
<?php endif;?>