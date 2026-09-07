<?php

require_once("database_settings.php");

$database_driver = new mysqli_driver();

$database_driver->report_mode =  MYSQLI_REPORT_OFF;

$connection = mysqli_connect($host,$user,$password,$database_name);

if(mysqli_connect_errno()){

     echo "<p style='color:red'><b>connection Failed..!</b></p>";
     echo "<p style='color:red'><b>Error No : ".mysqli_connect_errno()."</b></p>";
     echo "<p style='color:red'><b>Error Message : ".mysqli_connect_error()."</b></p>";
}
?>