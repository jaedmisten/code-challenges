<?php
/* 6/10/21
 * https://projectlovelace.net/problems/almost-pi/
 * 
 * Calculate the approximation of pi using the below formula.
 * input: n terms
 * 4 * ∑((-1^k)/(2k+1)) from k=0 to k=n
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["input"]) && is_numeric($_POST["input"]) && $_POST["input"] > 0) {
        $n = $_POST["input"];
        $pi = 0;
        for ($k = 0; $k < $n; $k++) {
            $pi += pow(-1, $k) / (2 * $k + 1);
        }
        $pi *= 4;
    } else {
        $error = "Incorrect input. Input must be a number greater than 0.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Almost Pi</title>
    <style>
        #output {
            color: blue;
            font-size: 25px;
        }
        #errorMsg {
            color: red;
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>

<body>
<form action="08-almost_pi.php" method="POST">
    Input: <input type="number" id="input" name="input" value="<?php if (isset($n)) echo $n; ?>"><br>
    <input type="submit" id="submit" name="submit" value="submit">
</form><br>
<div id="output"><?php if (isset($pi)) echo $pi; ?></div>
<div id="errorMsg"><?php if (isset($error) && $error == true) echo $error; ?></div>
</body>
</html>