<?php



function stringToArray($string, $deliminator) {

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

    return $array;
}

$string = "Hidaya,Trust,Foundation";
$deliminator = ",";

$result = stringToArray($string, $deliminator);


echo "(c) explode";
echo "<br>";
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<hr>";




function myStrlen($str){
    $count = 0;

    for ($i = 0; isset($str[$i]); $i++)
    {
        $count++;
    }

    return $count;
}

echo "(d) strlen";
echo "<br>";
echo mystrlen("jamshoro");
echo "<hr>";





function myStrrev($str)
{
    $result = "";
    $len = 0;

    while (isset($str[$len]))
    {
        $len++;
    }

    for ($i = $len - 1; $i >= 0; $i--)
    {
        $result = $result . $str[$i];
    }

    return $result;
}

echo "(e) strrev";
echo "<br>";
echo myStrrev("Hello");






















?>