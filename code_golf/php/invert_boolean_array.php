<?php
/*
 * 2025-04-26
 * Code Golf: Invert a boolean array
 * https://codegolf.stackexchange.com/questions/93310/invert-a-boolean-array
 *
 * Given a boolean array (Or an acceptable alternative), you can assume the array will never be more than 32 elements long.
 * e.g. input: [false, false, true, false, false]
 * Invert every element of the array and output it.
 * e.g. output: [true, true, false, true, true]
 */
$arr = [true, false, true, true, false, false, false, true];
$invertedArr = array_map(fn($x) => !$x, $arr);
echo "<pre>";
var_dump($invertedArr);
echo "</pre>";

?>