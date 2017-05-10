<?php

//Napisz program, który zwraca wartość liczby Pi. Użyj następującej formuły:
//pi = 4 * ((1/1 - 1/3) + (1/5 - 1/7) + (1/9 - 1/11) + ...)
//Zobacz, jak zmienia się precyzja wyniku w zależności od liczby iteracji pętli.

function piNumber($n){
    $sum=0;
    $roznica=0;
    for($i=1; $i<=$n; $i+=4){
        $roznica=((1/$i)-(1/($i+2)));
        $sum+=$roznica;
    }
    return $sum;
}
function piValue($n){
    $sum= piNumber($n);
    $roznica=4*$sum;
    echo $roznica;
}
echo piValue(1000000);

echo '<br><br>';
echo '<br>';