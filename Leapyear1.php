<?php
$year = 2021;
//To check the Leap Year Program
//Getting the User Inputs
$year = readline('Enter the Year: ');
//Checking the conditions for leap year
if ($year >= 2021) {
    if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
        echo "It is a Leap year\n";
    } else {
        echo "It is not a Leap year";
    }
}