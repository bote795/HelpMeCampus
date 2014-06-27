<?php
include 'connect.php';
if(isset($_SESSION['user']))
{
  $objUser = json_decode($_SESSION['user'], true);
}

// Insert a row of information into the table 
$result = mysql_query("SELECT * FROM info WHERE school='$objUser[school]' AND appartment_name='$objUser[app_name]'") 
or die(mysql_error()); 
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['name'];
	echo "</td><td>"; 
	echo $row['major'];
	echo "</td>";
  	echo "<td>"; 
	echo $row['grad_yr'];
	echo "</td>";
  	echo "<td>"; 
	echo $row['room_num'];
	echo "</td>";
  	echo "<td>"; 
	echo $row['floor'];
	echo "</td>";
  	echo "<td>"; 
	echo $row['appartment_name'];
	echo "</td></tr>";
  
} 
?>