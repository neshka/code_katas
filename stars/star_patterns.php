<?php

//do the square using * sign

function drawSquare($long){
    for ($i = 1; $i <= $long; $i++) {
        for ($j = 1; $j <= $long; $j++) {
            echo "* ";
        }
        echo '<br>';
    }

}

drawSquare(5);
echo "<br>";
drawSquare(3);

//do half of the triangle
echo "<br>";

function halfTriangle($n){
    for ($i = 1; $i <= $n; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }
}

halfTriangle(6);
echo "<br>";
function halfTriangleII($n){
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            if ($j <= $i) {
                echo '*';
            }
        }
        echo '<br>';
    }
}

halfTriangleII(4);

echo "<br>";
function halfTriangleUpsideDown($n){
    for ($i = $n; $i >= 1; $i--){
        for ($j = 1; $j <= $i; $j++){//printing $i stars in a row
            echo "*";
        }
        echo "<br>";
    }
}

halfTriangleUpsideDown(6);
echo "<br>";

//do snow: even print, odd leave space

function makeSnow($n) {
    for ($i = 1; $i < $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if (($i+$j) % 2 !== 0) {
                echo "$i";
            } else {
                echo "$j";
            }
        }
        echo '<br>';
    }
}

makeSnow(8);

