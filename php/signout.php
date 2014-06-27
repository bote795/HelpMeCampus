<?php
	$host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '../index.php';
	session_start();
	if(isset($_SESSION['username']))
      {
        unset($_SESSION['username']);
        unset($_SESSION['user']);
      	session_destroy();
         header("Location: http://$host$uri/$extra");

     }

?>