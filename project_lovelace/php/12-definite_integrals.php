<?php
/*
 * 6/30/21
 * https://projectlovelace.net/problems/temperature-variations/
 *
 * Write a program that takes a list of input temperatures and calculates and 
 * outputs the mean and standard deviation.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = false;
    if (isset($_POST["heights"]) && $_POST["heights"] != "") {
        $heightsInput = $_POST["heights"];
    } else {
        $error = true;
    }
    if (isset($_POST["width"]) && is_numeric($_POST["width"])) {
        $width = $_POST["width"];
    } else {
        $error = true;
    }

    if (!$error) {
        if ($heightsInput[0] == '[' && $heightsInput[strlen($heightsInput)-1] == ']') {
            $heightsInputStr = trim($heightsInput, '[, ]');
            $heights = array_map('trim', explode(',', $heightsInputStr)); 
        } else {
            $error = true;
        }     
    }
    
    if (!$error) {
        $avg = 0;
        for ($i = 0; $i < count($heights); $i++) {
            if (!is_numeric($heights[$i])) {
                $error = true;
                $avg = null;
                break;
            }
            $avg += $heights[$i] * $width;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Definite Integrals</title>
    <style>
        #output {
            color: blue;
            font-size: 20px;
        }
        #errorMsg {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form action="12-definite_integrals.php" method="POST">
Input list of rectangles heights: <input type="text" name="heights" value="<?php if (isset($heightsInput)) echo $heightsInput; ?>"><br>
Input rectangle width: <input type="number" step=".1" name="width" value="<?php if (isset($width)) echo $width; ?>"><br>
<input type="submit" name="submit" value="submit">
</form>
<br>
<?php if (isset($avg)) echo "<div id=\"output\">Output area: $avg</div>"; ?>
<?php if (isset($error) && $error != false) echo "<div id=\"errorMsg\">Incorrect input. Width must be a number. Heights input should start with [ and end with ] and be numbers separated by commas. e.g. [1, 2, 3]</div>"; ?>
</body>
</html>