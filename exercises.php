<?php

function printFibonacci($n)
{

    $first = 0;
    $second = 1;

    echo "Fibonacci Series <br>";

    echo $first.' '.$second.' ';

    for($i = 2; $i < $n; $i++){

        $third = $first + $second;

        echo $third.', ';

        $first = $second;
        $second = $third;

    }
}

/* Function call to print Fibonacci series up to 6 numbers. */

printFibonacci(6);
echo "<br>";
printFibonacci(35);
echo "<br>";
printFibonacci(50);
echo "<br>";
echo "<br>";

$count = 0 ;
$f1 = 0;
$f2 = 1;
echo $f1." , ";
echo $f2." , ";
while ($count < 20 )
{
    $f3 = $f2 + $f1 ;
    echo $f3." , ";
    $f1 = $f2 ;
    $f2 = $f3 ;
    $count = $count + 1;
}


?>