<?php

//which number from given is the biggest

function biggest_natural($a, $b, $c){
    if ($a>$b && $a>$c){
        return $a;
    }elseif ($b>$c){
        return $b;
    }else{
        return $c;
    }
}

echo biggest_natural(1,2,3);
echo "<br>";
echo biggest_natural(5,4,3);
echo "<br>";
echo biggest_natural(5,7,6);