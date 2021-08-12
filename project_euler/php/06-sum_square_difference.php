<?php
/*
 * 8/12/21
 * Project Euler: Sum Square difference
 * https://projecteuler.net/problem=6
 * 
 * The sum of the squares of the first ten natural numbers is 385.
 * The square of the sum of the first ten natural numbers is 3025.
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 - 385 = 2640.
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */
$sumOfSquares = 0;
for ($i = 1; $i <= 100; $i++) {
    $sumOfSquares += pow($i, 2);
}

$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    $sum += $i;
}
$SquareOfSum = pow($sum, 2);

$sumSquareDifference = $SquareOfSum - $sumOfSquares;
echo 'sumSquareDifference: ' . $sumSquareDifference;
