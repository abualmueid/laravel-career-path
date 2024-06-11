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

$n = (int) readline("Enter size of the pyramid: ");

generatePyramid($n);