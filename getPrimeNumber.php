<?php

$dividend = 4;
$primeFactors = [];
for ($i = 2; $i <= $dividend; $i++) {

    if ($dividend % $i == 0) {
        $primeFactors[] = $i;

        $dividend = $dividend / $i;
    }

}

print_r($primeFactors);


