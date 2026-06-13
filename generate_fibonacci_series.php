<?php


$n = 10;

$a = 0;
$b = 1;
$c = 0;

$i = 1;
do  {
      echo $a . " ";

      $c = $a + $b;
      $a = $b;
      $b = $c;


      $i++;

}while($i <= $n);



?>