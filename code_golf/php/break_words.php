<?php
/*
 * 12/16/2024
 * Break a word into vowels and consonants
 * https://codegolf.stackexchange.com/questions/273368/break-a-word-into-vowels-and-consonants
 * 
 * Given an string n, output two strings, 
 * namely the string consisting of vowels "a", "e", "i", "o", and "u", 
 * and the string consisting of consonants.
 */
$words = [
    'Environment',
    'PyThOn',
    'nAsA',
    'ReVoLuTiOn',
    'jAvAsCrIpT',
    'WiNe',
    'MiXeD',
    'tEaM',
    'HeArT',
    'cOdInG',
];
foreach($words as $word) {
    echo $word . '<br>';
    echo '<pre>';
    print_r(breakWord($word));
    echo '</pre>';
    echo '<hr>';
}

function breakWord($word) {
    $vowels = preg_replace('/[^aeiou]/i', '', $word);
    $consonants = preg_replace('/[aeiou]/i', '', $word);
    return [$vowels, $consonants];
}

?>