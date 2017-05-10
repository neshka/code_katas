<?php

//Write a function that takes two numbers as arguments: a and n.
//The function returns the result a to the power of n

function power($a, $n){
    $pow = 1;
    $count = 0;
    while ($count < $n) {
        $pow *= $a;
        $count++;
    }

    return "$a"." power "."$n"." = ".$pow;
}

echo power(2,2);
echo "<br>";
echo power(2,3);
echo "<br>";
echo power(2,4);
echo "<br>";
echo power(2,5);
echo "<br>";


function powerII($a, $n) {
    $result=1;
    for ($i=1; $i<=$n; $i++) {
        $result *= $a;
    }

    return $result;
}

echo powerII(2,3);