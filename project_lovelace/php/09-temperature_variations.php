<?php
/*
 * 6/15/2021
 * https://projectlovelace.net/problems/temperature-variations/
 *
 * Write a program that takes a list of input temperatures and calculates and 
 * outputs the mean and standard deviation.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = false;
    $input = trim($_POST["input"]);
    if (!isset($input[0]) || $input[0] != '[' || $input[strlen($input) -1] != ']') {
        $error = true;
    } else {
        $inputTemps = trim($input, "[]");
        $temps = array_map('trim', explode(',', $inputTemps));

        $total = 0;
        for ($i = 0; $i < count($temps); $i++) {
            if (!is_numeric($temps[$i])) {
                $error = true;
                break;
            }
            $total += $temps[$i];
        }
        if (!$error) {
            $avg = $total / count($temps);

            $deviationTotal = 0;
            for ($i = 0; $i < count($temps); $i++) {
                $deviationTotal += pow($temps[$i] - $avg, 2);
            }
            $standardDeviation = sqrt($deviationTotal / count($temps));
        }       
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Temperature Variations</title>
    <style>
        #input {
            width: 500px;
        }
        #output {
            color: blue;
            font-size: 25px;
        }
        #error {
            color: red;
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>

<body>
<form action="09-temperature_variations.php" method="POST">
    Input temperatures: <input type="text" id="input" name="input" value="<?php if (isset($input)) echo $input; ?>"><br>
    <input type="submit" id="submit" name="submit">
</form><br>
<div id="output"><?php if (isset($avg) && isset($standardDeviation)) echo "Output mean: " . round($avg,3) . "<br>Output standard deviation: " . round($standardDeviation, 3) ?></div>
<div id="error"><?php if ($error == true) echo "Incorrect input. Input needs to start with '[' and end with ']' and have only numbers separated by commas in the brackets. e.g. [70, 80, 90]"; ?></div>
</body>
</html>