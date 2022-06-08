<?php
// program to swap two numbers.
$temp;
$a = readline("Enter first number a = ");
$b = readline("Enter the Second Number b = ");
// validating the numbers
if ($a > 0 &&  $b > 0) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "a = $a\n";
    echo "b = $b\n";
    echo "The Two Numbers has been Swapped Successfully!\n";
} else {
    echo "Enter a Valid Number";
}