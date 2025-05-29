<?php
/*
 * 10/23/2021
 * Project Lovelace: https://projectlovelace.net/problems/chaos/
 * Take a parameter input of r and calculate the first 51 values of the logistic map.
 * logistic map: xn+1 = r * xn * (1 − xn)
 */
if (isset($_POST["input"]) && is_numeric($_POST["input"]) && $_POST["input"] > 0 && $_POST["input"] <= 4) {
    $r = $_POST["input"];
    $x = .5;

    $output = "[" . $x;
    for ($i = 1; $i <= 50; $i++) {
        $xn = $r * $x * (1 - $x);
        $output .= ", " . round($xn, 6) ;
        $x = $xn;
    }
    $output .= "]";
} else {
    $errorMsg = "Input Error: Input must be a number greater than 0 and less than 4.";
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chaos</title>
    <style>
        #errorMsg {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form action="15-chaos.php" method="POST">
    Input: <input type="number" step=".01" id="input" name="input" value="<?php if(isset($_POST["input"])) echo $_POST["input"]; ?>"><br>
    <input type="submit" id="submit" name="submit" value="submit">
</form>
<div id="output"><?php if (isset($output)) echo $output; ?></div>
<div id="errorMsg"><?php if (isset($errorMsg)) echo $errorMsg; ?></div>
</body>
</html>