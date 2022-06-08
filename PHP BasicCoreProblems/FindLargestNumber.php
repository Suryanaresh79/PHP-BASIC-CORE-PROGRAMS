<?php
// program to find Largest of a number
$num1 = readline("Enter the First number:");
$num2 = readline("Enter the Second number:");
$num3 = readline("Enter the Third number:");

if ($num1 > $num2 && $num1 > $num3) {
    echo "the greatest value is $num1\n";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "the greatest value is : $num2\n";
} else {
    echo "the greatest value is : $num3\n";
}