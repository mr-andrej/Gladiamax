<?php
    // Menu + Connection BDD
    include './header.php';

    // Traitement des données du formulaire -- Si je clique
    if(isset($_POST['submit']) && $_POST['submit']=='submit'){
        $sql = 'INSERT INTO gladiator VALUES (null, :name, :country, :weight, :height, :sword, :schield, :hand, :winner, :losing, :likes, :dislike, :category)';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':country', $_POST['country'], PDO::PARAM_STR);
        $statement->bindValue(':weight', $_POST['weight'], PDO::PARAM_INT);
        $statement->bindValue(':height', $_POST['height'], PDO::PARAM_INT);
        $statement->bindValue(':sword', $_POST['sword'], PDO::PARAM_INT);
        $statement->bindValue(':schield', $_POST['schield'], PDO::PARAM_INT);
        $statement->bindValue(':hand', $_POST['hand'], PDO::PARAM_INT);
        $statement->bindValue(':winner', $_POST['winner'], PDO::PARAM_INT);
        $statement->bindValue(':losing', $_POST['losing'], PDO::PARAM_INT);
        $statement->bindValue(':likes', $_POST['likes'], PDO::PARAM_INT);
        $statement->bindValue(':dislike', $_POST['dislike'], PDO::PARAM_INT);
        $statement->bindValue(':category', $_POST['category'], PDO::PARAM_STR);

        $statement->execute();

        echo '<meta http-equiv="refresh" content="0;URL=gladiators_show.php">';
    }
?>

<form method="post">
    <input type="text" name="name" placeholder="Name"><br/>
    <input type="text" name="country" placeholder="Country"><br/>
    <input type="text" name="weight" placeholder="Weight"><br/>
    <input type="text" name="height" placeholder="Height"><br/>
    <input type="text" name="sword" placeholder="Sword"><br/>
    <input type="text" name="schield" placeholder="Schield"><br/>
    <input type="text" name="hand" placeholder="Hand"><br/>
    <input type="text" name="winner" placeholder="Winner"><br/>
    <input type="text" name="losing" placeholder="Losing"><br/>
    <input type="text" name="likes" placeholder="Like"><br/>
    <input type="text" name="dislike" placeholder="Dislike"><br/>
    <label for="category">Note:</label>
        <select name="category" id="category">
            <option value="1" >Murmillo</option>
            <option value="2" >Samnite</option>
            <option value="3" >Secutor</option>
            <option value="4" >Thraex</option>
            <option value="5" >Bestiarius</option>
            <option value="6" >Provocator</option>
            <option value="7" >Retiarious</option>              
        </select>    
    <input type="submit" name="submit" value="submit">
</form>
