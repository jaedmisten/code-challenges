<?php
/*
 * 6/1/2019
 * 
 * Java is to JavaScript as car is to carpet.
 * 
 * code golf link:  https://codegolf.stackexchange.com/questions/132272/java-is-to-javascript-as-car-is-to-carpet
 * 
 * Write a program which takes in a string as input. Return car if the string begins with "Java" 
 * and does not include "JavaScript". 
 * Otherwise, return carpet.
 * Input matching should be case insensitive.
 */
$words = [
    'java',
    'javafx',
    'javabeans',
    'java-stream',
    'java-script',
    'java-8',
    'java.util.scanner',
    'java-avascript',
    'JAVA-SCRIPTING',
    'javacarpet',
    'javascript',
    'javascript-events',
    'facebook-javascript-sdk',
    'javajavascript',
    'jquery',
    'python',
    'rx-java',
    'java-api-for-javascript',
    'not-java',
    'JAVASCRIPTING',
    'Jessie Andrew Edmisten',
    'Jessie Andrew JavAsCrIpT Edmisten',
];

foreach($words as $word) {
    echo "$word<br>";
    echo checkString($word);
    echo "<br><br>";
}

function checkString($word) {
    $word = strtolower($word);
    if (substr($word, 0, 4) === 'java' && !strstr($word, 'javascript')) {
        return 'car';
    }

    return 'carpet';
}

?>
