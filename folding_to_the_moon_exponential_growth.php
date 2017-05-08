<?php

//Have you heard about the myth that if you fold a paper enough times,
//you can reach the moon with it? Sure you do, but exactly how many?
//Maybe it's time to write a program to figure it out.
//You know that a piece of paper has a thickness of 0.0001m.
//Given distance in units of meters, calculate how many times you have to fold the paper to make the paper reach this distance.
//Also, if somebody is giving you a non-positive distance, it's clearly bogus and you should yell at them by returning null/NULL.

function fold_to($distance){
    $paper_thickness = 0.0001;
    $count_fold = 0;
    while ($paper_thickness <= $distance){
        $paper_thickness*=2;
        $count_fold++;
    }
    return $count_fold;
}

echo fold_to(384000000);


//test:
//class FoldToTest extends TestCase {
//    public function testExample() {
//        $this->assertEquals(42, fold_to(384000000));
//    }
//}

