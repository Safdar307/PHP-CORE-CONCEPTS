<?php

$array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$count = 0;
$sum = 0;

 foreach($array as $key => $value){
    $count++;
 }


 for($i = 0; $i<$count; $i++){
    $sum += $array[$i];
 }


 $average = $sum / $count;

 echo "Average Temperature = " . $average;


 




?>