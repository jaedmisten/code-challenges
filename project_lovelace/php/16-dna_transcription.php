<?php
/*
 * 10/22/2021
 * Project Lovelace #16 - https://projectlovelace.net/problems/dna-transcription/
 *
 * Take input of a string of ATCG characters representing a DNA sequence.
 * Return output of the RNA sequence corresponding to the input DNA sequence.
 * 
 * DNA sequence can be stored on a computer as a string of ATCG characters.
 * The RNA sequence is equal to the DNA sequence with all instances of T replaced with a U (uracil) 
 * and the sequence is reversed.
 */
$inputError = false;
$rna = null ;
if (isset($_POST["dna"]) && $_POST["dna"] != "") {
    $dna = trim($_POST["dna"]);

    $rna = "";
    for ($i = strlen($dna) -1; $i >= 0; $i--) {
        if (strtoupper($dna[$i]) != "A" && strtoupper($dna[$i]) != "T" && strtoupper($dna[$i]) != "C" && strtoupper($dna[$i]) != "G") {
            $inputError = true;
            break;
        }
        if (strtoupper($dna[$i]) == "T") {
            $rna .= "U";
        } else {
            $rna .= strtoupper($dna[$i]);
        }
    }
} else {
    $inputError = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DNA transcription</title>
    <style>
        #rnaOutput {
            font-size: 18px;
            font-weight: bold;
        }
        #inputError {
            color: red;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<form id="inputDnaForm" action="16-dna_transcription2.php" method="POST">
    Input DNA: <input type="text" id="dna" name="dna" value="<?php if(isset($dna)) echo $dna; ?>"><br>
    <input type="submit" id="submit" name="submit" value="Submit">
</form>
<div id="rnaOutput"><?php if (isset($rna) && !$inputError) echo "<br>$rna"; ?></div>
<div id="inputError"><?php if (($inputError)) echo "<br>There was an input error. The input must only consist of the following characters: ATCG"; ?></div>

</body>
</html>