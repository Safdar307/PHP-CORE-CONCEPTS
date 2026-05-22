<?php



//using while loop

$n = 5;
$i = 1;
$factorial = 1;
$output = "";

while($i <= $n){
   $factorial = $factorial * $i;

   if($i == $n){
     $output = $output . $i;
   } else {
     $output = $output . $i . "*";
   }

    $i++;
}

echo $n . "! = " .$output ."=" .$factorial;




// using for loop

/*
$n = 5;
$factorial = 1;
$output = "";

for($i = 1; $i <= $n; $i++){
    $factorial *= $i;

  if ($i == $n){
     $output = $output . $i;
   }else {
   $output = $output . $i . "*";
   }
}

echo $n . "! = ".$output ." = ". $factorial;
*/


?>