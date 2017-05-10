<?php

//Write a function called FooBar that accepts one variable (integer).
//Instead of dividing the number into 3, write Foo
//instead of divided numbers into 5, print Bar,
//instead of numbers divide into 3 and 5, write FOOBAR.

//for 15 it should be 12Foo4BarFoo78FooBar11Foo1314FooBar

function FooBar($n) {
    for ($i=1;$i<=$n;$i++){
        if(($i%3==0) && ($i%5==0)){
            echo "FooBar";
        }elseif ($i%5==0){
            echo "Bar";
        }elseif ($i%3==0){
            echo "Foo";
        }else{
            echo "$i";
        }
    }
}
echo "12Foo4BarFoo78FooBar11Foo1314FooBar";
echo "<br>";
FooBar(15);
