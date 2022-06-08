<?php
//To check whether an Alphabet is Vowel or Consonent
// user input to check vowel or consonent
$char = readline("Enter any character A-Z :");
//checking the input and comparing the input
if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
    echo "The Character is Vowel";
} else {
    echo "The Character is Consonant";
}
?>