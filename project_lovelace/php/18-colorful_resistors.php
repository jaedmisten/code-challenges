<?php
/*
 * 2/9/21
 * Project Lovelace 18 Colorful resistors: https://projectlovelace.net/problems/colorful-resistors/
 * 
 * Using a list of colors as input compute the nominal resistance (i.e. as told by the colored bands, 
 * with out any tolerance), as well as the minimum and maximum resistance value of the resistor, 
 * and return them in that order.
 */
$digits = [
    'black' => 0,
    'brown'=> 1,
    'red'=> 2,
    'orange' => 3,
    'yellow'=> 4,
    'green' => 5,
    'blue' => 6,
    'violet' => 7,
    'grey' => 8,
    'white' => 9
];
$multiplier = [
    'pink' => 0.001,
    'silver' => 0.01,
    'gold' => 0.1,
    'black' => 1,
    'brown' => 10,
    'red' => 100,
    'orange' => 1000,
    'yellow' => 10000,
    'green' => 100000,
    'blue' => 1000000,
    'violet' => 10000000,
    'grey' => 100000000,
    'white' => 1000000000
];
$tolerance = [
    'none' => 0.2,
    'silver' => 0.1,
    'gold' => 0.05,
    'brown' => 0.01,
    'red' => 0.02,
    'green' => 0.005,
    'blue' => 0.0025,
    'violet'=> 0.001,
    'grey' => 0.0005
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['bandColors']) && $_POST['bandColors'] !== '') {
        $bandColors = trim($_POST['bandColors']);
        
        if ($bandColors[0] === '[' && $bandColors[strlen($bandColors) - 1] === ']') {
            $bandColorsStr = substr($bandColors, 1, -1);
            $bandColorsArr = str_getcsv($bandColorsStr, ", ", '');

            if (count($bandColorsArr) === 4) {
                if ( isset($digits[$bandColorsArr[0]]) && isset($digits[$bandColorsArr[1]]) && isset($multiplier[$bandColorsArr[2]]) ) {
                    $digit1 = $digits[$bandColorsArr[0]];
                    $digit2 = $digits[$bandColorsArr[1]];
                    $digitsNum = (int) $digit1 . $digit2;
                    $multiplier = $multiplier[$bandColorsArr[2]];
                    $nominalResistance = $digitsNum * $multiplier;

                    if ( isset($tolerance[$bandColorsArr[3]]) ) {
                        $tolerance = $tolerance[$bandColorsArr[3]];
                        $minResistance = $nominalResistance - ($nominalResistance * $tolerance);
                        $maxResistance = $nominalResistance + ($nominalResistance * $tolerance);
                    } else {
                        $errorMsg = "<p>Unable to calculate minimum and maximum resistance. Tolerance value is missing or incorrect.</p>";
                    }
                } else {
                    $errorMsg = "<p>There was an error calculating the nominal resistance. Please check the input values.</p>";
                }
            } elseif (count($bandColorsArr) === 5) {
                if ( isset($digits[$bandColorsArr[0]]) && isset($digits[$bandColorsArr[1]]) && isset($digits[$bandColorsArr[2]]) && isset($multiplier[$bandColorsArr[3]]) ) {
                    $digit1 = $digits[$bandColorsArr[0]];
                    $digit2 = $digits[$bandColorsArr[1]];
                    $digit3 = $digits[$bandColorsArr[2]];
                    $digitsNum = (int) $digit1 . $digit2 . $digit3;
                    $multiplier = $multiplier[$bandColorsArr[3]];    
                    $nominalResistance = $digitsNum * $multiplier;

                    if ( isset($tolerance[$bandColorsArr[4]]) ) {
                        $tolerance = $tolerance[$bandColorsArr[4]];
                        $minResistance = $nominalResistance - ($nominalResistance * $tolerance);
                        $maxResistance = $nominalResistance + ($nominalResistance * $tolerance);
                    } else {
                        $errorMsg = "<p>Unable to calculate minimum and maximum resistance. Tolerance value is missing or incorrect.</p>";
                    }

                } else {
                    $errorMsg = "<p>There was an error calculating the nominal resistance. Please check the input values.</p>";
                }
            }
            
        } else {
            $errorMsg = "<p>ERROR: Input must start with '[' and end with ']'.</p>";
        }  
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Colorful Resistors</title>
    <style>
        #errorMsg {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form id="resistorBandColors" method="POST">
        Input resistor band colors: <input type="text" size="50" id="bandColors" name="bandColors" value='<?php if(isset($bandColors)) echo $bandColors; ?>'><br>
        <input type="submit" id="submit" name="submit" value="submit">
    </form>
    <div id="nominalResistance"><?php if (isset($nominalResistance)) echo "Output nominal resistance: $nominalResistance"; ?><div>
    <div id="minResistance"><?php if (isset($minResistance)) echo "Output minimum resistance: $minResistance"; ?><div>
    <div id="maxResistance"><?php if (isset($maxResistance)) echo "Output maximum resistance: $maxResistance"; ?><div>
    <div id="errorMsg"><?php if (isset($errorMsg)) echo $errorMsg; ?></div>
</body>
</html>