<?php

include './header.php';

$allGladiators = $pdo->query('SELECT g.name as gname, country, weight, height, sword, shield, hand, winner, losing, likes, dislike, 
c.name as cname 
FROM gladiator g 
join category c on c.id=g.id_category')->fetchAll();

echo '<table>';
    echo '<thead>';
        echo '<tr>';
        echo '<td>Title</td>';
        echo '<td>Description</td>';
        echo '<td>Options</td>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
        foreach ($allGladiators as $gladiator)
        {
            echo '<tr>';
            //echo '<td>'.$gladiator['gname'].'</td>';
            //echo '<td>'.$gladiator['country'].'</td>';
            //echo '<td>'.$gladiator['weight'].'</td>';
            //echo '<td>'.$gladiator['height'].'</td>';
            //echo '<td>'.$gladiator['sword'].'</td>';
           // echo '<td>'.$gladiator['shield'].'</td>';
            echo '<td>'.$gladiator['hand'].'</td>';
            echo '<td>'.$gladiator['winner'].'</td>';
            echo '<td>'.$gladiator['losing'].'</td>';
            echo '<td>'.$gladiator['likes'].'</td>';
            echo '<td>'.$gladiator['dislike'].'</td>';
            //echo '<td>'.$gladiator['cname'].'</td>';
            echo '</tr>';
        }
    echo '</tbody>';
echo '</table>';


echo $gladiator['cname'];

$it = new FilesystemIterator(dirname('uploads/..'));
foreach ($it as $fileinfo) 
{
    echo "<figure><img width=100px src =" .$fileinfo."/></figure>" ;
    echo "<h3>" .$fileinfo->getFilename() . "\n"."</h3>" ;
    var_dump($fileinfo);
}
