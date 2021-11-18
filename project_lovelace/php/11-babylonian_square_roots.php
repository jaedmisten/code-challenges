<?php
/*
 * 11/17/2021
 * https://projectlovelace.net/problems/babylonian-square-roots/
 * 
 *  Calculate the square root of input using the babylonian square root method.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s = $_POST["input"];
    if (is_numeric($s) && $s > 0) {
        $guess = $s/4;
        $maxAttempts = 10000;
        $i = 0;
        while (pow($guess, 2) != $s && $i <= $maxAttempts) {
            $guess = ($guess + $s/$guess)/2;
            $difference = $s - pow($guess, 2);
            if ($difference <= 0.00000000001 && $difference >= -0.00000000001) {
                break;
            }
            $i++;
        }
        $squareRoot = $guess;
    } else {
        $errorMsg = "Incorrect input. The input must be a number greater than 0.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Babylonian Square Roots</title>
    <style>
        #squareRoot {
            font-size: 18px;
        }
        #errorMsg {
            color: red;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form id="squareRoot" action="11-babylonian_square_root2.php" method="POST">
        Input: <input type="number" id="input" name="input" value="<?php if (isset($s)) echo $s; ?>"><br>
        <input type="submit" id="submit" name="submit" value="Submit">
    </form>
    <br>
    <div id="squareRoot"><?php if (isset($squareRoot)) echo $squareRoot; ?></div>
    <div id="errorMsg"><?php if (isset($errorMsg)) echo $errorMsg; ?></div>
</body>
</html>