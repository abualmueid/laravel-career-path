<?php 

function calculateSumOfDigits($n): int {
    $sum = 0;

    while($n != 0) {
        $sum += (int) $n % 10;
        $n /= 10;
    } 

    return $sum;
}

do{
    $n = readline("Enter an integer number: ");
    $n = is_numeric($n) ? (int)$n : $n;

    if(! is_int($n)) {
        echo "Wrong input! Please enter an integer number.\n";
    }
} while(! is_numeric($n));

echo calculateSumOfDigits(abs($n));