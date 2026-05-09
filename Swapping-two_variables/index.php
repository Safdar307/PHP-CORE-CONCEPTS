<?php

// swapping two variables without using the third/temporary variable.

$x = 30;
$y = 20;

echo "Before swap: x = $x, y = $y <br/><br/>";

$x = ($x + $y);
$y = ($x - $y);
$x = ($x - $y);

echo "After swap: x = $x, y = $y";


?>

