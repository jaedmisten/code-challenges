<?php
/*
 * 2/8/2021
 *
 * Passwordify string
 * 
 * code golf link:  https://codegolf.stackexchange.com/questions/76486/passwordify-the-string?rq=1
 * 
 * Write a program that takes string as input.
 * 1. Replace all spaces with underscore.
 * 2. Move all numbers to the end of the string in order that they appear from left to right.
 * 3. For every letter in string, randomly change it to uppercase or lowercase.
 * 
 * ex. input: 'pa55 w0rd'
 *    output: 'pA_Wrd550'
 *
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$inputStr = str_ireplace(' ', '_', $_POST['inputPassword']); 
	
	$digitStr = "";
	$charStr = "";
	for ($i = 0; $i < strlen($inputStr); $i++) {
		if (is_numeric($inputStr[$i])) {
			$digitStr .= $inputStr[$i];
		} else {
			$charStr .= (rand(0, 1) == 0) ? strtolower($inputStr[$i]) : strtoupper($inputStr[$i]);
		}
	}
	
	$passwordifyStr = $charStr . $digitStr;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Passwordify String</title>
	<style>
		#passwordify-string {
			font-size: 30px;
		}
	</style>
</head>

<body>

	<form action="passwordify_string3.php" method="post">
		<input type="text" id="inputPassword" name="inputPassword" value="<?php if (isset($_POST['inputPassword'])) echo $_POST['inputPassword'] ?>">
		<input type="submit" value="submit">
	</form>
	<br>
	<div id="passwordify-string"><?php if (isset($passwordifyStr)) echo $passwordifyStr?></div>

</body>
</html>