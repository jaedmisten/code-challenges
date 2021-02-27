<?php
/*
* 12/5/2019
*
* https://projectlovelace.net/problems/speed-of-light/
*
* Write a function that takes the input of distance in meters and calculates 
* the time in speed of light it takes to travel that distance.
* 
* Light travels at constant speed c of 299,792,458 meters per second.
* The time t it takes to travel a distance d is t=d/c.
* 
*/
define("SPEED_OF_LIGHT", 299792458);
if (isset($_POST["distance"]) && $_POST["distance"] > 0) {
    $time = $_POST["distance"] / SPEED_OF_LIGHT;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Speed Of Light</title>
    <style>
        #wrapper {
            text-align: center
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <form action="2-speed_of_light.php" method="post">
            Input distance (meters): <input type="number" name="distance" value="<?php if (isset($_POST["distance"])) echo $_POST["distance"];  ?>">
            <br><br>
            <input type="submit" name="submit" value="Submit">
            <br><br>
            <?php if (isset($time)) echo "Output time: " . number_format($time, 10) . " seconds"; ?>
        </form>
    </div>
</body>
</html>