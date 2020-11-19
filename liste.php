<?php

include './header.php';

$allGladiators = $pdo->query('SELECT * FROM gladiator')->fetchAll();

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
            echo '<td>'.$gladiator['name'].'</td>';
            echo '<td>'.$gladiator['country'].'</td>';
            echo '<td>'.$gladiator['weight'].'</td>';
            echo '<td>'.$gladiator['sword'].'</td>';
            echo '<td>'.$gladiator['schield'].'</td>';
            echo '<td>'.$gladiator['hand'].'</td>';
            echo '<td>'.$gladiator['winner'].'</td>';
            echo '<td>'.$gladiator['losing'].'</td>';
            echo '<td>'.$gladiator['likes'].'</td>';
            echo '<td>'.$gladiator['dislike'].'</td>';
            echo '<td>'.$gladiator['category'].'</td>';


          
            echo '</tr>';
        }
    echo '</tbody>';
echo '</table>';

