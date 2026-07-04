<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "company";

$connection = mysqli_connect($host, $user, $password,$database);

if(!$connection)
{
    die("Database Connection Failed: " . mysqli_connect_error());
}











?>