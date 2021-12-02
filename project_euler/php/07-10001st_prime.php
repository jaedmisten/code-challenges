<?php
/*
 * 12/1/2021
 * Project Euler #7 10001st prime
 * https://projecteuler.net/problem=7
 * 
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 * What is the 10,001st prime number?
 */

$primeCounter = 1;   // First prime number is 2. The rest of the prime numbers are odd.
$lastPrimeNum = 0;
for ($i = 3; $primeCounter <= 10000; $i += 2) {
    for ($j = 3; $j <= $i; $j += 2) {
        if ($j === $i) {
            $lastPrimeNum = $i;
            $primeCounter++;
            break;
        }
        if ($i % $j === 0) {
            // Not a prime number.
            break;
        }
    }
}
echo $lastPrimeNum;

?>