<?php
/*
 * 5/24/2021
 *
 * https://projectlovelace.net/problems/compound-interest/
 *
 * Calculate the total amount of money after a certain amount of years if 
 * interest is compounded yearly.
 *
 * m = amount of money
 * r = interest rate (between 0 and 1)
 * n = number of years
 * M = total amount of money
 * M = m(1 + r)^n
 * 
 */
if ($_SERVER["REQUEST_METHOD"]) {
	if(isset($_POST)) {
		$amount = $_POST["amount"];
		$years = $_POST["years"];
		$rate = $_POST["rate"];
		
		if (!is_numeric($amount) || $amount < 0 || !is_numeric($years) || $years < 0 || !is_numeric($rate) || $rate < 0) {
			$error = "Input error. All input must be a number that is greater than 0.";
		} else {
			$totalAmount = $amount * pow((1 + $rate), $years);
		}		
	}	
}
?>
<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="utf-8">
	<title>Compound Interest</title>
	<style>
		#result {
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
<h1>Compound Interest</h1>
<form action="05-compound_interest.php" method="post">
	Amount: <input type="number" name="amount" value="<?php if (isset($amount)) echo $amount; ?>"><br>
	Years: <input type="number" name="years" value="<?php if (isset($years)) echo $years; ?>"><br>
	Interest Rate: <input type="number" step="0.01" name="rate" value="<?php if (isset($rate)) echo $rate ?>"><br>
	<input type="submit" value="Submit">
</form>
<?php if(isset($error)) echo "<div id=\"errorMsg\">$error</div>";?>
<?php if(isset($totalAmount)) echo "<div id=\"result\">Total: " . number_format($totalAmount, 2) . "</div>"; ?>
</body>
</html>