<?php
/* 6/26/2021
 * https://projectlovelace.net/problems/blood-types/
 *
 * Given a patient's blood type and a list of available blood types figure out if the patient will survive.
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputType = $_POST['inputType'];
    $availableTypes = (isset($_POST['availableTypes'])) ? $_POST['availableTypes'] : null;

    $oNegCompat = ["O-"];
    $oPosCompat = ["O-", "O+"];
    $aNegCompat = ["O-", "A-"];
    $aPosCompat = ["O-", "O+", "A-", "A+"];
    $bNegCompat = ["O-", "B-"];
    $bPosCompat = ["O-", "O+", "B-", "B+"];
    $abNegCompat = ["O-", "B-", "A-", "AB-"];
    $abPosCompat = ["O-", "O+", "B-", "B+", "A-", "A+", "AB-", "AB+"];

    switch($inputType) {
        case "O-":
            $compatTypes = $oNegCompat;
            break;
        case "O+":
            $compatTypes = $oPosCompat;
            break;
        case "A-":
            $compatTypes = $aNegCompat;
            break;
        case "A+":
            $compatTypes = $aPosCompat;
            break;
        case "B-":
            $compatTypes = $bNegCompat;
            break;
        case "B+":
            $compatTypes = $bPosCompat;
            break;
        case "AB-":
            $compatTypes = $abNegCompat;
            break;
        case "AB+":
            $compatTypes = $abPosCompat;
            break;
    }

    // Check if there is a match with available types and compatible types.
    $survive = false;
    if (isset($availableTypes)) {
        for ($i = 0; $i < count($availableTypes); $i++) {
            for ($j = 0; $j < count($compatTypes); $j++) {
                if ($availableTypes[$i] == $compatTypes[$j]) {
                    $survive = true;
                    break 2;
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blood Types</title>
</head>
<body>
<form action="10-blood_types.php" method="POST">
    Input Blood Type:
    <select id="inputType" name="inputType">
        <option value="O-" <?php if(isset($inputType) && $inputType == "O-") echo "selected"; ?>>O-</option>
        <option value="O+" <?php if(isset($inputType) && $inputType == "O+") echo "selected"; ?>>O+</option>
        <option value="A-" <?php if(isset($inputType) && $inputType == "A-") echo "selected"; ?>>A-</option>
        <option value="A+" <?php if(isset($inputType) && $inputType == "A+") echo "selected"; ?>>A+</option>
        <option value="B-" <?php if(isset($inputType) && $inputType == "B-") echo "selected"; ?>>B-</option>
        <option value="B+" <?php if(isset($inputType) && $inputType == "B+") echo "selected"; ?>>B+</option>
        <option value="AB-" <?php if(isset($inputType) && $inputType == "AB-") echo "selected"; ?>>AB-</option>
        <option value="AB+" <?php if(isset($inputType) && $inputType == "AB+") echo "selected"; ?>>AB+</option>
    </select>
    <br>
    Select Available Blood Types: 
    <input type="checkbox" name="availableTypes[]" value="O-" <?php if(isset($availableTypes) && in_array("O-", $availableTypes)) echo "checked" ?>> O-
    <input type="checkbox" name="availableTypes[]" value="O+" <?php if(isset($availableTypes) && in_array("O+", $availableTypes)) echo "checked" ?>> O+
    <input type="checkbox" name="availableTypes[]" value="A-" <?php if(isset($availableTypes) && in_array("A-", $availableTypes)) echo "checked" ?>> A-
    <input type="checkbox" name="availableTypes[]" value="A+" <?php if(isset($availableTypes) && in_array("A+", $availableTypes)) echo "checked" ?>> A+
    <input type="checkbox" name="availableTypes[]" value="B-" <?php if(isset($availableTypes) && in_array("B-", $availableTypes)) echo "checked" ?>> B-
    <input type="checkbox" name="availableTypes[]" value="B+" <?php if(isset($availableTypes) && in_array("B+", $availableTypes)) echo "checked" ?>> B+
    <input type="checkbox" name="availableTypes[]" value="AB-" <?php if(isset($availableTypes) && in_array("AB-", $availableTypes)) echo "checked" ?>> AB-
    <input type="checkbox" name="availableTypes[]" value="AB+" <?php if(isset($availableTypes) && in_array("AB+", $availableTypes)) echo "checked" ?>> AB+
    <br>
    <input type="submit" name="submit" value="submit">
</form>
<?php if (isset($survive)) echo "Output Survivability: " . (($survive) ? "True" : "False"); ?>
</body>
</html>