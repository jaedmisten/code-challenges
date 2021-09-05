<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['luminosity']) && ($_POST['luminosity'] != '') && isset($_POST['luminosity']) && is_numeric($_POST['luminosity']) && ($_POST['luminosity'] > 0)) {
        $luminosity = $_POST['luminosity'];
    }
    if (isset($_POST['distance']) && $_POST['distance'] != ' ' && is_numeric($_POST['distance']) && $_POST['distance'] > 0) {
        $distance = $_POST['distance'];
    }

    if (!isset($luminosity) || !isset($distance)) {
        $errorMsg = "Incorrect input. All input must be a number and must be greater than 0.";
    } else {
        $innerRadius = sqrt($luminosity/1.1);
        $outerRadius = sqrt($luminosity/.54);

        if ($distance < $innerRadius) {
            $habitability = "too hot";
        } else if ($distance > $innerRadius && $distance < $outerRadius) {
            $habitability = "just right";
        } else if ($distance > $outerRadius) {
            $habitability = "too cold";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Habitable Exoplanets</title>
    <style>
        #output {
            font-size: 18px;
        }
        #errorMsg {
            font-size: 20px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>

<form action="14-habitable_exoplanets.php" method="POST">
    Input absolute luminosity: <input type="number" step=".01" id="luminosity" name="luminosity" value="<?php if(isset($luminosity)) echo $luminosity; ?>"><br>
    Input exoplanet distance: <input type="number" step=".01" id="distance" name="distance" value="<?php if(isset($distance)) echo $distance; ?>"><br>
    <input type="submit" id="submit" name="submit" value="submit">
</form>

<div id="output"><?php if (isset($habitability)) echo '"' . $habitability . '"' ?></div>
<div id="errorMsg"><?php if (isset($errorMsg)) echo $errorMsg; ?></div>
</body>
</html>