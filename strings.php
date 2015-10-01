<?php

// String length function

$sentence = "This is a sentence.";

$length = strlen($sentence);

echo "The length of the string is " . $length . " characters.";

echo "\n";

// Word count function

$words = str_word_count($sentence);

echo "This sentence has " . $words . " words.";

echo "\n";

// How to replace a character in a string
$string = "John,Sam,Billy,Karen,Ben,Jane";
$newString = str_replace(",", ", ", $string);
echo $newString;

// How to randomize a string and rearrange characters




 ?>
