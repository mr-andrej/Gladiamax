<?php

$hostname = 'localhost';
$database = 'gladiamax';
$username = 'root';
$password = 'azerty78';

$bdd = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);

	if(isset($_GET['type']) AND $_GET['type'] == 'membre') {
	   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
	      $confirme = (int) $_GET['confirme'];
	      $req = $bdd->prepare('UPDATE user SET confirme = 1 WHERE id = ?');
	      $req->execute(array($confirme));
	   }
	   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
	      $supprime = (int) $_GET['supprime'];
	      $req = $bdd->prepare('DELETE FROM user WHERE id = ?');
	      $req->execute(array($supprime));
	   }

	}


	$user = $bdd->query('SELECT * FROM user ORDER BY id DESC LIMIT 0,5');

	?>
	<!DOCTYPE html>
	<html>
	<head>
	   <meta charset="utf-8" />
	   <title>Administration</title>
	</head>
	<body>
	   <ul>
	      <?php while($m = $user->fetch()) { ?>
	      <li><?= $m['id'] ?> : <?= $m['pseudo'] ?><?php if($m['confirme'] == 0) { ?> - <a href="index.php?type=membre&confirme=<?= $m['id'] ?>">Confirmer</a><?php } ?> - <a href="index.php?type=membre&supprime=<?= $m['id'] ?>">Supprimer</a></li>
	      <?php } ?>
	   </ul>

	</body>
	</html>

?>


