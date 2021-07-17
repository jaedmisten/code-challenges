<?php
/* 7/15/2021
 * Extract string from a given string
 * code golf link:  https://codegolf.stackexchange.com/questions/50379/extract-a-string-from-a-given-string?rq=1
 * 
 * You are given a string and two characters. You have to print the string between 
 * these characters from the string.
 * Input will first contain a string (not empty or null). In the next line, there 
 * will be two characters separated by a space.
 */

$inputStrings = [
    ["Hello World!", "H !"],
    ['<>code<>', "> <"],
    ['>code<', "> <"],
    ["What's what?", "' '"],
    ["abcdefghijklmnopqrstuvwxyz", "n z"],
    ["abcdefghijklmnopqrstuvwxyz", "z n"],
    ["Testing...", "e T"],
    ["agdagaga", "a"],
    ["Last test-case", "  -"],
];
echo '<pre>';
print_r($inputStrings);
echo '</pre>';

for ($i = 0; $i < count($inputStrings); $i++) {
    //echo "<br>";

    echo $inputStrings[$i][0] . "<br>";
    echo $inputStrings[$i][1] . "<br>";
    //echo $str . "<br>";

    $innerStr = getInnerString($inputStrings[$i][0], $inputStrings[$i][1]);

    echo "$innerStr<br><br>";
    //echo "<br>";
}

function getInnerString($str, $endpoints) {
    //echo "$str: {$str} <br>";
    //echo "\$endpoints: $endpoints<br>";
    //echo "endpoints[0]: $endpoints[0]<br>";
    //echo "endpoints[2]: $endpoints[2]<br>";

    if (strlen($str) < 3 || strlen($str) > 100) {
        return "Incorrect Input: Input string must be between 3 and 100 characters.<br>";
    }

    if (hasInvalidChars($str) || hasInvalidChars($endpoints)) {
        return "Incorrect Input: Input string and endpoints string can only have characters between a space character (32) and a tilde character '~' (127);<br>";
    }

    if ($endpoints && (strlen($endpoints) == 3) && ($endpoints[1] == " ") && ($endpoints[0] !== $endpoints[2])) {
        $endpoint1 = $endpoints[0];
        $endpoint2 = $endpoints[2];
    } else {
        return "Incorrect Input: Endpoints must be 2 different characters with a space between them.<br>";
    }

    $endpoint1Position = strpos($str, $endpoint1);
    //echo "position1: $endpoint1Position<br>";

    $endpoint2Position = strpos($str, $endpoint2);
    //echo "position2: $endpoint2Position<br>";

    if (isEndpointDuplicated($str, $endpoint1) || isEndpointDuplicated($str, $endpoint2)) {
        //echo '"null"' . "<br>";
        return '"null"';
    }

    if ($endpoint1Position < $endpoint2Position) {
        $innerStr = substr($str, $endpoint1Position + 1, $endpoint2Position - $endpoint1Position - 1);
    } else {
        $innerStr = substr($str, $endpoint2Position + 1, $endpoint1Position - $endpoint2Position - 1);
    }
    return '"' . $innerStr . '"';
}
 
function isEndpointDuplicated($str, $endpoint) {
    $charCount = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $endpoint) {
            $charCount++;
        }
        if ($charCount > 1) {
            return true;
        }
    }
    return false;
}

// Check if input string has any characters outside of the correct ASCII range (space (32) to tilde (126)).
function hasInvalidChars($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        if (ord($str[$i]) < 32 || ord($str[$i]) > 126) {
            return true;
        }
    }
    return false;
}