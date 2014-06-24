<?php

include 'connect.php';
include 'PasswordHash.php';

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
          if($validate == 1)
          {
            echo "sucessful login";
            session_start();
            $_SESSION['username'] = 'true';
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