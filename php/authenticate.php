<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include 'connect.php';
include 'PasswordHash.php';
include 'functions.php';
include 'entities/User.php';
$text = array();
$action = array();
$action['result'] = null;

$username = mysql_real_escape_string($_POST['username']); 
$password =mysql_real_escape_string($_POST['password']);
  if(empty($username))
  {
    $action['result'] = 'error';
    array_push($text,'You forgot your username');
  }
  if(empty($password))
  {
    $action['result'] = 'error';
    array_push($text,'You forgot your password');
  }
  $action['text'] = $text;

	if($action['result'] != 'error')
   {  
      $result = mysql_query("SELECT * FROM info WHERE username ='$username'") or die(mysql_error());
      $numRows = mysql_num_rows($result);
        if($numRows == 1) 
        {
          $row = mysql_fetch_array( $result );
          $validate = validate_password($password, $row['password']);      
          if($validate == 1 && $row['active'] == 1)
          {
            echo "sucessful login";
            $_SESSION['username'] = 'true';
            $_SESSION['user'] = "";
         	$user = new User($row['id'],$username,$row['school'],$row['appartment_name']);
            $stringUser = json_encode($user);            
            $date_of_expiry = time() + 1200 ;
            //setcookie( "user", $stringUser, $date_of_expiry );
            $_SESSION['user'] = $stringUser;
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = '../pages/user.php';
            echo "http://$host$uri/$extra";
            header("Location: http://$host$uri/$extra");
            die();
          }
          else 
          {
            echo "unsucessful login";
          }
        }//close row if statment
     
  }
  else
  {
    echo show_errors($action);
  }

 ?>