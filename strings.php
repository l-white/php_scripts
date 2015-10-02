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

echo "\n";

// How to randomize a string and rearrange characters

$string = "basketball";
$newString = str_shuffle($string);
echo $newString;

echo "\n";

// Mission Impossible Challenge

$string = "Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy";

$decoded = str_rot13($string);

echo $decoded;


 ?>
