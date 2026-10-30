<?php


$string = "Hidaya,Trust,Foundation";
$deliminator = ",";

$array = [];
$word = "";

for ($i = 0; isset($string[$i]); $i++) {
    if ($string[$i] == $deliminator) {
        $array[] = $word;
        $word = "";
    } else {
        $word .= $string[$i];
    }
}

$array[] = $word;

echo "<pre>";
print_r($array);
echo "</pre>";


?>