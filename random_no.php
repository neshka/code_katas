<?php

//Napisz funkcję losującą liczbę z zakresu 0-20,
//aż nie wybierze liczby 10. Jeśli funkcja wylosowała:
//złą liczbę (inną niż 10), to ma wypisać „Zła liczba”. liczbę 10,
//to ma wypisać „Dobra liczba”.
//Funkcja ma zwracać liczbę przeprowadzonych losowań.
//Do losowania liczb użyj funkcji rand.

function randomNumber(){
    $count=0;
    for ($i=0;$i<=20;$i=rand(0,20)){
        $count++;
        if($i==10){
            echo 'Good number! <br>';
            echo "Random: ".$count;
            break;
        }else{
            echo 'Wrong number <br>';
        }
        continue;
    }
}

randomNumber();