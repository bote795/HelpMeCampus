<?php
include 'connect.php';

// Insert a row of information into the table 
$result = mysql_query("SELECT * FROM info") 
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