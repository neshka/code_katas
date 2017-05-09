<?php

function drwaSquare($long){
    for ($i = 0; $i < $long; $i++) {
        for ($j = 0; $j < $long; $j++) {
            echo '* ';
        }
        echo '<br>';
    }

}

drwaSquare(5);
echo "<br>";
drwaSquare(10);

