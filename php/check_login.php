<?php
	session_start();
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '../index.php';
	if(isset($_SESSION['username']))
      {
          if($_SESSION['username'] != true )
         {
              header("Location: http://$host$uri/$extra");
            //  die();
         }
       }
    else
       {
			header("Location: http://$host$uri/$extra");
         //die();
       }
?>