<?php

$a = 4;

if ($a > 5 || $a != 5){
  echo "true";
} else {
  echo "false";
}
echo "\n";

$b = 5;

if ($b % 2 === 0) {
	echo "$b is a multiple of 2";
} elseif ($b % 3 === 0) {
	echo "$b is a multiple of 3";
} elseif ($b % 4 === 0) {
	echo "$b is a multiple of 4";
} else {
	echo "$b is not a multiple of 2, 3, or 4.";
}
echo "\n";

$userName = "Laura";

if ($userName === "Laura") {
  echo "Hello, me";
} elseif ($userName === "Scot") {
  echo "Hello, Scot";
} else {
  echo "Hello";
}
echo "\n";

// for loops

// print out numbers from 1 - 10
for ($i = 1; $i <= 10; $i++) {
	echo $i . "\n";
}
echo "\n";

// print out even numbers from 1 - 10
for ($i = 1; $i <= 10; $i++) {
  if ($i % 2 === 0) {
	   echo $i . "\n";
   }
}
echo "\n";

// while loops

?>
