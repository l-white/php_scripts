<?php

// modulus
$a = 16;
$b = 5;
$answer = $a % $b;
echo $answer . "\n";

// pow operator
$base = 5;
$power = 3;
$answer = pow($base, $power);
echo $answer . "\n";

// calculate the area of a rectangle

$length = 5;
$width = 7;
$rectangle = $length * $width;
echo $rectangle . "\n";

/*
calculate the area of a triangle
A = hb * b / 2
*/
$height_base = 4;
$base = 12;
$triangle_area = (4 * 12) / 2;
echo $triangle_area . "\n";

/*
calculate the area of a circle
A = pi * r*r
$pi = 3.14
*/
$radius = 3;
$power = 2;
$area_circle = M_PI * pow($radius, $power);
echo $area_circle . "\n";

// concatenation
echo "The area of the rectangle is " . $rectangle . " units squared." . "\n";

// more concatenation
$firstName = "Laura";
$middleName = "Michelle";
$lastName = "White";
$age = 39;
echo $firstName . " " . $middleName . " " . $lastName . " is " . $age . " years old." . "\n";

// if statements

$a = 4;
$b = 5;
if ($a===$b){
  echo "true";
} else {
  echo "false";
}
echo "\n";

if (a <= 5 && a != 5){
  echo "true";
}
echo "\n";

if (a > 5 || a != 5){
  echo "true";
}
echo "\n";
?>
