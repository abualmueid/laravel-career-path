<?php 

function calculateNoOfWords($fileName): int {
    $handle = fopen($fileName, 'r');

    if($handle) {
        $wordCount = 0;
        while(($line = fgets($handle)) != false) {
            $line = trim($line); // Remove leading and trailing whitespaces
            $noOfWords = 1;

            for ($i = 0; $i < strlen($line); $i++) {
                if ($line[$i] == ' ') {
                    $noOfWords++;
                }
            }
            
            $wordCount += $noOfWords;

            if($line == '') { // Blank line containing '\n'
                $wordCount--;
            }
        }
    } else {
        echo "File opening failed! Try again.";
    }

    fclose($handle);
    
    return $wordCount;
}

$fileName = "Poem.txt";

if (file_exists($fileName)){
    echo calculateNoOfWords($fileName);
} else {
    echo "File doesn't exist!";
}