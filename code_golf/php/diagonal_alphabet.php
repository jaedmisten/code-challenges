<?php
/*
 * 5/27/2020 
 * 
 * Diagonal Alphabet
 * 
 * code golf link: https://codegolf.stackexchange.com/questions/125117/diagonal-alphabet?noredirect=1&lq=1
 * 
 * Given no input, your task is to generate the following:
 * 
 * a
 *  b
 *   c
 *    d
 *     e
 *      f
 *       g
 *        h
 *         i
 *          j
 *           k
 *            l
 *             m
 *              n
 *               o
 *                p
 *                 q
 *                  r
 *                   s
 *                    t
 *                     u
 *                      v
 *                       w
 *                        x
 *                         y
 *                          z
 *                          
 */
 
// Using the alphabet as a string.
$str = "abcdefghijklmnopqrstuzwxyz";
for ($i = 0; $i < strlen($str); $i++) {
	for ($j = 0; $j < $i; $j++) {
		echo "&nbsp;";
	}
	echo $str[$i] . "<br>";
}

// Using the alphabet as an array.
$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
for ($i = 0; $i < count($array); $i++) {
	for ($j = 0; $j < $i; $j++) {
		echo "&nbsp;";
	}
	echo $array[$i] . "<br>";
}

// incrementing characters
for ($char = "a", $i = 1; $i <= 26; $i++, $char++) {
	for ($j = 1; $j < $i; $j++) {
		echo "&nbsp;";
	}
	echo $char . "<br>";
}

?>