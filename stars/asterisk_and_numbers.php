<?php
$n = 5;
echo '<pre>';
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= $i) {
            echo '* ';
        }
        else{
            echo $j . ' ';
        }
    }
    echo '<br>';
}
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j < $n - $i) {
            echo '* ';
        }
        else{
            echo $j . ' ';
        }
    }
    echo '<br>';
}
echo '<pre>';