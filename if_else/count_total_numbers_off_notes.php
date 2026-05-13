<?php

$amount = 5677;

echo "Total Ammount: $amount <br/><br/>";

$fivehundred = 0;
$hundred = 0;
$fifty = 0;
$twenty = 0;
$ten = 0;
$five = 0;
$two = 0;
$one = 0;

if($amount >= 500){
 $fivehundred = (int)($amount / 500);
 $amount = $amount % 500;
}

if($amount >= 100){
 $hundred = (int)($amount / 100);
 $amount = $amount % 100;
}

if($amount >= 50){
 $fifty = (int)($amount / 50);
 $amount = $amount % 50;
}

if ($amount >= 20){
 $twenty = (int)($amount / 20);
 $amount = $amount % 20;
}

if($amount >= 10){
  $ten = (int)($amount / 10);
  $amount = $amount % 10;
}

if ($amount >= 5){
 $five = (int)($amount / 5);
 $amount = $amount % 5;
}

if ($amount >= 2){
  $two = (int)($amount / 2);
  $amount = $amount % 2;
}

if ($amount >= 1){
  $one = (int)($amount / 1);
  $amount = $amount % 1;
}


echo "Total number off notes: <br/><br/>";

echo "500: $fivehundred <br/>";

echo "100: $hundred <br/>";

echo "50: $fifty <br/>";

echo "20: $twenty <br/>";

echo "10: $ten <br/>";

echo "5: $five <br/>";

echo "2: $two <br/>";

echo "1: $one";


?>