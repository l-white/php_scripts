<?php
//Passing values through a function

function multiply($num1, $num2) {
  $result = $num1 * $num2;
  echo $result;
}

multiply(5, 10);

echo "\n";

multiply(3, 7);

echo "\n";


//How to return a value from a function

//IMPORTANT -- YOU CAN ONLY RETURN ONE VALUE FROM A FUNCTION LIKE THIS


function uppercase($name1) {
  $result = strtoupper($name);
  return $result;
}

echo uppercase("White");

// How to return multiple values from a function

function calculate($num1, $num2) {
  $add = $num1 + $num2;
  $subtract = $num1 - $num2;
  return array($add, $subtract);
}

$results = calculate(10, 3);

print_r($results);

echo "\n";

echo $results[0] . "\n";
echo $results[1] . "\n";





 ?>
