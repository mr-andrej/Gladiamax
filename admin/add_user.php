<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css" />
</head>
<body>
<?php
require('../connec.php');

if (isset($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['name']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);

	$query = "INSERT into `user` (username, email, password)
				  VALUES ('$username', '$email', '$password')";
    $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='success'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">

    <h1 class="box-title">Add user</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
	<div class="input-group">
			<select class="box-input" name="type" id="type" >
				<option value="" disabled selected>Type</option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
	</div>
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
<?php } ?>
</body>
</html>
