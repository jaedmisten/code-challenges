<?php
/* 1/30/22
 * Code Golf - This isn't rocket science
 * https://codegolf.stackexchange.com/questions/91182/this-isnt-rocket-science/91199
 * 
 * Write a program or function that takes in a single-line string. You can assume it only contains printable ASCII. Print or return a string of an ASCII art rocket such as
 *
 *   |
 *  /_\
 *  |E|
 *  |a|
 *  |r|
 *  |t|
 *  |h|
 *  |_|
 * /___\
 *  VvV
 * 
 */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputStr = $_POST["inputStr"];

    $rocketStr = "&nbsp;&nbsp;&nbsp;&nbsp;|<br>&nbsp;&nbsp;/_\\<br>";
    for ($i = 0; $i < strlen($inputStr); $i++) {
        $rocketStr .= "&nbsp;&nbsp;&nbsp;|";
        $rocketStr .= ($inputStr[$i] === " ") ? "&nbsp;&nbsp;" : "$inputStr[$i]";
        $rocketStr .= "|<br>";
    }
    $rocketStr .= "&nbsp;&nbsp;&nbsp;|_|<br>&nbsp;/___\\<br>&nbsp;&nbsp;VvV";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rocket Science</title>
</head>
<body>
    <form method="POST">
        Input String: <input type="text" id="inputStr" name="inputStr" value="<?php if(isset($inputStr)) echo $inputStr; ?>"><br>
        <input type="submit" id="submit" name="submit"> 
    </form>
    <br>
    <div id="rocket"><?php if(isset($rocketStr)) echo $rocketStr; ?></div>
</body>
</html>