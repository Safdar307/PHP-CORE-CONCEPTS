<?php

$limit = 3;

$a = 1;

do {
   if($a == 1){
   $a++;
   continue;
}

$b = 1;
do { 
    echo $a . " * " . $b . " = " . ($a * $b) . "<br>";
     $b++;

} while ($b <= 10);

echo "<br>";
$a++;

}while($a <= $limit);

?>