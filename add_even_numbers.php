<?php

//Use 2 variables, one to add all the numbers from 1 to 10. The other to add only the even numbers.

$total = 0;
$even = 0;

for ( $x = 1, $y = 1; $x <= 10; $x++, $y++ ) {
    if ( ( $y % 2 ) == 0 ) {
        $even = $even + $y;
    }
    $total = $total + $x;
}

echo "The total sum: ".$total."<br />";
echo "The sum of even values: ".$even;

