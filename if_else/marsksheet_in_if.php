<?php

$subj1 = 90;
$subj2 = 75;
$subj3 = 100;
$subj4 = 60;
$subj5 = 90;

$total_marks = 500;
$obtained_marks = $subj1 + $subj2 + $subj3 + $subj4 + $subj5;
$percentage = ($obtained_marks / $total_marks) * 100;

echo "Total Marks: $total_marks";
echo "<br/><br/>";
echo "Obtained Marks: $obtained_marks";
echo "<br/><br/>";
echo "Percentage: $percentage";

if($subj1 < 40 || $subj2 < 40 || $subj3 < 40 || $subj4 < 40 || $subj5 < 40){
    $grade = "fail";
}else {
    if ($percentage >= 80){
     $grade = "A+";  
    }
    else if ($percentage >= 70){
     $grade = "A";  
    }
    else if ($percentage >= 60){
     $grade = "B"; 
    }
     else if ($percentage >= 50 ){
     $grade = "C";  
    }
     else if ($percentage >= 40){
     $grade = "D" ;  
    } else { $grade = "Fail";
     }
}

echo " <br/> <br/> Grade: $grade";

?>