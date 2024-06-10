<?php 

function findMinVal($numbers): int {
    $min = $numbers[0];
    $number = 0;
    for($i = 1; $i < count($numbers); $i++) {
        // check absolute value
        if($numbers[$i] < 0) {
            $number = abs($numbers[$i]);
        } else {
            $number = $numbers[$i];
        }

        if ($number < $min) {
            $min = $number;
        }
    }

    return $min;
}

$numbers = [10, -12, 34, 34, 12, -3, 123];

echo findMinVal($numbers);