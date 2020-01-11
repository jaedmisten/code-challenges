<?php
    /*
    * 1/11/2019
    *  
    * https://projectlovelace.net/problems/nand-gate/
    *  
    * Write a function that takes input of integers for A and B and calculates the NAND gate.
    * 
    * NAND Gate table:
    * A  B  Q
    * 0  0  1
    * 0  1  1
    * 1  0  1
    * 1  1  0
    */
    if (isset($_POST["inputA"]) && ($_POST["inputA"] == "0" || $_POST["inputA"] == "1")) {
        $inputA = $_POST["inputA"];
    }

    if (isset($_POST["inputB"]) && ($_POST["inputB"] == "0" || $_POST["inputB"] == "1")) {
        $inputB = $_POST["inputB"];
    }

    if (isset($inputA) && isset($inputB)) {
        $outputQ = ($inputA == 1 && $inputB == 1) ? "0" : "1";
    } else {
        $outputQ = null;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NAND gate</title>
    <style>
        #wrapper {
            text-align: center;
        }
        .output {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>
<div id="wrapper">
    <h1>NAND gate</h1>

    <form action="3-NAND_gate.php" method="post">
        Input A: <select name="inputA">
                    <option <?php if (isset($inputA) && $inputA == 0) echo "selected"; ?>>0</option>
                    <option <?php if (isset($inputA) && $inputA == 1) echo "selected"; ?>>1</option>
                 </select>
        <br><br>
        Input B: <select name="inputB">
                    <option <?php if (isset($inputB) && $inputB == 0) echo "selected"; ?>>0</option>
                    <option <?php if (isset($inputB) && $inputB == 1) echo "selected"; ?>>1</option>
                 </select>
        <br><br>
        <input type="submit" name="Submit">
    </form>

    <?php if (isset($outputQ)) echo "<br><br><span class=\"output\">Output NAND(A, B): $outputQ</span>" ?>
</div>
</body>
</html>