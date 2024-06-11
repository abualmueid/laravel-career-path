<?php 

function generatePyramid($n): void {
    for ($i = 1; $i <= $n; $i++) {
        // Left triangle
        for ($j = $n; $j >= $i; $j--) {
            echo " ";
        }

        // Middle triangle
        for ($j = $n; $j >= $n-$i+1; $j--) {
            echo "*";
        }

        // Right triangle 
        for ($j = $n; $j > $n-$i+1; $j--) {
            echo "*";
        }
        echo "\n";
    }
}

do {
    $n = readline("Enter size of the pyramid: ");
    $n = is_numeric($n) ? (int)$n : $n;

    if (! is_int($n)) {
        echo "Please enter an integer number!\n";
    } elseif ($n < 0) {
        echo "Please enter a positive integer number!\n";
    } elseif ($n == 0) {
        echo "Please enter a positive integer number greater than 0!\n";
    } 
} while(! is_int($n) || $n <= 0);


generatePyramid($n);