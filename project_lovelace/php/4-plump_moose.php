<?php
/*
 * 5/22/21
 *
 * https://projectlovelace.net/problems/plump-moose/
 *
 * Calculate the expected body mass of a moose living at the input latitude 
 * using the equation: mass = a * latitude + b
 * a = 2.757
 * b = 16.793
 *
 */
if (isset($_POST["latitude"])) {
	$latitude = $_POST["latitude"];
	if (!is_numeric($latitude) || $latitude < 0 || $latitude > 90) {
		$errorMsg = "Incorrect input: Latitude must be a number between 0 and 90.";
	} else {
		$mass = 2.757 * $latitude + 16.793;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Plump Moose</title>
	<meta charset="utf-8">
	<style>
		.output {
			font-size: 20px;
			font-weight: bold;
		}
		.error {
			color: red;
			font-size: 20px;
			font-weight: bold;
		}
	</style>
</head>

<body>
	<h1>Plump Moose</h1>
	<form action="4-plump_moose.php" method="post">
		Input latitude: <input type="text" name="latitude" value="<?php if (isset($_POST["latitude"])) echo $_POST["latitude"]; ?>">
		<input type="submit" value="Submit">
	</form>
	<?php if (isset($mass)) echo "<span class=\"output\">Output body mass: $mass</span>"; ?>
	<?php if (isset ($errorMsg)) echo "<span class=\"error\">$errorMsg</span>"; ?>
</body>
</html>