<?php
/*
 * 8/1/2021
 * Project Euler #5 Smallest Multiple
 * https://projecteuler.net/problem=5
 * 
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 */
$num = 2520;
do {
    $evenlyDivisible = true;
    for ($i = 2; $i <= 20; $i++) {
        if (fmod($num, $i) != 0) {
            $evenlyDivisible = false;
            break;
        }
    }
    if ($evenlyDivisible == false) {
        $num++;
    }
} while ($evenlyDivisible == false);
echo $num;
?>