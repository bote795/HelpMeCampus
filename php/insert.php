<?php
include 'connect.php';
include 'PasswordHash.php';
include 'functions.php';
//setup some variables/arrays
$action = array();
$action['result'] = null;
$text = array();
$var = array(); 
$params= array("password","first name", "last name", "username",  "email", "major", "school", "graduation year","appartment name","floor","room number");
$fname = mysql_real_escape_string($_POST["firstname"]);
$lname = mysql_real_escape_string($_POST["lastname"]);
$username = mysql_real_escape_string($_POST["username"]); 
$password = $_POST['password'];
$name = $fname ." , ". $lname;
array_push($var,$password);
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

//array for checking empty fields
array_push($var,$fname);
array_push($var,$lname);
array_push($var,$username);
array_push($var,$email);
array_push($var,$major);
array_push($var,$school);
array_push($var,$grad_yr);
array_push($var,$app_name);
array_push($var,$floor);
array_push($var,$room_num);
$action['var']= $var;
$temp =CheckEmptyFields($action, $params);
if($temp  == false)
{
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
      echo("<br>Insert to mysql data fail");
  }
}
else
{
  $action['result']='error';
  $action['text'] = $temp;
  echo show_errors($action);
}  
?>
