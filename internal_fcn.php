<?php

// How to get a random number in php

$randomNumber = rand(1, 100);
echo $randomNumber;

echo "\n";

// Heads & Tails challenge
/*
Generate a random number between one and two
If the random number is 1, echo "Heads, I win!"
If the random number is 2, echo "Tails, you win!"
*/

$randomNumber = rand(1, 2);

if ($randomNumber === 1) {
  echo "Heads, I win!";
} else {
  echo "Tails, you win!";
}

echo "\n";

// Extension

/* Observations:
    $randomNumber needs to go inside the for loop; it is repeated 100x
    heads and tails need to increment separate from for loop -- they need their own increments
*/

$heads = 0;
$tails = 0;

for ($i = 1; $i <= 10; $i++) {

  $randomNumber = rand(1, 2);

    if ($randomNumber === 1) {
      echo "Heads, I win!" . "\n";
        $heads++;
      } else {
        echo "Tails, you win!" . "\n";
        $tails++;
      }
}
  echo "There were " . $heads . " heads and " . $tails . " tails."



 ?>
