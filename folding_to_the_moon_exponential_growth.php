<?php

//Have you heard about the myth that if you fold a paper enough times,
//you can reach the moon with it? Sure you do, but exactly how many?
//Maybe it's time to write a program to figure it out.
//You know that a piece of paper has a thickness of 0.0001m.
//Given distance in units of meters, calculate how many times you have to fold the paper to make the paper reach this distance.
//Also, if somebody is giving you a non-positive distance, it's clearly bogus and you should yell at them by returning null/NULL.

//while (condition is true) {
//    code to be executed;
//}

function fold_to($distance)
{
    $paper_thickness = 0.0001;//paper thickness at the start
    $fold_count = 0;//how many times do we have to fold, now we have '0'

    while ($paper_thickness <= $distance)//while this condition is true do what below
    {
        $paper_thickness*=2;
        $fold_count++;
    }
    return $fold_count;
}

echo fold_to(384000000);

//
//$i = 0;
//do {
//    echo $i;
//} while ($i > 0);
//

echo "<br>";

function fold_toII($distance)
{
    $paper_thickness = 0.0001;
    $fold_counter = 0;

    do
    {
        $paper_thickness*=2;
        $fold_counter++;
    } while ($paper_thickness <= $distance);

    return $fold_counter;
}

echo fold_toII(384000000);




//test:
//class FoldToTest extends TestCase {
//    public function testExample() {
//        $this->assertEquals(42, fold_to(384000000));
//    }
//}

