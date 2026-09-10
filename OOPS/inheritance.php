<!-- Inheritance means a child class can reuse properties and methods from a parent class.-->
<!-- we use it to use commeon code intead off writing again and again  -->


<?php


// class Animal {
//     public $eyes;
//     public $legs;

//     public function eat(){
//         return "Animal IS eating";
//     }

// }

// class Dog extends Animal{

// }


// $obj = new Dog;

// echo $obj->eat();



// class Animal {
//     public $eyes;
//     public $legs;

//     public function eat(){
//         return "Animal IS eating";
//     }

// }

// class Dog extends Animal{

//      public function bark(){
//         return "Dog can bark";
//      }

// }


// $obj = new Dog;

// echo $obj->eat();
// echo "<br>";
// echo $obj->bark();



// Constructor in inheritance


// class Vehicle{
//     public $brand;

//     public function __construct($brand){
//         $this->brand = $brand;
//     }
// }

// class Car extends Vehicle {
//     public $doors;

//     public function __construct($brand, $doors){
//         parent::__construct($brand);
//         $this->doors = $doors;
//     }
// }

// class Sportscar extends Car{
//     public function showBrand(){
//         return $this->brand;
//     }


// }

// $obj = new Sportscar("Toyota Corola", 6);

// echo $obj->showBrand();







?>