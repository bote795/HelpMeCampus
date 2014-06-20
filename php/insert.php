<?php
include 'connect.php';
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$name = $fname ." , ". $lname; 
$email = $_POST["email"];
$major  = $_POST["major"];
$school = $_POST["school"];
$grad_yr = $_POST["grad_yr"];
$app_name = $_POST["app_name"];
//$adress = $_POST["adress"];
$adress = "blah";
$floor = $_POST["floor"];
$room_num = $_POST["room_num"];

// Insert a row of information into the table 
$result = mysql_query("INSERT INTO info (name, email, major, school, grad_yr, appartment_name, floor, room_num) VALUES 
('$name', '$email' , '$major', '$school' ,  '$grad_yr' , '$app_name' , '$floor' , '$room_num' ) ") 
or die(mysql_error()); 
if($result)
{
    echo("<br>Input data is succeed");
} 
else
{
    echo("<br>Input data is fail");
}

?>