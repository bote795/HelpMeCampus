<?php
ini_set('display_errors',1);
include 'connect.php';
include 'PasswordHash.php';
include 'functions.php';
//setup some variables/arrays
$action = array();
$action['result'] = null;
$text = array();
$var = array(); 
$params= array("password","password2","first name", "last name",  "email", "major", "school", "graduation year","appartment name","floor","room number");
$fname = mysql_real_escape_string($_POST["firstname"]);
$lname = mysql_real_escape_string($_POST["lastname"]);
$password = $_POST['password'];
$password2 = $_POST['password2'];
$name = $fname ." , ". $lname;
array_push($var,$password);
array_push($var,$password2);
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
  	  if(strcmp($password,$password2) == 0)
      {
         session_start();
         $objUser = json_decode($_SESSION['user'], true);
      	 $result = mysql_query("SELECT * FROM info WHERE username ='$objUser[username]' LIMIT 1") or die(mysql_error());
      
        if($result) 
        {
          $row = mysql_fetch_array( $result );
          $validate = validate_password($password, $row['password']);      
          if($validate == 1 && $row['active'] == 1)
          {
            echo "sucessful password match";
            $objUser = json_decode($_SESSION['user'], true);
            $result = mysql_query("UPDATE info SET 
            name='$name', email='$email', major='$major', school='$school', grad_yr='$grad_yr', appartment_name='$app_name', floor='$floor', room_num='$room_num'  
             WHERE id ='$objUser[id]'") or die(mysql_error());
              if($result) 
              {
                  echo "sucessful change";
                  $host  = $_SERVER['HTTP_HOST'];
                  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                  $extra = '../pages/user.php';
                  echo "http://$host$uri/$extra";
                  header("Location: http://$host$uri/$extra");
                  die();
              }
              else 
              {
                echo "unsucessful ablle to get ";
              }
          }
          else 
          {
            echo "unsucessful login";
          }
        }//close row if statment
		else
        {
        	echo "select error";
        }
      }
  	  else
      {
      		echo "password verification not sucessful";
      }
   	
}
else
{
  $action['result']='error';
  $action['text'] = $temp;
  echo show_errors($action);
}  
?>
