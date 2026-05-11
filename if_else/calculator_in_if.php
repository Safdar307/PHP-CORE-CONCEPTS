<?php 

$a = 10;
$b = 3;
$operation = "divide";

$result = 0; 

if($operation == "add"){
  $result = $a + $b;
}else if ($operation == "subtract" ){
   $result = $a - $b;
}else if ($operation == "multiply"){
   $result = $a * $b;
}else if ($operation == "divide"){
   if ($b != 0) {
   $result = $a / $b;
   }else {
   $result = "Cannot devided by zero";
   }

}

echo "Result: $result";

?>