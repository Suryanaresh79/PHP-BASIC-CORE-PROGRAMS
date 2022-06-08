<?php
// program to find the percentage of head and tail.
$headCount = 0;
$tailCont = 0;
$flipCoin = readline("Enter the number of times to flip the coin : "); //Taking Inputs
$number = $flipCoin;
if ($flipCoin > 0) {
    for ($i = 0; $i < $flipCoin; $i++) {
        $randomNumber = rand(0, 10) / 10; //using the inbuilt random function
        echo $randomNumber;
        if ($randomNumber >= 0.5) { //condition to check result
            $headCount++; // incrementing headcount
        } else {
            $tailCont++; // incrementing tailcount
        }
    }
} else {
    echo "Enter a Valid input";
}
$headPercentage = ($headCount * 100) / $number; //formula to count percentage
$tailPercentage = ($tailCont * 100) / $number; //formula to count perentage
echo "The percentage of Head = " . round($headPercentage, 2) . "\n"; //using inbuilt round
echo "The Percentage of Tail = " . round($tailPercentage, 2) . "\n"; //float upto 2 decimal
?>

