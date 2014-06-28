<?php
	  $objUser = json_decode($_SESSION['user'], true);
   	  $result = mysql_query("SELECT * FROM info WHERE username ='$objUser[username]'") or die(mysql_error());
      $numRows = mysql_num_rows($result);
        if($numRows == 1) 
        {
          $row = mysql_fetch_array( $result );        
        }
          
?>