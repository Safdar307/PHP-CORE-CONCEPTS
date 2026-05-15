<?php


// using for loop.



$sum = 0;
$output = "";

for ($a = 1; $a<=10; $a++){
$sum += $a;

if($a == 10){
  $output = $output . $a;
}else{
  $output = $output . $a . "+";
}

}

echo $output . " = " . $sum;



// using while loop 


/*
$sum = 0;
$output = "";

$a = 1;
while ($a <= 10){
    $sum += $a;

  if($a == 10){
  $output  $a . "+";
} else {
   $output .= $a . "+";
}

$a++;

}
echo $output . "=" . $sum;
*/


?>


