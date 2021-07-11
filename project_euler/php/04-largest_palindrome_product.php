<?php 
/*
 * 7/11/2021
 * Project Euler #3 Largest Palindrome Product: https://projecteuler.net/problem=4
 *
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

$palindromes = [];
for ($i = 900; $i <= 999; $i++) {
    for ($j = 900; $j <= 999; $j++) {
        if (checkPalindrome($i * $j)) {
            $palindromes[] = $i * $j;
        }
    }
}
echo array_pop($palindromes);

function checkPalindrome($num) {
    $reverseNumStr = reverseString((string) $num);
    return ($num == $reverseNumStr) ? true : false;
}

function reverseString($str) {
    $reverseStr = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reverseStr .= $str[$i];
    }
    return $reverseStr;
}
?>