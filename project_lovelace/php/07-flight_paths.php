<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = false;
    $point1 = $_POST["point1"];
    $point2 = $_POST["point2"];
    $point1LatLong = explode(",", $point1);
    $point2LatLong = explode(",", $point2);
    if (count($point1LatLong) != 2 || count($point2LatLong) != 2) {
        $error = true;
    } else {
        $lat1 = trim($point1LatLong[0]);
        $long1 = trim($point1LatLong[1]);
        $lat2 = trim($point2LatLong[0]);
        $long2 = trim($point2LatLong[1]);
        if (!is_numeric($lat1) || $lat1 < -90 || $lat1 > 90 || !is_numeric($long1) || $long1 < -180 || $long1 > 180 || !is_numeric($lat2) || $lat2 < -90 || $lat2 > 90 || !is_numeric($long2) || $long2 < -180 || $long2 > 180) {
            $error = true;
        } else {
            define("PI", 3.14159265395);
            $lat1Radian = $lat1 * PI / 180;
            $long1Radian = $long1 * PI / 180;
            $lat2Radian = $lat2 * PI / 180;
            $long2Radian = $long2 * PI / 180;

            define("R", 6372.1);
            $distance = 2 * R * asin(sqrt(pow(sin(($lat2Radian - $lat1Radian)/2), 2) + cos($lat1Radian) * cos($lat2Radian) * pow(sin(($long2Radian - $long1Radian)/2) , 2)));
        }
    } 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Flight Paths</title>
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
<form action="07-flight_paths.php" method="POST">
    input point 1 (latitude, longitude): <input type="text" id="point1" name="point1" value="<?php if (isset($point1)) echo $point1; ?>"><br>
    input point 2 (latitude, longitude): <input type="text" id="point2" name="point2" value="<?php if (isset($point2)) echo $point2; ?>"><br>
    <input type="submit" value="submit"><br><br>
    <div id="output"><?php if (isset($distance)) echo round($distance,3); ?></div>
    <div id="errorMsg"><?php if(isset($error) && $error==true) echo "Incorrect input. Input must be two numbers separated by a comma. Latitude must be between -90 to 90. Longitude must be between -180 to 180."; ?></div>
</form>
</body>
</html>