<?php

//Write a program that sums the sum of all the numbers in the given range from x to y.
//Use both languages for you loop. For x = 5, y = 10 sum to 5 + 6 + 7 + 8 + 9 + 10 = 45.

function sum_interval($x,$y){
    $sum = 0;
    for ($i = $x; $i <= $y; $i++){
        $sum += $i;
    }
    return $sum;
}

echo sum_interval(1,6);
echo "<br>";
echo sum_interval(0,1);
echo "<br>";
echo sum_interval(1,1);
echo "<br>";
echo sum_interval(5,10);


