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
  echo "There were " . $heads . " heads and " . $tails . " tails.";

echo "\n";

// Calculate the area of a circle using the pi and round functions

$radius = 5;
$power = 2;
$area_circle = pi() * pow($radius, $power);

echo "The area of the circle is " . round($area_circle, 2);

echo "\n";

// Date functions

// Setting default time ZMQContext

date_default_timezone_set("US/Central");

echo date_default_timezone_get() . "\n";

echo "The year is " . date("Y") . "." . "\n";

echo "Today is " . date("l") . "." . "\n";

echo "The time is " . date("g") . ":" . date("i") . date("A") . "." . "\n";

echo "\n";

// Time functions

// What is the number of seconds until January 1, 2020?

/*
Convert to seconds (called from time, which keeps track of # of sec. since 1970's)
Other inputs for strtotime can include things like "next Friday" or 12/12/2054
*/

$date = strtotime("1st January 2020");

$seconds = $date - time();

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = $hours / 24;

echo "There are " . round($days, 0) . " days until January 1, 2020." . "\n";

echo "There are " . ceil($days) . " days until January 1, 2010." . "\n";

echo "\n";

echo time();

// Calculate the number of days until Christmas

$date = strtotime("25th December 2015");
$seconds = $date - time();
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = $hours / 24;
echo "There are " . ceil($days) . " days until Christmas!";
?>
