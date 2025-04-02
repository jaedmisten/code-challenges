<?php
/*
 * 2025-04-02
 * Reversing of Words
 * Code Golf link: https://codegolf.stackexchange.com/questions/121149/reversing-of-words
 * 
 * Given a string that contains words separated by single space, reverse the words in the string.
 */
$strings = [
    "Man bites dog",
    "The quick brown fox jumps over the lazy dog",
    "Hello world  ",
    "  Nothing Changes If Nothing Changes   ",
];
foreach($strings as $string) {
    echo $string . '<br>';
    echo reverseWords($string) . '<br><br>';
}

function reverseWords($string) {
    return join(' ', array_reverse(explode(' ', trim($string))));
}

?>