<?php
/*
 * 5/30/2021
 *
 * https://projectlovelace.net/problems/wind-chill/
 *
 * Write a function that takes input of temperature in celcius and wind speed in kilometers per hour.
 * Then calculate the wind chill index.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$temp = $_POST["temp"];
	$windSpeed = $_POST["windSpeed"];
	
	if (!is_numeric($temp) || !is_numeric($windSpeed) || $windSpeed < 0) {
		$errorMsg = "Incorrect input. All input must be a number and wind speed must be greater than 0.";
	} else {
		$windChill = 13.12 + 0.6215 * $temp - 11.37 * pow($windSpeed, 0.16) + 0.3965 * $temp * pow($windSpeed, 0.16);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wind Chill</title>
	<style>
		#result {
			color: blue;
			font-size: 25px;
			font-weight: bold;
		}
		#errorMsg {
			color: red;
			font-size: 25px;
			font-weight: bold;
		}
	</style>
</head>

<body>

<form action="06-wind_chill.php" method="POST">
	Input temperature: <input type="number" step=".1" id="temp" name="temp" value="<?php if(isset($temp)) echo $temp; ?>"><br>
	Input wind speed: <input type="number" step=".1" id="windSpeed" name="windSpeed" value="<?php if(isset($windSpeed)) echo $windSpeed; ?>"><br>
	<input type="submit" id="submit" name="submit" value="Submit">
</form>
<br>
<?php if (isset($windChill)) echo "<div id=\"result\">Output wind chill index: " . number_format($windChill, 2) . "</div>"; ?>
<?php if (isset($errorMsg)) echo "<div id=\"errorMsg\">$errorMsg</div>" ?>
</body>
</html>
