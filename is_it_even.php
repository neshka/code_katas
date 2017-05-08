<?php

//Write a program which, based on the value of the variable n,
//prints all numbers from zero to n. For each number,
//the program writes whether the number is even or not.

function is_even($n){
    for ($i=0;$i<=$n;$i++){
       if ($i%2==0){
           echo $i." is even"."<br>";
       }else{
           echo $i." is odd"."<br>";
       }
    }
}

is_even(6);