<?php

class Marksheet
{
    public $name;
    public $rollNo;
    public $sub1;
    public $sub2;
    public $sub3;
    public $sub4;

    public function setData($name, $rollNo, $sub1, $sub2, $sub3, $sub4) {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->sub1 = $sub1;
        $this->sub2 = $sub2;
        $this->sub3 = $sub3;
        $this->sub4 = $sub4;
    }

    public function total()
    {
        return $this->sub1 + $this->sub2 + $this->sub3 + $this->sub4;
    }

   public function percentage()
    {
    return round(($this->total() / 400) * 100, 2);
    }

    public function grade()
    {
        $percentage = $this->percentage();

        if ($percentage <= 100 && $percentage >= 80) {
            return "A+";
        }
        elseif ($percentage <+ 80 && $percentage >= 70) {
            return "A";
        }
        elseif ($percentage <= 70 && $percentage >= 60) {
            return "B";
        }
        elseif ($percentage <= 60 && $percentage >= 50) {
            return "C";
        }
        elseif ($percentage <= 50 && $percentage >= 40) {
            return "D";
        }
        else {
            return "Fail";
        }
    }

    public function displayResult()
    {
        echo "<h2>Marksheet</h2>";

        echo "Name: $this->name <br>";
        echo "Roll No: $this->rollNo <br><br>";

        echo "Subject 1: $this->sub1 <br>";
        echo "Subject 2: $this->sub2 <br>";
        echo "Subject 3: $this->sub3 <br>";
        echo "Subject 4: $this->sub4 <br><br>";

        echo "Total Marks: " . $this->total() . "<br>";
        echo "Percentage: " . $this->percentage() . "% <br>";
        echo "Grade: " . $this->grade() . "<br>";

        echo "<hr>";
    }
}

$student1 = new Marksheet();
$student1->setData("Safdar Ali", "112", 85, 78, 90, 88);

$student2 = new Marksheet();
$student2->setData("Ahmed Khan", "120", 60, 70, 65, 55);

$student1->displayResult();
$student2->displayResult();

?>
