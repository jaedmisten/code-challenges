<?php
/*
 * 2025-05-16
 * Code Golf: Modulus Summation
 * https://codegolf.stackexchange.com/questions/150563/modulus-summation?noredirect=1&lq=1
 * For this sequence, you take all the positive integers m less than the input n, 
 * and take the sum of n modulo each m. In other words:
 * ∑(x % k) from k=1 to k=x
 */
echo getModulusSummation(14);
echo "<br>";
echo getModulusSummation(52);
echo "<br>";
echo getModulusSummation(9);

function getModulusSummation($num) {
    $modulusSum = 0;
    for ($i = 1; $i < $num; $i++) {
        $remainder = $num % $i;
        $modulusSum += $remainder;
    }

    return $modulusSum;
}

?>