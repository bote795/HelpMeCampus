<?php
include 'connect.php';

$name = $_POST["name"]; 
$email = $_POST["email"];
$major  = $_POST["major"];
$school = $_POST["school"];
$grad_yr = $_POST["grad_yr"];
$app_name = $_POST["app_name"];
$adress = $_POST["adress"];
$floor = $_POST["floor"];
$room_num = $_POST["room_num"];

INSERT INTO info VALUES 
	($name, $email, $major, $grad_yr, $app_name, $adress, $floor, $room_num);

NSERT INTO Students VALUES
        ('Smith','John',123456789,'Math','Selleck');
INSERT INTO Students SET
        FirstName='John',
        LastName='Smith',
        StudentID=123456789,
        Major='Math';
INSERT INTO Students
        (StudentID,FirstName,LastName)
        VALUES (123456789,'John','Smith');




?>