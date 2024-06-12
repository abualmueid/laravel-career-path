<?php 

function reverseWord($str): void {
    do{
        echo strrev(substr($str, 0, strpos($str, ' '))) . ' ';
        $str = substr($str, strpos($str, ' ')+1);
    } while(strpos($str, ' ') != false);
    echo strrev($str);
}

$str = readline("Enter a sentence: ");

reverseWord($str); 

