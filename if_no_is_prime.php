<?php

//write function which tells you if no is prime number

function prime($n){//wszystkie dzielniki liczby $n
    $number=[];
    for($i = 1; $i <= $n; $i++) {//wylicza, literujac wszystkie liczby od 1
        if ($n%$i==0) {//podzielne bez zera
        $number[]=$i;//wpadaja do tablicy dzielnikow
        }
    }
return $number;
}


function ifPrime($n){//ta funckaj sprawdza ile dzielnikow jest w ww. wyniku-tablicy
    $number= prime($n);//przypisuje pod zmienna, tablize-wynik z poprzedniej funkcji
    $count=count($number);//liczy ile liczb sie tam znajduje

    if($count==2){//jesli tylko 2
        echo $n . ' is prime number <br>';//wtedy liczba jest pierwsza
    }else{
        echo $n . ' is not a prime number <br>';//jesli wiecej wtedy nie jest
    }
}

ifPrime(1);
ifPrime(3);
ifPrime(8);
ifPrime(99);

echo '<br>';