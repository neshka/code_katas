<?php

//Generates a multiplication table 2 through 9.
//Outer loop is responsible for generating a list of dividends,
//and inner loop will be responsible for generating lists of dividers for each individual number

echo "<h1>Multiplication table</h1>";
echo "<table border=2 width=50%";

for ($i = 1; $i <= 9; $i++ ) {   //this is the outer loop
    echo "<tr>";
    echo "<td>".$i."</td>";

    for ( $j = 2; $j <= 9; $j++ ) { // inner loop
        echo "<td>".$i * $j."</td>";
    }

    echo "</tr>";
}

echo "</table>";
