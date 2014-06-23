<?php
include 'connect.php';
include 'PasswordHash.php';
$fname = mysql_real_escape_string($_POST["firstname"]);
$lname = mysql_real_escape_string($_POST["lastname"]);
$username = mysql_real_escape_string($_POST["username"]); 
$password = $_POST['password'];
$name = $fname ." , ". $lname;
$password = create_hash(mysql_real_escape_string($_POST['password']));
$email = mysql_real_escape_string($_POST["email"]);
$major  = mysql_real_escape_string($_POST["major"]);
$school = mysql_real_escape_string($_POST["school"]);
$grad_yr = mysql_real_escape_string($_POST["grad_yr"]);
$app_name = mysql_real_escape_string($_POST["app_name"]);
//$adress = $_POST["adress"];
$adress = "blah";
$floor = mysql_real_escape_string($_POST["floor"]);
$room_num = mysql_real_escape_string($_POST["room_num"]);

// Insert a row of information into the table 
$result = mysql_query("INSERT INTO info (username, name, password, email, major, school, grad_yr, appartment_name, floor, room_num) VALUES 
('$username', '$name', '$password' ,'$email' , '$major', '$school' ,  '$grad_yr' , '$app_name' , '$floor' , '$room_num' ) ") 
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