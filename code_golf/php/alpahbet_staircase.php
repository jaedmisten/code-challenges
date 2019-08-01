<?php

/* 
 * 8/1/2019
 * 
 * alphabet staircase
 * 
 * code golf link:  https://codegolf.stackexchange.com/questions/147469/alphabet-staircase
 * 
 * Create a program that outputs the following:
 * a
 * bb
 * ccc
 * dddd
 * eeeee
 * ffffff
 * ...
 * 
 */

// Using a string of the alphabet.
$alphaStr = 'abcdefghijklmnopqrstuvwxyz';
for ($i = 0; $i < strlen($alphaStr); $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $alphaStr[$i];
    }
    echo '<br>';
}

echo '<br><br>';

// Using an array of the alphabet.
$alphaArr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
for ($i = 0; $i < count($alphaArr); $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $alphaArr[$i];
    }
    echo "<br>";
}