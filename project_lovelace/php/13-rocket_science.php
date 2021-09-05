<?php
/*
* 7/19/2021
 * https://projectlovelace.net/problems/rocket-science/
 * 
 * Calculate the mass of fuel needed by a rocket to escape Saturn.
 * 
 * m fuel = M(e^(v/ve) - 1))
 * M: Mass of the rocket with no fuel.
 * e: Euler's number 2.71828
 * v: Velocity the rocket needs to escape the planet.
 * ve: Exhaust velocity of the rocket.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["velocity"] && is_numeric($_POST["velocity"]) && $_POST["velocity"] >= 0) {
        $velocity = $_POST["velocity"];
        $rocketMass = 250000;
        $exhaustVelocity = 2550;
        $fuel = $rocketMass * (pow(M_E, $velocity/$exhaustVelocity) -1);
    } else {
        $errorMsg = "Incorrect Input: Input velocity must be a number and can not be negative.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rocket Science</title>
    <style>
        #outputVelocity {
            font-size: 20px;
            color: blue;
        }
        #errorMsg {
            font-size: 20px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
<form action="13-rocket_science.php" method="post">
    Velocity: <input type="number" name="velocity" value="<?php if (isset($_POST["velocity"])) echo $_POST["velocity"]; ?>"><br>
    <input type="submit" name="submit">
</form>
<br>
<div id="outputVelocity"><?php if (isset($fuel)) echo round($fuel, 2); ?></div>
<div id="errorMsg"><?php if (isset($errorMsg)) echo $errorMsg; ?></div>
</body>
</html>