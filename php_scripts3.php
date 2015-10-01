<?php

// an odd for loop for dot challenge

// all dots indent one space
for ($o = 1; $o <= 4; $o++) {
for ($r = 1; $r <= $o; $r++) {
  echo "." . "\n" . " ";
}
}

echo "\n";

// indent starts with second dot

for ($h = 1; $h <= 4; $h++) {
  for ($h = 1; $h <= 4; $h++) {
    echo "." . "\n" . " ";
  }
}

echo "\n";

$i = 1;
$j = 1;
while( $i < 3 )
{
    while( $j < 3 )
    {
        echo "-" . "\n";
        $j++;
    }
    echo "outer\n";
    $i++;
}

echo "\n";

for( $i=1; $i<3; $i++)
{
   for( $j=1; $j<3; $j++)
   {
        echo "." . "\n";
   }
 }
    echo "outer\n";


?>
