<?php
// program to find the harmonic number
$sum = 0;
//Get input from user
$n = readline('Enter a Number: ');
//check the conditions
if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $sum += (1 / $i);
    }
        echo "Harmonic Sum is :" . $n . " Term is: " . $sum;
    } else {
        echo "Wrong Input";
    }
        