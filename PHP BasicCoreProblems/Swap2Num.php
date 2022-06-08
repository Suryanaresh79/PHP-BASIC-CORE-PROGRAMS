<?php
$a = 10;
$b = 20;
//taking user input
$a = readline('Enter the first number: ');
$b = readline('Enter the secong number: ');

$third = $a;
$a = $b;
$b = $third;
echo "a =".$a." b =".$b;
?>