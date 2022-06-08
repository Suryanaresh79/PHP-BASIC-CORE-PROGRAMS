<?php
//Program to find the power of two
//Getting User Input for Power
$power = readline('Enter a Number: ');
if ($power >= 0 && $power < 31) {
$result = 1;
for ($i = 1; $i <= $power; $i++) {
    $result = $result * 2;
}
echo "the result is " . $result;
} else {
echo "invalid Number";
} 
