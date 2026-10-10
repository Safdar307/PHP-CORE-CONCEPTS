<?php

class Calculator
{
    public $num1;
    public $num2;

    public function setData($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function displayResult()
    {
        echo "<h2>Result</h2>";
        echo "First Number: " . $this->num1 . "<br>";
        echo "Second Number: " . $this->num2 . "<br>";
        echo "Addition: " . ($this->num1 + $this->num2) . "<br>";
        echo "Subtraction: " . ($this->num1 - $this->num2) . "<br>";
        echo "Multiplication: " . ($this->num1 * $this->num2) . "<br>";
        echo "Division: " . ($this->num1 / $this->num2) . "<br>";
        echo "<hr>";
    }
}

$calc1 = new Calculator();
$calc1->setData(20, 10);

$calc2 = new Calculator();
$calc2->setData(50, 5);

$calc1->displayResult();
$calc2->displayResult();

?>