<!-- OOP is a way or technique to write code, in which we uses class and makes their objects. -->



<?php

// class Human{
//     private $name = "Ahmed";

//     public function showName(){
//         echo $this->name;
//     }
    
//      public function diplay(){
//         echo "Ali";
//      }
// }


// $ali = new Human();


// $ali->showName();
// $ali->diplay();


// function myname(){
//     return "Ali";
// }

// echo  myname();


// for($i = 1; $i<=7; $i++){
//     // echo "*" . "<br>";
//     for($j = 1; $j<=5; $i++){
        
//     if($j == 1 || $i = 3 || $j == 5){
//         echo "*";
//     }else{
        
//     }
//     }
//     echo "&nbsp";
    

// }


// class Car
// {
//     public $model = null;
//     public $color = null;
// }

// $obj = new Car();

// $obj->model = "Toyota Corolla";
// $obj->color = "White";

// echo $obj->model;
// echo "<br>";
// echo $obj->color;




// class Car
// {
//     public $model = null;
//     public $color = null;

//     public function carstart(){
//         return "Car is starting";
//     }

//     public function carstop(){
//      echo "The car has been stopped";
//     }
// }

// $obj = new Car();

// $obj->model = "Toyota Corolla";
// $obj->color = "White";

// echo $obj->model;
// echo "<br>";
// echo $obj->color;
// echo "<br>";
// echo $obj->carstart();
// echo "<br>";
// $obj->carstop();



// class car {
//     public $model;
//     public $color;

//     public function car_start(){
//         return "Car is starting";
// //     }

//     public function car_stop(){
//         return "car is stopped";
//     }

//     public function show_details(){
//          return $this->model . " - " . $this->color;
//     }
// }

// $obj = new car();

// $obj->model = "Toyota Corolla";
// $obj->color = "White";


// echo $obj->model;
// echo "<br>";
// echo $obj->color;
// echo "<br>";
// echo $obj->car_start();
// echo "<br>";
// echo $obj->car_stop();
// echo "<br>";
// echo $obj->show_details();
// echo "<br>";



// class car {
//     public $model;
//     public $color;

//     public function car_start(){
//         return "Car is starting";
//     }

//     public function car_stop(){
//         return "car is stopped";
//     }

//     public function show_details(){
//          return $this->model . " - " . $this->color;
//     }
// }

// $obj = new car();

// $obj->model = "Toyota Corolla";
// $obj->color = "White";


// echo $obj->model;
// echo "<br>";
// echo $obj->color;
// echo "<br>";
// echo $obj->car_start();
// echo "<br>";
// echo $obj->car_stop();
// echo "<br>";
// echo $obj->show_details();
// echo "<br>";

// 



// class Human {
//     public $name;
//     public $age;

//     public function vote(){
//         return $this->name . " " . "can vote";

//     }
// }

// $obj = new Human();

// // $obj->vote();
// // $obj->$age = "25";
// $obj->name = "safdar Ali";

// echo $obj->vote();




// class Human{

//     public $name;
//     public $age;

//     public function __construct($name, $age){
        
//     $this->name = $name;
//     $this->age = $age;  
//     }

//     public function walk(){
//         return $this->name . "Can Walk";
//         }
// }

// $obj1 = new Human("Safdar Ali", 25);

// // $obj1->name = "Safdar Ali";
// // $obj1->age = 25;

// echo $obj1->walk();




// class Database
// {
//     private $connection;

//     private $username = "root";
//     private $hostname = "localhost";
//     private $password = "";
//     private $database = "blog_db";

//     public function __construct()
//     {
//         $this->connection = mysqli_connect(
//             $this->hostname,
//             $this->username,
//             $this->password,
//             $this->database
//         );

//         if (!$this->connection) {
//             die("Database connection failed: " . mysqli_connect_error());
//         }
//     }

//     public function getConnection()
//     {
//         return $this->connection;
//     }
// }

// $db = new Database();

// $connection = $db->getConnection();

    

    
// class BankAccount
// {
//     private $balance;

//     public function __construct($balance)
//     {
//         $this->balance = $balance;
//     }

//     public function deposit($depositamount)
//     {
//         $this->balance += $depositamount;
//     }

//     public function withdraw($widthamount){
//         $this->balance -= $widthamount;

//     }

//     public function getBalance()
//     {
//         return $this->balance;
//     }
// }

// $obj = new BankAccount(5000);

// $obj->deposit(2000);
// $obj-> withdraw(1000);

// echo $obj->getBalance();


?>