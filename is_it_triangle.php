<?php

function is_it_triangle($a, $b, $c){
    if ($a>($b+$c) || $b>($c+$a) || $c>($a+$b)){
        echo "This is a triangle";
    }else{
        echo "This is not a triangle";
    }
}

is_it_triangle(5,6,8);
echo "<br>";
is_it_triangle(3,4,9);
