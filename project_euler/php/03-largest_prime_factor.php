<?php
/* 7/6/21
 * Project Euler #3: https://projecteuler.net/problem=3
 *
 * What is the largest prime factor of the number 600851475143?
 */
$dividend = 600851475143;
$primeFactors = [];
$i = 2;
while ($i <= $dividend) {
    if (fmod($dividend, $i) == 0) {
        $dividend = $dividend / $i;
        $primeFactors[] = $i;
        $i = 2;
    } else {
        $i++;
    }
}
echo $primeFactors[count($primeFactors) - 1];