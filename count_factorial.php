<?php

//Count factorial number

function count_factorial($n){
    $sum = 1;
    for ($i=1; $i<=$n;$i++){
       $sum *= $i;
    }
    return $sum;
}

echo count_factorial(5);
echo "<br>";
echo count_factorial(8);
