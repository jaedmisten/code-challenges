<?php
/*
11/22/2019
 
Generate random UUID.
 
code golf link:  https://codegolf.stackexchange.com/questions/58442/generate-random-uuid?rq=1
 
Generate 32 random hexadecimal digits in the form 8-4-4-4-12 digits.
example: ab13901d-5e93-1c7d-49c7-f1d67ef09198
*/

$uuid = "";
$hexChars = "0123456789ABCDEF";

for ($i = 1; $i <= 8; $i++) {
	$uuid .= $hexChars[rand(0, 15)];
}
$uuid .= "-";

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		$uuid .= $hexChars[rand(0, 15)];
	}
	$uuid .= "-";
}

for ($i = 1; $i <= 12; $i++) {
	$uuid .= $hexChars[rand(0, 15)];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Generate Random UUID</title>
</head>

<body>

<h1><?php echo $uuid; ?></h1>

</body>
</html>