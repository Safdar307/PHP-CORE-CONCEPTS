<?php

// function hello(){
//     echo "Hello Everybody";
// }

// hello();



// $a= 10;
// $b = 20;
// function mult(){
//     global $a;
//     global $b;
//     return $mult = $a * $a;
// }

// echo mult();



// function even_odd($n){
//     if($n % 2 == 0){
//         echo "number is even";
//     }
//     else {
//         echo "number is odd";
//     }
    
// }

// even_odd(5)


// function test(){
//    global $sum = 10;
// }

// echo $sum;  // error: beacuse we cant access the variable outside which is defined inside the function, even that you are using global keyword, global keyword used when we need to access the gloabl variable inside the function.. we access this using the gloabl keyword with variable

// function calculator($num1, $num2, $op){
//     $num1;
//     $num2;
//     $op;
//     $result;

//     if($op == "+"){
//         $result = $num1 + $num2;
//     }
//     elseif ($op == "-") {
//         $result = $num1 - $num2;
//     }
//     else{
//         echo "wrong input";
//     }

//     return $result;
    
// }

// echo calculator(10, 20, "-");


// function calculator($num1, $num2, $op){

//     $result;

//     if($op == "+"){
//         $result = $num1 + $num2;
//     }
//     elseif ($op == "-") {
//         $result = $num1 - $num2;
//     }
//     else{
//         echo "wrong input";
//     }

//     return $result;
    
// }

// $a = 30;
// $b = 20;
// $op = "+";

// echo calculator($a, $b, $op);


// function test(){
//     static $count = 0;
//     return $count++;
// }

// echo test() . "<br>";

// echo test() . "<br>" ;

// echo test() . "<br>";


// function test(){
//     $a = 10;
//     $b = 20;

//     return [$a, $b];
// }

// // $result = test();
// // print_r($result);
// // echo $result[0];
// // echo $result[1];

// [$zero, $one] = test();
// echo $zero;
// echo "<br>";
// echo $one;


// function test(){
//     $fname = "Safdar";
//     $lname = "Ali";

//     return [
//         "fname" => $fname,
//         "lname" => $lname
//     ];
// }

// [$zero, $one] = test(); // numeric array_destruct will never work with associative array
// echo $zero;
// echo "<br>";
// echo $one;   



// function test(){
//     $fname = "Safdar";
//     $lname = "Ali";

//     return [
//         "fname" => $fname,
//         "lname" => $lname
//     ];
// }

// [
//     "fname" => $first_name,
//     "lname" => $last_name
// ] = test();

// echo $first_name;
// echo "<br>";
// echo $last_name;


// argument by reference



// function test(&$name){
//     $name .= " " . "Ali";
// }

// $my_name = "Safdar";
// test($my_name);

// echo $my_name;



// VAriable Function


// function test(){
//     echo "Safdar Ali";
// }

// $my_function = "test";

// $my_function();


// >>>>> OR  <<<<<<<  this is also called ANonymous Function

$my_function = function($name){
    echo "Hello $name";
};

$my_function("Safdar Ali");











?>