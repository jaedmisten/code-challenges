<?php
/* 
 * 7/31/2019
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

$inputStrings = ['java', 'javafx', 'javabeans', 'java-stream', 'java-script', 'java-8', 'java.util.scanner', 
                 'java-avascript', 'JAVA-SCRIPTING', 'javacarpet', 'JAVACARPET', 'javascript', 'javascript-events',
                 'facebook-javascript-sdk', 'javajavascript', 'jquery', 'python', 'rx-java', 'java-api-for-javascript',
                 'not-java', 'JAVASCRIPTING', 'JaVaScRiPtInG'];

for ($i = 0; $i < count($inputStrings); $i++) {
    echo $inputStrings[$i] . '<br>';
    echo testString($inputStrings[$i]);
    echo '<br><br>';
}

function testString($string) {
    $string = strtolower($string);
    if (substr($string, 0, 4) == 'java') {
        if (strstr($string, "javascript")) {
            // String started with 'java' and included 'javascript'.
            return 'carpet';
        }

        // String started with 'java' and did not include 'javascript'.
        return 'car';
    }

    // String did not start with 'java'.
    return 'carpet';
}
 

?>